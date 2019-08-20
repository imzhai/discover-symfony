<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WelcomeController extends AbstractController
{
    // On doit pouvoir :
    //Aller sur /hello/pierre => Hello Pierre
    //Aller sur /hello/juliette => Hello Juliette
    // Le prénom dans l'URL doit être dynamique et le contrôleur doit se charger d'ajouter la première lettre du prénom en majuscule et ensuite il doit passer la variable à la vue twig



    
    /**
     * @Route("/holla/{nom}", name="welcome_holla", requirements={"nom" = "[a-z]{3,8}" })
     */
    public function holla($nom)
    {
        
        dump($nom);
        $nom = ucfirst($nom);

        //return new Response('<body>Salut Boloss et '. $name . '</body>');
        // On fait un rendu de la vue twig qui est située dans le dossier templates/
        //Le controler passe la variable name à la vie grâce au second paramètre de render qui est un tableau
        return $this->render('welcome/hello.html.twig', [
            'nom' => $nom,
        ]);
    }


    /**
     * @Route("/holla", name="welcome_world")
     */
    public function world()
    {
        // $request->get('a') équivaut à $_GET['a']
      

        //return new Response('<body>Salut Boloss et '. $name . '</body>');
        // On fait un rendu de la vue twig qui est située dans le dossier templates/
        //Le controler passe la variable name à la vie grâce au second paramètre de render qui est un tableau
        return new Response('<body> <h1>Bonjour tout le monde !</h1></body>');
    }


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

    
