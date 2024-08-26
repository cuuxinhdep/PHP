<?php
require_once("./function/connect.php");

function order_list() {
    $sql = "select * from order order by id desc";
    $data = select($sql);
}