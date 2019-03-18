<?php

namespace App\Controller\Administration;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminHomepageController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index()
    {
        $this->addFlash("success", "This is a success message");
        $this->addFlash("warning", "This is a warning message");
        $this->addFlash("error", "This is an error message");
        $this->addFlash("info", "This is an notice message");

        return $this->render('administration/index.html.twig', [
            'controller_name' => 'AdminHomepageController'
        ]);
    }
}
