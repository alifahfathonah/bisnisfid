
    <!-- MAIN -->
    <main role="main">
      <!-- Content -->
      <article>
        <header class="section background-dark">
          <div class="line">        
            <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1"><?php echo $post['title']; ?></h1>
            <p class="margin-bottom-0 text-size-16">Bersama Busster kita pasti bisa!</p>
          </div>  
        </header>
        
        <div class="section background-white"> 
          <div class="line">
            <div class="margin">
             

             
              <div class="col-sm-12 m-8 l-8 padding">
                <div class="margin-bottom">
  <div align=center>
<?php if($post['image'] != null){ ?>
       <img src="<?php echo site_url(); ?>assets/posts/<?php echo $post['image']; ?>" style="width:50%;">
      <?php } ?>
</div> <br>               
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
                         <div class="s-12 m-4 l-4 padding-2x">
<?php
   $slug1      = $this->uri->segment(2); 
     if($slug1 != "view") {$ins = "/".$slug1;}else{ $ins= "/view";}
?>
                <div class="margin-bottom" id="list8">
		  <div class="head-list"><h3>Services</h3></div>
		  <ul>
			<?php foreach($posts as $post):?>
                    		<li><a href="http://bisnis.financialsecurity.id/gallery<?=$ins?>/<?=$post['slug']?>"><h4><?= substr($post['title'],0,28); if(strlen($post['title'])>29){ echo'..';}else{ echo'';}?></h4></a></li>
			<?php endforeach; ?>
                 </ul>

              </div>
             
            </div>  
             
            </div>  
          </div>
        </div> 
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
   