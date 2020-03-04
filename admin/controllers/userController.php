<?php 
include ("model/user.php");
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
     $user=new user();     
     $this->render('account',$user->selectAll());
 }
 public function delete(){
     $user=new user();
     $user->setUsernameID($_GET['id']);
     $user->delete();
 }
}
?>