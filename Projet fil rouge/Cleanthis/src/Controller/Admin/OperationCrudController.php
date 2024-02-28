<?php

namespace App\Controller\Admin;

use App\Entity\Operation;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class OperationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Operation::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Missions')
            ->setEntityLabelInSingular('Mission')
            ->setPageTitle("index", "Administration des missions");
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            // IdField::new('id'),
            TextField::new('type'),
            TextField::new('name'),
            TextEditorField::new('description'),
            NumberField::new('price'),
            TextField::new('status'),
            DateField::new('created_at'),
            DateField::new('rdv_at'), 
            TextField::new('zipcode_ope'),
            TextField::new('city_ope'),
            TextField::new('street_ope'),   
            AssociationField::new('customer'),       
            AssociationField::new('employe'),                                     
        ];
    }

}
