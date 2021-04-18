<?php

include 'connect.php';
ob_start();
session_start();


//admin kayıt
if (isset($_POST['signup'])) {
    $url="login.php";
    $user_name = $_POST['user_name'];
     $email = $_POST['email'];
      $password = $_POST['password'];
     $password2 = $_POST['password2'];

    //şifre uyuşma kontrolü
    if ($password == $password2) {
        //echo 'şifreler aynı';
        //şifre karakter kontrolü
        if (strlen($password) >= 6) {
            //echo 'başarılı';

            $admin_control = $db->prepare("SELECT * FROM user");
            $admin_control->execute();
            $has_admin = $admin_control->rowCount();
            if ($has_admin == 0) {
                $pass = sha1($password);
                $admin_signup = $db->prepare("INSERT INTO user SET
                user_name='$user_name',
                email='$email',
                password='$pass'");

                $insert = $admin_signup->execute();
                if ($insert) {
                     //echo 'başarılı';
                    $url = "login.php?status=ok&user_name=$user_name";
                } else {
                     //echo 'başarısız';
                     $url = "login.php?status=no#kayit";
                }
                
            } else {
                // echo 'kayıtlı admin mevcut';
                 $url = "login.php?register=hasadmin#kayit";
                }
                
        } else {
                //echo 'şifre kısa';
                $url = "login.php?register=lowchar#kayit";
                }
                
    } else {
                //echo 'şifreler farklı';
                $url = "login.php?register=inequal#kayit";
                }
                header("Location: ".$url);
}

//Admin  giriş
if (isset($_POST['login'])) {
    $user_name = $_POST['user_name'];
    $pass = sha1($_POST['password']);

    $login = $db->prepare("SELECT * FROM user WHERE user_name='$user_name' and password='$pass'");
    $login ->execute();

    $count = $login -> rowCount();

    if($count == 1){
        $_SESSION['user_name'] = $user_name;
        header("Location: index.php");
    }else{
        header("Location: login.php?login=no");
    }
    
}
