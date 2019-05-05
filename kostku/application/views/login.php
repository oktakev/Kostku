
<!DOCTYPE html>
<html lang="en">
<head>
                    <?php $this->load->view("admin/part/head.php") ?>
</head>

<body>

    <!-- Main navbar -->
    
    <!-- /main navbar -->


    <!-- Page content -->
    <div class="page-content login-cover">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content d-flex justify-content-center align-items-center">

                <!-- Login form -->
                <form 
                    class="login-form" 
                    data-parsley-validate="" method="post" 
                    action="" 
                    >
                    <input type="hidden" name="_token" value="tVLjmGswFViXOEa8YEv1vxQSh964RMq0RdnSbYyj">                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <i class="far fa-building text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1" style="font-size: 30px"></i>
                                <h5 class="mb-0">Login</h5>
                                <span class="d-block text-muted">Sistem Informasi Kostku</span>
                            </div>
                              <center> </center>
                            <div class="form-group form-group-feedback form-group-feedback-left">
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    placeholder="Username"
                                    name="username"
                                       data-parsley-required-message="Username tidak boleh kosong !"
                                     value=""
                                    >
                                <div class="form-control-feedback">
                                    <i class="fas fa-user text-muted"></i>
                                </div>
                            </div>

                            <div class="form-group form-group-feedback form-group-feedback-left">
                                <input 
                                    type="password" 
                                    class="form-control"
                                    name="password" 
                                    placeholder="Password"
                                    value=""
                                    data-parsley-required-message="Password tidak boleh kosong !"
                                    >
                                <div class="form-control-feedback">
                                    <i class="fas fa-unlock-alt text-muted"></i>
                                </div>
                            </div>
                            
                            

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Login<i class="fas fa-chevron-circle-right ml-2"></i></button>
                            </div>
                            
                          
                        </div>
                    </div>
                </form>
                <!-- /login form -->

            </div>
            <!-- /content area -->


            <!-- Footer -->
            
            <!-- /footer -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</body>
</html>
