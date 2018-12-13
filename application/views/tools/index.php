<?php $section_page_doc = array("book","epro"); 
      $section_page_media = array("meeting","media","mobile");
?>
    <!-- MAIN -->
    <main role="main">
      <!-- Content -->
      <article>
        <header class="section background-dark">
          <div class="line">        
            <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1">Tool Aids</h1>
            <p class="margin-bottom-0 text-size-16"><?= $title ?></p>
          </div>  
        </header>
        <?php if(in_array($this->uri->segment(2), $section_page_doc) || in_array($this->uri->segment(3), $section_page_doc)){
        echo "<h1>Documents<h1>";
        }?>
        <div class="section background-white"> 
          <div class="line">
            <div class="margin">
              <?php foreach($docs as $doc) : ?>

             <a href="<?php echo site_url('/assets/'.$doc['section'].'/'.$doc['doc']); ?>">
              <div class="s-12 m-6 l-4 padding">
                <div class="image-with-hover-overlay margin-bottom border-articles ">
                  <div class="image-hover-overlay background-new"> 
                    <div class="image-style-articles text-center">
                    <div align=center><img src="<?php echo site_url(); ?>assets/img/file.png" width="12px" ></div>
                    <p><?php echo $doc['title'] ?></p>
                    </div> 
                  </div> 
                  <img src="<?php echo base_url(); ?>assets/img/portfolio/thumb-02.jpg" alt="" title="Portfolio Image 1" />
                </div>  
              </div>
             </a>
             <?php endforeach; ?>
            </div>  
          </div>
        </div> 
        
        <?php if((in_array($this->uri->segment(2), $section_page_media)) || (in_array($this->uri->segment(3), $section_page_media))){
        echo "<h1>Videos<h1>";
        }?>
        <div class="section background-white"> 
          <div class="line">
            <div class="margin">
              <?php foreach($videos as $video) : ?>

             <a href="<?php echo site_url('/tools/'.$user.'/'.$video['slug']); ?>">
              <div class="s-12 m-6 l-4 padding">
                <div class="image-with-hover-overlay margin-bottom border-articles ">
                  <div class="image-hover-overlay background-new"> 
                    <div class="image-style-articles text-center">
                      <?php if($video['url'] != null){ ?>
                          <figure class="figure">
                             <iframe width="100%" src="https://www.youtube.com/embed/<?= $video['url']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          </figure>
                      <?php } ?>
                      <br>
                      <p><?php echo $video['title'] ?></p>
                    </div> 
                  </div> 
                  <img src="<?php echo base_url(); ?>assets/img/portfolio/thumb-02.jpg" alt="" title="Portfolio Image 1" />
                </div>	
              </div>
             </a>
             <?php endforeach; ?>
            </div>  
          </div>
        </div> 
		<?php if((in_array($this->uri->segment(2), $section_page_media)) || (in_array($this->uri->segment(3), $section_page_media))){
        echo "<h1>Pictures<h1>";
        }?>

        <div class="section background-white"> 
          <div class="line">
            <div class="margin">
              <?php foreach($photos as $photo) : ?>

              <div class="s-12 m-6 l-4 padding">
                <div class="image-with-hover-overlay margin-bottom border-articles ">
                  <div class="image-hover-overlay background-new"> 
                    <div class="image-style-articles text-center">
                      <?php if($photo['image'] != null){ ?>
                        <img id="myImg<?=$photo['image'];?>" onClick= "openPopup('<?=$photo['image'];?>')" src="<?php echo site_url(); ?>assets/<?= $photo['section']?>/<?php echo $photo['image']; ?>" alt="<?= ($photo['caption'] == null) ? $photo['title'] : $photo['caption']; ?>">
                      <?php } ?>
                      <br>
                      <p><?= ($photo['caption'] == null) ? $photo['title'] : $photo['caption']; ?></p>
                    </div> 
                  </div> 
                  <img src="<?php echo base_url(); ?>assets/img/portfolio/thumb-02.jpg" alt="" title="Portfolio Image 1" />
                </div>	
              </div>
            <?php endforeach; ?>
            </div>  
          </div>
        </div> 
      </article>
      <!-- Section 6 -->
      <?php if($this->uri->segment(2) == "meeting" || $this->uri->segment(3) == "meeting"){
        echo "
        <section class='section background-white text-center full-width'>
        <div class='line'>
          <h2 class='text-size-50 text-center'>Event Schedule</h2>
          <hr class='break-small background-primary break-center'>
          <div class='s-12 m-12 l-12 center text-center'>
            <table width='100%'>
              <thead>
                <tr>
                  <th width='20%''>Name</th>
                  <th width='15%'>Location</th>
                  <th width='15%''>Date</th>
                  <th>Information</th>
                </tr>
              </thead>
              <tbody>";
          foreach($schedules as $schedule) :
          echo "<tr>  
                  <td ><a href='http://bisnis.financialsecurity.id/sdetail/$schedule[id]'>$schedule[name]</a></td>
                  <td>$schedule[location]</td>
                  <td>$schedule[date]</td>
                  <td>$schedule[desc]</td>
                </tr>";
          endforeach;
          echo "</tbody>
            </table>
          </div>
        </div>

      </section>";
        }?>
      
                
              
      <hr class="break margin-top-bottom-0">
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
   <!-- The Modal -->
<div id="myModal" class="modal">

  <!-- The Close Button -->
  <span class="close">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="img01">

  <!-- Modal Caption (Image Text) -->
  <div id="caption"></div>
</div>
<script type="text/javascript">
  function openPopup($el){
  var modal = document.getElementById('myModal');

  // Get the image and insert it inside the modal - use its "alt" text as a caption
  var img = document.getElementById('myImg'+$el);
  var modalImg = document.getElementById("img01");
  var captionText = document.getElementById("caption");
  img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
  }

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  } 

}
</script>