<!doctype html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>Register</title>

    <link rel="icon" href="<?php echo base_url(); ?>public/riktheme/img/core-img/favicon.png">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/riktheme/style.css">

</head>

<body class="dark-color-overlay bg-img" style="background-image: url('<?php echo base_url(); ?>public/riktheme/img/bg-img/8.jpg');">
    <div id="preloader"></div>
    <div class="main-content- h-100vh">
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-sm-10 col-md-12 col-lg-9">
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
                                        <div>
                                            <h4 class="font-24 mt-0">Free Sign Up</h4>
                                            <p class="text-muted mb-4">Create a new account</p>
                                        </div>
                                        <?=$msg?>
                                        <?php echo form_open_multipart('admin/login/register_process',array("class"=>"form-horizontal")); ?>
                                            <div class="form-group">
                                                <label for="fullname">First Name</label>
                                                <input class="form-control" type="text" name="first_name" id="first_name" value="<?php echo ($this->input->post('first_name') ? $this->input->post('first_name') : ''); ?>" placeholder="Enter first name" required>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="fullname">Full Name</label>
                                                <input class="form-control" type="text" name="last_name" id="last_name" value="<?php echo ($this->input->post('last_name') ? $this->input->post('last_name') : ''); ?>" placeholder="Enter last name" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="emailaddress">Email address</label>
                                                <input class="form-control" type="email" name="email" id="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : ''); ?>" required placeholder="Enter your email">
                                            </div>

                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input class="form-control" type="password" name="password" id="password" value="<?php echo ($this->input->post('password') ? $this->input->post('password') : ''); ?>" required  placeholder="Enter your password">
                                            </div>

                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1" onchange="document.getElementById('submit').disabled = !this.checked;">
                                                    <label class="custom-control-label" for="customCheck1"><span class="font-16">I accept <a href="<?php echo base_url(); ?>public/riktheme/#" class="text-muted">Terms and Conditions</a></span></label>
                                                </div>
                                            </div>

                                            <div class="form-group mb-0 text-center">
                                                <button class="btn btn-primary btn-block" id="submit" type="submit" disabled> Sign Up </button>
                                            </div>

                                        <?php echo form_close(); ?>
                                        
                                        <a href="<?php echo site_url(); ?>/admin/login/index" class="text-dark float-right"><span class="font-12 text-primary">Back
                                        </span></a>
                                        
                                    </div>
                                </div>
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