<?php
include_once "../Controller/ReponseC.php";
$reponseC=new ReponseC();
	$listeReponses=$reponseC->afficherreponse(); 

    ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>dashboard admin</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="assets/back_temp/dist/style.css">
<style>

.buttonClass {
  font-size:15px;
  font-family:Arial;
  width:140px;
  height:50px;
  border-width:1px;
  color:#333333;
  border-color:#ffaa22;
  font-weight:bold;
  border-top-left-radius:6px;
  border-top-right-radius:6px;
  border-bottom-left-radius:6px;
  border-bottom-right-radius:6px;
  box-shadow: 0px 1px 0px 0px #fff6af;
  text-shadow: 0px 1px 0px #ffee66;
  background:linear-gradient(#ffec64, #ffab23);
}

.buttonClass:hover {
  background: linear-gradient(#ffab23, #ffec64);
}
              

</style>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="video-bg">
 <video width="320" height="240" autoplay loop muted>
  <source src="assets/back_temp/dist/vid2.mp4" type="video/mp4">
Your browser does not support the video tag.
</video>
</div>
<div class="dark-light">
    <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
     <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" /></svg>
   </div>
<div class="app">
 <div class="header">
  <div class="menu-circle"></div>


  
 </div>
 <div class="wrapper">
  <div class="left-side">
   <div class="side-wrapper">
    <div class="side-title">Main</div>
    <div class="side-menu">
     <a href="./tous _rec.php">
      <svg viewBox="0 0 488.932 488.932" fill="currentColor">
       <path d="M243.158 61.361v-57.6c0-3.2 4-4.9 6.7-2.9l118.4 87c2 1.5 2 4.4 0 5.9l-118.4 87c-2.7 2-6.7.2-6.7-2.9v-57.5c-87.8 1.4-158.1 76-152.1 165.4 5.1 76.8 67.7 139.1 144.5 144 81.4 5.2 150.6-53 163-129.9 2.3-14.3 14.7-24.7 29.2-24.7 17.9 0 31.8 15.9 29 33.5-17.4 109.7-118.5 192-235.7 178.9-98-11-176.7-89.4-187.8-187.4-14.7-128.2 84.9-237.4 209.9-238.8z" />
      </svg>
      Reports
      <span class="notification-number updates">1</span>
     </a>
     <a href="./Consulterreponse.php">
      <svg viewBox="0 0 512 512" fill="currentColor">
       <path d="M352 0H64C28.704 0 0 28.704 0 64v320a16.02 16.02 0 009.216 14.496A16.232 16.232 0 0016 400c3.68 0 7.328-1.248 10.24-3.712L117.792 320H352c35.296 0 64-28.704 64-64V64c0-35.296-28.704-64-64-64z" />
       <path d="M464 128h-16v128c0 52.928-43.072 96-96 96H129.376L128 353.152V400c0 26.464 21.536 48 48 48h234.368l75.616 60.512A16.158 16.158 0 00496 512c2.336 0 4.704-.544 6.944-1.6A15.968 15.968 0 00512 496V176c0-26.464-21.536-48-48-48z" />
      </svg>
      View Responces
     </a>
    </div>
   </div>
  
  </div>
  <div class="main-container">
   <div class="main-header">
    <a class="menu-link-main" href="#">All Apps</a>
    <div class="header-menu">
     <a class="main-header-link " href="#">Accounts</a>
     <a class="main-header-link" href="#">Produvts</a>
     <a class="main-header-link" href="#">Events</a>
     <a class="main-header-link " href="#">Merch</a>
     <a class="main-header-link" href="#">Forums</a>
     <a class="main-header-link is-active" href="tous _rec.php">Reports</a>

    </div>
   </div>

        <table border="1" style="   width: 100%; height: 100%;">
                 <tr>
                     <th style="color:white;">ID</th>
                     <th style="color:white;">Email</th>
                     <th style="color: white;">Date</th>
                     <th style="color:white;">Subjet</th>
                     <th style="color: white;">Message</th>
                     
                     <th colspan="2" style="color:white;">Actions</th>
                 </tr>
                 <?php
                 foreach($listeReponses as $reponse){
                     ?>
                     <tr>
               <td style="color:white;"><?php echo $reponse['id_reponse']; ?></td>
               <td style="color:white;"><?php echo $reponse['mail_reponse']; ?></td>
				<td style="color:white;"><?php echo $reponse['date_reponse']; ?></td>
                <td style="color:white;"><?php echo $reponse['sujet_reponse']; ?></td>
				<td style="color:white;"><?php echo $reponse['description_reponse']; ?></td>
				<td>
					<form method="POST" action="modifierreponse.php">
						<input type="image" id="image" src="./images/modifier.png">
						<input type="hidden" value=<?PHP echo $reponse['id_reponse']; ?> name="id">
					</form>
				</td>
				<td>
                <form method="POST" action="supprimerreponse.php">
						<input type="image" id="image" src="./images/supprimer(2).png">
						<input type="hidden" value=<?PHP echo $reponse['id_reponse']; ?> name="id">
					</form>
					
				</td>
				
				
                </tr>
                <?php
                 }
                 ?>

                </table>
                </div>
 <div class="overlay-app"></div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>