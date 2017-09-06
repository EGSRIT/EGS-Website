<?php

namespace AppBundle\Controller\Subgroups;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BlizzardController extends Controller
{

    public function indexAction(Request $request)
    {
        return $this->render('subgroups/blizzard.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'top_type' => 'communities',
            'sub_type' => 'blizzard',
            'board' => $this->getBoard()
        ]);
    }

    private function getBoard() {
        return array(
            [
                'name' => 'Jacon Wolf',
                'position' => 'E-Board Member',
                'username' => 'yodimaru',
                'img' => 'images/Subgroup/Blizzard/Jacob.jpg'
            ],
            [
                'name' => 'none',
                'position' => '',
                'username' => '',
                'img' => ''
            ]
        );
    }
}
