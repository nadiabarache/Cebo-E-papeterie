<?php

namespace EP\EpapeterieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PanierController extends Controller
{
    public function panierAction()
    {
        return $this->render('EPEpapetrieBundle:Panier:panier.html.twig');
    }

   public function achatAction()
    {
        return $this->render('EPEpapetrieBundle:Panier:achat.html.twig');
    }

    public function validationAction()
    {
        return $this->render('EPEpapetrieBundle:Panier:validation.html.twig');
    }

}
