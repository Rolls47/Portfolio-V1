<?php

namespace App\DataFixtures;

use App\Entity\Skill;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class SkillFixtures extends Fixture
{
    const SKILLS = [
        [
            'name' => 'PHP',
            'image' => 'https://upload-icon.s3.us-east-2.amazonaws.com/uploads/icons/png/8717325371579517868-512.png'
        ],
        [
            'name' => 'Symfony',
            'image' => 'https://upload-icon.s3.us-east-2.amazonaws.com/uploads/icons/png/840412811551952124-512.png'
        ],
        [
            'name' => 'HTML',
            'image' => 'https://upload-icon.s3.us-east-2.amazonaws.com/uploads/icons/png/14072054271548141949-512.png'
        ],
        [
            'name' => 'CSS',
            'image' => 'https://upload-icon.s3.us-east-2.amazonaws.com/uploads/icons/png/21337745421536211768-512.png'
        ],
        [
            'name' => 'SASS',
            'image' => 'https://upload-icon.s3.us-east-2.amazonaws.com/uploads/icons/png/6655067911551942823-512.png'
        ],
        [
            'name' => 'Javascript',
            'image' => 'https://upload-icon.s3.us-east-2.amazonaws.com/uploads/icons/png/13691885491579517854-512.png'
        ],
        [
            'name' => 'Boostrap 4',
            'image' => 'https://aformation.fr/uploads/thumbnails/course_thumbnails/3.png'
        ],
    ];

    public function load(ObjectManager $manager)
    {
        foreach (self::SKILLS as $data) {
            $skill = new Skill();
            $skill->setName($data['name']);
            $skill->setImage($data['image']);
            $manager->persist($skill);
        }
        $manager->flush();
    }
}
