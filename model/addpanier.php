<?php
session_start();
include '../controller/merch.php';
// $id=$_SESSION["id_user"];
$id=1;
$prod=$_GET['id'];
$add=new panier;
$add->addbasket($id,$prod);
header("location:../view/pointsshop.php");
?>