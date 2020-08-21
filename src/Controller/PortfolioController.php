<?php

namespace App\Controller;

use App\Entity\Portfolio;
use App\Form\PortfolioType;
use App\Repository\PortfolioRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/portfolio")
 */
class PortfolioController extends AbstractController
{
    /**
     * @Route("/", name="portfolio_index", methods={"GET"})
     * @param PortfolioRepository $portfolioRepository
     * @return Response
     */
    public function index(PortfolioRepository $portfolioRepository): Response
    {
        return $this->render('portfolio/index.html.twig', [
            'portfolios' => $portfolioRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="portfolio_new", methods={"GET","POST"})
     * @param Request $request
     * @return Response
     */
    public function new(Request $request): Response
    {
        $portfolio = new Portfolio();
        $form = $this->createForm(PortfolioType::class, $portfolio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($portfolio);
            $entityManager->flush();

            return $this->redirectToRoute('portfolio_index');
        }

        return $this->render('portfolio/new.html.twig', [
            'portfolio' => $portfolio,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="portfolio_show", methods={"GET"})
     * @param Portfolio $portfolio
     * @return Response
     */
    public function show(Portfolio $portfolio): Response
    {
        return $this->render('portfolio/show.html.twig', [
            'portfolio' => $portfolio,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="portfolio_edit", methods={"GET","POST"})
     * @param Request $request
     * @param Portfolio $portfolio
     * @return Response
     */
    public function edit(Request $request, Portfolio $portfolio): Response
    {
        $form = $this->createForm(PortfolioType::class, $portfolio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('portfolio_index');
        }

        return $this->render('portfolio/edit.html.twig', [
            'portfolio' => $portfolio,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="portfolio_delete", methods={"DELETE"})
     * @param Request $request
     * @param Portfolio $portfolio
     * @return Response
     */
    public function delete(Request $request, Portfolio $portfolio): Response
    {
        if ($this->isCsrfTokenValid('delete'.$portfolio->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($portfolio);
            $entityManager->flush();
        }

        return $this->redirectToRoute('portfolio_index');
    }
}
