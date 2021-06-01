<?php
require_once("aleatorio/num.php");
require_once("ordenacao/order.php");
class Library{
    
    public function getNum($n){
        $num = new numAleatorio();
        $order = new order();
        $array = $order->bubbleSort($num->num());
        
        for ($i = 0; $i < 500; $i++) {
            
            if($array[$i] == $n){
                return 1;
            }
        }

        return 0;
    }    
}
