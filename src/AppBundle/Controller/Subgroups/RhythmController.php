<?php

namespace AppBundle\Controller\Subgroups;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class RhythmController extends Controller
{

    public function indexAction(Request $request)
    {
        return $this->render('subgroups/rhythm.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'top_type' => 'communities',
            'sub_type' => 'rhythm',
            'board' => $this->getBoard()
        ]);
    }

    private function getBoard() {
        return array(
            [
                'name' => 'Alex Pasieka',
                'position' => 'President',
                'email' => 'alexspasieka@gmail.com',
                'img' => 'images/Subgroup/Rhythm/alex.jpg'
            ],
            [
                'name' => 'none',
                'position' => '',
                'email' => '',
                'img' => ''
            ]
        );
    }
}
