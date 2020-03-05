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
 public function edit(){
     $user=new user();
     
     if(isset($_GET['id'])){
        $user->setUserID($_GET['id']);
        $data=$user->selectByID($user->getUserID());        
         if(isset($_POST['create'])){
             var_dump($_POST);
            if(($data['FirstName'])!=$_POST['fname']&& isset($_POST['fname'])) $user->update('FirstName',$_POST['fname']);
            if(($data['LastName'])!=$_POST['lname']&& isset($_POST['lname'])) $user->update('LastName',$_POST['lname']);
            if(($data['Password'])!=md5($_POST['password'])&& isset($_POST['password'])) $user->update('Password',md5($_POST['Password']));
            if(($data['Address'])!=md5($_POST['address'])&& isset($_POST['address'])) $user->update('Address',$_POST['address']);
            if(($data['Email'])!=md5($_POST['email'])&& isset($_POST['email'])) $user->update('Email',$_POST['email']);
            if(($data['Status'])!=md5($_POST['status'])&& isset($_POST['status'])) $user->update('Status',$_POST['status']);
            if(($data['permission'])!=$_POST['permission']&& isset($_POST['permission'])) $user->update('permission',$_POST['permission']);
            if(($data['Phone'])!=$_POST['phone']&& isset($_POST['phone'])) $user->update('Phone',$_POST['phone']);
            $user->update('ModifiedDate',date('H:i:s d-m-Y', time()));
             header('location:?controller=user&&action=index');
        }
         $this->render('editAccount',$data);       
     }else{
           if(isset($_POST['create'])){
            var_dump($_POST);
            $user->setFirstName($_POST['fname']);
            $user->setLastName($_POST['lname']);
            $user->setUsername($_POST['user']);
            $user->setPassword(md5($_POST['password']));
            $user->setEmail($_POST['email']);
            $user->setStatus($_POST['status']);
            $user->setPhone($_POST['phone']);
            $user->setPermission($_POST['permission']);
            $user->setCreatedDate(date('H:i:s d-m-Y', time()));
            $user->insert();
            header('location:?controller=user&&action=index');
           }
            $this->render('editAccount');
        }  
     
     
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