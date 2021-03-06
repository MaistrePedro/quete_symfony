<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class WildController
 * @package App\Controller
 * @Route("/wild", name="wild_")
 */
class WildController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index() :Response
    {
        return $this->render('wild/index.html.twig', [
            'website' => 'Wild Séries',
        ]);
    }

    /**
     * @param $slug
     * @Route("/show/{slug}", name="show", requirements={"slug"="[a-z-]*"})
     */
    public function show($slug) {
        $title = ucwords(str_replace('-', ' ', $slug), ' ');
        return $this->render('wild/show.html.twig', [
            'slug' => $title,
        ]);
    }
}