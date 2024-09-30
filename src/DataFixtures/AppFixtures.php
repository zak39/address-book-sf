<?php

namespace App\DataFixtures;

use App\Entity\Contact;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $contacts = [
            $this->createContact('Dupont', 'Jean', '0123456789'),
            $this->createContact('Durant', 'Marie', '0123456789'),
            $this->createContact('Bouhadana', 'Mohamed', '0123456789'),
            $this->createContact('Toto', 'Titi', '0123456789'),
        ];

        foreach ($contacts as $contact) {
            $manager->persist($contact);
        }

        $manager->flush();
    }

    private function createContact(string $nom, string $prenom, string $telephone): Contact {
        $contact = new Contact();
        $contact
            ->setNom($nom)
            ->setPrenom($prenom)
            ->setTelephone($telephone)
        ;

        return $contact;
    }
}
