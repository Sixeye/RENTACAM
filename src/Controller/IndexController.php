<?php

namespace App\Controller;

use App\Entity\Camera;
use App\Form\CameraType;
use App\Repository\CameraRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class IndexController
 * @package App\Controller
 */
class IndexController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('home.html.twig');
    }

    /**
     * @Route("/cameraalouer", name="cameraalouer")
     */
    public function cameraalouer(CameraRepository $cameraRepository)
    {
        $cameras = $cameraRepository->findAll();
        return $this->render('camera_a_louer.html.twig',[
            'cameras' => $cameras
        ]);
    }

    /**
     * @Route("/lesloueurs", name="lesloueurs")
     */
    public function lesloueurs()
    {
        return $this->render('les_loueurs.html.twig');
    }

    /**
     * @Route("/mettreunecameralocation", name="mettreunecameralocation")
     */
    public function mettreunecameralocation(EntityManagerInterface $manager, Request $request)
    {
        $form = $this->createForm(CameraType::class);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $camera = $form->getData();
            $manager->persist($camera);
            $manager->flush();
            $this->addFlash(
                'notice',
                'Votre annonce a été ajoutée.'
            );
            return $this->redirectToRoute('home');
        }

        return $this->render('mettreunecameralocation.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/modifieruneannonce/{id}", name="modifieruneannonce")
     */
    public function modifieruneannonce(Camera $camera, EntityManagerInterface $manager, Request $request)
    {
        $form = $this->createForm(CameraType::class, $camera);
        $form->handleRequest($request);

        return $this->render('modifieruneannonce.html.twig', [
            'camera' => $camera,
            'form'   => $form->createView(),
        ]);
    }
}
