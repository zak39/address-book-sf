<?php

namespace App\DataFixtures;

use App\Entity\Contact;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');

        for ($i = 0; $i < 50; $i++) {
            $contact = $this->createContact(
                $faker->lastName(),
                $faker->firstName(),
                $faker->phoneNumber(),
                $faker->address(),
                $faker->imageUrl(65, 65, 'profile', true)
            );

            $manager->persist($contact);
        }

        $manager->flush();
    }

    private function createContact(string $nom, string $prenom, string $telephone, string $adresse, string $url): Contact {
        $contact = new Contact();
        $contact
            ->setNom($nom)
            ->setPrenom($prenom)
            ->setTelephone($telephone)
            ->setAdresse($adresse)
            ->setImageProfile($url)
        ;

        return $contact;
    }
}
