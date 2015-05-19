<?php

namespace EP\EpapeterieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

class PanierController extends Controller
{
    public function menuAction() {
        $session = $this->getRequest()->getSession();
        if(!$session->has('panier')) 
            {$articles = 0;}
        else 
        {$articles = count($session->get('panier'));}
        
         return $this->render('EPEpapetrieBundle:Panier:menu.html.twig', array('articles' => $articles));
    } 
    public function panierAction()
    {
        $session = $this->getRequest()->getSession();
        if (!$session->has('panier')) {$session->set('panier', array());}
        
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('EPEpapetrieBundle:Produits')->findArray(array_keys($session->get('panier')));
        
        return $this->render('EPEpapetrieBundle:Panier:panier.html.twig', array('produits' => $produits,
                                                                                             'panier' => $session->get('panier')));

    }
    
    public function ajouterAction($id) {
        // Methode Ajout : ajout du produit dans une session
        //  et recuperation des produits de la session dans la methode panier
        $session = $this->getRequest()->getSession();
        
        if(!$session->has('panier')) {
        $session->set('panier', array());}
        
        $panier = $session->get('panier');
        
        if (array_key_exists($id, $panier))
        {
            if($this->getRequest()->query->get('qte') != null) {
            $panier[$id] = $this->getRequest()->query->get ('qte');}
        } else {
            if ($this->getRequest()->query->get('qte') != null) {
            $panier[$id] = $this->getRequest()->query->get('qte'); }
            else { 
            $panier[$id] = 1;}
        }
        
        $session->set('panier', $panier) ; 
         $this->get('session')->getFlashBag()->add('success', 'Article ajouté');
      return $this->redirect($this->generateUrl('ep_epapetrie_panier'));  
    }
    
    public function supprimerAction($id) {

         $session = $this->getRequest()->getSession();
         $panier = $session->get('panier');
         
         if(array_key_exists($id, $panier)) {
             unset($panier[$id]);
             $session->set('panier', $panier);
             $this->get('session')->getFlashBag()->add('success', 'Article est bien supprimé de votre panier ');
          return $this->redirect($this->generateUrl('ep_epapetrie_panier'));
         }
        
        
        return $this->redirect($this->generateUrl('ep_epapetrie_panier'));
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
