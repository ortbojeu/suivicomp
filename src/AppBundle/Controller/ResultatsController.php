<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ResultatsController extends Controller
{
    /**
     * @Route("resultats")
     */
    public function indexAction(Request $request)
    {
        /*define('DSN', 'mysql://root@localhost/competence');

        $bdd = Doctrine_Manager::connection(DSN);

      //$bdd = new PDO('mysql:host=localhost;dbname=competence;charset=utf8', 'root', '');

        $requeteMatieres = $bdd->query("SELECT nom_matiere FROM matiere");
        $resultat = $lesMatieres->fetchAll();
        $lesMatieres[] = array();

      foreach($resultat as $row){
        $lesMatieres[] = $row['nom_matiere'];
      }
      var_dump($lesMatieres);*/
      $lesMatieres[] = array("Info. Développement", "Info. Réseaux", "Info. Systèmes");
      print_r($lesMatieres);
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }


}
