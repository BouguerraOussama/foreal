<?php
require "../controller/config.php";
class Product2{
 public function ReturnProduct1Detailed(){
  $connect = Config::getConnexion();
  $sql = "select * from product";
  $request1 = $connect->prepare($sql);
  $request1->execute();
  $data1 = $request1->fetchAll();
  $sql = "select * from file";
  $request2 = $connect->prepare($sql);
  $request2->execute();
  $data2 = $request2->fetchAll();
  foreach ($data1 as $row) {
   $i = 1;
   if ($row["id"] == $_GET["trade"]) {
    $product1[0]=$row;
    foreach($data2 as $row1){
     if ($row1["user_id"]==$_GET["trade"]){
      $product1[$i]=$row1;
      $i++;
     }
    }
   }
  }
  // return a table[0]=>id/category/product... table[i]=>id_image/image...
  return $product1;
 }
}
?>