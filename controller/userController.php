<?php session_start(); ?>
<?php require("C:\\xampp\htdocs\\foreal\model\\config.php"); ?>
<?php


// REGISTER USER
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $username = $_POST['firstName'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $birthdate = $_POST['birthdate'];

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
        $hash = password_hash($password, PASSWORD_BCRYPT, ['cost' => 10]);
        $query = "INSERT INTO users (username, first_name ,last_name, email, password ,birthdate,gender) VALUES (:username,:firstName,:lastName, :email, :password,:birthdate,:gender)";
        $stmt = $pdo->prepare($query);
        $stmt->execute([
            ':firstName' => $firstName,
            ':lastName' => $lastName,
            ':username' => $username,
            ':email' => $email,
            ':password' => $hash,
            ':birthdate' => $birthdate,
            ':gender' => $gender
        ]);
        header('Location: http://localhost/foreal/view/');
        die();
    }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $sql = "SELECT * FROM users WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':email' => $email
    ]);
    $count = $stmt->rowCount();
    if ($count == 0) {
        $error = "Wrong credentials!";
    } else if ($count > 1) {
        $error = "Wrong credentials!";
    } else if ($count == 1) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        $user_password_hash = $user['password'];
        $user_name = $user['username'];
        $user_role = $user['role'];
        $user_status = $user['status'];
        $hash = password_hash($password, PASSWORD_BCRYPT, ['cost' => 10]);
        if ($user_status == 0) {
            $error_ban = "user Banned! <br> Please contact the administration for more details. ";
        } else if (strcmp($hash, $password)) {
            $success = "Sign in successful!";
            $user_id = $user['id'];
            $user_nickname = $user['username'];
            $d_user_id = base64_encode($user_id);
            $d_user_nickname = base64_encode($user_nickname);
            // userid
            setcookie('_uid_', $d_user_id, time() + 60 * 60 * 24, '/', '', '', true);
            // user nickname
            setcookie('_uiid_', $d_user_nickname, time() + 60 * 60 * 24, '/', '', '', true);
            $_SESSION['user_name'] = $user_name;
            $_SESSION['id'] = $user['id'];
            $_SESSION['role'] = $user_role;
            $_SESSION['login'] = 'success';
            if ($user_role == 'ADMIN') {
                header('Location: http://localhost/foreal/view/back.html');
                die();
            } else {
                header('Location: http://localhost/foreal/view/');
                die();
            }
        } else {
            $error_password = "Wrong password!";
        }
    }
}
