<?php 
session_start();
include '../controller/merch.php';
// $id=$_SESSION["id_user"];
$id=1;
$total=$_GET['total'];
$nopoints=0;
  $db=Config::getConnexion();
     $sql="Select * from user where id='$id'";
     $fetch=$db->query($sql)->fetchALL(PDO::FETCH_ASSOC);
     $points=$fetch[0]['points'];
     if($points>=$total)
     {
        $checkout=new commande;
        $checkout->addcheckout($id,$total,$points);
        header("location:../view/pointsshop.php");
     }
     else
     {
     $nopoints=1;
     header("location:../view/pointsshop.php?nopoints=".$nopoints);
     }
?>