<?php

namespace EP\EpapeterieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProduitsController extends Controller
{



    public function categorieAction($categorie)
    {
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('EPEpapetrieBundle:Produits')->byCategorie($categorie);

        return $this->render('EPEpapetrieBundle:Products:allProducts.html.twig', array('produits' => $produits));
    }



    public function produitAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('EPEpapetrieBundle:Produits')->find($id);
        return $this->render('EPEpapetrieBundle:Products:produit.html.twig' , array('produit' => $produit));
    }

    public function allProductsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('EPEpapetrieBundle:Produits')->findAll();

        return $this->render('EPEpapetrieBundle:Products:allProducts.html.twig', array('produits' => $produits));
    }
}

