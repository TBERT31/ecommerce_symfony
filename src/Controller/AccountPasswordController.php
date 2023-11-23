<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ChangePasswordType;

class AccountPasswordController extends AbstractController
{
    #[Route('/compte/modifier-mot-de-passe', name: 'app_account_password')]
    public function index(): Response
    {   
        $user = $this->getUser();
        $form = $this->createForm(ChangePasswordType::class, $user);

        return $this->render('account/password.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
