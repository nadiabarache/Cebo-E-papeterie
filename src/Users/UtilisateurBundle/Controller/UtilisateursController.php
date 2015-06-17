<?php
namespace Users\UtilisateurBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
class UtilisateursController extends Controller
{
    public function factureAction()
    {
        $em = $this->getDoctrine()->getManager();
        $factures = $em->getRepository('EPEpapetrieBundle:Commandes')->byFacture($this->getUser());
        
        return $this->render('UsersUtilisateurBundle:Facture:facture.html.twig', array('factures' => $factures));
    }

    public function facturePDFAction($id)
      {
         
      $em = $this->getDoctrine()->getManager();
       $facture = $em->getRepository('EPEpapetrieBundle:Commandes')->findOneBy(array('utilisateurs' => $this->getUser(),  'id' => $id)) ;

       if (!$facture ) {
        $this->get('session')->getFlashBag()->add('error', 'Une erreur est servenue');
          return $this->redirect($this->generateUrl('users_utilisateur_facture'));
       }
  
       //on stocke la vue à convertir en PDF, en n'oubliant pas les paramètres twig si la vue comporte des données dynamiques
$html = $this->renderView('UsersUtilisateurBundle:Facture:facturePDF.html.twig', array('facture'=>$facture));
//on appelle le service html2pdf
$html2pdf = $this->get('html2pdf_factory')->create();
//real : utilise la taille réelle
$html2pdf->pdf->SetDisplayMode('real');
//writeHTML va tout simplement prendre la vue stocker dans la variable $html pour la convertir en format PDF
$html2pdf->writeHTML($html);
//Output envoit le document PDF au navigateur internet
return new Response($html2pdf->Output('Facture.pdf'), 200, array('Content-Type' => 'application/pdf'));
           
      }
    
}
