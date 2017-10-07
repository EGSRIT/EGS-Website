<?php


namespace AppBundle\Controller\GameLibrary;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Controller for the membership page
 * @author Christopher Bitler <webmaster@egsrit.com>
 */
class GameLibraryController extends Controller
{

    /**
     * Return the Symfony response for the page
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        return $this->render('about/gamelibrary.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'top_type' => 'membership',
            'sub_type' => '',
        ]);
    }
}
