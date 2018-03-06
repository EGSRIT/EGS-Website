<?php

namespace AppBundle\Controller\Subgroups;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Controller for the Minecraft Community
 * @author Christopher Bitler <webmaster@egsrit.com>
 */
class MinecraftController extends Controller
{

    /**
     * Return the Symfony response for the page
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        return $this->render('subgroups/minecraft.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'top_type' => 'communities',
            'sub_type' => 'minecraft',
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
                'name' => 'Justin Flory',
                'position' => 'Admin',
                'username' => 'jflory7',
                'email' => 'ritcraft@egsrit.com',
                'img' => 'images/About/Minecraft.jpg'
            ]
        );
    }
}
