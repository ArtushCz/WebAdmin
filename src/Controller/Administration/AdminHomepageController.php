<?php

namespace App\Controller\Administration;

use App\Entity\MenuItem;
use App\Repository\MenuItemRepository;
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

        $menuItemList = $this->getDoctrine()->getManager()->getRepository(MenuItem::class)->findByMenuCollectionId(1);


        return $this->render('administration/index.html.twig', [
            'menuItems' => $menuItemList,
            'controller_name' => 'AdminHomepageController'
        ]);
    }
}
