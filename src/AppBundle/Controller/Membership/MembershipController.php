<?php


namespace AppBundle\Controller\Membership;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MembershipController extends Controller
{
    public function indexAction(Request $request)
    {
        return $this->render('about/membership.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'top_type' => 'membership',
            'sub_type' => '',
        ]);
    }
}
