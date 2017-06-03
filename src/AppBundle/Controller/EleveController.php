<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EleveController extends Controller
{
    public function indexAction(Request $request)
    {
        $session = $request->getSession();
        // replace this example code with whatever you need
        return $this->render('accueilEleve.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'nom' => $session->get('nom'),
            'prenom' => $session->get('prenom'),
        ]);
    }
}
