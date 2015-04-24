<?php

namespace EP\EpapeterieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EP\EpapeterieBundle\Entity\Produits;
use EP\EpapeterieBundle\Form\Formulaire;

class DbProduitController extends Controller

{

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function formulaireAction()
    {
            $form = $this->createForm(new formulaire());

       if ( $this->get('request')->getMethod() == 'POST')
       {

        var_dump( $form->bind($this->get('request')));
        // $form->getData();
        echo  $form['Nom']->getData();



       }


            return $this->render('EPEpapetrieBundle:Products:addproduit.html.twig', array('form' => $form->createView()));

            die('salut !!');
    }

    /* public function ajoutAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $produit = new Produits();
        $produit->setCategorie('Stylo');
        $produit->setDescription('Stylo bic bleu ');
        $produit->setDisponible('20');
        $produit->setImage('http://upload.wikimedia.org/wikipedia/commons/e/e1/4_Bic_Cristal_pens_and_caps.jpg');
        $produit->setNom('Stylo bic');
        $produit->setPrix('0.35');
        $produit->setTva('20');

        $em->persist($produit);


        $produit2 = new Produits();
        $produit2->setCategorie('Stylo');
        $produit2->setDescription('Stylo frexion bleu effecable ');
        $produit2->setDisponible('15');
        $produit2->setImage('http://upload.wikimedia.org/wikipedia/commons/e/e1/4_Bic_Cristal_pens_and_caps.jpg');
        $produit2->setNom('Stylo frexion');
        $produit2->setPrix('2.35');
        $produit2->setTva('20');
         $em->persist($produit2);
        $em->flush();


      $produits = $this->getDoctrine()->getRepository('EPEpapetrieBundle:Produits')->findAll();
        return $this->render('EPEpapetrieBundle:Products:addproduit.html.twig', array('produits'=> $produits));
    }
*/



}