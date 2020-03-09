<?php include"partial/header.php";
?>
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Form Basic</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <form class="form-horizontal" method="POST" action="?controller=product&&action=edit<?php if(isset($data['ProductID']))echo "&&id=".$data['ProductID'];?>" accept-charset="UTF-8">
                                <div class="card-body">
                                    <h4 class="card-title">Personal Info</h4>
                                    <div class="form-group row">
                                        <p class="error col-sm-3 text-right control-label col-form-label" style="color:red;"><?php if(isset($data['err'])) echo $data['err'];?></p>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pname" class="col-sm-3 text-right control-label col-form-label">ProductName</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="<?php if(isset($data['ProductName'])) echo $data['ProductName']?>" class="form-control" id="pname" name="pname" placeholder="Product Name Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Product Image</label>
                                        <div class="col-sm-9">
                                            <input type="file" name='img'>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="description" class="col-sm-3 text-right control-label col-form-label">Description</label>
                                        <div class="col-sm-9">
                                            <textarea  class="form-control" id="description" name="description"placeholder="Decription"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="price" class="col-sm-3 text-right control-label col-form-label">Price</label>
                                        <div class="col-sm-2">
                                            <input type="number" name="price" min="0" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="PromotionPrice" class="col-sm-3 text-right control-label col-form-label">Promotion Price</label>
                                        <div class="col-sm-2">
                                            <input type="number" name='promotionPrice' class="form-control" id="promotionPrice">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="quantity" class="col-sm-3 text-right control-label col-form-label">Quantity</label>
                                        <div class="col-sm-2">
                                            <input type="number" name="quantity" min="1" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="eetail" class="col-sm-3 text-right control-label col-form-label">Detail</label>
                                        <div class="col-sm-9">
                                            <textarea  id="detail" name="detail" class="form-control"></textarea>
                                            <script>CKEDITOR.replace('detail');</script>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Status </label>
                                        <div class="col-sm-9">
                                            <select id="status" name="status">
                                                <option value="1">Hiển thị</option>
                                                <option value="0">Ẩn</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <input type="submit" class="btn btn-primary" name="create" value="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>                    
                    </div>                    
                </div>               
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
        </div>   
 <?php include"partial/footer.php"?>