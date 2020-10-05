<?php

require_once 'Product.php';
require_once 'Cart.php';
require_once 'CartItem.php';

$product1 = new Product(1, "product1 name", 2500, 10);
$product2 = new Product(2, "product2 name", 400, 10);
$product2 = new Product(3, "product3 name", 3200, 10);

$cart = new Cart();
$cartItem1 = $cart->addProduct($product1, 1);
$cartItem2 = $product2->addToCart($cart, 1);

echo "Number of items in cart: ";
echo $cart->getTotalQuantity();
echo "Total price of items in cart: ";
echo $cart->getTotalSum();

$cartItem2->increaseQuantity();
$cartItem2->increaseQuantity();

echo "Number of items in cart: ";
echo $cart->getTotalQuantity();

echo "Total price of items in cart: ";
echo $cart->getTotalSum();

