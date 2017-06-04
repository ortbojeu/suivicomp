<?php

namespace AppBundle\Controller;

use AppBundle\Tools\ArrayTools;
use AppBundle\Entity\AutoEvaluer;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class EleveController extends Controller
{
    public function indexAction(Request $request)
    {
        $session = $request->getSession();
        if ($session->get('email') == null)
            return $this->redirectToRoute('accueil');

        $qbGroupeComp = $this->getDoctrine()->getManager()->createQueryBuilder();
        $qbGroupeComp->select('g.nomGroupe')
            ->from('AppBundle:GroupeCompetence', 'g');
        $queryGroupeComp = $qbGroupeComp->getQuery();
        $resultGroupeComp = $queryGroupeComp->getResult();

        $qbAuto = $this->getDoctrine()->getManager()->createQueryBuilder();
        $qbAuto->select('ae.dateAutoEval as date, c.nomCompetence', 'ae.noteAutoEval as note', 'ae.commentaire', 'gc.nomGroupe')
            ->from('AppBundle:AutoEvaluer', 'ae')
            ->innerJoin('AppBundle:Users', 'u', 'WITH', 'ae.usersId = u.id')
            ->innerJoin('AppBundle:Competence', 'c', 'WITH', 'ae.idCompetence = c.idCompetence')
            ->innerJoin('AppBundle:GroupeCompetence', 'gc', 'WITH', 'gc.idGroupeCompetence = c.idGroupeCompetence')
            ->where('u.email = ?1')
            ->setParameter(1, $session->get('email'));
        $queryAuto = $qbAuto->getQuery();
        $resultAuto = $queryAuto->getResult();

        $qbSimple = $this->getDoctrine()->getManager()->createQueryBuilder();
        $qbSimple->select('es.dateEvaluerSimplement as date, c.nomCompetence', 'es.noteEvaluerSimplement as note', 'up.nom', 'up.prenom', 'gc.nomGroupe')
            ->from('AppBundle:EvaluerSimplement', 'es')
            ->innerJoin('AppBundle:Users', 'ue', 'WITH', 'es.usersIdEleve = ue.id')
            ->innerJoin('AppBundle:Users', 'up', 'WITH', 'es.usersIdProf = up.id')
            ->innerJoin('AppBundle:Competence', 'c', 'WITH', 'es.idCompetence = c.idCompetence')
            ->innerJoin('AppBundle:GroupeCompetence', 'gc', 'WITH', 'gc.idGroupeCompetence = c.idGroupeCompetence')
            ->where('ue.email = ?1')
            ->setParameter(1, $session->get('email'));
        $querySimple = $qbSimple->getQuery();
        $resultSimple = $querySimple->getResult();

        $qbEpreuve = $this->getDoctrine()->getManager()->createQueryBuilder();
        $qbEpreuve->select('ee.note, ee.dateEval as date, c.nomCompetence, gc.nomGroupe, ee.idEpreuve')
            ->from('AppBundle:EvaluerAvecEpreuve', 'ee')
            ->innerJoin('AppBundle:Users', 'u', 'WITH', 'ee.usersIdEleve = u.id')
            ->innerJoin('AppBundle:Competence', 'c', 'WITH', 'ee.idCompetence = c.idCompetence')
            ->innerJoin('AppBundle:GroupeCompetence', 'gc', 'WITH', 'gc.idGroupeCompetence = c.idGroupeCompetence')
            ->where('u.email = ?1')
            ->setParameter(1, $session->get('email'));
        $queryEpreuve = $qbEpreuve->getQuery();
        $resultEpreuve = $queryEpreuve->getResult();

        $arrayResult = ArrayTools::array_sort(array_merge($resultAuto, $resultSimple, $resultEpreuve), 'date', SORT_DESC);

        return $this->render('eleve/accueilEleve.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'nom' => $session->get('nom'),
            'prenom' => $session->get('prenom'),
            'groupeComp' => $resultGroupeComp,
            'results' => $arrayResult,
        ]);
    }

    public function autoEvaluateAction(Request $request)
    {
        $session = $request->getSession();

        $qbComp = $this->getDoctrine()->getManager()->createQueryBuilder();
        $qbComp->select('c.idCompetence, c.nomCompetence, g.nomGroupe')
            ->from('AppBundle:GroupeCompetence', 'g')
            ->innerJoin('AppBundle:Competence', 'c', 'WITH', 'c.idGroupeCompetence = g.idGroupeCompetence');
        $queryComp = $qbComp->getQuery();
        $resultComp = $queryComp->getResult();

        $formChoices = [];
        foreach ($resultComp as $comp) {
            if (array_key_exists($comp['nomGroupe'], $formChoices)) {
                $formChoices[$comp['nomGroupe']][$comp['nomCompetence']] = $comp['idCompetence'];
            } else {
                $formChoices[$comp['nomGroupe']] = array();
            }
        }

        $autoEval = new AutoEvaluer();
        var_dump($autoEval);
        $form = $this->createFormBuilder($autoEval)
            ->add('idCompetence', ChoiceType::class, [
                'required' => true,
                'multiple' => true,
                'choices' => $formChoices,
                'label' => 'Compétence(s)',
            ])
            ->add('usersId', HiddenType::class, [
                'value' => $session->get('id'),
                'required' => true,
            ])
            ->add('submit', SubmitType::class, ['label' => 'Continuer'])
            ->getForm();

        if ($form->isSubmitted()) {
            return $this->redirectToRoute('eleve');
        }

        return $this->render('eleve/autoEvaluateEleve.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'nom' => $session->get('nom'),
            'prenom' => $session->get('prenom'),
            'formComp' => $form->createView()
        ]);
    }
}
