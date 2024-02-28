<?php

namespace App\Controller\Admin;

use App\Entity\User;
use Doctrine\ORM\Mapping as ORM;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use Symfony\Component\Security\Core\User\UserInterface;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use Symfony\Component\Security\Core\Validator\Constraints\UserPassword;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserCrudController extends AbstractCrudController
{
    private UserPasswordHasherInterface $passwordEncoder;

    public function __construct( UserPasswordHasherInterface $passwordEncoder ) {
        $this->passwordEncoder = $passwordEncoder;
    }
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Utilisateurs')
            ->setEntityLabelInSingular('Utilisateur')
            ->setPageTitle("index", "Administration des utilisateurs");
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            // IdField::new('id'),
            TextField::new('email'),
            TextField::new('name'),
            TextField::new('firstname'),
            ArrayField::new('roles'),
            TextField::new('zipcode'),
            TextField::new('city'),
            TextField::new('street'),
            TextField::new('phone'),

            Field::new( 'password', 'New password' )->onlyWhenCreating()->setRequired( true )
                       ->setFormType( RepeatedType::class )
                       ->setFormTypeOptions( [
                           'type'            => PasswordType::class,
                           'first_options'   => [ 'label' => 'New password' ],
                           'second_options'  => [ 'label' => 'Repeat password' ],
                           'error_bubbling'  => true,
                           'invalid_message' => 'The password fields do not match.',
                       ] ),
            Field::new( 'password', 'New password' )->onlyWhenUpdating()->setRequired( false )
                       ->setFormType( RepeatedType::class )
                       ->setFormTypeOptions( [
                           'type'            => PasswordType::class,
                           'first_options'   => [ 'label' => 'New password' ],
                           'second_options'  => [ 'label' => 'Repeat password' ],
                           'error_bubbling'  => true,
                           'invalid_message' => 'The password fields do not match.',
                       ] )
                       ];
    }
}
