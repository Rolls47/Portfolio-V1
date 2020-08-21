<?php

namespace App\DataFixtures;

use App\Entity\Job;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class JobFixtures extends Fixture
{
    const JOBS = [
        [
            'poste' => 'Responsable de secteur junior',
            'type_job' => 'Alternance',
            'company' => 'Bonduelle',
            'city' => 'Sud-Ouest',
            'description' => 'Responsable du développement du linéaire de 80 magasins sur 6 départements. Mise en place de tournées commerciales, référencement des produits appertisés et surgelés..',
            'logo' => 'https://www.brandslex.de/img/logos/xl/b/logo-bonduelle-01.png',
            'start_date' => '2015-08-01',
            'end_date' => '2016-09-09'
        ],
        [
            'poste' => 'Conseiller Commercial',
            'type_job' => 'CDI',
            'company' => 'SFR',
            'city' => 'Marmande',
            'description' => 'Accueil clients, découvertes et accompagnement des besoins client. Vente des produits et services.',
            'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/09/Logo_SFR_2014.svg/1200px-Logo_SFR_2014.svg.png',
            'start_date' => '2016-09-12',
            'end_date' => '2017-06-01'
        ],
        [
            'poste' => 'Conseiller Commercial',
            'type_job' => 'CDD',
            'company' => 'Orange',
            'city' => 'Langon',
            'description' => 'Accueil clients, découvertes et accompagnement des besoins client, Vente des produits et services.',
            'logo' => 'https://blogwifi.fr/wp-content/uploads/2010/12/orangelogo.jpg',
            'start_date' => '2017-06-01',
            'end_date' => '2020-01-01'
        ],
    ];

    public function load(ObjectManager $manager)
    {
        foreach (self::JOBS as $data) {
            $startWork = new DateTime($data['start_date']);
            $endWork = new DateTime($data['end_date']);
            $job = new Job();
            $job->setPoste($data['poste']);
            $job->setTypeJob($data['type_job']);
            $job->setCompany($data['company']);
            $job->setCity($data['city']);
            $job->setDescription($data['description']);
            $job->setLogo($data['logo']);
            $job->setStartDate($startWork);
            $job->setEndDate($endWork);
            $manager->persist($job);
        }
        $manager->flush();
    }
}
