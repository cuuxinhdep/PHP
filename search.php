<?php
require_once("./function/connect.php");
$q = $_GET("Search");
$products = select("select *from where category_id=$NAME ");
$products = select($sql);