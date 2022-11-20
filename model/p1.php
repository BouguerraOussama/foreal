<?php
require "../controller/config.php";
class Product1
{
  public function addProduct1($text, $data)
  {
    if (isset($text['submit']) && count($data['image1']['name'])) {
      //insert into table product1
      $connect = Config::getConnexion();
      $sql = "INSERT INTO product ( category, name, description) VALUES (?, ?, ?)";
      $request = $connect->prepare($sql);
      $request->execute(array($text["category"], $text["name"], $text["description"]));

      $id = $connect->lastInsertId();
      //insert into table images 
      $p = count($data['image1']['name']);
      for ($i = 0; $i < $p; $i++) {
        $sql = "INSERT INTO file (file_name, file_type, data,user_id) VALUES (?,?,?,?);";
        $request = $connect->prepare($sql);
        $request->execute(array($data['image1']['name'][$i], $data['image1']['type'][$i], file_get_contents($data['image1']['tmp_name'][$i]), $id));
      }
      header("location:../view/trade.php");
    }
  }
  public function showAdminProduct1()
  {
    $connect = Config::getConnexion();
    $sql = "select * from product";
    $request1 = $connect->prepare($sql);
    $request1->execute();
    $data1 = $request1->fetchAll();
    $sql = "select * from file";
    $request2 = $connect->prepare($sql);
    $request2->execute();
    $data2 = $request2->fetchAll();
    echo ("<table border='1px solid'>
    <tr>
    <th>ID Product</th>
    <th>category of product</th>
    <th> product name</th>
    <th>product description</th>
    <th>Status</th>
    <th>Images</th>
    </tr>");
    foreach ($data1 as $row) {
      echo ("<tr>
    <td>" . $row['id'] . "</td>
    <td>" . $row['category'] . "</td>
    <td>" . $row['name'] . "</td>
    <td>" . $row['description'] . "</td><td>");
      switch ($row['status']) {
        case 0:
          echo "Status: On hold";
          echo "<div class='side-menu'>";
          echo " <a href='../controller/gestion.php?accepted=" . $row["id"] . "'>accept</a>";
          echo " <a href='../controller/gestion.php?rejected=" . $row["id"] . "'>reject</a>";
          echo "</div >";

          break;
        case 1:
          echo "Status: approved";
          echo "<div class='side-menu'>";
          echo " <a href='../controller/gestion.php?rejected=" . $row["id"] . "'>reject</a>";
          echo "</div >"; 
          break;
        case 2:
          echo "Status: rejected";
          break;
      }
      echo " </td><td>";
      foreach ($data2 as $row1) {
        if ($row1["user_id"] == $row["id"])
          echo '<img src="data:image;base64,' . base64_encode($row1['data']) . '" alt="image" style="width:100px;">';
      }
      echo "</td></tr>";
    }
  }
  public function AdminGestionProduit($accept, $reject)
  {

    $connect = Config::getConnexion();
    if ($accept == NULL && $reject != null) {
      $sql = "DELETE FROM product WHERE id = '$reject'";
      $request = $connect->prepare($sql);
      $request->execute();
      header("location:../view/back.php");
    }
    if ($accept != NULL && $reject == null) {
      $sql = "UPDATE product SET status = '1' WHERE id = '$accept';";
      $request = $connect->prepare($sql);
      $request->execute();
      header("location:../view/back.php");
    }
  }

}


?>