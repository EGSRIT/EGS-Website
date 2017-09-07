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
                'name' => 'Makaya Hicks',
                'position' => 'President',
                'email' => 'president@egsrit.com',
                'username' => '베이컨',
                'img' => 'images/About/makaya.jpg'
            ],
            [
                'name' => 'Elizabeth Lucas',
                'position' => 'President',
                'email' => 'president@egsrit.com',
                'username' => 'LizardLucas',
                'img' => 'images/About/liz.jpg'
            ],
            [
                'name' => 'Evan Misiorski',
                'position' => 'Vice President',
                'email' => 'vicepresident@egsrit.com',
                'username' => 'EMatter',
                'img' => 'images/About/evan.jpg'
            ],
            [
                'name' => 'Sean Mack',
                'position' => 'Console Officer',
                'email' => 'console@egsrit.com',
                'username' => 'LinkSean',
                'img' => 'images/About/sean.jpg'
            ],
            [
                'name' => 'Dominic Rigney',
                'position' => 'Treasurer',
                'email' => 'treasurer@egsrit.com',
                'username' => 'Magicking610',
                'img' => 'images/About/dom.jpg'
            ],
            [
                'name' => 'Humza Syed',
                'position' => 'Secretary',
                'email' => 'secretary@egsrit.com',
                'username' => 'flarelink',
                'img' => 'images/About/humza.jpg'
            ],
            [
                'name' => 'Sean Newman',
                'position' => 'LAN Officer',
                'email' => 'lan@egsrit.com',
                'username' => 'dude2818',
                'img' => 'images/About/SeanN.png'
            ],
            [
                'name' => 'Chris Bitler',
                'position' => 'Webmaster',
                'email' => 'webmaster@egsrit.com',
                'username' => 'VoidWhisperer',
                'img' => 'images/About/Webmaster.jpg'
            ],
            [
                'name' => 'Peter Killian',
                'position' => 'Pokemon President',
                'email' => 'pokemon@egsrit.com',
                'img' => 'images/About/peterkillian.jpg'
            ],
            [
                'name' => 'Sam Belisle',
                'position' => 'DOTA2 President',
                'email' => 'dota2@egsrit.com',
                'img' => 'images/About/samb.jpg'
            ],
            [
                'name' => 'Justin Flory',
                'position' => 'Minecraft President',
                'email' => 'ritcraft@egsrit.com',
                'img' => 'images/About/justin.jpg'
            ],
            [
                'name' => 'Alex Pasieka',
                'position' => 'Rhythm gaming President',
                'email' => 'asp1610@rit.edu',
                'username' => 'Afroxide',
                'img' => 'images/About/alex.jpg'
            ]
        );
    }
}
