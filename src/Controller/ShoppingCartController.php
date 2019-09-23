<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Product;
use App\Services\ShoppingCart;
use App\Services\SessionService;
use Symfony\Component\HttpFoundation\Request;

class ShoppingCartController extends AbstractController
{
    /**
     * @Route("/", name="products")
     */
    public function products()
    {
        $repository = $this->getDoctrine()->getRepository(Product::class);
        $products = $repository->findAll();
        
        return $this->render('shopping_cart/products.html.twig',[
            'products'=>$products
        ]);
    }

    /**
     * @Route("/cart", name="cart")
     */
    public function cart(SessionService $session)
    {
        $cart_products = $session->session->get('cart', []);
        $total_price = $session->session->get('cart_data/total_price', 0);
        return $this->render('shopping_cart/cart.html.twig',compact('cart_products','total_price'));
    }

    /**
     * @Route("/add-to-cart/{id}", name="add-to-cart")
     */
    public function addToCart(Product $product, ShoppingCart $cart)
    {
        $cart->addToCart($product);
        return $this->redirectToRoute('cart');
    }

    /**
     * @Route("/remove-from-cart/{id}", name="remove-from-cart")
     */
    public function removeFromCart($id, ShoppingCart $cart)
    {
        $cart->removeFromCart($id);
        return $this->redirectToRoute('cart');
    }

    /**
     * @Route("/update-quantities", methods={"POST"}, name="update-quantities")
     */
    public function updateQuantities(Request $request, ShoppingCart $cart)
    {
        if($request->request->get('amounts'))
        $cart->updateQuantities($request);

        return $this->redirectToRoute('cart');
    }

    /**
     * @Route("/checkout", name="checkout")
     */
    public function checkout(SessionService $session)
    {
        $cart_products = $session->session->get('cart',[]);
        $total_price = $session->session->get('cart_data/total_price', 0);
        $total_amount = $session->session->get('cart_data/total_amount', 0);
        return $this->render('shopping_cart/checkout.html.twig',compact('total_price','total_amount','cart_products'));
    }
}

