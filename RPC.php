<?php
require_once("library/library.php");

class RPC{
    public function rpc(){
        $lib = new Library();
        $num = $_GET['num'];
        return json_encode($lib->getNum($num));
    }
}


$rpc = new RPC();
header("Content-Type:application/json");
echo $rpc->rpc();