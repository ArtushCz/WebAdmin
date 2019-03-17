<?php
/**
 * Created by PhpStorm.
 * User: ext90164
 * Date: 15.03.2019
 * Time: 15:04
 */

namespace App\Controller;


use App\Service\GlobalParams;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class HomePageController
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
        return $this->render('administration/base.html.twig', [
            'message' => 'Welcome to your new controller!'
        ]);
    }

}