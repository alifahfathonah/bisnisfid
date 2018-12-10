
    <!-- MAIN -->
    <main>    
      <!-- Main Header -->
      <header>
        <div class="carousel-default owl-carousel carousel-main carousel-nav-white background-dark text-center">
          <div class="item">
            <div class="s-12">
              <img src="<?php echo base_url(); ?>assets/img/header2.jpg" alt="">
              <div class="carousel-content">
                <div class="content-center-vertical line">
                  <div class="margin-top-bottom-80">
                    <!-- Title -->
                    <h1 class="text-white margin-bottom-30 text-size-60 text-m-size-30 text-line-height-1">Univision<br> Accelerate Your Future</h1>
                    <div class="s-12 m-10 l-8 center"><p class="text-white text-size-14 margin-bottom-40">Bersama kami, percepat pendapatan anda</p><br>
                    <h3><?php echo $namanya; ?></h3></div>
                    <div class="line">
                      <!--<div class="s-12 m-12 l-3 center">
                        <a class="button button-white-stroke s-12" href="<?php echo base_url(); ?>/">Get Started Now</a>
                      </div>       -->
                    </div>  
                  </div>
                </div>
              </div>
            </div>
          </div>              
        </div>               
      </header>
      
      <!-- Section 1 -->
      <section class="section-small-padding background-white text-center"> 
        <div class="line">
          <div class="margin">
            <div class="s-12 m-12 l-4 margin-m-bottom">
              <div class="padding-2x s-12 m-12 ">
                <i class="icon-sli-shield icon3x text-dark center margin-bottom-30"></i>
                <h2 class="text-thin"> <?php echo str_pad("Sebarkan kebaikan",40);?></h2>
                <p class="margin-bottom-30"><?php echo str_pad("Kebahagiaan bukan hanya dari pendapatan saja, namun juga dampak anda terhadap hidup orang lain",200," ");?></p>
               
              </div>
            </div>
            <div class="s-12 m-12 l-4 margin-m-bottom">
              <div class="padding-2x s-12 m-12">
                <i class="icon-sli-umbrella icon3x text-dark center margin-bottom-30"></i>
                <h2 class="text-thin"><?php echo str_pad("Manfaat lebih",40," ");?></h2>
                <p class="margin-bottom-30"><?php echo str_pad("Dapatkan potensi income tanpa batas",200," ");?></p>
               
              </div>
            </div>
            <div class="s-12 m-12 l-4 margin-m-bottom">
              <div class="padding-2x ">
                <i class="icon-sli-home icon3x text-dark center margin-bottom-30"></i>
                <h2 class="text-thin"><?php echo str_pad("Ciptakan masa depan anda",40," ");?></h2>
                <p class="margin-bottom-30"><?php echo str_pad("Bersama kami merencanakan masa depan yang lebih matang",200," ");?></p>
               
              </div>
            </div>
          </div>
        </div>
      </section>
      

      
        <section class="full-width">
        <div class="s-12 m-12 l-6 padding-2x" align="center">  
          <iframe width="560" height="315" src="https://www.youtube.com/embed/B_WP_G7R1Wc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="s-12 m-12 l-6">
          <div class="padding-2x">
            <div class="line">
              <h1>Business System</h1>
                <p>Sistem bisnis atau marketing plan menunjukkan jenjang karier, komisi, dan potensi penghasilan yang mungkin diraih oleh agen. Apakah sistem bisnis itu penting? Penting sekali. Kerja yang sama bisa memberikan hasil yang berbeda, tergantung sistem bisnisnya.</p> <span><a href ="http://bisnis.financialsecurity.id/gallery/view/Business-System">[Baca selengkapnya...]</a></span>
              </div>
            </div> 
          </div>

      </section>
      
      <hr class="break margin-top-bottom-0">
      
      <!-- Section 4 -->
      <section class="section-top-padding">
        <h2 class="text-size-50 text-center">Kenali Lebih Lanjut Mengenai Univision</h2>
        <div class="s-12 m-12 l-6 padding-2x" align="center"> 
        <div class="carousel-default owl-carousel carousel-wide-arrows">
        <div class="item">
              <div class="s-12 m-12 l-7 center text-center">
