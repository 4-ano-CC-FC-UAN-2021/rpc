<?php
class numAleatorio{

    public function num(){
        $array=array();
        for ($i = 1; $i <= 500; $i++) {
            array_push($array, rand(0,99999));
        }

        return($array);
    }
}