<?php

class Product {
    
    private int $id;
    private string $title;
    private float $price;
    private int $availableQuantity;
    
    /**
     * 
     * @param Cart $cart
     * @param int $quantity
     * @return CartItem
     * @throws \Exception
     */
    
    function __construct(int $id, string $title, float $price, int $availableQuantity) {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->availableQuantity = $availableQuantity;
    }
    
    function getId(): int {
        return $this->id;
    }

    function getTitle(): string {
        return $this->title;
    }

    function getPrice(): float {
        return $this->price;
    }

    function getAvailableQuantity(): int {
        return $this->availableQuantity;
    }

    function setId(int $id): void {
        $this->id = $id;
    }

    function setTitle(string $title): void {
        $this->title = $title;
    }

    function setPrice(float $price): void {
        $this->price = $price;
    }

    function setAvailableQuantity(int $availableQuantity): void {
        $this->availableQuantity = $availableQuantity;
    }
    
    public function addToCart(Cart $cart, int $quantity) {
        
        return $cart->addProduct($this, $quantity);
        
    }
    
    /**
     * @param Cart $cart
     */
    public function removeFromCart(Cart $cart) {
        
        return $cart->removeProduct($this);
        
    }
}