<img src="<?php echo base_url(); ?>assets/img/4.jpg" alt="" style="height:325px;">
              </div>
            </div>
            <div class="item"> 
             <img src="<?php echo base_url(); ?>assets/img/1.jpg" alt="" style="height:325px;">
            </div>
            <div class="item">
             <img src="<?php echo base_url(); ?>assets/img/2.jpg" alt="" style="height:325px;">
            </div>
                        <div class="item">
             <img src="<?php echo base_url(); ?>assets/img/3.jpg" alt="" style="height:325px;">
            </div>
        </div>
        </div>
        <div class="s-12 m-12 l-5 padding-2x" align="center"> 
        <iframe width="560" height="315" src="https://www.youtube.com/embed/DFLERG1rkdY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </section>
      
    
      <hr class="break margin-top-bottom-0">
       
      <!-- Section 6 -->
      <section class="section background-white text-center full-width">
        <div class="line">
          <h2 class="text-size-50 text-center">Event Schedule</h2>
          <hr class="break-small background-primary break-center">
          <div class="s-12 m-12 l-12 center text-center">
            <table width='100%'>
              <thead>
                <tr>
                  <th width="20%">Name</th>
                  <th width="15%">Location</th>
                  <th width="15%">Date</th>
                  <th>Information</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($schedules as $schedule) : ?>
                <tr>  
                  <td ><a href="http://bisnis.financialsecurity.id/sdetail/<?=$schedule['id'];?>"><?php echo $schedule['name']; ?></a></td>
                  <td><?php echo $schedule['location']; ?></td>
                  <td><?php echo $schedule['date']; ?></td>
                  <td><?php echo $schedule['desc']; ?></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>

      </section>
      <hr class="break margin-top-bottom-0">
      
    </main>
<!-- FOOTER -->
      <footer>
      <!-- Contact Us -->
      <div class="background-primary padding text-center">
        <p class="h1"><a href="http://wa.me/<?=$phone; ?>">Click to Contact Us: +<?= substr($phone, 0, 2).'-'.substr($phone, 2, 3).'-'.substr($phone, 5, 4).'-'.substr($phone, 9, 4); ?></a></p> 

      </div>
            <section class="section-small-padding background-white text-center"> 
        <div class="line">
          <div class="margin">
                                  <div class="s-12 m-12 l-12 margin-m-bottom"><div class="padding-2x "> <img class="img-s2 center" src="http://bisnis.financialsecurity.id/assets/agents/<?php if(isset($agent)) echo $agent['image'];?>" alt=""></div></div>
            <div class="s-12 m-12 l-4 margin-m-bottom">
              <div class="padding-2x ">
                
                <h2 class="text-thin">Surabaya Office</h2>
                <p class="margin-bottom-30">Gedung Graha Pacific Lt. 3A<br>
Jl Basuki Rahmat 87-91 | Embong Kaliasin, Kota Surabaya<br>
Jawa Timur - 60271 </p>
              </div>
            </div>
            <div class="s-12 m-12 l-4 margin-m-bottom">

              <div class="padding-2x ">
            
                <h2 class="text-thin"><?= $namanya; ?></h2>
                <p class="margin-bottom-30"><?= $addon; ?>
                <br>                
<a href="mailto:<?= $mailnya; ?>?Subject=Informasi mengenai keamanan finansial" target="_top"><?= $mailnya; ?></a></p>

             </div>
            </div>
            <div class="s-12 m-12 l-4 margin-m-bottom">
              <div class="padding-2x ">
                
                <h2 class="text-thin">Jakarta Office</h2>
                <p class="margin-bottom-30">APL Tower | Lt. 11 - Suite 01<br>
Jl. Letjen S. Parman kav. 28<br>
Kota Jakarta Barat<br>
Daerah Khusus Ibukota Jakarta 11470</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <hr class="break margin-top-bottom-0" style="border-color: rgba(0, 38, 51, 0.80);">
      
     
	