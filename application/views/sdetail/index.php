
    <!-- MAIN -->
    <main role="main">
      <!-- Content -->
      <article>
        <header class="section background-dark">
          <div class="line">        
            <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1"><?php echo $single['name']; ?></h1>
            <p class="margin-bottom-0 text-size-16">Bersama Univision kita pasti bisa!</p>
          </div>  
        </header>
        
 <section class="full-width">
<img src="http://bisnis.financialsecurity.id/assets/schedules/<?= $single['image']; ?>" class="imagedropshadow">
        <div class="s-12 m-12 l-8">  
		<div class="padding-2x">
            <div class="line">

              <div class="margin-left-60 margin-bottom-30">
                <h2 class="text-size-25 margin-bottom-0"><?= $single['name'];?> | <?= $single['date'];?></h2>
								<hr class="divider" />
                <p class="text-dark"><?= $single['desc'];?></p>            
              </div>
            </div>
            
            <div class="line">
 
              <div class="margin-left-60 margin-bottom-30">
                <h3 class="text-size-25 margin-bottom-0">Materi Training</h3>
								<hr class="divider" />
                <p><?= $single['material'];?></p>            
              </div>
            </div>
              </div>
            </div>		
        <div class="s-12 m-12 l-4">
          <div class="padding-2x">
            <div class="line">

              <div class="margin-left-60 margin-bottom-30">
                <h3 class="text-size-25 margin-bottom-0" >Tujuan Training</h3>
								<hr class="divider" />
                <p class="text-dark"><?= $single['tujuan'];?></p>            
              </div>
            </div>
            
            <!--<div class="line">
              <div class="float-left">
                <i class="icon-sli-screen-smartphone icon3x text-dark"></i>
              </div>
              <div class="margin-left-60 margin-bottom-30">
                <h3 class="text-size-25 margin-bottom-0">Responsive Layoute</h3>
                <p class="text-dark">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>            
              </div>
            </div>-->
            
            <div class="line">
 
              <div class="margin-left-60 margin-bottom-30" >
                <h3 class="text-size-25 margin-bottom-0" <!--style="background-color:#003781;"-->Target Peserta</h3>
				<hr class="divider" />
                <p><?= $single['target'];?></p>            
              </div>
            </div>
            
            <div class="line">

              <div class="margin-left-60 margin-bottom-30">
                <h3 class="text-size-25 margin-bottom-0" >Durasi Training</h3>
				<hr class="divider" />
                <p><?= $single['durasi'];?></p>            
              </div>
            </div>

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