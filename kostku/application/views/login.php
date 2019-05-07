
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
                    class="login-form" method="post" 
                    action="<?php echo base_url('login/aksi_login'); ?>">                    
                    <div class="card mb-0">
                        <div class="card-body">
                            <?php if ($this->session->flashdata('gagallogin')): ?>
                                <div class="alert alert-danger" role="alert">
                                  <?php echo $this->session->flashdata('gagallogin'); ?>
                                </div>
                                <?php endif; ?>
                                
                            <div class="text-center mb-3">
                                <i class="icon-city icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1" style="font-size: 30px"></i>
                                <h5 class="mb-0">Login</h5>
                                <span class="d-block text-muted">Sistem Informasi Kostku</span>
                            </div>
                              <center> </center>
                            <div class="form-group form-group-feedback form-group-feedback-left">
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    placeholder="Username"
                                    name="username">
                                <div class="form-control-feedback">
                                    <i class="icon-user text-muted"></i>
                                </div>
                            </div>

                            <div class="form-group form-group-feedback form-group-feedback-left">
                                <input 
                                    type="password" 
                                    class="form-control"
                                    name="password" 
                                    placeholder="Password">
                                <div class="form-control-feedback">
                                    <i class="fas fa-unlock-alt text-muted"></i>
                                </div>
                            </div>
                            
                            

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Login<i class="icon-circle-right2 ml-2 ml-2"></i></button>
                            </div>
                        <div class="form-group">
                                <b>Username: admin</b> <br/>
                                <b>Password: admin</b>
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
