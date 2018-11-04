<?php

namespace AppBundle\Controller\Eboard;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Controller for the eboard page
 * @author Christopher Bitler <webmaster@egsrit.com>
 */
class EBoardController extends Controller
{

    /**
     * Return the Symfony response for the page
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        return $this->render('about/eboard.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'top_type' => 'about',
            'sub_type' => '',
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
                'name' => 'Evan Misiorski',
                'position' => 'President',
                'email' => 'president@egsrit.com',
                'username' => 'EMatter',
                'img' => 'images/About/evan.jpg'
            ],
            [
                'name' => 'Sean Mack',
                'position' => 'Vice President',
                'email' => 'vicepresident@egsrit.com',
                'username' => 'LinkSean',
                'img' => 'images/About/sean.jpg'
            ],
            [
                'name' => 'Lauren Paige',
                'position' => 'Treasurer',
                'email' => 'treasurer@egsrit.com',
                'username' => 'Paige',
                'img' => 'images/About/laurenP.jpg'
            ],
            [
                'name' => '???',
                'position' => 'LAN Officer',
                'email' => 'lan@egsrit.com',
                'img' => 'images/About/PH.png'
            ],
            [
                'name' => 'Kengar Dongatron',
                'position' => 'Console Officer',
                'email' => 'console@egsrit.com',
                'username' => 'Kengar',
                'img' => 'images/About/kengar.jpg'
            ],
            [
                'name' => 'Lauren Suter',
                'position' => 'Marketing Director',
                'email' => 'marketing@egsrit.com',
                'username' => 'Freyja',
                'img' => 'images/About/lauren.jpg'
            ],
            [
                'name' => 'Sam James',
                'position' => 'Secretary',
                'email' => 'secretary@egsrit.com',
                'username' => 'Sam(Also Sam)',
                'img' => 'images/About/PH.png'
            ],
            [
                'name' => 'Stoney Reed',
                'position' => 'Webmaster',
                'email' => 'webmaster@egsrit.com',
                'username' => 'Stoney',
                'img' => 'images/About/PH.png'
            ],
            [
                'name' => 'Peter Killian',
                'position' => 'Pokemon President',
                'email' => 'pokemon@egsrit.com',
                'img' => 'images/About/peterkillian.jpg'
            ],
            [
                'name' => '???',
                'position' => 'DOTA2 President',
                'email' => 'dota2@egsrit.com',
                'img' => 'images/About/PH.png'
            ],
            [
                'name' => '???',
                'position' => 'Minecraft President',
                'email' => 'ritcraft@egsrit.com',
                'img' => 'images/About/PH.png'
            ],
            [
                'name' => 'Nathan Terrell',
                'position' => 'Speedrunning President',
                'img' => 'images/Subgroup/Speedrunning/nathan.jpg'
            ],
        );
    }
}
