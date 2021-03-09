<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo base_url();?>assets/admin/images/ardhitama1.png" type="image/x-icon"/>
    <title>Login</title>

    <link rel="stylesheet" href="<?php echo base_url();?>assets/landing_page/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/landing_page/fonts/fontawesome/css/font-awesome.min.css">

</head>
<body>
     
        <img src="<?php echo base_url();?>assets/login/img/bg.jpg" alt="" style=" width: 100%; height: 100%; position: absolute; overflow: hidden;">
        
        <div class="footer m-4" style="position: fixed; left: 0; top: 0; width: 100%; text-align: left;">
            <a href="<?php echo site_url('/');?>" style="text-decoration:none"><i class="fa fa-arrow-left mr-2" aria-hidden="true"></i><span>landing page</span></a>
        </div>

        <div class="d-flex flex-row justify-content-center align-items-center" style=" height: 100vh; ">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-12 text-center">
                    
                    <div class="card border-secondary bg-transparent" style="border-radius: 50px 20px;">
                      <div class="card-body p-5">
                        <form action="<?php echo site_url('login/submit');?>" method="POST">
                            <div class="row my-1 mb-3 justify-content-center">
                                <img src="<?php echo base_url();?>assets/admin/images/ardhitama1.png" alt="" height=80>
                            </div>
                            <div class="row my-1">
                                <input type="text" class="form-control border-secondary" placeholder="Username" autocomplete="off" name="username">
                            </div>
                            <div class="row my-1">
                                <input type="password" class="form-control border-secondary"  placeholder="Password" name="password">
                            </div>
                            <div class="row mt-5">
                                <button type="submit" class="col-12 btn btn-secondary font-weight-bold input-login" name="login">Login <i class="fa fa-paper-plane ml-2" aria-hidden="true"></i></button>
                            </div>
                        </form>
                      </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer mb-5" style="position: fixed; left: 0; bottom: 0; width: 100%; color: #34495e; text-align: center;">
            <script>document.write(new Date().getFullYear());</script> <span class="ml-1">Ardhitama</span>
        </div>



<script src="<?php echo base_url();?>assets/landing_page/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url();?>assets/landing_page/js/bootstrap.min.js"></script>
</body>
</html>