<?php

class Food
{
    public string $name, $ingredients, $price, $image, $amount;

    public function __construct(string $name, string $price, string $image, string $ingredients, string $amount)
    {
        $this->name = $name;
        $this->ingredients = $ingredients;
        $this->price = $price;
        $this->image = $image;
        $this->amount = $amount;
    }
}


