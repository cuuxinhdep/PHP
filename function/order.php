<?php
require_once("connect.php");

function order_list() {
    $sql = "select * from order order by id desc";
    $data = select($sql);
}