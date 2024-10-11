<?php

namespace App\Controller;

use App\PythagoreUtility;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PythagoreController extends AbstractController
{
    private $pythagoreUtility;

    public function __construct(PythagoreUtility $pythagoreUtility)
    {
        $this->pythagoreUtility = $pythagoreUtility;
    }

    public function index(): Response
    {
        $html = $this->pythagoreUtility->display();
        return $this->render('displayPythagore.html.twig', [
            'html' => $html,
            'title' => 'Symfony & table de pythagore',
            'nameStudent' => 'DO Quoc Tuan',
        ]);
    }
}