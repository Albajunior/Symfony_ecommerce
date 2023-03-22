<?php

namespace App\DataFixtures;

use App\Entity\Categories;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
   
    public function load(ObjectManager $manager): void
    {
        $parent = new Categories();
        $parent ->setName('Telephone');
        $parent ->setSlug('telephone');
        $manager->persist($parent);

        $category = new Categories();
        $category ->setName('Iphone');
        $category ->setSlug('iphone');
        $category ->setParent($parent);
        $manager->persist($category);

        $category = new Categories();
        $category ->setName('TEcno');
        $category ->setSlug('tecno');
        $category ->setParent($parent);
        $manager->persist($category);

        $manager->flush();
    }

    
}
