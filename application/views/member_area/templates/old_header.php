<!DOCTYPE html>
<html lang="en">
	<head>
		<title>X-Panel</title>
	    <meta charset="utf-8">
	    <meta name="description" content="Bisnis Financial Security">
        <meta name="keywords" content="bisnis,financial,security,Geronimo & Shang Xiang">
        <meta name="author" content="Geronimo & Shang Xiang">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
  		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  		<script src="http://cdn.ckeditor.com/4.8.0/standard-all/ckeditor.js"></script>
  		<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/images/16.png">
  		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
		<link href="<?php echo base_url(); ?>assets/material/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/material/style.css" rel="stylesheet">   

	</head>
	<body>
		<nav class="navbar navbar-default ">
		  	<div class="container-fluid">
		    	<div class="navbar-header">
		      		<a class="navbar-brand" href="<?php echo base_url(); ?>"></a>
		    	</div>
		    	<ul class="nav navbar-nav">
		      		<li><a href="<?php echo base_url(); ?>member">Manage Profile</a></li>
		      		<li><a href="<?php echo base_url(); ?>material">Learning Hub </a></li>
		      		<li><a href="<?php echo base_url(); ?>password">Change Password</a></li>
		      		
		      		<?php
		      		if($_SESSION['id'] == 1) {
			      		echo "
			      		<li><a href=".base_url()."users>User Verification</a></li>
			      		<li><a href=".base_url()."success>Success Story</a></li>
			      		<li><a href=".base_url()."products>Products</a></li>
			      		<li><a href=".base_url()."posts>Articles</a></li>
					<li><a href=".base_url()."learning>Material Learning</a></li>
					<li><a href=".base_url()."schedule>Event Schedule</a></li>
					<li><a href=".base_url()."hit>Hit Counter</a></li>
					";
				}?>
		      	</ul>
		    	<ul class="nav navbar-nav navbar-right">
		    	   
		      		<li><a href="<?php echo base_url(); ?>logout">Logout</a></li>
		      	</ul>
		  	</div>
		</nav>
        
		<div class="container">
