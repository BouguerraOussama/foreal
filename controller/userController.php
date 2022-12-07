<?php session_start(); ?>
<?php require("C:\\xampp\htdocs\\foreal\model\\config.php"); ?>
<?php


//Mailer Service Configuration
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '/xampp/htdocs/foreal/controller/PHPMailer/src/PHPMailer.php';
require '/xampp/htdocs/foreal/controller/PHPMailer/src/Exception.php';
require '/xampp/htdocs/foreal/controller/PHPMailer/src/SMTP.php';

//Load Composer's autoloader
// require '../controller/autoload.php';
//Create an instance; passing `true` enables exceptions
function sendEmail($to, $from, $subject, $message)
{
    $mail = new PHPMailer(true);
    //Server settings
    $mail->isSMTP(); //Send using SMTP
    $mail->Host = "smtp.gmail.com"; //Set the SMTP server to send through
    $mail->SMTPAuth = true; //Enable SMTP authentication
    $mail->Username = 'only.trades.tn@gmail.com'; //SMTP username
    $mail->Password = 'hbebdhacbzaamzoi'; //SMTP password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    //Recipients
    $mail->setFrom($from, 'OnlyTrades');
    $mail->addAddress($to); //Name is optional

    //Content
    $mail->isHTML(true); //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body = $message;
    //send email
    $mail->send();
}

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
        $user_nickname = $username;

        $d_user_nickname = base64_encode($user_nickname);

        // user nickname
        setcookie('_uiid_', $d_user_nickname, time() + 60 * 60 * 24, '/', '', '', true);
        $_SESSION['user_name'] = $username;
        $_SESSION['login'] = 'success';
        // $password = md5($password_1); //encrypt the password before saving in the database
        $hash = password_hash($password, PASSWORD_BCRYPT, ['cost' => 10]);
        $code = rand(1111, 9999);
        $query = "INSERT INTO users (username, first_name ,last_name, email, password ,birthdate,gender,verification_token) VALUES (:username,:firstName,:lastName, :email, :password,:birthdate,:gender,:verification_token)";
        $stmt = $pdo->prepare($query);
        $stmt->execute([
            ':firstName' => $firstName,
            ':lastName' => $lastName,
            ':username' => $username,
            ':email' => $email,
            ':password' => $hash,
            ':birthdate' => $birthdate,
            ':gender' => $gender,
            ':verification_token' => $code
        ]);
        $last_id = $pdo->lastInsertId();
        // userid
        $_SESSION['id'] = $last_id;
        $d_user_id = base64_encode($last_id);
        setcookie('_uid_', $d_user_id, time() + 60 * 60 * 24, '/', '', '', true);

        $message = '<div style="text-align: center;"><div style="color:#1c1421;font-size: 20px;"> Please click this button to verify your <b>OnlyTrades</b> account: </div > <br><br> <div style="background-color:#1c1421;border:none;color:white;padding: 20px;text-align: center;display: inline-block;font-size: 16px;margin: 3px 2px; border-radius: 8px;"> <a href=http://localhost/foreal/view/verify.php?code=' . $code .  '>  <i>Verify Account</i></a></div> <br><br> <em style="font-size: 20px;">Thank you for using OnlyTrades!</em></div>';
        sendEmail($email, "only.trades.tn@gmail.com", "Email Verification", $message);
        header('Location: http://localhost/foreal/view/');
        die();
    }
}
//edit user
if (isset($_POST['edit_user'])) {


    if (isset($_SESSION['id'])) {
        $u_id = $_SESSION['id'];
    } else {
        $u_id = -1;
    }
    $sql = "SELECT * FROM users WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':id' => $u_id
    ]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    //receive all input values from the form
    if (($_POST['username']) != null) {
        $username = $_POST['username'];
    } else {
        $username = $user['username'];
    }
    if (($_POST['email']) != null) {
        $email = $_POST['email'];
    } else {
        $email = $user['email'];
    }

    if (($_POST['lastName']) != null) {
        $lastName = $_POST['lastName'];
    } else {
        $lastName = $user['last_name'];
    }

    if (($_POST['firstName']) != null) {
        $firstName = $_POST['firstName'];
    } else {
        $firstName = $user['first_name'];
    }

    if (($_POST['password']) != null) {
        $password = $_POST['password'];
    } else {
        $password = $user['password'];
    }
    $user_nickname = $username;
    $d_user_nickname = base64_encode($user_nickname);
    // user nickname
    setcookie('_uiid_', $d_user_nickname, time() + 60 * 60 * 24, '/', '', '', true);
    $_SESSION['user_name'] = $username;
    $_SESSION['role'] = $user_role;
    $_SESSION['login'] = 'success';
    // $password = md5($password_1); //encrypt the password before saving in the database
    $hash = password_hash($password, PASSWORD_BCRYPT, ['cost' => 10]);
    $query = "UPDATE users SET username = :username, email = :email, first_name = :first_name, last_name = :last_name, password = :password WHERE id = :id";
    $stmt = $pdo->prepare($query);
    $stmt->execute([
        ':username' => $username,
        ':email' => $email,
        ':first_name' => $firstName,
        ':last_name' => $lastName,
        ':password' => $hash,
        ':id' => $user['id']
    ]);
    header('Location: http://localhost/foreal/view/');
    die();
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
        $user_status = $user['isBanned'];
        $hash = password_hash($password, PASSWORD_BCRYPT, ['cost' => 10]);
        if ($user_status == 1) {
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
            
            if ($user_role == 'ADMIN') {
                header('Location: http://localhost/foreal/view/signinAdmin.php');
                die();
            } else {
                $_SESSION['login'] = 'success';
                header('Location: http://localhost/foreal/view/');
                die();
            }
        } else {
            $error_password = "Wrong password!";
        }
    }
}

