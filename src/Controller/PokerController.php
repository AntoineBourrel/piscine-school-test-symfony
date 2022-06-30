<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class PokerController extends AbstractController
{
    /**
     * @Route ("/poker", name="poker")
     */

    public function poker(Request $request)
    {
        $age = (int) $request->query->get('age');
        $name = $request->query->get('name');

        if($request->query->has('name')){
            $message = "Bienvenue " . $name . " sur le site de Poker ";
        } else {
            $message = "Bienvenue sur le site de Poker ";
        }
        if($age >= 18){
            // Si age >= 18
            return new Response($message);
        } else {
            // Si age < 18 redirection vers 'digimon'
            return $this->redirectToRoute("digimon");
        }
    }

    // Page pour moins de 18 ans
    /**
     * @route("/digimon", name="digimon")
     */
    public function digimon(){
        return new Response('Retourne jouez avec tes Digimon !');
    }
}