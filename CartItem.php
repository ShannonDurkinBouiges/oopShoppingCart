<?php

class CartItem {
    
    private Product $product;
    private int $quantity;
    
    public function __construct(\Product $product, $quantity) {
        
        $this->product = $product;
        $this->quantity = $quantity;
    }
    
    function getProduct(): Product {
        return $this->product;
    }

    function getQuantity(): int {
        return $this->quantity;
    }

    function setProduct(Product $product): void {
        $this->product = $product;
    }

    function setQuantity(int $quantity): void {
        $this->quantity = $quantity;
    }

    public function increaseQuantity($amount = 1) {
        
         if ($this->getQuantity() + $amount > $this->getProduct()->getAvailableQuantity()) {
             throw new Exception("Product quantity can not be more than ".$this->getProduct()->getAvailableQuantity());
         }
         $this->quantity += $amount;
    }
    
    public function decreaseQuantity($amount = 1) {
        
        if ($this->getQuantity() - $amount < 1) {
             throw new Exception("Product quantity can not be less than 1";
         }
         $this->quantity -= $amount;
    }
}

