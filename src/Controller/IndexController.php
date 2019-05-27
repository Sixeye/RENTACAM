<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/index", name="index")
     */
    public function index()
    {
        return $this->render('index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/cameraalouer", name="cameraalouer")
     */
    public function cameraalouer()
    {
        return $this->render('camera_a_louer.html.twig', [
            'controller_name' => 'CameraALouerController',
        ]);
    }

    /**
     * @Route("/lesloueurs", name="lesloueurs")
     */
    public function lesloueurs()
    {
        return $this->render('les_loueurs.html.twig', [
            'controller_name' => 'LesLoueursController',
        ]);
    }

    /**
     * @Route("/mettreunecameralocation", name="mettreunecameralocation")
     */
    public function mettreunecameralocation()
    {
        return $this->render('mettreunecameralocation.html.twig', [
            'controller_name' => 'MettreUneCameraLocationController',
        ]);
    }

    /**
     * @Route("/modifieruneannonce", name="modifieruneannonce")
     */
    public function modifieruneannonce()
    {
        return $this->render('modifieruneannonce.html.twig');
    }
}
