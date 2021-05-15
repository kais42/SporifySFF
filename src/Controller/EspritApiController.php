<?php

namespace App\Controller;

use App\Entity\Cart;
use App\Entity\Event;
use App\Entity\Product;
use App\Entity\Promotion;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

use Symfony\Component\Serializer\Serializer;
/**
 * @Route("/espritApi")
 */
class EspritApiController extends AbstractController
{

    /**
     * @Route("/allProduct", methods={"GET"})
     */
    public function allProduct()
    {

        $products = $this->getDoctrine()
            ->getRepository(Product::class)
            ->findAll();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($products);
        return new JsonResponse($formatted);
    }
    /**
     * @Route("/allEvent", methods={"GET"})
     */
    public function allEvent()
    {

        $evenements = $this->getDoctrine()
            ->getRepository(Event::class)
            ->findAll();
        $jsonContent = null;
        $i = 0;
        $evenement = new Event();
        foreach ($evenements as $event) {
            $jsonContent[$i]['id'] = $event->getId();
            $jsonContent[$i]['titre'] = $event->getTitre();
            $jsonContent[$i]['description'] = $event->getDescription();
            $jsonContent[$i]['image'] = $event->getImage();
            $jsonContent[$i]['location'] = $event->getLocation();
            $jsonContent[$i]['date_debut'] = $event->getDateDebut()->format('Y-m-d H:i:s');
            $jsonContent[$i]['date_fin'] = $event->getDateFin()->format('Y-m-d H:i:s');


            $i++;
        }
        $json = json_encode($jsonContent);
        return new Response($json);


    }


    /**
     * @Route("/productss")
     * @return Response
     */
    public function recupererProducts()
    {
        $products = $this->getDoctrine()->getRepository(Product::class)->findAll();
        $jsonContent = null;
        $i = 0;
        $product = new Product();
        foreach ($products as $product) {
            $jsonContent[$i]['id'] = $product->getId();
            $jsonContent[$i]['name'] = $product->getName();
            $jsonContent[$i]['description'] = $product->getDescription();
            $jsonContent[$i]['quantity'] = $product->getQuantity();
            $jsonContent[$i]['size'] = $product->getSize();
            $jsonContent[$i]['color'] = $product->getColor();
            $jsonContent[$i]['type'] = $product->getType();
            $jsonContent[$i]['supplier'] = $product->getSupplier();
            $jsonContent[$i]['image'] = $product->getImage();
            $jsonContent[$i]['price'] = $product->getPrice();

            $i++;
        }
        $json = json_encode($jsonContent);
        return new Response($json);

    }
    /**
     * @Route("/catss")
     * @return Response
     */
    public function cart(): Response
    {
        $carts = $this->getDoctrine()->getRepository(Cart::class)->findAll();
        foreach ($carts as $cart) {
            $cart->product = $this->getDoctrine()->getRepository(Product::class)->find($cart->getProductId());
        }

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($carts);

        return new JsonResponse($formatted);


    }


    /**
     * @Route("/allPromotions")
     * @return Response
     */
    public function allPromotions()
    {
        $promotions = $this->getDoctrine()->getRepository(Promotion::class)->findAll();
        $jsonContent = null;
        $i = 0;
        $product = new Product();
        foreach ($promotions as $promotion) {
            $jsonContent[$i]['pourcentage'] = $promotion->getPourcentage();
            $i++;
        }
        $json = json_encode($jsonContent);
        return new Response($json);
    }
    /**
     * @Route("/product/detail/{id}")
     * @return Response
     */

    public function Jsondetail($id)
    {
        $product = $this->getDoctrine()->getRepository(Product::class)->find($id);

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($product);

        return new JsonResponse($formatted);

    }

    /**
     * @Route("/checkoutJson")
     * @return Response
     */

    public function checkoutJson (Request $request)
    {

        $doct = $this->getDoctrine()->getManager();
        $carts = $doct->getRepository(Cart::class)->findAll();
        $promotions = $this->getDoctrine()->getRepository(Promotion::class)->findAll();
        $i = 0;
        $cart = new Cart();
        $promotion = new Promotion();
        foreach ($carts as $cart) {
            $jsonContent[$i]['id'] = $cart->getId();
            $jsonContent[$i]['quantity'] = $cart->getQuantity() ;


            $i++;
        }
        foreach ($promotions as $promotion) {
            $jsonContent[$i]['pourcentage'] = $promotion->getPourcentage();
            $i++;
        }
        $json = json_encode($jsonContent);
        return new Response($json);

    }



}