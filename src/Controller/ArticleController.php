<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class ArticleController extends AbstractController
{
    private $article = [
        1 => [
            'title' => 'La Canicule, il fait chaud',
            'contenu' => 'Je transpire'
        ],
        2 => [
            'title' => 'Fin des moteurs thermiques en 2035',
            'contenu' => 'BROUM'
        ],
        3 => [
            'title' => "L'alcool c'est pas cool",
            'contenu' => "Pourquoi y'a cool dans alcool ?"
        ]
    ];
    /**
     * @Route ("/article", name="article_show")
     */

    public function showArticle(Request $request){


        $id = $request->query->get('id');

        $title = $this->article[$id]['title'];
        $contenu = $this->$article[$id]['contenu'];

        return new Response('<h2>'. $title . '</h2>' . '<br>' . $contenu);
    }


    // Création de la route pour utiliser la méthode
    /**
     * @Route("/article/{id}", name="article_show_wildcard")
     */

    // Méthode pour montrer un article tiré de la liste donné à partir d'une WildCard 'id' dans l'URL
    public function showArticleWildCard($id){
        // Liste d'article
        $article = [
            1 => [
                'title' => 'La Canicule, il fait chaud',
                'contenu' => 'Je transpire'
            ],
            2 => [
                'title' => 'Fin des moteurs thermiques en 2035',
                'contenu' => 'BROUM'
            ],
            3 => [
                'title' => "L'alcool c'est pas cool",
                'contenu' => "Pourquoi y'a cool dans alcool ?"
            ]
        ];
        // valeur récupérer et servant à simplifier le code et réponse
        $title = $article[$id]['title'];
        $contenu = $article[$id]['contenu'];

        return new Response('<h2>'. $title . '</h2>' . '<br>' . $contenu);
    }


    /**
     * @Route ("/liste", name="liste")
     */

    public function liste(){
        return new Response('<a href="../public/article/1">' . $this->article[1]['title'] . '</a><br><a href="../public/article/2">' . $this->article[2]['title'] . '</a><br><a href="../public/article/3">' . $this->article[3]['title'] . '</a><br>');
    }
}