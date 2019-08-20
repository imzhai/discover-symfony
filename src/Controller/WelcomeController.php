<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WelcomeController extends AbstractController
{
    /**
     * @Route("/hello", name="hello")
     */
    public function hello(Request $request) // Le typage Request active le component Request
    {
        $name = 'Matthieu';

        // $request->get('a') équivaut à $_GET['a']
        dump($request);

        //return new Response('<body>Salut Boloss et '. $name . '</body>');
        // On fait un rendu de la vue twig qui est située dans le dossier templates/
        //Le controler passe la variable name à la vie grâce au second paramètre de render qui est un tableau
        return $this->render('welcome/hello.html.twig', [
            'name' => $name,
        ]);
    }
}

    
