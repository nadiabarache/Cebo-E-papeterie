<?php
namespace EP\EpapeterieBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RechercheType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
     $builder->add('recherche','text');
    }

    public function getName()
    {
       return 'ep_epapeteriebundle_recherche';
    }

}