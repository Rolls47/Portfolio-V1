<?php

namespace App\DataFixtures;

use App\Entity\Formation;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class FormationFixtures extends Fixture
{
    const FORMATIONS = [
        [
            'school' => 'Lycée Val de Garonne',
            'degree' => 'BTS Technico-Commercial',
            'field_of_study' => 'Merchandisage et activités de marketing',
            'year_of_start' => '2013',
            'year_of_end' => '2015',
            'logo' => 'https://upload.wikimedia.org/wikipedia/fr/1/18/Valdegaronne-logo.png',
        ],
        [
            'school' => 'ICFA : Bordeaux Lac',
            'degree' => 'Titre de Responsable de Développement Commercial',
            'field_of_study' => 'Commerce',
            'year_of_start' => '2015',
            'year_of_end' => '2016',
            'logo' => 'https://www.pagesjaunes.fr/media/cviv/09589742_N_0005_photo.jpeg',
        ],
        [
            'school' => 'Wild Code School',
            'degree' => 'Développeur Web/Mobile PHP Symfony',
            'field_of_study' => 'Programmation informatique',
            'year_of_start' => '2020',
            'year_of_end' => '2020',
            'logo' => 'https://medinsoft.com/wp-content/uploads/2020/01/LOGO_WILDCODESCHOOL1000-1024x1024.png',
        ],
    ];

    public function load(ObjectManager $manager)
    {
        foreach (self::FORMATIONS as $data) {
            $formation = new Formation();
            $formation->setSchool($data['school']);
            $formation->setDegree($data['degree']);
            $formation->setFieldOfStudy($data['field_of_study']);
            $formation->setYearOfStart($data['year_of_start']);
            $formation->setYearOfEnd($data['year_of_end']);
            $formation->setLogo($data['logo']);
            $manager->persist($formation);
        }
        $manager->flush();
    }
}
