<?php

namespace App\Controller;

use App\Entity\Task;
use App\Form\TaskFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RoutineController extends AbstractController
{
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/", name="app_routine")
     */
    public function index(Request $request): Response
    {
        //this method also acts as the task creator
        //todo remove this later into its own method
        $form = $this->createForm(TaskFormType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $this->entityManager->persist($form->getData());
            $this->entityManager->flush();

            $this->addFlash('notice', 'Added task to database');

            return $this->redirectToRoute('app_routine');
        }

        return $this->render('routine/index.html.twig', [
            'taskForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/swiper", name="app_swipe")
     */
    public function swiper()
    {
        $tasks = $this->entityManager->getRepository(Task::class)->findAll();

        return $this->render('swiper/index.html.twig', [
            'tasks' => $tasks
        ]);
    }
}
