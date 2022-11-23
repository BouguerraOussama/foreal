<?php
require "../model/p2.php";
session_start();
$product2=new Product2();
$product2->addProduct2($_POST, $_FILES,$_SESSION["id"],$_SESSION["currentuser"]);
?>