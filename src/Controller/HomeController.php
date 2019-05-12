<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Order;
use App\Form\OrderType;


class HomeController extends AbstractController
{
  /**
   * @var environment
   */
  private $twig;

  public function __construct(Environment $twig)
  {
    $this->twig = $twig;
  }

  /**
  * @Route("/", name="index")
  * @return Response
  */
  public function index(): Response
  {
    $this->getOrder();
    return new Response($this->twig->render('index.html.twig'));
  }

  /**
  * @Route("/order/add", name="add_order")
  */
  public function addOrder() {
    $order = new Order();

    $form = $this->createForm(OrderType::class, $order, array(
        'action' => $this->generateUrl($request->get('_route'))
    ))->handleRequest();

    return $this->render('addOrder.html.twig', [
        'form' => $form->createView(),
    ]);
  }
}
