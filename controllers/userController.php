<?php 
include ($_SERVER["DOCUMENT_ROOT"]."/php-home-market/model/user.php");
include "baseController.php";
class userController extends BaseController{
    public function register(){
        $user=new user();
    if(isset($_POST['Create'])){    
    $user->setFirstName($_POST['first_name']);
    $user->setLastName($_POST['last_name']);
    $user->setUsername($_POST['email']);
    $user->setEmail($_POST['email']); 
    $user->setPassword(md5($_POST['password']));
    $user->setCreatedDate(date('H:i:s d-m-Y', time()));
     if (mysqli_query(DB::connect(),$user->register())) {
            session_start();
     unset($_SESSION['user']);
     $_SESSION['user']=$user->getUsername();
            header("Location:index.php");
    } else {
    setcookie('user-error', 'Email Đã Được Sử Dụng', time() + 1);
     header("Location:index.php?controller=user&&action=register");
    }
    
    } 
    else{
        $this->render('register');
    }   
    
}
 public function login(){
     session_start();
     unset($_SESSION['user']);
      $user=new user();
    if(isset($_POST['login'])){  
        $user->setUsername($_POST['email']); 
        $user->setPassword(md5($_POST['password'])); 
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
}
?>