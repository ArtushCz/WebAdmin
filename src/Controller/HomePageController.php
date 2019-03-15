<?php
/**
 * Created by PhpStorm.
 * User: ext90164
 * Date: 15.03.2019
 * Time: 15:04
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class HomePageController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('Kokot');
    }
}