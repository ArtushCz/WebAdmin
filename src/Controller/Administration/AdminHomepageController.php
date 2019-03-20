<?php

namespace App\Controller\Administration;

use App\Service\GlobalParams;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class AdminHomepageController extends AbstractController
{

    /**
     * @Route("/admin", name="admin")
     */
    public function index()
    {
        $this->addFlash('error','test');
        return $this->render('administration/index.html.twig', [
            'controller_name' => 'AdminHomepageController'
        ]);
    }
}
