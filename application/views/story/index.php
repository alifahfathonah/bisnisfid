 <!-- MAIN -->
    <main role="main">
      <!-- Content -->
      <article>
        <header class="section background-dark">
          <div class="line">        
            <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1">Success Stories</h1>
            <p class="margin-bottom-0 text-size-16">Allianz telah membantu banyak orang menggapai impiannya dan memasuki taraf hidup yang lebih baik</p>
          </div>  
        </header>
        <section class="section background-white">
          <div class="line">
            <h2 class="text-size-40 margin-bottom-30">Baca kisah kami</h2>
            <hr class="break-small background-primary margin-bottom-30">
            <p class="margin-bottom-40">
              Temukan kisah-kisah inspiratif keluarga kami dalam pencarian suatu kesuksesan yang juga berdampak kepada kehidupan orang lain...
            </p>
          </div>   
          <div class="line text-center">
            <div class="margin">
              <?php
                $i = 1;

                foreach($posts as $post) : 
                 if(($i-1) % 3   == 0){
                    echo "<div class='row'><br>&nbsp;</div> ";
                  }  
                  
              ?>
             <a href="<?php echo site_url('/story/'.$user.'/'.$section.'/'.$post['slug']); ?>/">
              <div class="s-12 m-6 l-4 padding">
                <div class="image-with-hover-overlay margin-bottom border-articles">
                  <div class="image-hover-overlay background-new"> 
                    <div class="image-style-articles text-center">
                  <?php if($post['image'] != null){ ?>
                    <img src="<?php echo site_url(); ?>assets/success/<?php echo $post['image']; ?>">
                  <?php } ?>
                 <br>
                      <p><b><?php echo $post['title'] ?></b></p>

                </div> 
                  </div> 
                  <img src="<?php echo base_url(); ?>assets/img/portfolio/thumb-02.jpg" alt="" title="Portfolio Image 1" />
                </div>	
              </div>
              </a>
              <?php 
                $i++;
               
                endforeach;
                 
              ?>      
            </div>
          </div>
        </section> 
      </article>
    </main>
    
     <!-- FOOTER -->
    <footer>
      <!-- Contact Us -->
      <div class="background-primary padding text-center">
        <p class="h1">
<?php if($agent['phone'] != null){
	echo "<a href=http://wa.me/".$agent['phone'].">Click to Contact Us: +". substr($agent['phone'], 0, 2) ."-".substr($agent['phone'], 2, 3)."-".substr($agent['phone'], 5, 4)."-".substr($agent['phone'], 9, 4)."</a>"; 
}else{
	echo "<a href=http://wa.me/".$phone.">Click to Contact Us: +". substr($phone, 0, 2) ."-". substr($phone, 2, 3) ."-".substr($phone, 5, 4) ."-". substr($phone, 9, 4) ."</a>";        
}?>
</p>
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
            
                <h2 class="text-thin"><?php if($agent['name'] == NULL){echo $namanya;}else{echo $agent['name'];}?></h2>
                <p class="margin-bottom-30"><?php if($agent['address'] == NULL){echo $addon;}else{echo $agent['address'];}?>
                <br>
<?php if($agent['email'] != null){
	echo "<a href='mailto:".$agent['email']."?Subject=Informasi mengenai keamanan finansial' target='_top'>".$agent['email']."</a>";
}else{
	echo "<a href='mailto:".$emailnya."?Subject=Informasi mengenai keamanan finansial' target='_top'>".$emailnya."</a>";
}?>
</p>
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
     