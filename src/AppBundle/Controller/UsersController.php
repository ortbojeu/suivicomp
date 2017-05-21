<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Users;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class UsersController extends Controller
{
  /**
   * @Route("/", name="homepage")
   */
  public function indexAction(Request $request)
  {
    $errorCnx = "";
    $qb = $this->getDoctrine()->getManager()->createQueryBuilder();
    // $allUsers = $doctrine->getRepository('AppBundle:Users')->findAll();
    $users = new Users();
    $form = $this->createFormBuilder($users)
      ->add('email', TextType::class, ['required' => true])
      ->add('password', PasswordType::class, ['required' => true])
      ->add('submit', SubmitType::class, ['label' => 'Connexion'])
      ->getForm();

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      $users = $form->getData();
      $qb->select('u.email, u.password')
         ->from('AppBundle:Users', 'u')
         ->where('u.email = ?1')
         ->setParameter(1, $users->getEmail());
      $query = $qb->getQuery();
      $result = $query->getResult();
      if (!isset($result[0]['email'])) {
        $errorCnx = "Mauvais identifiant ou mot de passe.";
      } else {
        // gérer mauvais mdp
      }
    }
    
    return $this->render('default/index.html.twig', [
      'form' => $form->createView(),
      'errorCnx' => $errorCnx,
    ]);
  }
}
