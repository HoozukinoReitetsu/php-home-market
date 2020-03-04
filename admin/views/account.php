<?php include"partial/header.php";
?>
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
       <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Tables</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">CusTommer</li>
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Basic Datatable</h5>
                                <a class="btn btn-primary" href="?controller=user&&action=create" role="button" style="  margin: 10px;">Create New CusTommer</a>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Username</th>
                                                <th>FirstName</th>
                                                <th>LastName</th>
                                                <th>Address</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>CreatedDate</th>
                                                <th>ModifiedDate</th>
                                                <th>edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($data as $user){?>
                                        <tr>
                                                <td><?php echo $user['Username']?></td>
                                                <td><?php echo $user['FirstName'];?></td>
                                                <td><?php echo $user['LastName'];?></td>
                                                <td><?php echo $user['Address'];?></td>
                                                <td><?php echo $user['Email'];?></td>
                                                <td><?php echo $user['Phone'];?></td>
                                                <td><?php echo $user['CreatedDate'];?></td>
                                                <td><?php echo $user['ModifiedDate'];?></td>
                                                <td>
                                                <a href="?controller=user&&action=edit&&id=<?php echo $user['UserID'];?>"><i class="fas fa-edit"></i></a>
                                                <a href="?controller=user&&action=delete&&id=<?php echo $user['UserID'];?>"><i class="fas fa-trash" onclick="OK(event)"></i></a>
                                                </td>
                                        </tr>
                                        <?php }?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <script>
        function OK(event) {
            var s=confirm('Xác nhận xóa người dùng');
            if(s==false) {
                event.preventDefault();
            }
        }
        
        </script>
   <?php include"partial/footer.php"?>