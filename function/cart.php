<?php
session_start();
require_once("./function/connect.php");

function getCartItem(){
    $cart = isset($_SESSION["cart"]) ? $_SESSION["cart"] : [];

    $item = [];
    if(count($cart) > 0) {
        $ids = [];
        foreach($cart as $key=>$item){
            $ids[] = $key;
        }
    } //die("a");
    $ids = implode(",", $ids); // convert array into string
    $sql = "select * from products where id in ($ids)";
    $getItems = select($sql); //var_dump($getItems);die();
    foreach($getItems as $item){ 
        $buy_qty = $cart[$item['id']];
        $items[] = [ 
            "id" => $item['id'],
            "NAME" => $item['NAME'],
            "thumbnail" => $item['thumbnail'],
            "price" =>(float) $item['price'],
            "in_stock"=> $item["qty"] > $cart[$item["id"]]?true:false,
            "buy_qty"=>$cart[$item["id"]] 
        ];
       
    }
    return $items;
}