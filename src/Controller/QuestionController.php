<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{

    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('What a bewitching controller we have conjured!');
    }

    //curly brackets fungieren als wild card
    /**
     * @Route("/questions/{slug}")
     */
    public function show($slug)
    {
        $answers = [
            'Make sure your cat is sitting purrrfectly still XD',
            'Hoestly, I like furry shoes better than my cat',
            'Maybe... try saying the spell backwards?',
        ];

        return $this->render('question/show.html.twig', [
            //ucwords versieht alle Wörter mit Uppper Case
            //str_replace(search, replace, subject)
            'question'=> ucwords(str_replace('-', ' ', $slug)),
            'answers' => $answers,

        ]);
    }
}
