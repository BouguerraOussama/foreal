<!DOCTYPE html>
<html lang="en" class="theme_switchable">

<head>
   <meta charset="UTF-8">
   <title>Inspect</title>
   <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css'>
   <link rel='stylesheet' href='https://static.fontawesome.com/css/fontawesome-app.css'>
   <link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.2.0/css/all.css'>
   <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,700'>
   <link rel="stylesheet" href="./css/cards.css">
   <link rel="stylesheet" href="./css/style.css">
   <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

</head>
<?php
require "../model/p2.php";
$prod = new Product2();
// if(!$_GET["offre"] && $_GET["trade"]){
$itemSelected = $prod->ReturnProduct1Detailed();
session_start();

//user of item selected 
$connect = Config::getConnexion();
$sql = "select * from user where id=?";
$request1 = $connect->prepare($sql);
$request1->execute(array($itemSelected[0]["user_id"]));
$data1 = $request1->fetchAll();
$_SESSION["id"]= $itemSelected[0]["id"];
// }
//item 2
// $connect = Config::getConnexion();
// $sql = "select * from product2 where id= ?";
// $request2 = $connect->prepare($sql);
// $request2->execute(array($_GET["offre"]));
// $product2 = $request2->fetchAll();
//-files item2
// $sql = "select * from product2 ";
// $request3= $connect->prepare($sql);
// $request3->execute();
// $files2 = $request3->fetchAll();
?>

<body>
   <div style="display: flex; flex-direction: row;">
      <div class="details">
         <h4 style="margin-bottom:20px;">ITEM: <span class="white">
               <?php 
               // if (!$_GET["offre"] && $_GET["trade"]) {
                  echo $itemSelected[0]["name"];
                  // }else{
                  //    echo $product2[0]["name"];
                  // } ?>
            </span></h4>
         <ul>
            <li><span>ITEM DESCRIPTION :</span>
               <?php 
               // if (!$_GET["offre"] && $_GET["trade"]) {
                  echo $itemSelected[0]["description"];
               // } else {
               //    echo $product2[0]["description"];
               // } ?> 
            </li>

            <li><span>Category :</span>
               <?php
               // if (!$_GET["offre"] && $_GET["trade"]) {
               echo $itemSelected[0]["category"];
               // }else{
               // echo $product2[0]["category"];
               // } ?>
            </li>

            <li><span>USER NAME :</span>
               <?php echo $data1[0]["id"]; ?>
            </li>

            <li><span>STATUS :</span>
               <?php echo $itemSelected[0]["status"]; ?>
            </li>
         </ul>

      </div>
      <div style="margin-left: 250px;">
         
         <?php
         if ($_SESSION["where_it_came_from"] == "trade.php" ) {
            echo " <h4 style='margin:20px 20px;'>like this item?</h4>
            <a href='oussemaform2.html' class='btn btn-style-two' style='text-decoration: none;'>Trade Now</a>
         <h4 style='margin:20px 20px; '>Nah it aint for me</h4>
         <a  onclick='back()' class='btn btn-style-two' style='text-decoration: none;'> browse again</a>";
         }
         if ($_SESSION["where_it_came_from"] == "OnGoingTrades.php" && isset($_GET["trade"])) {
            echo "<h4 style='margin:20px 20px;'>This is your post</h4>
            <a href='offers.php?offer=". $_GET["trade"]."' class='btn btn-style-two' style='text-decoration: none;'>See offers i got</a>
            <br><br>
            <a onclick='back()' class='btn btn-style-two' style='text-decoration: none;'> go back</a>
            <br><br>
            <a href='#' class='btn btn-style-two' style='text-decoration: none;'> Edit My trade</a>";
         }
         if ($_SESSION["where_it_came_from"] == "OnGoingTrades.php" && isset($_GET["offre"])) {
            echo "<h4 style='margin:20px 20px;'>This is your post</h4>
            <a href='#" . $_GET["offre"] . "' class='btn btn-style-two' style='text-decoration: none;'>Accept this offre</a>
            <br><br>
            <a  onclick='back()' class='btn btn-style-two' style='text-decoration: none;'> go back</a>
            <br><br>
            <a href='#' class='btn btn-style-two' style='text-decoration: none;'> Talk to this offrer</a>";
         }
         ?>

      </div>
   </div>

   <div class='options'>
      <!-- partial:index.partial.html -->
      <?php
      echo "<div class='option active' style='--optionBackground:url(data:image;base64," . base64_encode($itemSelected[1]['data']) . "); background-repeat: no-repeat;
                   background-size: cover;'>";

      echo "<div class='shadow'></div>";

      echo "</div>";
      for ($i = 2; $i < count($itemSelected); $i++) {
         echo "<div class='option' style='--optionBackground:url(data:image;base64," . base64_encode($itemSelected[$i]['data']) . "); background-repeat: no-repeat;
                  background-size: cover;'>";

         echo "<div class='shadow'></div>";

         echo "</div>";
      }
      ?>
   </div>


   <!-- partial -->
   <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
   <script> function back() {
         window.history.back();}</script>
   <script src="./js/cards.js"></script>


</body>

</html>