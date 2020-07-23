<?php

namespace App\Controller;

use App\Repository\JobRepository;
use App\Repository\SkillRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContentController extends AbstractController
{
    /**
     * @Route("/content", name="content")
     * @param SkillRepository $skillRepository
     * @param JobRepository $jobRepository
     * @return Response
     */
    public function index(SkillRepository $skillRepository, JobRepository $jobRepository): Response
    {
        return $this->render('index.html.twig', [
            'skills' => $skillRepository->findAll(),
            'jobs'   => $jobRepository->findBy([], ['start_date' => 'DESC'])
        ]);
    }
}


