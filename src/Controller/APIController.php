<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use App\Entity\Order;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations as Rest;
use JMS\Serializer\SerializationContext;
use Nelmio\ApiDocBundle\Annotation\Model;
use Nelmio\ApiDocBundle\Annotation\Security;
use Swagger\Annotations as SWG;

class APIController extends FOSRestController
{
  /**
  * @Rest\Get(
  * path = "\api\orders"
  * name = "get_orders"
  * )
  *
  * @SWG\Response(
  * response = 200,
  * decription="Return orders",
  * @SWG\Schema(
  *   type="array",
  *   @SWG\Items(ref=@Model(type=Order::class))
  *  )
  * )
  *
  * @Security(name="Open")
  * @SWG\Tag(name="orders")
  */
  public function getOrders()
  {
    try {
      $orders = $this->getDoctrine()
          ->getRepository(Order::class)
          ->findAll();
    } catch(Exception $e) {
      return "probleme with requete";
    }
    return $orders;
  }
}
