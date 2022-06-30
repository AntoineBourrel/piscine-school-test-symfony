<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController
{
    /**
     * @Route ("/", name="home")
     *
     * Je créé une route, en utilisant des commentaires PHP et "@Route" pour spécifier l'URL de la page que je
     * veux créer. La Route est située au-dessus de la méthode à appeler.
     */


    public function home()
    {
        //Je Renvoie une réponse HTTP grâce à l'objet Response du composant http foundation de symfony
        //Ca affichera le texte "test  accueil"
        return new Response('test accueil');
    }

    /**
     * @Route ("/contact", name="contact")
     */

    public function contact()
    {
        return new Response('contact');
    }
}