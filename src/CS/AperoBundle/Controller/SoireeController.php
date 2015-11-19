<?php

namespace CS\AperoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File;
use CS\AperoBundle\Entity\Soiree;
use CS\AperoBundle\Entity\User;
use CS\AperoBundle\Form\Type\SoireeType;


class SoireeController extends Controller
{
    public function indexAction(Request $request)
    {
        $soiree = new Soiree();
        $form = $this->get('form.factory')->create(new SoireeType(), $soiree);
        $form->handleRequest($request);

        if ($form->isValid()) {

            // On stock le formulaire dans la base de données
            $em = $this->getDoctrine()->getManager();
            $em->persist($soiree);
            $em->flush();
            return $this->redirectToRoute('homepage');
        }
        return $this->render('CSAperoBundle:Soiree:ajout.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    // une seule soiree
    public function showAction(Soiree $id)
    {
        $em = $this->getDoctrine()->getManager();
        $soiree = $em->getRepository('CSAperoBundle:Soiree')->find($id);
        $listeUser = $soiree->getUsers();

        return $this->render('CSAperoBundle:Soiree:soiree.html.twig', array(
            'soiree' => $soiree,
            'users' => $listeUser,
        ));
    }

    //toutes les soirees
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $listSoiree = $em->getRepository('CSAperoBundle:Soiree')->findAll();

        return $this->render('CSAperoBundle:Soiree:index.html.twig', array(
            'soirees' => $listSoiree,
        ));
    }

}