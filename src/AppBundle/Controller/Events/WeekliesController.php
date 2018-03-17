<?php

namespace AppBundle\Controller\Events;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Controller for the weeklies page
 * @author Christopher Bitler <webmaster@egsrit.com>
 */
class WeekliesController extends Controller
{

    /**
     * Return the Symfony response for the page
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        return $this->render('events/weeklies.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'top_type' => 'events',
            'sub_type' => 'weeklies',
            'pictures_upcoming' => $this->picturesUpcoming(),
            'pictures_past' => $this->picturesPast()
        ]);
    }

    private function picturesUpcoming()
    {
        return array(
            ['img' => 'Weekly-Left-4-Dead-2.png'],
            ['img' => 'Weekly-Snipperclips-PNG.png']
        );
    }

    private function picturesPast()
    {
        return array(
            ['img' => 'Weekly-Screencheat.png'],
            ['img' => 'Weekly-DBFZ-PNG.png'],
            ['img' => 'Weekly-Dating-Sim-PNG.png'],
            ['img' => 'Weekly-IDARB-PNG.png'],
        );
    }
}
