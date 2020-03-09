<?php 
include ("model/product.php");
include "baseController.php";
class productController extends BaseController{
    public function index(){
        $product=new product();
        $data=$product->selectAll();
        $this->render('product',$data);
    }
    public function edit(){
        if(isset($_GET['id'])){

        }else{
            if(isset($_POST['create'])){
                $data=$_POST['detail'];
                echo($data);
                die();
            }else{
                $this->render('editProduct');
            }
            
        }
    }
}
?>