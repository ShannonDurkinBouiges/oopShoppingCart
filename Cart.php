<?php

class Cart {
    
    private array $items = [];
    
    public function addProduct(Product $product, int $quantity) {
        
        foreach ($this->items as $item) {
            if($item->getProduct()->getId() === $product->getId()) {
                $item->increaseQuantity($quantity);
            }
        }
        $cartItem = new CartItem($product, $quantity);
    }
    
    public function removeProduct(Product $product) {
        
    }
    
    public function getTotalQuantity() {
        
    }
    
    public function getTotalSum() {
        
    }
}

