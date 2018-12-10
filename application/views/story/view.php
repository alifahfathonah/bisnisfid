
    <!-- MAIN -->
    <main role="main">
      <!-- Content -->
      <article>
        <header class="section background-dark">
          <div class="line">        
            <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1"><?php echo $post['title']; ?></h1>
            <p class="margin-bottom-0 text-size-16">Bersama Busster, kami telah menulis kisah sukses dalam hidup kami</p>
          </div>  
        </header>
        
        <div class="section background-white"> 
          <div class="line">
            <div class="margin">
             

             
              <div class="col-sm-8 m-8 l-8 padding">
                <div class="margin-bottom">
                  <div align=center> 
  <?php if($post['image'] != null){ ?>
       <img src="<?php echo site_url(); ?>assets/success/<?php echo $post['image']; ?>" style="width:50%;">
      <?php } ?>
</div><br>
<i><small class="post-date">Posted on: <?php echo $post['created_at']; ?></small></i><br>
<div class="post-body">
  <?php echo $post['body']; ?>
</div>
<br>
<p class="social">
           <a href="https://www.addtoany.com/add_to/twitter?linkurl=<?=current_url()?>"  target="_blank" class="tw"></a>
          <a href="https://www.addtoany.com/add_to/facebook?linkurl=<?=current_url()?>" target="_blank" class="fb"></a>        
          <a href="https://www.addtoany.com/add_to/linkedin?linkurl=<?=current_url()?>" target="_blank" class="li"></a>
          <a href="https://www.addtoany.com/add_to/pinterest?linkurl=<?=current_url()?>" target="_blank" class="pa"></a>
          <a href="https://www.addtoany.com/add_to/telegram?linkurl=<?=current_url()?>" target="_blank" class="te"></a>
          <a href="https://www.addtoany.com/add_to/whatsapp?linkurl=<?=current_url()?>" target="_blank" class="wa"></a> 
        </p>
                </div>	
              </div>
                                       <div class="s-4 m-4 l-4 padding-2x">
                <div class="margin-bottom">
                   <li>New BP</li>
                   <li>SBP</li>
                   <li>MDIT</li>
              </div>
             
            </div>  
             
             
            </div>  
          </div>
        </div> 
      </article>
    </main>
    
    <footer>
      <!-- Contact Us -->
      <div class="background-primary padding text-center">
        <p class="h1"><a href="http://wa.me/<?php echo $agent['phone']; ?>">Click to Contact Us: +<?php echo substr($agent['phone'], 0, 2) ?>-<?php echo substr($agent['phone'], 2, 3)?>-<?php echo substr($agent['phone'], 5, 4)?>-<?php echo substr($agent['phone'], 9, 4)?></a></p> 
        
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
            
                <h2 class="text-thin"><?php if($agent['name'] == NULL){echo $addon;}else{echo $agent['name'];}?></h2>
                <p class="margin-bottom-30"><?php if($agent['address'] == NULL){echo $addon;}else{echo $agent['address'];}?>
                <br>                <a href="mailto:<?php echo $agent['email']; ?>?Subject=Informasi mengenai keamanan finansial" target="_top"><?php echo $agent['email']; ?></a></p>

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
      
   