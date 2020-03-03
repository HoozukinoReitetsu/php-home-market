<?php 
include "../model/user.php";
$user=new user();
if($_GET["action"]='create'){
    $user->setUsername($_POST['first_name']);
    echo $user->getUsername();
}
?>