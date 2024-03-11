<?php
// src/Controller/Admin/UserCrudController.php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\Operation;
use Doctrine\ORM\QueryBuilder;
use Symfony\Component\Form\FormEvents;
use Doctrine\ORM\EntityManagerInterface;
use App\Controller\OperationCrudController;

use Symfony\Component\HttpFoundation\Request;


use EasyCorp\Bundle\EasyAdminBundle\Field\Field;

use EasyCorp\Bundle\EasyAdminBundle\Dto\EntityDto;

use EasyCorp\Bundle\EasyAdminBundle\Dto\SearchDto;

use Symfony\Component\Validator\Constraints\Regex;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;


use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext;
use EasyCorp\Bundle\EasyAdminBundle\Collection\FieldCollection;
use EasyCorp\Bundle\EasyAdminBundle\Collection\FilterCollection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Form\{FormBuilderInterface, FormEvent};
use EasyCorp\Bundle\EasyAdminBundle\Field\{IdField, EmailField, TextField};
use Symfony\Component\Form\Extension\Core\Type\{PasswordType, RepeatedType};
use EasyCorp\Bundle\EasyAdminBundle\Config\{Action, Actions, Crud, KeyValueStore};

class UserCrudController extends AbstractCrudController
{
    public function __construct(
        public UserPasswordHasherInterface $userPasswordHasher
    ) {}

    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    public function configureCrud(Crud $crud): Crud {
        return $crud
            ->overrideTemplate('crud/new', 'user/new.html.twig')
            ->overrideTemplate('crud/edit', 'user/edit.html.twig')
            
            ->setSearchFields(null);
            $rolesFilter = $this->getContext()->getRequest()->query->get('roles');
            if ($rolesFilter) {
                $crud->setDefaultSort(['roles' => $rolesFilter]);
            }
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->add(Crud::PAGE_EDIT, Action::INDEX)
            ->add(Crud::PAGE_INDEX, Action::DETAIL)
            ->add(Crud::PAGE_EDIT, Action::DETAIL)
            ;
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = [  
            IdField::new('id')->hideOnForm(),
            EmailField::new('email'),
            TextField::new('name'),
            TextField::new('firstname'),
            TextField::new('street', 'Rue')
            ->setFormTypeOption('attr', ['class' => 'adresse-autocomplete']),
            TextField::new('zipcode', 'Code Postal')
            ->setFormTypeOption('attr', ['class' => 'zipcode_ope']),
            TextField::new('city', 'Ville')
            ->setFormTypeOption('attr', ['class' => 'city_ope']),
            TextField::new('phone'),
            ChoiceField::new('singleRole', 'Role')
                ->setChoices([
                    'Admin' => 'ROLE_ADMIN',
                    'Senior' => 'ROLE_SENIOR',
                    'Apprenti' => 'ROLE_APPRENTI',
                    'Client' => 'ROLE_USER'
                ]),
    ];

        $password = TextField::new('password')
            ->setFormType(RepeatedType::class)
            ->setFormTypeOptions([
                'type' => PasswordType::class,
                'first_options' => ['label' => 'Password'],
                'second_options' => ['label' => '(Repeat)'],
                'mapped' => false,
                'constraints' => [
                    new Regex('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/', "Il faut un mot de passe de 8 caractères, une majuscule et un chiffre")
                ]
            ])
            ->setRequired($pageName === Crud::PAGE_NEW)
            ->onlyOnForms()
            ;
        $fields[] = $password; 

        return $fields;
    }

    public function createNewFormBuilder(EntityDto $entityDto, KeyValueStore $formOptions, AdminContext $context): FormBuilderInterface
    {
        $formBuilder = parent::createNewFormBuilder($entityDto, $formOptions, $context);
        return $this->addPasswordEventListener($formBuilder);
    }

    public function createEditFormBuilder(EntityDto $entityDto, KeyValueStore $formOptions, AdminContext $context): FormBuilderInterface
    {
        $formBuilder = parent::createEditFormBuilder($entityDto, $formOptions, $context);
        return $this->addPasswordEventListener($formBuilder);
    }

    private function addPasswordEventListener(FormBuilderInterface $formBuilder): FormBuilderInterface
    {
        return $formBuilder->addEventListener(FormEvents::POST_SUBMIT, $this->hashPassword());   
    } 

    private function hashPassword() {
        return function($event) {
            $form = $event->getForm();
            if (!$form->isValid()) {
                return;
            }
            $password = $form->get('password')->getData();
            if ($password === null) {
                return;
            }

            $hash = $this->userPasswordHasher->hashPassword($form->getData(), $password);
            $form->getData()->setPassword($hash);
        };

    }

    public function createIndexQueryBuilder(SearchDto $searchDto, EntityDto $entityDto, FieldCollection $fields, FilterCollection $filters): QueryBuilder {
        $qb = parent::createIndexQueryBuilder($searchDto, $entityDto, $fields, $filters);
    
        $rolesFilter = $this->getContext()->getRequest()->query->get('roles');
        if ($rolesFilter) {
            $qb->andWhere('entity.roles = :roles')->setParameter('roles', $rolesFilter);
        }
    
        return $qb;
    } 
}

