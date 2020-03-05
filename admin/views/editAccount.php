<?php include"partial/header.php";?>
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
                            <form class="form-horizontal" method="POST" action="?controller=user&&action=edit<?php if(isset($data['UserID']))echo "&&id=".$data['UserID'];?>" accept-charset="UTF-8">
                                <div class="card-body">
                                    <h4 class="card-title">Personal Info</h4>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">First Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="<?php if(isset($data['FirstName'])) echo $data['FirstName']?>" class="form-control" id="fname" name="fname" placeholder="First Name Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Last Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="<?php if(isset($data['FirstName'])) echo $data['LastName'];?>"class="form-control" id="lname"name="lname" placeholder="Last Name Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">UserName</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="username" name="user" placeholder="User Name Here"value="<?php  if(isset($data['Username']))
                                                echo $data['Username'];?>" <?php  if(isset($data['Username'])) echo "disabled"?> required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" name='password' class="form-control" id="lname" placeholder="Password Here" <?php  if(!isset($data['Username'])) echo "required"?>>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Phone</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="0<?php if(isset($data['Phone'])) echo $data['Phone']?>" class="form-control" id="phone" name="phone" placeholder="Phone Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Address</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="<?php  if(isset($data['Address'])) echo $data['Address'];?>" class="form-control" id="address" name="address" placeholder="Address Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">	Email </label>
                                        <div class="col-sm-9">
                                            <input type="text" value="<?php  if(isset($data['Email'])) echo $data['Email'];?>" class="form-control" id="email1" name="email" placeholder="	Email  Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">	Status </label>
                                        <div class="col-sm-9">
                                            <select id="status" name="status">
                                                <option value="1">Hiển thị</option>
                                                <option value="0">Ẩn</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">	Permission </label>
                                        <div class="col-sm-9">
                                            <select id="permission" name="permission">
                                                <option value="0">Custommer</option>
                                                <option value="1">Admin</option>
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