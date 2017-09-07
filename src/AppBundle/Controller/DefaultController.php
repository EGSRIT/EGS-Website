<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Controller for the index page of the website
 * @author Christopher Bitler <webmaster@egsrit.com>
 */
class DefaultController extends Controller
{

    /**
     * Return the Symfony response for the page
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'top_type' => 'home',
            'sub_type' => ''
        ]);
    }
}
