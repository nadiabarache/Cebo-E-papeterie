<?php
namespace EP\EpapeterieBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategoriesController extends Controller
{
    public function menuAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('EPEpapetrieBundle:Categories')->findAll();
        return $this->render('EPEpapetrieBundle:Categories:menu.html.twig', array( 'categories' => $categories  ));

    }

}
