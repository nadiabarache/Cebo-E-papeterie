<?php

namespace EP\EpapeterieBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EP\EpapeterieBundle\Entity\Produits;
use EP\EpapeterieBundle\Form\ProduitsType;

/**
 * Produits controller.
 *
 */
class ProduitsAdminController extends Controller
{

    /**
     * Lists all Produits entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EPEpapetrieBundle:Produits')->findAll();

        return $this->render('EPEpapetrieBundle:Produits:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Produits entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Produits();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('adminProduits_show', array('id' => $entity->getId())));
        }

        return $this->render('EPEpapetrieBundle:Produits:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Produits entity.
     *
     * @param Produits $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Produits $entity)
    {
        $form = $this->createForm(new ProduitsType(), $entity, array(
            'action' => $this->generateUrl('adminProduits_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Produits entity.
     *
     */
    public function newAction()
    {
        $entity = new Produits();
        $form   = $this->createCreateForm($entity);

        return $this->render('EPEpapetrieBundle:Produits:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Produits entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EPEpapetrieBundle:Produits')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Produits entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EPEpapetrieBundle:Produits:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Produits entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EPEpapetrieBundle:Produits')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Produits entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EPEpapetrieBundle:Produits:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Produits entity.
    *
    * @param Produits $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Produits $entity)
    {
        $form = $this->createForm(new ProduitsType(), $entity, array(
            'action' => $this->generateUrl('adminProduits_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Produits entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EPEpapetrieBundle:Produits')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Produits entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('adminProduits_edit', array('id' => $id)));
        }

        return $this->render('EPEpapetrieBundle:Produits:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Produits entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EPEpapetrieBundle:Produits')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Produits entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('adminProduits'));
    }

    /**
     * Creates a form to delete a Produits entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('adminProduits_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
