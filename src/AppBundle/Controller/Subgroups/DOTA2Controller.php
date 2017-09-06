<?php

namespace AppBundle\Controller\Subgroups;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DOTA2Controller extends Controller
{

    public function indexAction(Request $request)
    {
        return $this->render('subgroups/dota2.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'top_type' => 'communities',
            'sub_type' => 'dota2',
            'board' => $this->getBoard()
        ]);
    }

    private function getBoard() {
        return array(
            [
                'name' => 'Sam Belisle',
                'position' => 'President',
                'email' => 'dota2@egsrit.com',
                'img' => 'images/About/samb.jpg'
            ],
            [
                'name' => 'Joungho Seo',
                'position' => 'Vice President',
                'img' => 'images/Subgroup/DOTA2/Joungho.jpg'
            ],
            [
                'name' => 'Daniel Lim',
                'position' => 'Event Coordinator',
                'img' => 'images/Subgroup/DOTA2/Daniel.jpg'
            ],
            [
                'name' => 'Benjamin Morgan',
                'position' => 'In-House Coordinator',
                'img' => 'images/Subgroup/DOTA2/Benjamin.jpg'
            ]
        );
    }
}