// LOGIN ADMIN
if (isset($_POST['login_admin'])) {
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
        $user_status = $user['isBanned'];
        $hash = password_hash($password, PASSWORD_BCRYPT, ['cost' => 10]);
        if ($user_status == 1) {
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
                $_SESSION['login'] = 'success';
                header('Location: http://localhost/foreal/view/userDashboard.php');
                die();
            } else {
                header('Location: http://localhost/foreal/view/signin.php');
                die();      
            }
        } else {
            $error_password = "Wrong password!";
        }
    }
}

//reset password email

if (isset($_POST['reset_pass_mail'])) {
    $email = trim($_POST['email']);
    
    $sql = "SELECT * FROM users WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':email' => $email
    ]);
    $count = $stmt->rowCount();
    if ($count == 0) {
        $error = "Wrong credentials!";
    } else if (
        $count > 1
    ) {
        $error = "Wrong credentials!";
    } else if ($count == 1) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        $message = '<div style="text-align: center;"><div style="color:#1c1421;font-size: 20px;"> Please click this button to be redirected to your reset password page: </div > <br><br> <div style="background-color:#1c1421;border:none;color:white;padding: 20px;text-align: center;display: inline-block;font-size: 16px;margin: 3px 2px; border-radius: 8px;"> <a href=http://localhost/foreal/view/resetPassword.php>  <i>Go to reset page</i></a></div> <br><br> <em style="font-size: 20px;">Thank you for using OnlyTrades!</em></div>';
        sendEmail($email, "only.trades.tn@gmail.com", "Reset your password", $message);
        $_SESSION['email'] = $email;     
    }
}

//reset password 


if (isset($_POST['reset_pass'])) {
    $password = trim($_POST['password']);
    $hash = password_hash($password, PASSWORD_BCRYPT, ['cost' => 10]);
    $query = "UPDATE users SET password = :password WHERE email = :email";
    $stmt = $pdo->prepare($query);
    $stmt->execute([
        ':password' => $hash,
        ':email' => $_SESSION['email']
    ]);
    header('Location: http://localhost/foreal/view/');
    die();
}
