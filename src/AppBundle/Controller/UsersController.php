<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Users;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class UsersController extends Controller
{

    public function indexAction(Request $request)
    {
        $errorCnx = "";
        $qb = $this->getDoctrine()->getManager()->createQueryBuilder();
        $users = new Users();
        $form = $this->createFormBuilder($users)
            ->add('email', TextType::class, ['required' => true])
            ->add('password', PasswordType::class, ['required' => true])
            ->add('submit', SubmitType::class, ['label' => 'Connexion'])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $users = $form->getData();
            $qb->select('u.email, u.password, u.role, u.nom, u.prenom')
                ->from('AppBundle:Users', 'u')
                ->where('u.email = ?1')
                ->setParameter(1, $users->getEmail());
            $query = $qb->getQuery();
            $result = $query->getResult();

            if (!isset($result[0]['email'])) {
                $errorCnx = "Mauvais identifiant ou mot de passe.";
            } else {
                if (password_verify($users->getPassword(), $result[0]['password'])) {
                    $session = $request->getSession();
                    $session->set('email', $result[0]['email']);
                    $session->set('prenom', $result[0]['prenom']);
                    $session->set('nom', $result[0]['nom']);
                    switch ($result[0]['role']) {
                        case 'prof':
                            return $this->redirectToRoute('professeur');
                            break;
                        case 'eleve':
                            return $this->redirectToRoute('eleve');
                            break;
                        default:
                            $errorCnx = "Votre statut est incorrecte.";
                            break;
                    }
                } else {
                    $errorCnx = "Mauvais identifiant ou mot de passe.";
                }
            }
        }

        return $this->render('connexion.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'form' => $form->createView(),
            'errorCnx' => $errorCnx,
        ]);
    }
}
