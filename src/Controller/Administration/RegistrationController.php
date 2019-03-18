<?php

namespace App\Controller\Administration;

use App\Entity\User;
use App\Form\RegistrationFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegistrationController extends AbstractController
{
    /**
     * @Route("/register", name="app_register")
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $user->setUPassword(
                $passwordEncoder->encodePassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );

            $entityManager = $this->getDoctrine()->getManager();

            try{
                $entityManager->persist($user);
                $entityManager->flush();
                $this->addFlash("success", "Registrace uživatele '".$user->getULogin()."' se povedla.");
            }catch (Exception $e){
                $this->addFlash("error", "Registrace uživatele '".$user->getULogin()."' se nezdařila. Chyba: ".$e);
            }



            return $this->redirectToRoute('admin');
        }

        return $this->render('administration/authentificator/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
}
