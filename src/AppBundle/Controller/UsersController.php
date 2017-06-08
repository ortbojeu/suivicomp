<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UsersController extends Controller
{

    public function indexAction(Request $request)
    {
        $session = $request->getSession();
        if ($session->has('email')) {
            switch ($session->get('role')) {
                case 'eleve':
                    return $this->redirectToRoute('eleve');
                case 'prof':
                    return $this->redirectToRoute('professeur');
                default:
                    $session->getFlashBag()->add('danger', "Votre statut ne vous autorise pas à accéder à cette page.");
                    return $this->redirectToRoute('deconnexion');
            }
        }

        $qb = $this->getDoctrine()->getManager()->createQueryBuilder();

        if ($request->getMethod() == 'POST') {
            $form = $request->request->all();
            $email = filter_var($form['email'], FILTER_SANITIZE_EMAIL);
            $password = filter_var($form['password'], FILTER_SANITIZE_STRING);
            $qb->select('u.email, u.password, u.role, u.nom, u.prenom, u.id')
                ->from('AppBundle:Users', 'u')
                ->where('u.email = ?1')
                ->setParameter(1, $email);
            $query = $qb->getQuery();
            $result = $query->getResult();

            if (!isset($result[0]['email'])) {
                $session->getFlashBag()->add('danger', "Mauvais identifiant ou mot de passe.");
                return $this->redirectToRoute('accueil');
            } else {
                if (password_verify($password, $result[0]['password'])) {
                    $session = $request->getSession();
                    $session->set('id', $result[0]['id']);
                    $session->set('email', $result[0]['email']);
                    $session->set('prenom', $result[0]['prenom']);
                    $session->set('nom', $result[0]['nom']);
                    $session->set('role', $result[0]['role']);
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
                    $session->getFlashBag()->add('danger', "Mauvais identifiant ou mot de passe.");
                    return $this->redirectToRoute('accueil');
                }
            }
        }

        return $this->render('connexion.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    public function disconnectAction(Request $request)
    {
        $session = $request->getSession();
        $session->clear();
        return $this->redirectToRoute('accueil');
    }
}
