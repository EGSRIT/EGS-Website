<?php

namespace AppBundle\Controller\Subgroups;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Controller for the Minecraft Community
 * @author Christopher Bitler <webmaster@egsrit.com>
 */
class SpeedrunningController extends Controller
{

    /**
     * Return the Symfony response for the page
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        return $this->render('subgroups/speedrunning.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'top_type' => 'communities',
            'sub_type' => 'speedrunning',
            'board' => $this->getBoard()
        ]);
    }

    /**
     * Get the e-board to show on the page
     * Each member of the eboard should be marked with a name, position, email, username, and an image
     * @return array The list of people on the eboard
     */
    private function getBoard() {
        return array(
            [
                'name' => 'Nathan Terrell',
                'position' => 'RIT Coordinator',
                'username' => 'En Passant',
                'img' => 'images/Subgroup/Speedrunning/nathan.jpg'
            ],
            [
                'name' => 'Alexis Ross',
                'position' => 'University of Rochester Coordinator',
                'username' => 'protomagicalgirl',
                'img' => 'images/Subgroup/Speedrunning/alexis.jpg'
            ],
            [
                'name' => 'Ben Giordano',
                'position' => 'Monroe CC and Greater Rochester Coordinator',
                'username' => 'TheGuesst',
                'img' => 'images/Subgroup/Speedrunning/ben.jpg'
            ],
            [
                'name' => 'Scott Csefai',
                'position' => 'Stream and Marathon Manager',
                'username' => 'swc19',
                'img' => 'images/Subgroup/Speedrunning/scott.jpg'
            ],
        );
    }
}
