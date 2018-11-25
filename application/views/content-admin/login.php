<!doctype html>
<html lang="en">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/additional/style-login.css">
  <title>Admin Login</title>
  <!------ Include the above in your HEAD tag ---------->

  <div class="container">
    
    <div class="row" id="pwd-container">
      <div class="col-md-4"></div>
      
      <div class="col-md-4">
        <section class="login-form">
          <form method="post" action="<?php echo base_url().'admin/login/auth' ?>">
            <img src="<?php echo base_url() ?>assets/photo/logo.png" class="img-responsive" alt="" />
            <input type="text" name="username" placeholder="Username" required class="form-control input-lg" autofocus="" value="<?php echo $this->session->flashdata('username') ?>" />
            
            <input type="password" class="form-control input-lg" name="password" placeholder="Password" required="" value="<?php echo $this->session->flashdata('password') ?>" />
            
            
            <div class="pwstrength_viewport_progress login-fail">
              <?php 
                echo $this->session->flashdata('error_msg_login');
              ?>
            </div>
            
            
            <button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Sign in</button>
            <div>
              <a href="#">reset password</a>
            </div>
            
          </form>
        </section>  
        </div>

    </div>    
    
    
  </div>

<script src="<?php echo base_url() ?>assets/additional/style-login.js" ></script>
</html>