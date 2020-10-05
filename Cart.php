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
            $this->items[$product->getId()] = $cartItem;
        }
        $cartItem->increaseQuantity($quantity);
        return $cartItem;
    }
    
    private function findCartItem(int $productId) {
        
        return $this->items[$productId] ?? null; //or below
//        foreach ($this->items as $item) {
//            if ($item->getProduct()->getId() === $productId) {
//                return $item->getProduct();
//            }
//        }
//        return null;
    }
    
    /**
     * 
     * @param Product $product
     */
    public function removeProduct(Product $product) {
        
        unset($this->items[$product->getId()]);
//        foreach ($this->items as $index => $item) {
//            if ($item->getProduct()->getId() === $product->getId()) {
//                unset($this->items[$index]);
//                break;
//            }
//        }
    }
    
    /**
     * 
     * @return int
     */
    public function getTotalQuantity() {
        
        $sum = 0;
        foreach ($this->items as $item) {
            $sum += $item->getQuantity();
        }
        return $sum;
    }
    
    /**
     * 
     * @return float
     */
    public function getTotalSum() {
        
        $totalSum = 0;
        foreach ($this->items as $item) {
            $totalSum += $item->getQuantity() * $item->getProduct()->getPrice();
        }
        
        return $totalSum;
    }
}

