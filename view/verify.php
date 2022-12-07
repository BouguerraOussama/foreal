<?php session_start(); ?>
<?php require("C:\\xampp\htdocs\\foreal\model\\config.php"); ?>
<?php

if (isset($_GET['code'])) {

    $code = $_GET['code'];

    $query = "UPDATE users SET isVerified='1' WHERE verification_token =$code ";
    $stmt = $pdo->prepare($query);

    if ( $stmt->execute()) {
        echo "Your account is verified";
        header('Location: http://localhost/foreal/view/');
        die();
    }
} else {

    $message = "Wrong url";
}

?>

