<?php
require "../controller/productconfig.php";
class Product2
{
  public function ReturnProduct1Detailed()
  {

    $connect = Config::getConnexion();
    if (isset($_GET["trade"])) {
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
          $product1[0] = $row;
          foreach ($data2 as $row1) {
            if ($row1["product_id"] == $_GET["trade"]) {
              $product1[$i] = $row1;
              $i++;
            }
          }
        }
      }
      
    } else {
      $sql = "select * from product2";
      $request1 = $connect->prepare($sql);
      $request1->execute();
      $data1 = $request1->fetchAll();
      $sql = "select * from file2";
      $request2 = $connect->prepare($sql);
      $request2->execute();
      $data2 = $request2->fetchAll();
      foreach ($data1 as $row) {
        $i = 1;
        if ($row["id"] == $_GET["offre"]) {
          $product1[0] = $row;
          foreach ($data2 as $row1) {
            if ($row1["product_id"] == $_GET["offre"]) {
              $product1[$i] = $row1;
              $i++;
            }
          }
        }
      }
    }
    // return a table[0]=>id/category/product... table[i]=>id_image/image...
    return $product1;
  }
  public function addProduct2($text, $data, $id2, $user)
  {
    if (isset($text['submit']) && count($data['image1']['name']) > 0) {
      $connect = Config::getConnexion();
      //insert into table product2
      $sql = "INSERT INTO product2 ( category, name, description,status,id_product,user_id) VALUES (?, ?, ?, ?, ?, ?)";
      $request = $connect->prepare($sql);
      $request->execute(array($text["category"], $text["name"], $text["description"], 0, $id2, $user));
      $id = $connect->lastInsertId();
      //insert into table images 
      $p = count($data['image1']['name']);
      for ($i = 0; $i < $p; $i++) {
        $sql = "INSERT INTO file2 (file_name, file_type, data,product_id) VALUES (?,?,?,?);";
        $request = $connect->prepare($sql);
        $request->execute(array($data['image1']['name'][$i], $data['image1']['type'][$i], file_get_contents($data['image1']['tmp_name'][$i]), $id));
      }
      //set status of table 1 to 3
      $sql = "UPDATE product SET status = 3 WHERE product.id = ?;";
      $request = $connect->prepare($sql);
      $request->execute(array($id2));
      //increment nbr of offers
      $sql = "select * from product where id = $id2";
      $request = $connect->prepare($sql);
      $request->execute();
      $row = $request->fetchAll();
      var_dump($row);
      $increment = $row[0]['offer_nbr'];
      $increment++;
      $sql = "UPDATE product SET offer_nbr = ? WHERE product.id = $id2;";
      $request = $connect->prepare($sql);
      $request->execute(array($increment));
    }
    header("location:../view/trade.php");
  }
  public function showAdminProduct2()
  {
    $connect = Config::getConnexion();
    $sql = "select * from product2";
    $request1 = $connect->prepare($sql);
    $request1->execute();
    $data1 = $request1->fetchAll();
    $sql = "select * from file2";
    $request2 = $connect->prepare($sql);
    $request2->execute();
    $data2 = $request2->fetchAll();
    //table product1
    $sql = "select * from product";
    $request3 = $connect->prepare($sql);
    $request3->execute();
    $data3 = $request3->fetchAll();
    $sql = "select * from file";
    $request4 = $connect->prepare($sql);
    $request4->execute();
    $data4 = $request4->fetchAll();
    ///

    foreach ($data1 as $row) {
      echo ("<table border='1px solid' align='center'>
    <tr>
    <th>ID Product2</th>
    <th>category of product2</th>
    <th> product2 name</th>
    <th>product2 description</th>
    <th>Images</th>
    <th>Status</th>
    </tr>");
      echo "<tr>
        <td>" . $row['id'] . "</td>
        <td>" . $row['category'] . "</td>
        <td>" . $row['name'] . "</td>
        <td>" . $row['description'] . "</td>";
      echo " <td>";
      foreach ($data2 as $row1) {
        if ($row1["product_id"] == $row["id"])
          echo '<img src="data:image;base64,' . base64_encode($row1['data']) . '" alt="image" style="width:100px;">';
      }
      echo "</td><td rowspan=4>";
      switch ($row['status']) {
        case 0:
          echo " Status:This offer is Waiting for confirmation";
          echo "<div class='side-menu'>";
          echo " <a href='../controller/gestion2.php?accepted=" . $row["id"] . "'>accept</a>";
          echo " <a href='../controller/gestion2.php?rejected=" . $row["id"] . "'>reject</a>";
          echo "</div >";
          break;
        case 1:
          echo "Status: Trade On going";
          echo "<div class='side-menu'>";
          echo " <a href='../controller/gestion2.php?rejected=" . $row["id"] . "'>reject</a>";

          echo "</div >";
          break;
        case 2:
          echo "Status: rejected";
          break;
      }
      echo "</td></tr>";

      ///afficher table1
      echo "
   <tr>Trades between</tr>
    <tr>
    <th>ID Product</th>
    <th>category of product</th>
    <th> product name</th>
    <th>product description</th>
    <th>Images</th>
   
    </tr>";
      foreach ($data3 as $row3) {
        if ($row3['id'] == $row['id_product']) {
          echo ("<tr >
        <td>" . $row3['id'] . "</td>
        <td>" . $row3['category'] . "</td>
        <td>" . $row3['name'] . "</td>
        <td>" . $row3['description'] . "</td>");

          echo " <td>";
          foreach ($data4 as $row4) {
            if ($row4["product_id"] == $row3["id"])
              echo '<img src="data:image;base64,' . base64_encode($row4['data']) . '" alt="image" style="width:100px;">';
          }
          echo "</td>";
          echo "</tr></table><br><br>";
        }
      }
    }

  }
  public function AdminGestionProduit2($accept, $reject)
  {

    $connect = Config::getConnexion();
    if ($accept == NULL && $reject != null) {
      //decrement $number of offers in table 1
      $sql = "select * from product2 where id = $reject";
      $request = $connect->prepare($sql);
      $request->execute();
      $row = $request->fetchAll();
      $id = $row[0]['id_product'];
      $sql = "select * from product where id = $id";
      $request = $connect->prepare($sql);
      $request->execute();
      $row = $request->fetchAll();
      $decrement = $row[0]['offer_nbr'];
      if ($decrement > 1) {
        $decrement--;
        $sql = "UPDATE product SET offer_nbr = ? WHERE product.id = $id;";
        $request = $connect->prepare($sql);
        $request->execute(array($decrement));
      } else {
        $decrement--;
        $sql = "UPDATE product SET offer_nbr = ? WHERE product.id = $id;";
        $request = $connect->prepare($sql);
        $request->execute(array($decrement));
        $sql = "UPDATE product SET status = 1 WHERE product.id = $id;";
        $request = $connect->prepare($sql);
        $request->execute();
      }
      //decrement end
      $sql = "DELETE FROM product2 WHERE id = '$reject'";
      $request = $connect->prepare($sql);
      $request->execute();
      header("location:../view/back1.php");
    }
    if ($accept != NULL && $reject == null) {
      $sql = "UPDATE product2 SET status = '1' WHERE id = '$accept';";
      $request = $connect->prepare($sql);
      $request->execute();
      header("location:../view/back1.php");
    }
  }
  public function conterProd2()
  {
    $connect = Config::getConnexion();
    $sql = "select * from product2";
    $request1 = $connect->prepare($sql);
    $request1->execute();
    $data1 = $request1->fetchAll();
    return count($data1);
  }
}
?>