<?php
class Inoice
{
    public function getOrderTotal($order, array $items): float
    {
        $total = 0;
        foreach ($items as $item) {
            $total += $item['price'] * $item['quantity'];
        }
        if ($order ->country === 'US') {
            $total += ($total * 0.07);
        } else if ($order ->country === 'EU') {
            $total += ($total * 0.20);
        }
        else if ($order ->country === 'BD') {
            $total += ($total * 0.20);
        }
        return $total;
    }
}

class TaxCalculator{
    public function getTaxRate($order, $country){
        if ($country === 'US') {
            return $this ->getUSTax ($order);
        } else if ($country === 'EU') {
            return 0.20;
        }
        else if ($country === 'BD') {
            return 0.20;
        }
        return 0;
    }

    public function getUSTax($order)
    {
        if($order ->state === 'California') {
            return 0.01;
        }else{
            return 0;
        }
    }
}