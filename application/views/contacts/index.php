
    <!-- MAIN -->
	<a target="_blank" class="hide-s" href="<?php echo base_url(); ?>../template/eleganter-premium-responsive-business-template/" style="position:fixed;top:120px;right:-14px;z-index:10;"><img src="<?php echo base_url(); ?>img/premium-features.png" alt=""></a>
    <main role="main">
      <!-- Content -->
      <article>
        <header class="section background-dark">
          <div class="line">        
            <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1">Contact Me</h1>
            <p class="margin-bottom-0 text-size-16">Silahkan hubungi saya jika ada pertanyaan tertentu.<br>
            Namun, jika anda ingin mendapatkan simulasi pembiayaan asuransi jiwa, silahkan isi form dibawah.</p>
          </div>  
        </header>
        <div class="section background-white"> 
          <div class="line margin-bottom-60">
            <div class="margin">
              <div class="s-12 m-12 l-4 margin-m-bottom">
                <div class="padding-2x  border-radius">
                  <div class="float-left hide-s">
                    <i class="icon-sli-location-pin icon3x text-primary"></i>
                  </div>
                <div class="margin-left-70 margin-s-left-0 margin-bottom">
                  <h3 class="margin-bottom-0">Address</h3>
                <p><?php if($agent['address'] == NULL ){echo $addon;}else{echo $agent['address'];} ?>
                  </p>             
                </div>
                </div>
              </div>
              <div class="s-12 m-12 l-4 margin-m-bottom">
                <div class="padding-2x border-radius">
                  <div class="float-left hide-s">
                    <i class="icon-sli-envelope icon3x text-primary"></i>
                  </div>
                  <div class="margin-left-70 margin-s-left-0 margin-bottom">
                    <h3 class="margin-bottom-0">E-mail</h3>
                    <p><?php if($agent['email'] == NULL ){echo $slug;}else{echo $agent['email'];} ?>
                    </p>              
                  </div>
                </div>
              </div>
              <div class="s-12 m-12 l-4 margin-m-bottom">
                <div class="padding-2x  border-radius">
                  <div class="float-left hide-s">
                    <i class="icon-sli-phone icon3x text-primary"></i>
                  </div>
                  <div class="margin-left-70 margin-s-left-0">
                    <h3 class="margin-bottom-0">Phone Numbers</h3>
                    <p><span class="text-primary"><?php if($agent['phone'] == NULL ){echo $phone;}else{echo $agent['phone'];} ?></span><br>
                    
                    </p>             
                  </div>
                </div>
              </div>
            </div>
          </div>
          <form name="contactForm" class="customform" method="post" action="<?php echo base_url()?>email/send">
          <div class="line">
            <div class="margin">
              <!-- Contact Form -->

                <h2 class="margin-bottom-10">Masukan Data Diri Anda</h2>
                
                  <div class="line">
                    <div class="margin">
                      <div class="s-12 m-12 l-6">
                        <input type="hidden" name="to" value="<?= $slug ?>">
                        <input name="email" class="required email" placeholder="Masukan e-mail anda" title="e-mail" type="email" />
                        <p class="email-error form-error">Masukan e-mail anda.</p>
                      </div>
                      <div class="s-12 m-12 l-6">
                        <input name="fname" class="name" placeholder="Masukan nama anda" title="name" type="text" />
                        <p class="name-error form-error">Masukan nama anda.</p>
                      </div>
                    </div>
          <div class="margin">
                      <div class="s-12 m-12 l-6">
                        <input name="occ" class="required email" placeholder="Masukan pekerjaan anda" title="occupation" type="text" />
                        <p class="email-error form-error">Masukan pekerjaan anda.</p>
                      </div>
                      <div class="s-12 m-12 l-6">
                        <input name="bdate" class="name" placeholder="Masukan tanggal lahir anda" title="name" type="text" />
                        <p class="name-error form-error">Masukan tanggal lahir anda.</p>
                      </div>
                    </div>
          <div class="margin">
                      <div class="s-12 m-12 l-6">
                        <input name="amount" class="required email" placeholder="Masukan premi yang anda rencanakan" title="occupation" type="text" />
                        <p class="email-error form-error">Masukan angka premi yang anda inginkan.</p>
                      </div>
                      <div class="s-12 m-12 l-6">
                        <input name="phone" class="name" placeholder="Masukan nomor hp/wa anda" title="name" type="text" />
                        <p class="name-error form-error">Masukan nomor hp/wa anda.</p>
                      </div>
                    </div>
          <div class="margin">
                      <div class="s-12 m-12 l-6">
                        <input name="sid" class="required email" placeholder="Masukan nama akun socmed anda" title="occupation" type="text" />
                        <p class="email-error form-error">Masukan nama akun socmed anda.</p>
                      </div>
                      <div class="s-12 m-12 l-6">
                        <input name="stype" class="name" placeholder="Masukan nama layanan socmed anda" title="name" type="text" />
                        <p class="name-error form-error">Masukan nama layanan socmed anda.</p>
                      </div>
                    </div>
          <div class="margin">
                      <div class="s-12 m-12 l-6">
                        <input name="city" class="required email" placeholder="Masukan kota/domisili anda" title="occupation" type="text" />
                        <p class="email-error form-error">Masukan nama kota anda.</p>
                      </div>
                      <div class="s-12 m-12 l-6">
                        <input name="zcode" class="name" placeholder="Masukan kode pos anda" title="name" type="text" />
                        <p class="name-error form-error">Masukan kode pos anda.</p>
                      
                    </div>
                  </div>
                  
              </div>
          </div>
              <div class="s-12 m-12 l-4">
                <h2 class="margin-bottom-10"> <br></h2>
                <div class="s-6">
                  <p class="text-size-16">
                  Jenis Kelamin<br></p>
                   <div class="s-6">
          <input type="radio" name="gender"
            
            value="Pria">  Pria
          </div>
          <div class="s-6">
          <input type="radio" name="gender"
            
            value="Wanita">  Wanita
          </div>
                  <p class="text-size-16">
                  Perokok<br></p>
                   <div class="s-6">
          <input type="radio" name="smoker"
            
            value="Ya">  Ya  
          </div>
          <div class="s-6">
          <input type="radio" name="smoker"
            
            value="Tidak">  Tidak  
          </div>
          
                  <p class="text-size-16">
                  Rencana Pembayaran<br></p>
                  <div class="s-12">
          <input type="radio" name="pplan"
            
            value="Bulanan">  Bulanan  
          </div>
          <div class="s-12">
          <input type="radio" name="pplan"
            value="Quarter">  Triwulan  
          </div>
          <div class="s-12">
          
          <input type="radio" name="pplan"
            value="Semester">  Semester  
          </div>
          <div class="s-12">
          <input type="radio" name="pplan"
            value="Tahunan">  Tahunan  
          </div>
                  <p class="text-size-16">
                  Asuransi Tambahan<br>
                  </p>
                  <div class="s-12">
          <input type="checkbox" name="aplan" value="Sakit Kritis">
          <span class="checkmark"></span>
          Sakit Kritis
        </div>

         <div class="s-12">
          <input type="checkbox" name="aplan" value="Kecelakaan">
          <span class="checkmark"></span>
          Kecelakaan
        </div>
         <div class="s-12">
          <input type="checkbox" name="aplan" value="Rawat Inap">
          <span class="checkmark"></span>
          Rawat Inap
        </div>
         <div class="s-12">
          <input type="checkbox" name="aplan" value="Cacat Tetap Total">
          <span class="checkmark"></span>
          Cacat Tetap Total
        </div>
                </div>
                
<div class="s-12">
<br>
          <div class="s-12">
          <h2 class="margin-bottom-10">Pertanyaan Tambahan</h2>
          Menurut anda, seberapa pentingkah asuransi?<br>
          <input type="radio" name="iimpor" value="Sangat Penting">  Sangat Penting
          <br><input type="radio" name="iimpor" value="Penting">  Penting
          <br><input type="radio" name="iimpor" value="Tidak Penting">  Tidak Penting
          </div>
<br>

<div class="s-12">
          <br>Apakah anda bersedia untuk mengajukan Polis Asuransi Tapro?
          <br><input type="radio" name="will" value="Bersedia">  Bersedia
          <br><input type="radio" name="will" value="Tidak Bersedia">  Tidak Bersedia <br>
          </div>
<br>
          </div><p><br></p>
                  <div class="s-12"><button class="s-12 submit-form button background-primary text-white" type="submit">Submit Button</button></div>      
          </div>  
        </div>
         </form>
      </article>
    </main>
    
   
    <!-- FOOTER -->
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
      