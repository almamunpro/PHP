<?php

// name Arguments/parameters

function calculateTotalCost(float $price, int $quantity, float $discount = 00): float{
    $total = $price * $quantity;
    $total -= $discount;
    return $total;


}
// echo calculateTotalCost(10.5,2,2);
echo calculateTotalCost(price: 10.5, quantity:4, discount:3);