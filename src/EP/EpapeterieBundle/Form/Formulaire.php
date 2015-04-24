<?php
namespace EP\EpapeterieBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class Formulaire extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
     $builder->add('email','email')
             ->add('Nom', null, array('required' => false))
             ->add('contenu', 'textarea')
             ->add('date', 'date')
             ->add('sexe', 'choice', array('choices' => array('0' => 'homme',
                                                 '1' => 'femme',
                                                 '2' => 'autre',), 'expanded' => true))
             // permet de récuperer les utilisateurs apartit de la base de données
             ->add('utilisateurs', 'entity', array('class' => 'Users\UtilisateurBundle\Entity\utilisateurs' ,  'property' => 'username'))
             ->add('pays','country')
             ->add('envoyer', 'submit');


    }

    public function getName()
    {
       return 'ep_epapeteriebundle_formulaire';
    }

}