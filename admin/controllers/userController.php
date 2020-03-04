<?php 
include ($_SERVER["DOCUMENT_ROOT"]."/php-home-market/model/user.php");
include "baseController.php";
class userController extends BaseController{
 public function login(){
     session_start();
     unset($_SESSION['user']);
      $user=new user();
    if(isset($_POST['login'])){  
        $user->setUsername($_POST['email']); 
        $user->setPassword($_POST['password']); 
        if($user->login()){
            $_SESSION['user']=$user->getUsername();
             header("Location:index.php");
        }
        else{
    setcookie('user-login-error','Email hoặc Mật Khẩu Sai',time()+1);
    header("Location:index.php?controller=user&&action=login");
        }
    }else $this->render('login');
 }
 public function resetpass(){
     
 }
 public function index(){
     $this->render('account');
 }
}
?>