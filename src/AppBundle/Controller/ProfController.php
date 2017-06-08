<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Competence;
use AppBundle\Tools\ArrayTools;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class ProfController extends Controller
{
    public function indexAction(Request $request)
    {
        $session = $request->getSession();
        $em = $this->getDoctrine()->getManager();

        if (!$session->has('email')) {
            $session->getFlashBag()->add('error', "Vous devez vous connecter avant d'accéder à cette page.");
            return $this->redirectToRoute('accueil');
        }
        if ($session->get('role') != 'prof') {
            $session->getFlashBag()->add('error', "Votre statut ne vous autorise pas à accéder à cette page.");
            return $this->redirectToRoute('accueil');
        }

        $evals = $this->_getNotesByCompetenceArray($session);

        $competence = new Competence();
        $compForm = $this->_getAddCompetenceBlock($request, $session, $em, $competence);
        $compForm->handleRequest($request);

        if ($compForm->isSubmitted() && $compForm->isValid()) {
            $competence = $compForm->getData();
            $em->getConnection()->beginTransaction();
            try {
                $em->persist($competence);
                $em->flush();
                $em->getConnection()->commit();
                $session->getFlashBag()->add('success', 'Compétence ajoutée avec succès!');
            } catch (Exception $e) {
                $em->getConnection()->rollBack();
                $this->get('logger')->error(sprintf('An error occurred : $s - [%s]', $e->getCode(), $e->getMessage()));
                $session->getFlashBag()->add('warning', 'Une erreur est survenue.');
            }
        }

        return $this->render('professeur/accueilProf.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'compForm' => $compForm->createView(),
            'evals' => $evals,
        ]);
    }

    private function _getAddCompetenceBlock(Request $request, $session, $em, Competence $competence) {
        $qbGroupeComp = $em->createQueryBuilder();
        $qbGroupeComp->select('g.nomGroupe, g.idGroupeCompetence')
            ->from('AppBundle:GroupeCompetence', 'g')
            ->innerJoin('AppBundle:Matiere', 'm', 'WITH', 'g.idMatiere = m.idMatiere')
            ->innerJoin('AppBundle:Intervient', 'i', 'WITH', 'i.idMatiere = m.idMatiere')
            ->where('i.usersId = ?1')
            ->setParameter(1, $session->get('id'))
            ->distinct();
        $queryGroupeComp = $qbGroupeComp->getQuery();
        $resultGroupeComp = $queryGroupeComp->getResult();

        $formChoices = [];
        foreach ($resultGroupeComp as $gComp) {
            $formChoices[$gComp['nomGroupe']] = $gComp['idGroupeCompetence'];
        }

        $form = $this->createFormBuilder($competence)
            ->add('nomCompetence', TextType::class, [
                'required' => true,
                'label' => 'Compétence'
            ])
            ->add('idGroupeCompetence', ChoiceType::class, [
                'required' => true,
                'choices' => $formChoices,
                'label' => 'Groupe de compétence',
            ])
            ->add('submit', SubmitType::class, ['label' => 'Ajouter'])
            ->getForm();

        return $form;
    }

    private function _getNotesByCompetenceArray($session) {
        $em = $this->getDoctrine()->getManager();

        $qbEleve = $em->createQueryBuilder();
        $qbEleve->select('a.usersId')
            ->from('AppBundle:Appartenir', 'a')
            ->innerJoin('AppBundle:Groupe', 'g', 'WITH', 'g.idGroupe = a.idGroupe')
            ->innerJoin('AppBundle:Suivre', 's', 'WITH', 's.idGroupe = g.idGroupe')
            ->innerJoin('AppBundle:Matiere', 'm', 'WITH', 'm.idMatiere = s.idMatiere')
            ->innerJoin('AppBundle:Intervient', 'i', 'WITH', 'i.idMatiere = m.idMatiere')
            ->where('i.usersId = ?1')
            ->setParameter(1, $session->get('id'))
            ->distinct();
        $queryEleve = $qbEleve->getQuery();
        $resultEleve = $queryEleve->getResult();

        $arrayEleve = [];
        foreach ($resultEleve as $eleve) {
            $arrayEleve[] = $eleve['usersId'];
        }

        $qbGroupeComp = $em->createQueryBuilder();
        $qbGroupeComp->select('g.idGroupeCompetence, g.nomGroupe')
            ->from('AppBundle:GroupeCompetence', 'g')
            ->innerJoin('AppBundle:Matiere', 'm', 'WITH', 'g.idMatiere = m.idMatiere')
            ->innerJoin('AppBundle:Intervient', 'i', 'WITH', 'i.idMatiere = m.idMatiere')
            ->where('i.usersId = ?1')
            ->setParameter(1, $session->get('id'))
            ->distinct();
        $queryGroupeComp = $qbGroupeComp->getQuery();
        $resultGroupeComp = $queryGroupeComp->getResult();

        $idGroupesComp = [];
        foreach ($resultGroupeComp as $gComp) {
            $idGroupesComp[] = $gComp['idGroupeCompetence'];
        }

        $arrayResult = [];
        if(count($idGroupesComp) > 0 && count($arrayEleve) > 0) {
            $qbComp = $em->createQueryBuilder();
            $qbComp->select('g.idGroupeCompetence, c.idCompetence, c.nomCompetence')
                ->from('AppBundle:Competence', 'c')
                ->innerJoin('AppBundle:GroupeCompetence', 'g', 'WITH', 'g.idGroupeCompetence = c.idGroupeCompetence')
                ->where($qbComp->expr()->in('g.idGroupeCompetence', $idGroupesComp));
            $queryComp = $qbComp->getQuery();
            $resultComp = $queryComp->getResult();

            $qbAuto = $em->createQueryBuilder();
            $qbAuto->select('ae.id as idEval, u.id, u.nom, u.prenom, ae.dateAutoEval as date, c.idCompetence, ae.noteAutoEval as note, ae.commentaire')
                ->from('AppBundle:AutoEvaluer', 'ae')
                ->innerJoin('AppBundle:Users', 'u', 'WITH', 'ae.usersId = u.id')
                ->innerJoin('AppBundle:Competence', 'c', 'WITH', 'ae.idCompetence = c.idCompetence')
                ->where($qbComp->expr()->in('u.id', $arrayEleve))
                ->orderBy('u.id', 'ASC');
            $queryAuto = $qbAuto->getQuery();
            $resultAuto = $queryAuto->getResult();

            $qbSimple = $em->createQueryBuilder();
            $qbSimple->select('es.id as idEval, ue.id, ue.nom, ue.prenom, es.dateEvaluerSimplement as date, c.idCompetence, es.noteEvaluerSimplement as note')
                ->from('AppBundle:EvaluerSimplement', 'es')
                ->innerJoin('AppBundle:Users', 'ue', 'WITH', 'es.usersIdEleve = ue.id')
                ->innerJoin('AppBundle:Users', 'up', 'WITH', 'es.usersIdProf = up.id')
                ->innerJoin('AppBundle:Competence', 'c', 'WITH', 'es.idCompetence = c.idCompetence')
                ->where('up.id = ?1')
                ->setParameter(1, $session->get('id'))
                ->orderBy('ue.id', 'ASC');
            $querySimple = $qbSimple->getQuery();
            $resultSimple = $querySimple->getResult();

            $qbEpreuve = $em->createQueryBuilder();
            $qbEpreuve->select('ee.id as idEval, u.id, u.nom, u.prenom, ee.note, ee.dateEval as date, c.idCompetence')
                ->from('AppBundle:EvaluerAvecEpreuve', 'ee')
                ->innerJoin('AppBundle:Users', 'u', 'WITH', 'ee.usersIdEleve = u.id')
                ->innerJoin('AppBundle:Competence', 'c', 'WITH', 'ee.idCompetence = c.idCompetence')
                ->where($qbComp->expr()->in('u.id', $arrayEleve))
                ->orderBy('u.id', 'ASC');
            $queryEpreuve = $qbEpreuve->getQuery();
            $resultEpreuve = $queryEpreuve->getResult();

            $arrayEval = ArrayTools::array_sort(array_merge($resultAuto, $resultSimple, $resultEpreuve), 'date', SORT_DESC);

            $arrayResult = [];
            foreach ($arrayEleve as $eleve) {
                foreach ($resultGroupeComp as $groupeComp) {
                    foreach ($resultComp as $comp) {
                        if ($comp['idGroupeCompetence'] == $groupeComp['idGroupeCompetence']) {
                            foreach ($arrayEval as $eval) {
                                if ($eval['idCompetence'] == $comp['idCompetence'] && $eleve == $eval['id']) {
                                    $arrayResult[$eleve]['nom'] = $eval['nom'];
                                    $arrayResult[$eleve]['prenom'] = $eval['prenom'];
                                    $arrayResult[$eleve]['groupesC'][$groupeComp['idGroupeCompetence']]['nomGC'] = $groupeComp['nomGroupe'];
                                    $arrayResult[$eleve]['groupesC'][$groupeComp['idGroupeCompetence']]['comps'][$comp['idCompetence']]['nomC'] = $comp['nomCompetence'];
                                    $arrayResult[$eleve]['groupesC'][$groupeComp['idGroupeCompetence']]['comps'][$comp['idCompetence']]['evalsComp'][$eval['idEval']] = [
                                        'date' => $eval['date'],
                                        'note' => $eval['note'],
                                        'commentaire' => isset($eval['commentaire']) ? $eval['commentaire'] : '',
                                    ];
                                }
                            }
                        }
                    }
                }
            }
        }
        return $arrayResult;
    }

}
