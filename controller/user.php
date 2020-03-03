<?php 
include "../model/user.php";
$user=new user();
if($_GET["action"]='create'){
    $user->setFirstName($_POST['first_name']);
    $user->setLastName($_POST['last_name']);
    $user->setUsername($_POST['email']);
    $user->setEmail($_POST['email']); 
    var_dump($user);
}
?>