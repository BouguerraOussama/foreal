<!DOCTYPE html>
<html lang="en" class="theme_switchable">

<head>
   <meta charset="UTF-8">
   <title>CodePen - Expanding flex cards</title>
   <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css'>
   <link rel='stylesheet' href='https://static.fontawesome.com/css/fontawesome-app.css'>
   <link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.2.0/css/all.css'>
   <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,700'>
   <link rel="stylesheet" href="./css/cards.css">
   <link rel="stylesheet" href="./css/style.css">

</head>
<?php
require "../model/p2.php";
$prod = new Product2();
$itemSelected = $prod->ReturnProduct1Detailed();

?>

<body>
   <div style="display: flex; flex-direction: row;">
      <div class="details">
         <h4 style="margin-bottom:20px;">ITEM <span class="white"> DETAILS</span></h4>
         <ul>
            <li><span>Category :</span>
               <?php echo $itemSelected[0]["category"]; ?>
            </li>
            <li><span>ITEM NAME :</span>
               <?php echo $itemSelected[0]["name"]; ?>
            </li>
            <li><span>USER NAME :</span> user_user</li>
            <li><span>END OF DEAL :</span> Tudesday 20/03/2001</li>
         </ul>

      </div>
      <div style="margin-left: 250px;">
         <h4 style="margin-bottom:20px;">like this item?</h4>
         <a href="oussemaform.html" class="btn btn-style-two" style="text-decoration: none;">Trade Now</a>
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