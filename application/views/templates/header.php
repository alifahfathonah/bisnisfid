<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="Bisnis Financial Security">
    <meta name="keywords" content="bisnis,financial,security,Geronimo & Shang Xiang">
    <meta name="author" content="Geronimo & Shang Xiang">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Univision Bisnis</title>
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/images/16.png">
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/components.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/icons.css">
    <link rel="stylesheet" href="http://produk.financialsecurity.id/assets/css/responsee.css">
     <link rel="stylesheet" href="<?php echo base_url(); ?>assets/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/owl-carousel/owl.theme.css">     
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/template-style.css">
    <link href="<?php echo base_url(); ?>assets/font/font1.css" rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url(); ?>assets/font/font2.css" rel='stylesheet' type='text/css'>
  
        <script src="<?php echo base_url(); ?>assets/js/jquery-1.8.3.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery-ui.min.js"></script> 
    <style>

	.img-s {
	  border-radius: 50%;
	  width: 100px;
	  margin-right: 12px;
	} 
	
	.img-s2 {
	  border-radius: 50%;
	  width: 100px;

	} 
	    p.social a.tw{
        width: 28px;
        height: 28px;
        background: url('http://bisnis.financialsecurity.id/assets/img/social.png') left top no-repeat;
        margin-right: 8px;
        float: left;
        }
        
        p.social a.fb{
        width: 28px;
        height: 28px;
        background: url('http://bisnis.financialsecurity.id/assets/img/social.png') -36px top no-repeat;
        float: left;
        margin-right: 8px;
        }
        
        p.social a.li{
        width: 28px;
        height: 28px;
        background: url('http://bisnis.financialsecurity.id/assets/img/social.png') -72px top no-repeat;
        float: left;
        }
        
        p.social a.ig{
        width: 33px;
        height: 28px;
        background: url('http://bisnis.financialsecurity.id/assets/img/social.png') -100px top no-repeat;
        float: left;
        }
        
        p.social a.pa{
        width: 33px;
        height: 28px;
        background: url('http://bisnis.financialsecurity.id/assets/img/social.png') -133px top no-repeat;
        float: left;
        }
        
        p.social a.te{
        width: 33px;
        height: 28px;
        background: url('http://bisnis.financialsecurity.id/assets/img/social.png') -167px top no-repeat;
        float: left;
        }
        
        p.social a.wa{
        width: 33px;
        height: 28px;
        background: url('http://bisnis.financialsecurity.id/assets/img/social.png') -200px top no-repeat;
        float: left;
        }
        
        p.social a.tw:hover{
        width: 28px;
        height: 28px;
        background: url('http://bisnis.financialsecurity.id/assets/img/social.png') left bottom no-repeat;
        float: left;
        }
        
        p.social a.fb:hover{
        width: 28px;
        height: 28px;
        background: url('http://bisnis.financialsecurity.id/assets/img/social.png') -36px bottom no-repeat;
        float: left;
        }
        
        p.social a.li:hover{
        width: 28px;
        height: 28px;
        background: url('http://bisnis.financialsecurity.id/img/social.png') -72px bottom no-repeat;
        float: left;
        }
        
        p.social a.ig:hover{
        width: 33px;
        height: 28px;
        background: url('http://bisnis.financialsecurity.id/assets/img/social.png') -100px bottom no-repeat;
        float: left;
        }
        
        p.social a.pa:hover{
        width: 33px;
        height: 28px;
        background: url('http://bisnis.financialsecurity.id/assets/img/social.png') -133px bottom no-repeat;
        float: left;
        }
        
        p.social a.te:hover{
        width: 33px;
        height: 28px;
        background: url('http://bisnis.financialsecurity.id/assets/img/social.png') -167px bottom no-repeat;
        float: left;
        }
        
        p.social a.wa:hover{
        width: 33px;
        height: 28px;
        background: url('http://bisnis.financialsecurity.id/assets/img/social.png') -200px bottom no-repeat;
        float: left;
        
	}
	</style>
    
  </head>
  
  <body class="size-1140">
  	<!-- PREMIUM FEATURES BUTTON -->
  	<a href="<?php if(isset($agent)) echo "http://bisnis.financialsecurity.id/about/".$agent['username'];?>" class="hide-s" style="position:fixed;top:120px;right:-14px;z-index:10;"><img class="img-s" src="<?php echo base_url(); ?>assets/agents/<?php if(isset($agent)) echo $agent['image'];?>" alt=""></a>
    <!-- HEADER -->
    <header class="position-absolute">    
      <!-- Top Navigation -->
      <nav class="background-transparent background-transparent-hightlight full-width sticky">
        <div class="s-12 l-2">
          <a href="<?php echo base_url(); ?>index.html" class="logo">
            <!-- Logo White Version -->
            <img class="logo-white" src="<?php echo base_url(); ?>assets/img/logo.png" alt="">
            <!-- Logo Dark Version -->
            <img class="logo-dark" src="<?php echo base_url(); ?>assets/img/logo-dark.png" alt="">
          </a>
        </div>
        <div class="top-nav s-12 l-10">
          <p class="nav-text"></p>
          <ul class="right chevron">
            <li>
                <a href="
                  <?php 
                  $slug1  = $this->uri->segment(1); 
                  $slug2  = $this->uri->segment(2); 
                  $slug3  = $this->uri->segment(3); 
                    if($slug1 == "about" AND $slug2 != "") {
                      $pages = base_url().$slug2;

                    }elseif($slug1 == "contacts" AND $slug2 != "") {
                      $pages = base_url().$slug2;

                    }elseif($slug1 == "tools" AND $slug2 != "") {
                      $pages = base_url().$slug2;

                    }elseif($slug1 == "sdetail" AND $slug2 != "") {
                      $pages = base_url().$slug2;

                    }elseif($slug1 == "gallery" AND $slug2 == "view") {
                      $pages = base_url();

                    }elseif($slug1 == "gallery" AND $slug2 != "") {
                      $pages = base_url().$slug2;

                    }elseif($slug1 == "story" AND $slug2 == "view") {
                      $pages = base_url();

                    }elseif($slug1 == "story" AND $slug2 != "" AND $slug3 != "") {
                      $pages = base_url().$slug2;

                    }elseif($slug1 == "story" AND $slug2 != "" AND $slug3 == "") {
                      $pages = base_url();

                    }elseif($slug1 == "contacts" OR $slug1 == "tools" OR $slug1 == "sdetail" OR $slug1 == "gallery" OR $slug1 == "about" OR $slug1 == "forgot" OR $slug1 == "signin" OR $slug1 == "signup") {
                     $pages = base_url();

                    }else{
                      $pages = base_url().$slug1;
                    }
                    echo $pages;
                  ?>
                  ">Home
                </a>
            </li>
            
            <li><a>Success Story</a>
              <ul>
                <li>
                  <a href="<?php 
                  $slug1  = $this->uri->segment(1); 
                  $slug2  = $this->uri->segment(2); 
                  $slug3  = $this->uri->segment(3); 
                    if($slug1 == "about" AND $slug2 != "") {
                     $pages = base_url()."story/".$slug2."/newbp";

                    }elseif($slug1 == "story" AND $slug2 == "view") {
                      $pages = base_url()."story/newbp";

                    }elseif($slug1 == "gallery" AND $slug2 == "view") {
                      $pages = base_url()."story/newbp";

                    }elseif($slug1 == "contacts" AND $slug2 != "") {
                     $pages = base_url()."story/".$slug2."/newbp";

                    }elseif($slug1 == "tools" AND $slug2 != "") {
                     $pages = base_url()."story/".$slug2."/newbp";

                    }elseif($slug1 == "sdetail" AND $slug2 != "") {
                     $pages = base_url()."story/".$slug2."/newbp";

                    }elseif($slug1 == "gallery" AND $slug2 != "") {
                     $pages = base_url()."story/".$slug2."/newbp";

                    }elseif($slug1 == "story" AND $slug2 != "" AND $slug3 != "") {
                      $pages = base_url()."story/".$slug2."/newbp";

                    }elseif($slug1 == "story" AND $slug2 != "" AND $slug3 == "") {
                      $pages = base_url()."story/newbp";

                    }elseif($slug1 == "contacts" OR $slug1 == "tools" OR $slug1 == "sdetail" OR $slug1 == "gallery" OR $slug1 == "about" OR $slug1 == "forgot" OR $slug1 == "signin" OR $slug1 == "signup" OR $slug1 == "") {
                      $pages = base_url()."story/newbp";

                    }else{
                      $pages = base_url()."story/".$slug1."/newbp";
                    }
                    echo $pages;
                  ?>">
                  Emerald BP
                  </a>
                </li>
                <li>
                  <a href="<?php 
                  $slug1  = $this->uri->segment(1); 
                  $slug2  = $this->uri->segment(2); 
                  $slug3  = $this->uri->segment(3); 
                    if($slug1 == "about" AND $slug2 != "") {
                     $pages = base_url()."story/".$slug2."/sbp";

                    }elseif($slug1 == "story" AND $slug2 == "view") {
                      $pages = base_url()."story/sbp";

                    }elseif($slug1 == "gallery" AND $slug2 == "view") {
                      $pages = base_url()."story/sbp";

                    }elseif($slug1 == "contacts" AND $slug2 != "") {
                     $pages = base_url()."story/".$slug2."/sbp";

                    }elseif($slug1 == "tools" AND $slug2 != "") {
                     $pages = base_url()."story/".$slug2."/sbp";

                    }elseif($slug1 == "sdetail" AND $slug2 != "") {
                     $pages = base_url()."story/".$slug2."/sbp";

                    }elseif($slug1 == "gallery" AND $slug2 != "") {
                     $pages = base_url()."story/".$slug2."/sbp";

                    }elseif($slug1 == "story" AND $slug2 != "" AND $slug3 != "") {
                      $pages = base_url()."story/".$slug2."/sbp";

                    }elseif($slug1 == "story" AND $slug2 != "" AND $slug3 == "") {
                      $pages = base_url()."story/sbp";

                    }elseif($slug1 == "contacts" OR $slug1 == "tools" OR $slug1 == "sdetail" OR $slug1 == "gallery" OR $slug1 == "about" OR $slug1 == "forgot" OR $slug1 == "signin" OR $slug1 == "signup" OR $slug1 == "") {
                      $pages = base_url()."story/sbp";

                    }else{
                      $pages = base_url()."story/".$slug1."/sbp";
                    }
                    echo $pages;
                  ?>">
                Diamond BP</a></li>
                <li>
                <a href="<?php 
                  $slug1  = $this->uri->segment(1); 
                  $slug2  = $this->uri->segment(2); 
                  $slug3  = $this->uri->segment(3); 
                    if($slug1 == "about" AND $slug2 != "") {
                     $pages = base_url()."story/".$slug2."/mdit";

                    }elseif($slug1 == "story" AND $slug2 == "view") {
                      $pages = base_url()."story/mdit";

                    }elseif($slug1 == "gallery" AND $slug2 == "view") {
                       $pages = base_url()."story/mdit";
                    }elseif($slug1 == "contacts" AND $slug2 != "") {
                     $pages = base_url()."story/".$slug2."/mdit";

                    }elseif($slug1 == "tools" AND $slug2 != "") {
                     $pages = base_url()."story/".$slug2."/mdit";

                    }elseif($slug1 == "contacts" AND $slug2 != "") {
                     $pages = base_url()."story/".$slug2."/mdit";

                    }elseif($slug1 == "sdetail" AND $slug2 != "") {
                     $pages = base_url()."story/".$slug2."/mdit";

                    }elseif($slug1 == "gallery" AND $slug2 != "") {
                     $pages = base_url()."story/".$slug2."/mdit";

                    }elseif($slug1 == "story" AND $slug2 != "" AND $slug3 != "") {
                      $pages = base_url()."story/".$slug2."/mdit";

                    }elseif($slug1 == "story" AND $slug2 != "" AND $slug3 == "") {
                      $pages = base_url()."story/mdit";

                    }elseif($slug1 == "contacts" OR $slug1 == "tools" OR $slug1 == "sdetail" OR $slug1 == "gallery" OR $slug1 == "about" OR $slug1 == "forgot" OR $slug1 == "signin" OR $slug1 == "signup" OR $slug1 == "") {
                      $pages = base_url()."story/mdit";

                    }else{
                      $pages = base_url()."story/".$slug1."/mdit";
                    }
                    echo $pages;
                  ?>">
                Executive BP</a></li>
                <li>
                <a href="<?php 
                  $slug1  = $this->uri->segment(1); 
                  $slug2  = $this->uri->segment(2); 
                  $slug3  = $this->uri->segment(3); 
                    if($slug1 == "about" AND $slug2 != "") {
                     $pages = base_url()."story/".$slug2."/ddbp";

                    }elseif($slug1 == "story" AND $slug2 == "view") {
                      $pages = base_url()."story/ddbp";

                    }elseif($slug1 == "gallery" AND $slug2 == "view") {
                       $pages = base_url()."story/ddbp";
                    
                    }elseif($slug1 == "contacts" AND $slug2 != "") {
                     $pages = base_url()."story/".$slug2."/ddbp";

                    }elseif($slug1 == "tools" AND $slug2 != "") {
                     $pages = base_url()."story/".$slug2."/ddbp";

                    }elseif($slug1 == "sdetail" AND $slug2 != "") {
                     $pages = base_url()."story/".$slug2."/ddbp";

                    }elseif($slug1 == "gallery" AND $slug2 != "") {
                     $pages = base_url()."story/".$slug2."/ddbp";

                    }elseif($slug1 == "story" AND $slug2 != "" AND $slug3 != "") {
                      $pages = base_url()."story/".$slug2."/ddbp";

                    }elseif($slug1 == "story" AND $slug2 != "" AND $slug3 == "") {
                      $pages = base_url()."story/ddbp";

                    }elseif($slug1 == "contacts" OR $slug1 == "tools" OR $slug1 == "sdetail" OR $slug1 == "gallery" OR $slug1 == "about" OR $slug1 == "forgot" OR $slug1 == "signin" OR $slug1 == "signup" OR $slug1 == "") {
                      $pages = base_url()."story/ddbp";

                    }else{
                      $pages = base_url()."story/".$slug1."/ddbp";
                    }
                    echo $pages;
                  ?>">
                Double Diamond BP</a></li>
                <li>
                  <a href="<?php 
                    $slug1  = $this->uri->segment(1); 
                    $slug2  = $this->uri->segment(2); 
                    $slug3  = $this->uri->segment(3); 
                      if($slug1 == "about" AND $slug2 != "") {
                       $pages = base_url()."story/".$slug2."/tdbp";

                      }elseif($slug1 == "story" AND $slug2 == "view") {
                        $pages = base_url()."story/tdbp";

                      }elseif($slug1 == "gallery" AND $slug2 == "view") {
                         $pages = base_url()."story/tdbp";
                      
                      }elseif($slug1 == "contacts" AND $slug2 != "") {
                       $pages = base_url()."story/".$slug2."/tdbp";

                      }elseif($slug1 == "tools" AND $slug2 != "") {
                       $pages = base_url()."story/".$slug2."/tdbp";

                      }elseif($slug1 == "sdetail" AND $slug2 != "") {
                       $pages = base_url()."story/".$slug2."/tdbp";

                      }elseif($slug1 == "gallery" AND $slug2 != "") {
                       $pages = base_url()."story/".$slug2."/tdbp";

                      }elseif($slug1 == "story" AND $slug2 != "" AND $slug3 != "") {
                        $pages = base_url()."story/".$slug2."/tdbp";

                      }elseif($slug1 == "story" AND $slug2 != "" AND $slug3 == "") {
                        $pages = base_url()."story/tdbp";

                      }elseif($slug1 == "contacts" OR $slug1 == "tools" OR $slug1 == "sdetail" OR $slug1 == "gallery" OR $slug1 == "about" OR $slug1 == "forgot" OR $slug1 == "signin" OR $slug1 == "signup" OR $slug1 == "") {
                        $pages = base_url()."story/tdbp";

                      }else{
                        $pages = base_url()."story/".$slug1."/tdbp";
                      }
                      echo $pages;
                    ?>">
                  Triple Diamond BP</a></li>
              </ul>
            </li>
            
            <li>
              <a href="
                <?php 
                  $slug1  = $this->uri->segment(1); 
                  $slug2  = $this->uri->segment(2); 
                    
                   if($slug1 == "about" AND $slug2 != "") {
                      $pages = base_url()."about/".$slug2;

                    }elseif($slug1 == "story" AND $slug2 == "view") {
                       $pages = base_url()."about/";

                    }elseif($slug1 == "gallery" AND $slug2 == "view") {
                       $pages = base_url()."about";

                    }elseif($slug1 == "contacts" AND $slug2 != "") {
                      $pages = base_url()."about/".$slug2;

                    }elseif($slug1 == "tools" AND $slug2 != "") {
                      $pages = base_url()."about/".$slug2;

                    }elseif($slug1 == "gallery" AND $slug2 != "") {
                      $pages = base_url()."about/".$slug2;

                    }elseif($slug1 == "sdetail" AND $slug2 != "") {
                      $pages = base_url()."about/".$slug2;

                    }elseif($slug1 == "story" AND $slug2 != "" AND $slug3 != "") {
                      $pages = base_url()."about/".$slug2;

                    }elseif($slug1 == "story" AND $slug2 != "" AND $slug3 == "") {
                      $pages = base_url()."about";

                    }elseif($slug1 == "contacts" OR $slug1 == "tools" OR $slug1 == "sdetail" OR $slug1 == "gallery" OR $slug1 == "about" OR $slug1 == "forgot" OR $slug1 == "signin" OR $slug1 == "signup") {
                      $pages = base_url()."about";
                    }else{
                      $pages = base_url()."about/".$slug1;
                    }
                    echo $pages;
                  ?>
                ">Contact
              </a>
            </li>
            <li><a href="
                <?php 
                  $slug1  = $this->uri->segment(1); 
                  $slug2  = $this->uri->segment(2); 
                    if($slug1 == "about" AND $slug2 != "") {
                      $pages = base_url()."gallery/".$slug2;

                    }elseif($slug1 == "contacts" AND $slug2 != "") {
                      $pages = base_url()."gallery/".$slug2;

                    }elseif($slug1 == "tools" AND $slug2 != "") {
                      $pages = base_url()."gallery/".$slug2;

                    }elseif($slug1 == "sdetail" AND $slug2 != "") {
                      $pages = base_url()."gallery/".$slug2;

                    }elseif($slug1 == "gallery" AND $slug2 == "view") {
                       $pages = base_url()."gallery";

                    }elseif($slug1 == "gallery" AND $slug2 != "") {
                      $pages = base_url()."gallery/".$slug2;

                    }elseif($slug1 == "gallery" AND $slug2 != "") {
                      $pages = base_url()."gallery/".$slug2;

                    }elseif($slug1 == "story" AND $slug2 == "view") {
                       $pages = base_url()."gallery";

                    }elseif($slug1 == "story" AND $slug2 != "" AND $slug3 != "") {
                      $pages = base_url()."gallery/".$slug2;

                    }elseif($slug1 == "story" AND $slug2 != "" AND $slug3 == "") {
                      $pages = base_url()."gallery";

                    }elseif($slug1 == "contacts" OR $slug1 == "tools" OR $slug1 == "sdetail" OR $slug1 == "gallery" OR $slug1 == "about" OR $slug1 == "forgot" OR $slug1 == "signin" OR $slug1 == "signup") {
                     $pages = base_url()."gallery";

                    }else{
                      $pages = base_url()."gallery/".$slug1;
                    }
                    echo $pages;
                  ?>
                ">Articles</a></li>
            <li><a href="
                <?php 
                  $slug1  = $this->uri->segment(1); 
                  $slug2  = $this->uri->segment(2); 
                    if($slug1 == "about" AND $slug2 != "") {
                      $pages = base_url()."tools/".$slug2;

                    }elseif($slug1 == "contacts" AND $slug2 != "") {
                      $pages = base_url()."tools/".$slug2;

                    }elseif($slug1 == "tools" AND $slug2 != "") {
                      $pages = base_url()."tools/".$slug2;

                    }elseif($slug1 == "sdetail" AND $slug2 != "") {
                      $pages = base_url()."tools/".$slug2;

                    }elseif($slug1 == "gallery" AND $slug2 == "view") {
                       $pages = base_url()."tools";

                    }elseif($slug1 == "gallery" AND $slug2 != "") {
                      $pages = base_url()."tools/".$slug2;

                    }elseif($slug1 == "gallery" AND $slug2 != "") {
                      $pages = base_url()."tools/".$slug2;

                    }elseif($slug1 == "story" AND $slug2 == "view") {
                       $pages = base_url()."tools";

                    }elseif($slug1 == "story" AND $slug2 != "" AND $slug3 != "") {
                      $pages = base_url()."tools/".$slug2;

                    }elseif($slug1 == "story" AND $slug2 != "" AND $slug3 == "") {
                      $pages = base_url()."tools";

                    }elseif($slug1 == "contacts" OR $slug1 == "tools" OR $slug1 == "sdetail" OR $slug1 == "gallery" OR $slug1 == "about" OR $slug1 == "forgot" OR $slug1 == "signin" OR $slug1 == "signup") {
                     $pages = base_url()."tools";

                    }else{
                      $pages = base_url()."tools/".$slug1;
                    }
                    echo $pages;
                  ?>
                ">Tool Aids</a></li>
			     <li><a href=
                "http://bisnis.financialsecurity.id/signin">Sign In</a></li>
                  <li><a href="
                <?php 
                  $slug1  = $this->uri->segment(1); 
                  $slug2  = $this->uri->segment(2); 
                    if($slug1 == "about" AND $slug2 != "") {
                      $pages = "http://produk.financialsecurity.id/".$slug2;

                    }elseif($slug1 == "gallery" AND $slug2 == "view") {
                       $pages = "http://produk.financialsecurity.id/";

                    }elseif($slug1 == "gallery" AND $slug2 != "") {
                      $pages = "http://produk.financialsecurity.id/".$slug2;

                    }elseif($slug1 == "contacts" AND $slug2 != "") {
                      $pages = "http://produk.financialsecurity.id/".$slug2;

                    }elseif($slug1 == "tools" AND $slug2 != "") {
                      $pages = "http://produk.financialsecurity.id/".$slug2;

                    }elseif($slug1 == "sdetail" AND $slug2 != "") {
                      $pages = "http://produk.financialsecurity.id/".$slug2;

                    }elseif($slug1 == "story" AND $slug2 == "view") {
                      $pages = "http://produk.financialsecurity.id/";

                    }elseif($slug1 == "story" AND $slug2 != "" AND $slug3 != "") {
                      $pages = "http://produk.financialsecurity.id/".$slug2;

                    }elseif($slug1 == "story" AND $slug2 != "" AND $slug3 == "") {
                      $pages = "http://produk.financialsecurity.id/";

                    }elseif($slug1 == "contacts" OR $slug1 == "tools" OR $slug1 == "sdetail" OR $slug1 == "gallery" OR $slug1 == "about" OR $slug1 == "forgot" OR $slug1 == "signin" OR $slug1 == "signup") {
                     $pages = "http://produk.financialsecurity.id/";

                    }else{
                      $pages = "http://produk.financialsecurity.id/".$slug1;
                    }
                    echo $pages;
                  ?>
                  ">Kenali Produk Kami</a></li>
          </ul>
        </div>
      </nav>
    </header>
  