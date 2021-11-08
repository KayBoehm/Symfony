<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController{

    /**
     * @Route("/")
     */
    public function homepage(){
        return new Response('What a bewitching controller we have conjured!');
    }

    //curly brackets fungieren als wild card
    /**
     * @Route("/questions/{slug}")
     */
    public function show($slug){
        return new Response(sprintf(
            'Future page to show a question "%s" .',
       ucwords(str_replace('-',' ', $slug))

    ));
        
    }
}