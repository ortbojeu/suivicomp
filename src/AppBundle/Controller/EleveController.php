<?php

namespace AppBundle\Controller;

use AppBundle\Tools\ArrayTools;
use AppBundle\Entity\AutoEvaluer;
use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
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
        if ($session->get('email') == null)
            return $this->redirectToRoute('accueil');

        $em = $this->getDoctrine()->getManager();
        $qbComp = $em->createQueryBuilder();
        $qbComp->select('c.idCompetence, c.nomCompetence, g.nomGroupe')
            ->from('AppBundle:GroupeCompetence', 'g')
            ->innerJoin('AppBundle:Competence', 'c', 'WITH', 'c.idGroupeCompetence = g.idGroupeCompetence');
        $queryComp = $qbComp->getQuery();
        $resultComp = $queryComp->getResult();

        $formChoices = [];
        foreach ($resultComp as $comp) {
            $formChoices[$comp['nomGroupe']][$comp['nomCompetence']] = $comp['idCompetence'];
        }

        if ($request->getMethod() == 'POST') {
            $form = $request->request->all();
            $autoEvaluateArray = $this->_getAEFromForm($form, count($formChoices), $session->get('id'));
            foreach ($autoEvaluateArray as $autoEval) {
                $em->getConnection()->beginTransaction();
                try {
                    $em->persist($autoEval);
                    $em->flush();
                    $em->getConnection()->commit();
                } catch (Exception $e) {
                    $em->getConnection()->rollBack();
                    $this->get('logger')->error(sprintf('An error occurred : $s - [%s]', $e->getCode(), $e->getMessage()));
                }
            }
            $session->getFlashBag()->add('success', 'Auto-évaluation terminée avec succès!');
            return $this->redirectToRoute('eleve');
        }

        return $this->render('eleve/autoEvaluateEleve.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'nom' => $session->get('nom'),
            'prenom' => $session->get('prenom'),
            'formChoices' => $formChoices,
        ]);
    }

    private function _getAEFromForm($params, $lenComps, $usersId) {
        $arrayAE = array();
        $today = new \DateTime("now");
        for ($i = 1; $i <= $lenComps; $i++) {
            if (array_key_exists(sprintf('compToEvaluate_%d', $i), $params)) {
                $autoEval = new AutoEvaluer();
                $comment = (array_key_exists(sprintf('comment_%d', $i), $params)) ? $params[sprintf('comment_%d', $i)] : '';
                $note = $params[sprintf('note_%d', $i)];
                $autoEval->setIdCompetence($i);
                $autoEval->setUsersId($usersId);
                $autoEval->setCommentaire($comment);
                $autoEval->setDateAutoEval($today);
                $autoEval->setNoteAutoEval($note);
                $arrayAE[] = $autoEval;
            }
        }
        return $arrayAE;
    }
}
