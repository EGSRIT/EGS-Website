<?php

namespace AppBundle\Controller\Subgroups;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Controller for the DOTA2 Community page
 * @author Christopher Bitler <webmaster@egsrit.com>
 */
class DOTA2Controller extends Controller
{

    /**
     * Return the Symfony response for the page
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        return $this->render('subgroups/dota2.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'top_type' => 'communities',
            'sub_type' => 'dota2',
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
