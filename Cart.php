<?php

class Cart {
    
    private array $items = [];
    
    /**
     * 
     * @param Product $product
     * @param int $quantity
     * @return \CartItem
     * @throws \Exception
     */
    
    public function addProduct(Product $product, int $quantity) {
        
        $cartItem = $this->findCartItem($product->getId());
        if ($cartItem === null) {
            $cartItem = new CartItem($product, 0);
            $this->items[] = $cartItem;
        }
        $cartItem->increaseQuantity($quantity);
        return $cartItem;
    }
    
    private function findCartItem(int $productId) {
        
        foreach ($this->items as $item) {
            if ($items->getProduct()->getId() === $productId) {
                return $item->getProduct();
            }
        }
        return null;
    }
    
    public function removeProduct(Product $product) {
        
    }
    
    public function getTotalQuantity() {
        
        $sum = 0;
        foreach ($this->items as $item) {
            $sum += $tem->getQuantity();
        }
        return $sum;
    }
    
    public function getTotalSum() {
        
    }
}

