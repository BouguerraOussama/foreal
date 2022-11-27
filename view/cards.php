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
$itemSelected = $prod->ReturnProduct1Detailed();
session_start();
$_SESSION["id"] = $itemSelected[0]["id"];
//user of item selected 
$connect = Config::getConnexion();
$sql = "select * from user where id=?";
$request1 = $connect->prepare($sql);
$request1->execute(array($itemSelected[0]["user_id"]));
$data1 = $request1->fetchAll();

?>

<body>
   <div style="display: flex; flex-direction: row;">
      <div class="details">
         <h4 style="margin-bottom:20px;">ITEM: <span class="white">
               <?php echo $itemSelected[0]["name"]; ?>
            </span></h4>
         <ul>
            <li><span>ITEM DESCRIPTION :</span>
               <?php echo $itemSelected[0]["description"]; ?>
            </li>

            <li><span>Category :</span>
               <?php echo $itemSelected[0]["category"]; ?>
            </li>

            <li><span>USER NAME :</span>
               <?php echo $data1[0]["id"]; ?>
            </li>
            <li><span>END OF DEAL :</span>
               <?php echo $itemSelected[0]["post_date"]; ?>
            </li>
         </ul>

      </div>
      <div style="margin-left: 250px;">
         <h4 style="margin:20px 20px;">like this item?</h4>
         <a href='oussemaform2.html' class='btn btn-style-two' style='text-decoration: none;'>Trade Now</a>
         <h4 style="margin:20px 20px; ">Nah it aint for me</h4>
         <a href='trade.php' class='btn btn-style-two' style='text-decoration: none;'> browse again</a>
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
   </script>
   <script src="./js/cards.js"></script>


</body>

</html>