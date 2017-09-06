<?php

namespace AppBundle\Controller\Events;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class WeekliesController extends Controller
{
    public function indexAction(Request $request)
    {
        return $this->render('events/weeklies.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'top_type' => 'events',
            'sub_type' => 'weeklies',
        ]);
    }
}
