<?php session_start(); ?>
<?php require("C:\\xampp\htdocs\\foreal\controller\\config.php"); ?>
<?php
// connect to the database
// $pdo = config::getConnexion();

// REGISTER USER
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $username = $_POST['firstName'];
    $email = $_POST['email'];
    // $phone = $_POST['phone'];
    $password = $_POST['password'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $birthdate = $_POST['birthdate'];

    // first check the database to make sure
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM users WHERE email = :email";
    $stmt2 = $pdo->prepare($user_check_query);
    $stmt2->execute([
        ':email' => $email
    ]);
    $userCount = $stmt2->rowCount();
    if ($userCount != 0) { // if user exists
        echo ("email already exists");
    } else {
        // $password = md5($password_1); //encrypt the password before saving in the database
        $query = "INSERT INTO users (username, first_name ,last_name, email, password ,birthdate) VALUES (:username,:firstName,:lastName, :email, :password,:birthdate)";
        $stmt = $pdo->prepare($query);
        $stmt->execute([
            ':firstName' => $firstName,
            ':lastName' => $lastName,
            ':username' => $username,
            ':email' => $email,
            ':password' => $password,
            ':birthdate' => $birthdate
        ]);
    }
}
if (isset($_POST['login_user'])) {
    // receive all input values from the form

    $email = $_POST['email'];
    // $phone = $_POST['phone'];
    $password = $_POST['password'];


    // first check the database to make sure
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM users WHERE email = :email AND password = :password";
    $stmt2 = $pdo->prepare($user_check_query);
    $stmt2->execute([
        ':email' => $email,
        ':password' => $password

    ]);
    $userCount = $stmt2->rowCount();
    if ($userCount == 0) { // if user exists
        echo ("email doesn't exists");
    } else {
        // $password = md5($password_1); //encrypt the password before saving in the database
        //  $user = $stmt->fetch(PDO::FETCH_ASSOC);
        // $user_password_hash = $user['user_password'];
        // $user_name = $user['user_name'];
        // $user_role = $user['user_role'];
        // $user_status = $user['user_status'];
        echo ("email doesn't dsqdqsdqsd");

        header('Location: http://localhost/foreal/view/');
        die();
    }
}
