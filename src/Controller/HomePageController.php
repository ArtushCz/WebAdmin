<?php
/**
 * Created by PhpStorm.
 * User: ext90164
 * Date: 15.03.2019
 * Time: 15:04
 */

namespace App\Controller;


use App\Service\GlobalParams;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomePageController extends AbstractController
{
    private $srv;

    /**
     * HomepageController constructor. -- konstruktor
     * @param GlobalParams $myService -- Vlastni serice
     */
    public function __construct(GlobalParams $myService)
    {
        $this->srv = $myService;
    }

    /**
     * @Route("/")
     */
    public function homepage()
    {
        return $this->render('page/index.html.twig', [
            'message' => 'Welcome to your new controller!'
        ]);
    }

}