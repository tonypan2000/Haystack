<?php
    if(isset($_POST['name']) && !empty($_POST['name'])
    AND isset($_POST['email']) && !empty($_POST['email'])
    AND isset($_POST['school']) && !empty($_POST['school'])){
        // Form Submited
    }
    $name = mysql_escape_string($_POST['name']);
    $email = mysql_escape_string($_POST['email']);
    if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)){
      $msg = 'The email you have entered is invalid, please try again.';
    } else{
      $msg = 'Your account has been made, <br /> please verify it by clicking the activation link that has been send to your email.';
    }
?>
