<?php

include 'connect.php';
ob_start();
session_start();


//admin kayıt
if (isset($_POST['signup'])) {
    $url = "login.php";
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
    header("Location: " . $url);
}

//Admin  giriş
if (isset($_POST['login'])) {
    $user_name = $_POST['user_name'];
    $pass = sha1($_POST['password']);

    $login = $db->prepare("SELECT * FROM user WHERE user_name='$user_name' and password='$pass'");
    $login->execute();

    $count = $login->rowCount();

    if ($count == 1) {
        $_SESSION['user_name'] = $user_name;
        header("Location: index.php");
    } else {
        header("Location: login.php?login=no");
    }
}

//update && insert
//home insert
if (isset($_POST['insert_home'])) {
    $twitter = $_POST['twitter'];
    $instagram = $_POST['instagram'];
    $facebook = $_POST['facebook'];
    $youtube = $_POST['youtube'];
    $linkedin = $_POST['linkedin'];

    $insert_home = $db->prepare("INSERT INTO home SET
    twitter ='$twitter',
    instagram ='$instagram',
    youtube='$youtube',
    facebook ='$facebook',
    linkedin ='$linkedin'
    ");
    $insert_h = $insert_home->execute();
    if ($insert_h) {
        header("Location: home.php?insert_h=ok");
    } else {
        header("Location: home.php?insert_h=no");
    }
}

//home update
if (isset($_POST['update_home'])) {
    $twitter = $_POST['twitter'];
    $instagram = $_POST['instagram'];
    $facebook = $_POST['facebook'];
    $youtube = $_POST['youtube'];
    $linkedin = $_POST['linkedin'];

    $update_home = $db->prepare("UPDATE home SET
    twitter ='$twitter',
    instagram ='$instagram',
    youtube='$youtube',
    facebook ='$facebook',
    linkedin ='$linkedin' WHERE home_id=1
    ");
    $update_h = $update_home->execute();
    if ($update_h) {
        header("Location: home.php?update_h=ok");
    } else {
        header("Location: home.php?update_h=no");
    }
}

//contact_info insert
if (isset($_POST['insert_contact'])) {
    $contact_title = $_POST['contact_title'];
    $locationn = $_POST['locationn'];
    $email = $_POST['email'];
    $gsm = $_POST['gsm'];
    $twitter = $_POST['twitter'];
    $instagram = $_POST['instagram'];
    $youtube = $_POST['youtube'];
    $facebook = $_POST['facebook'];
    $linkedin = $_POST['linkedin'];
    $copyright = $_POST['copyright'];


    $insert_contact = $db->prepare("INSERT INTO contact_info SET
    contact_title ='$contact_title',
    locationn ='$locationn',
    copyright='$copyright',
    email ='$email',
    gsm ='$gsm',
    twitter ='$twitter',
    instagram ='$instagram',
    youtube ='$youtube',
    facebook ='$facebook',
    linkedin ='$linkedin'
    ");
    $insert_c = $insert_contact->execute();
    if ($insert_c) {
        header("Location: contact.php?insert_c=ok");
    } else {
        header("Location: contact.php?insert_c=no");
    }
}

//contact_info update
if (isset($_POST['update_contact'])) {
    $contact_title = $_POST['contact_title'];
    $locationn = $_POST['locationn'];
    $email = $_POST['email'];
    $gsm = $_POST['gsm'];
    $twitter = $_POST['twitter'];
    $instagram = $_POST['instagram'];
    $youtube = $_POST['youtube'];
    $facebook = $_POST['facebook'];
    $linkedin = $_POST['linkedin'];
    $copyright = $_POST['copyright'];


    $update_contact = $db->prepare("UPDATE contact_info SET
    contact_title ='$contact_title',
    locationn ='$locationn',
    copyright='$copyright',
    email ='$email',
    gsm ='$gsm',
    twitter ='$twitter',
    instagram ='$instagram',
    youtube ='$youtube',
    facebook ='$facebook',
    linkedin ='$linkedin' WHERE contact_id=1
    ");
    $update_c = $update_contact->execute();
    if ($update_c) {
        header("Location: contact.php?update_c=ok");
    } else {
        header("Location: contact.php?update_c=no");
    }
}

//about(profile) insert
if (isset($_POST['insert_profile'])) {
    $namee = $_POST['namee'];
    $birthday = $_POST['birthday'];
    $province = $_POST['province'];
    $job = $_POST['job'];
    $uni = $_POST['uni'];
    $web_site = $_POST['web_site'];

    $insert_profile = $db->prepare("INSERT INTO personal_info SET
    namee ='$namee',
    birthday ='$birthday',
    province ='$province',
    job ='$job',
    uni ='$uni',
    web_site ='$web_site'
    ");
    $insert_p = $insert_profile->execute();
    if ($insert_p) {
        header("Location: about_us.php?insert_p=ok");
    } else {
        header("Location: about_us.php?insert_p=no");
    }
}

//about(profile) update
if (isset($_POST['update_profile'])) {
    $namee = $_POST['namee'];
    $birthday = $_POST['birthday'];
    $province = $_POST['province'];
    $job = $_POST['job'];
    $uni = $_POST['uni'];
    $web_site = $_POST['web_site'];

    $update_profile = $db->prepare("UPDATE personal_info SET
    namee ='$namee',
    birthday ='$birthday',
    province ='$province',
    job ='$job',
    uni ='$uni',
    web_site ='$web_site' WHERE profile_id=1
    ");
    $update_p = $update_profile->execute();
    if ($update_p) {
        header("Location: about_us.php?update_p=ok");
    } else {
        header("Location: about_us.php?update_p=no");
    }
}

// skill insert
if (isset($_POST['insert_skills'])) {
    $skill_title = $_POST['skill_title'];
    $content = $_POST['content'];
    $first_skill = $_POST['first_skill'];
    $second_skill = $_POST['second_skill'];
    $third_skill = $_POST['third_skill'];
    $fourth_skill = $_POST['fourth_skill'];
    $fifth_skill = $_POST['fifth_skill'];
    $first_counter = $_POST['first_counter'];
    $second_counter = $_POST['second_counter'];
    $third_counter = $_POST['third_counter'];
    $fourth_counter = $_POST['fourth_counter'];
    $fifth_counter = $_POST['fifth_counter'];
   
    $insert_skill = $db -> prepare("INSERT INTO skills SET 
    skill_title='$skill_title',
    content='$content',
    first_skill ='$first_skill',
    second_skill ='$second_skill',
    third_skill ='$third_skill',
    fourth_skill ='$fourth_skill',
    fifth_skill ='$fifth_skill',
    first_counter ='$first_counter',
    second_counter ='$second_counter',
    third_counter ='$third_counter',
    fourth_counter ='$fourth_counter',
    fifth_counter ='$fifth_counter'
    ");
    $insert_s = $insert_skill->execute();
    if ($insert_s) {
        header("Location: about_us.php?insert_s=ok");
    } else {
        header("Location: about_us.php?insert_s=no");
    }
}

//skill update
if (isset($_POST['update_skills'])) {
    $skill_title = $_POST['skill_title'];
    $content = $_POST['content'];
    $first_skill = $_POST['first_skill'];
    $second_skill = $_POST['second_skill'];
    $third_skill = $_POST['third_skill'];
    $fourth_skill = $_POST['fourth_skill'];
    $fifth_skill = $_POST['fifth_skill'];
    $first_counter = $_POST['first_counter'];
    $second_counter = $_POST['second_counter'];
    $third_counter = $_POST['third_counter'];
    $fourth_counter = $_POST['fourth_counter'];
    $fifth_counter = $_POST['fifth_counter'];
   
    $update_skill = $db -> prepare("UPDATE skills SET 
    skill_title='$skill_title',
    content='$content',
    first_skill ='$first_skill',
    second_skill ='$second_skill',
    third_skill ='$third_skill',
    fourth_skill ='$fourth_skill',
    fifth_skill ='$fifth_skill',
    first_counter ='$first_counter',
    second_counter ='$second_counter',
    third_counter ='$third_counter',
    fourth_counter ='$fourth_counter',
    fifth_counter ='$fifth_counter' WHERE skill_id=1
    ");
    $update_s = $update_skill->execute();
    if ($update_s) {
        header("Location: about_us.php?update_s=ok");
    } else {
        header("Location: about_us.php?update_s=no");
    }
}

//about insert
if(isset($_POST['insert_about'])){
    $about_title = $_POST['about_title'];
    $bio = $_POST['bio'];
    $cv = $_POST['cv'];
    

    $insert_about = $db->prepare("INSERT INTO about_me SET
    about_title ='$about_title',
    bio ='$bio',
    cv='$cv' 
   
    ");
    $insert_a = $insert_about->execute();
    if ($insert_a) {
        header("Location: about_us.php?insert_a=ok");
    } else {
        header("Location: about_us.php?insert_a=no");
    }
}

//about update
if(isset($_POST['update_about'])){
    $about_title = $_POST['about_title'];
    $bio = $_POST['bio'];
    $cv = $_POST['cv'];
    

    $update_about = $db->prepare("UPDATE about_me SET
    about_title ='$about_title',
    bio ='$bio',
    cv='$cv' 
    WHERE about_id=1
    ");
    $update_a = $update_about->execute();
    if ($update_a) {
        header("Location: about_us.php?update_a=ok");
    } else {
        header("Location: about_us.php?update_a=no");
    }
}

//insert settings
if (isset($_POST['insert_settings'])) {
    $site_title = $_POST['site_title'];
    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $picture = $_POST['picture'];

    $insert_settings = $db->prepare("INSERT INTO site_settings SET
    site_title ='$site_title',
    title='$title',
    subtitle='$subtitle',
    picture='$picture'
    
    ");
    $insert_set = $insert_settings->execute();
    if ($insert_set) {
        header("Location: settings.php?insert_set=ok");
    } else {
        header("Location: settings.php?insert_set=no");
    }
}

//update settings
if (isset($_POST['update_settings'])) {
    $site_title = $_POST['site_title'];
    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $picture = $_POST['picture'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    if ($password == $password2) {
        if (strlen($password) >=6) {
            $pass1 = sha1($password);
            $newpassword = $db->prepare("UPDATE user SET password='$pass1' ");
            $updatepass = $newpassword->execute();
        }
    }
    $update_settings = $db->prepare("UPDATE site_settings SET 
            site_title ='$site_title',
            title='$title',
            subtitle='$subtitle',
            picture='$picture'
            
            WHERE settings_id=1
            ");
    $update_set = $update_settings->execute();

    if ($update_set and $updatepass) {
        header("Location: settings.php?update_set=ok");
    } else {
        header("Location: settings.php?update_set=no");
    }
}