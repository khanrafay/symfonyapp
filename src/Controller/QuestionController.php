<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class QuestionController
{

    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('Hello, this is the homepage');
    }


    /**
     * @Route("/questions/{slug}")
     */
    public function show($slug)
    {
        return new Response(sprintf(
            'Future page to show question! slug: "%s"',
            ucwords(str_replace('-', ' ', $slug))
        ));
    }
}
