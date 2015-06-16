<?php
namespace Users\UtilisateurBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class UtilisateursController extends Controller
{
    public function factureAction()
    {
        $em = $this->getDoctrine()->getManager();
        $factures = $em->getRepository('EPEpapetrieBundle:Commandes')->byFacture($this->getUser());
        
        return $this->render('UsersUtilisateurBundle:Facture:facture.html.twig', array('factures' => $factures));
    }

    
}
