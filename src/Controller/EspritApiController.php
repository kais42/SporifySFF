<?php

namespace App\Controller;

use App\Entity\Event;
use App\Entity\Product;
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
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($evenements);
        return new JsonResponse($formatted);
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
}