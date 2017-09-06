<?php

namespace AppBundle\Controller\Subgroups;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PokemonController extends Controller
{

    public function indexAction(Request $request)
    {
        return $this->render('subgroups/pokemon.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'top_type' => 'communities',
            'sub_type' => 'pokemon',
            'board' => $this->getBoard()
        ]);
    }

    private function getBoard() {
        return array(
            [
                'name' => 'Peter Killian',
                'position' => 'President',
                'email' => 'pokemon@egsrit.com',
                'username' => 'Kree',
                'img' => 'images/About/PH.png'
            ],
            [
                'name' => 'Jeffrey Karger',
                'position' => 'Vice President',
                'img' => 'images/About/PH.png'
            ],
            [
                'name' => 'Matthew Colosi',
                'position' => 'E-Sports Coordinator',
                'img' => 'images/About/PH.png'
            ]
        );
    }
}
