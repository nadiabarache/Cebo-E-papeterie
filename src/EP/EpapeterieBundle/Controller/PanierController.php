<?php

namespace EP\EpapeterieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use EP\EpapeterieBundle\Form\UtilisateursAdressesType;
use EP\EpapeterieBundle\Entity\UtilisateursAdresses;

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
    {   $utilisateur = $this->container->get('security.context')->getToken()->getUser();
        $entity = new UtilisateursAdresses();
        $form = $this->createForm(new UtilisateursAdressesType(), $entity);
        
        if($this->get('request')->getMethod() == 'POST') 
            {
            $form->handleRequest($this->getRequest());
              if($form->isValid()) {
                  $em = $this->getDoctrine()->getManager();
                  $entity->setUtilisateurs($utilisateur);
                  $em->persist($entity);
                  $em->flush();
                  
                   return $this->redirect($this->generateUrl('ep_epapetrie_achat'));
                  
              }
            }

        return $this->render('EPEpapetrieBundle:Panier:achat.html.twig', array('form' => $form->createView(), 'utilisateur' => $utilisateur));
    }

    public function adresseSuppressionAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('EPEpapetrieBundle:UtilisateursAdresses')->find($id);
        
        if ($this->container->get('security.context')->getToken()->getUser() != $entity->getUtilisateurs() || !$entity)
            return $this->redirect ($this->generateUrl ('ep_epapetrie_achat'));
        
        $em->remove($entity);
        $em->flush();
        
        return $this->redirect ($this->generateUrl ('ep_epapetrie_achat'));
    }
    
    public function setLivraisonOnSession()
    {
        $session = $this->getRequest()->getSession();
        
        if (!$session->has('adresse')) $session->set('adresse',array());
        $adresse = $session->get('adresse');
        
        if ($this->getRequest()->request->get('livraison') != null && $this->getRequest()->request->get('facturation') != null)
        {
            $adresse['livraison'] = $this->getRequest()->request->get('livraison');
            $adresse['facturation'] = $this->getRequest()->request->get('facturation');
        } else {
            return $this->redirect($this->generateUrl('ep_epapetrie_validation'));
        }
        
        $session->set('adresse',$adresse);
        return $this->redirect($this->generateUrl('ep_epapetrie_validation'));
               
                
    }
    
    public function validationAction()
    {
        if($this->get('request')->getMethod() == 'POST')
             $this->setLivraisonOnSession();
        
        $em = $this->getDoctrine()->getManager(); 
        $session = $this->getRequest()->getSession();
        $adresse = $session->get('adresse');
        $produits = $em->getRepository('EPEpapetrieBundle:Produits')->findArray(array_keys($session->get('panier')));
        $livraison = $em->getRepository('EPEpapetrieBundle:UtilisateursAdresses')->find($adresse['livraison']);
         $facturation = $em->getRepository('EPEpapetrieBundle:UtilisateursAdresses')->find($adresse['facturation']);
        return $this->render('EPEpapetrieBundle:Panier:validation.html.twig', array('produits' => $produits,
                                                                                     'livraison' => $livraison,
                                                                                     'facturation' => $facturation,
                                                                                      'panier' => $session->get('panier')));
    }
    
    
    
    

}
