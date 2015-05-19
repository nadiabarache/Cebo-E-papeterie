<?php

namespace EP\EpapeterieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EP\EpapeterieBundle\Form\RechercheType;
use Symfony\Component\HttpFoundation\Request;


class ProduitsController extends Controller
{



    public function categorieAction($categorie)
    {
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('EPEpapetrieBundle:Produits')->byCategorie($categorie);

        return $this->render('EPEpapetrieBundle:Products:allProducts.html.twig', array('produits' => $produits));
    }



    public function produitAction($id)
    {   $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        if ($session->has('panier'))
            {$panier = $session->get('panier');}
        else
            {$panier = false;}
        $produit = $em->getRepository('EPEpapetrieBundle:Produits')->find($id);
        return $this->render('EPEpapetrieBundle:Products:produit.html.twig' , array('produit' => $produit, 'panier' => $panier));
    }

    public function allProductsAction()
    {
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
       
        if ($session->has('panier'))
            {$panier = $session->get('panier');}
        else
            {$panier = false;}
       
     $produits = $em->getRepository('EPEpapetrieBundle:Produits')->findAll();
     return $this->render('EPEpapetrieBundle:Products:allProducts.html.twig', array('produits' => $produits, 'panier' => $panier));

    }
      public function rechercheAction() 
    {
        $form = $this->createForm(new RechercheType());
        return $this->render('EPEpapetrieBundle:Products:recherche.html.twig', array('form' => $form->createView()));
    }
    public function rechercheTraitementAction(Request $request) 
    {   $form = $this->createForm(new RechercheType());
    
      if ($this->get('request')->getMethod() == 'POST') {
        $form->handleRequest($request);
        
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('EPEpapetrieBundle:Produits')->recherche($form['recherche']->getData());
         } else {
             throw $this->createNotFoundException('Le produit que vous cherchez n\'existe pas');
         }
        return $this->render('EPEpapetrieBundle:Products:allProducts.html.twig', array('produits' => $produits));
    }
}

