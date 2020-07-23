<?php

namespace App\Controller;

use App\Repository\FormationRepository;
use App\Repository\JobRepository;
use App\Repository\PortfolioRepository;
use App\Repository\SkillRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ContentController
 * @package App\Controller
 * @Route("/")
 */
class ContentController extends AbstractController
{
    /**
     * @Route("/", name="content")
     * @param SkillRepository $skillRepository
     * @param JobRepository $jobRepository
     * @param FormationRepository $formationRepository
     * @param PortfolioRepository $portfolioRepository
     * @return Response
     */
    public function index(SkillRepository $skillRepository, JobRepository $jobRepository, FormationRepository $formationRepository, PortfolioRepository $portfolioRepository): Response
    {
        return $this->render('index.html.twig', [
            'skills' => $skillRepository->findAll(),
            'jobs'   => $jobRepository->findBy([], ['start_date' => 'DESC']),
            'formations'   => $formationRepository->findBy([], ['year_of_start' => 'DESC']),
            'portfolios'   => $portfolioRepository->findBy([], ['id' => 'DESC']),
        ]);
    }
}


