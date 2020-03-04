<?php 
include "baseController.php";
class pagesController extends BaseController{
    public function home(){
    $this->render('home');
  }
    
    public function error()
  {
    $this->render('home');
  }
}
?>