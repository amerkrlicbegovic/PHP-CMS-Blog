<?php require_once ("init.php"); ?>

<?php
if($session->is_signed_in()) {
    redirect("index.php");
}

if (issset($_POST['submit'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);


    if ($user_found) {
        $session->login($user_found);
        redirect('index.php');
    } else {
        $the_massage = "Your password or username are incorrect";
    }
}
else{
    $username="";
    $password="";

}