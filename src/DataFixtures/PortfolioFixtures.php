<?php

namespace App\DataFixtures;

use App\Entity\Portfolio;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PortfolioFixtures extends Fixture
{
    const PORTFOLIOS = [
        [
            'name' => 'Archives Bordeaux Métropole',
            'description' => 'Exercice sur la création d\'un site vitrine sur les Archives de bordeaux avec une deux autres collaborateurs',
            'technology' => 'HTML - CSS',
            'image' => 'https://cdn.discordapp.com/attachments/735836110927953980/735839089470996530/archivebdx.png',
            'lien' => 'https://github.com/Rolls47/Projet-1-SOLO-'
        ],
        [
            'name' => 'Voyager Malin !',
            'description' => 'Développement d\'une application web de type Quizz pour les enfants sur le thème des animaux des différents continents avec à la fin une vidéo live d\'un animal clé du continent sélectionné. Projet créé en 24h.',
            'technology' => 'Simple MVC - PHP - CSS',
            'image' => 'https://cdn.discordapp.com/attachments/735836110927953980/735837478484705360/voyagermalin.png',
            'lien' => 'https://github.com/Rolls47/hackathon-RYGO'
        ],
        [
            'name' => 'Crook',
            'description' => 'Création d\'un site de Cheat Sheet pour les éléves de la wild code school avec une équipe de 4 développeurs  avec comme fonctionnalitées Inscription - connexion - Création d\'un sheet - Barre de recherche - Favoris des sheets - Notation des sheets - Panel admin avec gestions des utilisateurs, sheet et catégorie.',
            'technology' => 'Simple MVC - PHP - JS - CSS',
            'image' => 'https://cdn.discordapp.com/attachments/735836110927953980/735837039026634782/crook.png',
            'lien' => 'https://www.crook.fr/'
        ],
        [
            'name' => 'DoctoFriend\'s',
            'description' => 'Développement d\'une application web pour un hackaton de 48h en partenariat avec Doctolib,  Site de mise en relation pour les personnes faisant des actes médicaux dans d\'autres pays Européen et proposition de voyage all-inclusive avion-hotel-bus pour un séjours médical à l\'étranger. Avec 3 autres développeurs.',
            'technology' => 'PHP - Symfony',
            'image' => 'https://media.discordapp.net/attachments/735836110927953980/735838002420383764/doctofriends.png?width=2156&height=1139',
            'lien' => 'https://github.com/Rolls47/Team-Boneyard'
        ],
    ];

    public function load(ObjectManager $manager)
    {
        foreach (self::PORTFOLIOS as $data) {
            $portfolio = new Portfolio();
            $portfolio->setName($data['name']);
            $portfolio->setDescription($data['description']);
            $portfolio->setTechnology($data['technology']);
            $portfolio->setImage($data['image']);
            $portfolio->setLien($data['lien']);
            $manager->persist($portfolio);
        }
        $manager->flush();
    }
}
