<?php

namespace App\Controller;

use App\Repository\ContactRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AnnuaireController extends AbstractController
{
    #[Route('/', name: 'app_annuaire')]
    public function index(ContactRepository $contactRespository): Response
    {
        $contacts = $contactRespository->findAll();

        return $this->render('annuaire/index.html.twig', [
            'contacts' => $contacts,
        ]);
    }
}
