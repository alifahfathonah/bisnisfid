<?php
if ($this->session->userdata['logged_in'] === TRUE) {
  
} else {
   header("location: signin");
}
?>
<!DOCTYPE html>

<html>

  <head>

    <title>X-Panel</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
      $page_scripts = array("toolsaids", "users", "learning", "hit", "password");
      if(!in_array($this->uri->segment(1),$page_scripts))
        echo "<script src='http://cdn.ckeditor.com/4.8.0/standard-all/ckeditor.js'></script>";
    ?>
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/images/16.png">

    <!-- Bootstrap -->

    <link href='<?php echo base_url();?>assets/xp/bootstrap/css/bootstrap.min.css' rel='stylesheet'>

    <!-- styles -->

    <link href='<?php echo base_url();?>assets/xp/css/styles.css' rel='stylesheet'>

    <?php 

      $slug = $this->uri->segment(1);

      if($slug == "material" or $slug == "section_b"){ ?>

      

      <link href="<?php echo base_url();?>assets/material/style.css" rel="stylesheet">

    <?php } ?>

    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>

      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

    <![endif]-->

  </head>

  <body>

    <div class="header">

       <div class="container">

          <div class="row">

             <div class="col-md-5">

                <!-- Logo -->

                <div class="logo">

                   <h1><a href="<?php echo base_url(); ?>member">X-Panel</a></h1>

                </div>

             </div>

             <div class="col-md-5">

                <div class="row">

                  <div class="col-lg-12">

                    <div class="input-group form">

                        

                    </div>

                  </div>

                </div>

             </div>

             <div class="col-md-2">

                <div class="navbar navbar-inverse" role="banner">

                    <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">

                      <ul class="nav navbar-nav">

                        <li class="dropdown">

                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>

                          <ul class="dropdown-menu animated fadeInUp">

                           

                            <li><?= anchor('members/logout', 'Logout', 'title="signout"'); ?></li>

                          </ul>

                        </li>

                      </ul>

                    </nav>

                </div>

             </div>

          </div>

       </div>

  </div>



    <div class="page-content">

      <div class="row">

      <div class="col-md-2">

        <div class="sidebar content-box" style="display: block;">

                <ul class="nav">

                    <!-- Main menu -->

                    <li><a href="<?php echo base_url(); ?>member"><i class='glyphicon glyphicon-cog'></i>  Manage Profile</a></li>

                    <li><a href="http://learning.financialsecurity.id"><i class='glyphicon glyphicon-book'></i>  Learning Hub </a></li>

                    <li><a href="<?php echo base_url(); ?>toolaids"><i class='glyphicon glyphicon-wrench'></i>  Tool Aids </a></li>

                    <?php

                    if($_SESSION['id'] == 1) {

                      echo "

                      <li><a href=".base_url()."users><i class='glyphicon glyphicon-user'></i> User Verification</a></li>

                      <li><a href=".base_url()."success><i class='glyphicon glyphicon-pencil'></i> Success Story</a></li>

                      <li><a href=".base_url()."products><i class='glyphicon glyphicon-list'></i> Products</a></li>

                      <li><a href=".base_url()."posts><i class='glyphicon glyphicon-file'></i> Articles</a></li>

                      <li><a href=".base_url()."learning><i class='glyphicon glyphicon-list-alt'></i> Material Learning</a></li>

                      <li><a href=".base_url()."schedule><i class='glyphicon glyphicon-calendar'></i> Event Schedule</a></li>

                      <li><a href=".base_url()."hit><i class='glyphicon glyphicon-signal'></i> Hit Counter</a></li>

                      ";

                    }?>

                   
                    <li><a href="<?php echo base_url(); ?>password"><i class='glyphicon glyphicon-lock'></i>  Change Password</a></li>
                    

                </ul>

             </div>

      </div>

      <div class="col-md-10">

        <div class="row">

          <div class="col-md-12">

            <?php 
              if($this->session->flashdata('upload_file')){
                echo "<div class='alert alert-success'><p>".$this->session->flashdata('upload_file')."</p></div> ";
              }
              if($this->session->flashdata('upload_video')){
                echo "<div class='alert alert-success'><p>".$this->session->flashdata('upload_video')."</p></div> ";
              }
              if($this->session->flashdata('failed_upload_file')){
                echo "<div class='alert alert-danger'><p>".$this->session->flashdata('failed_upload_file')."</p></div> ";
              }
              if($this->session->flashdata('update_file')){
                echo "<div class='alert alert-success'><p>".$this->session->flashdata('update_file')."</p></div> ";
              }
              if($this->session->flashdata('update_video')){
                echo "<div class='alert alert-success'><p>".$this->session->flashdata('update_video')."</p></div> ";
              }
              if($this->session->flashdata('delete_file')){
                echo "<div class='alert alert-success'><p>".$this->session->flashdata('delete_file')."</p></div> ";
              }
              if($this->session->flashdata('delete_video')){
                echo "<div class='alert alert-success'><p>".$this->session->flashdata('delete_video')."</p></div> ";
              }
               if($this->session->flashdata('success')){
                echo "<div class='alert alert-success'><p>".$this->session->flashdata('success')."</p></div> ";
              }
               if($this->session->flashdata('failed')){
                echo "<div class='alert alert-danger'><p>".$this->session->flashdata('failed')."</p></div> ";
              }
              if(validation_errors() == true){
                echo "<div class='alert alert-danger'><p>".validation_errors()."</p></div>";
              }
            ?>
