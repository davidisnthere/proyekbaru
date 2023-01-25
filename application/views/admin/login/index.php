<!doctype html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Undex - Modern Admin Template</title>

    <link rel="icon" href="<?php echo base_url(); ?>public/riktheme/img/core-img/favicon.png">

    <link rel="stylesheet" href="<?php echo base_url(); ?>public/riktheme/style.css">

</head>

<body class="dark-color-overlay bg-img" style="background-image: url('<?php echo base_url(); ?>public/riktheme/img/bg-img/8.jpg');">
    <div id="preloader"></div>
    <div class="main-content- h-100vh">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-sm-10 col-lg-8">
                    <div class="middle-box">
                        <div class="card mb-0">
                            <div class="card-body p-4">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="xs-d-none">
                                            <img src="<?php echo base_url(); ?>public/riktheme/img/bg-img/6.png" alt="">
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="card-body-login mb-30">
                                           
                                        <h4 class="font-22 mb-30">Admin Sign In</h4>
                                        <?=$msg?>
                                         <?php echo form_open_multipart('admin/login/login_process',array("class"=>"form-horizontal")); ?>
   
                                            <div class="form-group">
                                                <label class="float-left" for="emailaddress">Email address</label>
                                                <input class="form-control" type="email" name="email" id="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : ''); ?>" required="" placeholder="Enter your email">
                                            </div>

                                            <div class="form-group">
                                                <label class="float-left" for="password">Password</label>
                                                <input class="form-control" type="password" name="password" id="password" value="<?php echo ($this->input->post('password') ? $this->input->post('password') : ''); ?>" required="" placeholder="Enter your password">
                                            </div>

                                            <div class="form-group mb-0 text-center">
                                                <button class="btn btn-primary btn-block" type="submit"> Log In </button>
                                            </div>

                                        <?php echo form_close(); ?>
                                    </div> <!-- end card-body -->
                                </div>
                                <!-- end card -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url(); ?>public/riktheme/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>public/riktheme/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>public/riktheme/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>public/riktheme/js/bundle.js"></script>

    <script src="<?php echo base_url(); ?>public/riktheme/js/default-assets/active.js"></script>

</body>


</html>
