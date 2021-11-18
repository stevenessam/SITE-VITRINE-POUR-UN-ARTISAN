<?php

namespace App\Controller;

use App\Entity\Chantier;
use App\Entity\Image;
use App\Entity\TypeChantier;
use App\Form\ChantierType;
use App\Repository\ChantierRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/chantier')]
class ChantierController extends AbstractController
{
    #[Route('/', name: 'chantier_index', methods: ['GET'])]
    public function index(ChantierRepository $chantierRepository): Response
    {
            $repo = $this->getDoctrine()->getRepository(Chantier::class);
            $projects = $repo->findAll();
            $Types = $this->getDoctrine()->getRepository(TypeChantier::class);

        return $this->render('chantier/index.html.twig', [
            'chantiers' => $chantierRepository->findAll(),
            'types' => $Types->findAll(),
            'projects' => $projects,
            'titre' => 'PROJETS',
        ]);
    }

    #[Route('/new', name: 'chantier_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $chantier = new Chantier();
        $form = $this->createForm(ChantierType::class, $chantier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($chantier);
            $entityManager->flush();

            return $this->redirectToRoute('chantier_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('chantier/new.html.twig', [
            'chantier' => $chantier,
            'form' => $form,
        ]);
    }

    /**
    *   @Route("/{id}",name="chantier_show")
    */
    public function show($id) {

        $repo = $this->getDoctrine()->getRepository(Chantier::class);
        $chantiers = $repo->find($id);

            $repoImg = $this->getDoctrine()->getRepository(Chantier::class);
            $images = $repoImg->findAll();


        return $this->render('chantier/show.html.twig', [
            'chantier' => $chantiers,
            'images'  => $images,
            'titre' => 'CHANTIER',
        ]);
    }

    #[Route('/{id}/edit', name: 'chantier_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Chantier $chantier): Response
    {
        $form = $this->createForm(ChantierType::class, $chantier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('chantier_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('chantier/edit.html.twig', [
            'chantier' => $chantier,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'chantier_delete', methods: ['POST'])]
    public function delete(Request $request, Chantier $chantier): Response
    {
        if ($this->isCsrfTokenValid('delete'.$chantier->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($chantier);
            $entityManager->flush();
        }

        return $this->redirectToRoute('chantier_index', [], Response::HTTP_SEE_OTHER);
    }
}
