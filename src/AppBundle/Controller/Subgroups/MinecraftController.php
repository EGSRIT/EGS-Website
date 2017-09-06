<?php

namespace AppBundle\Controller\Subgroups;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MinecraftController extends Controller
{

    public function indexAction(Request $request)
    {
        return $this->render('subgroups/minecraft.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'top_type' => 'communities',
            'sub_type' => 'minecraft',
            'board' => $this->getBoard()
        ]);
    }

    private function getBoard() {
        return array(
            [
                'name' => 'Justin Flory',
                'position' => 'Admin',
                'username' => 'jflory7',
                'email' => 'ritcraft@egsrit.com',
                'img' => 'images/About/Minecraft.jpg'
            ],
            [
                'name' => 'Jeremy Jackson',
                'position' => 'Moderator',
                'username' => 'jay94j',
                'img' => 'images/Subgroup/Minecraft/Jeremy.jpg'
            ],
            [
                'name' => 'Michael Nixt',
                'position' => 'Moderator',
                'username' => 'bowlnmike',
                'img' => 'images/Subgroup/Minecraft/Michael.jpg'
            ],
            [
                'name' => 'Ari DeGolyer',
                'position' => 'Moderator',
                'username' => 'Goldyeer',
                'img' => 'images/Subgroup/Minecraft/Ari.jpg'
            ]
        );
    }
}
