<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends Controller
{
    
    public function login(Request $request, AuthenticationUtils $authUtils)
    {
	    // get the login error if there is one
	    $error = $authUtils->getLastAuthenticationError();

	    // last username entered by the user
	    $lastUsername = $authUtils->getLastUsername();

	    return $this->render('security/login.html.twig', [
			'last_username' => $lastUsername,
			'title' => 'Login',
			'error' => $error,
	    ]);
    }

}