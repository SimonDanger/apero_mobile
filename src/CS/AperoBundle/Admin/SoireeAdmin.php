<?php
// src/Acme/DemoBundle/Admin/PostAdmin.php
namespace CS\AperoBundle\Admin;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
class SoireeAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('nom', 'text')
            ->add('description','textarea')
            ->add('paiement' ,'integer')


        ;
    }
    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('nom')
            ->add('description')
            ->add('paiement')
        ;
    }
    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->add('nom', 'text')
            ->add('description','textarea')
            ->add('paiement', 'integer')
            ->add('_action', 'actions', array('actions' => array(
                'show' => array(),
                'edit' => array(),
                'delete' => array(),
            )))
        ;
    }
}