<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ResultatsController extends Controller
{
    /**
     * @Route("/", name="resultats")
     */
    public function indexAction(Request $request)
    {
      $bdd = new PDO('mysql:host=localhost;dbname=competence;charset=utf8', 'root', '');

      $requeteMatieres = $bdd->query("SELECT nom_matiere FROM matiere");
      $resultat = $lesMatieres->fetchAll();
      $lesMatieres[] = array();

      foreach($resultat as $row){
        $lesMatieres[] = $row['nom_matiere'];
      }

      var_dump($lesMatieres);

      // replace this example code with whatever you need
      return $this->render('default/index.html.twig', [
          'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
      ]);
    }

}
