<section id="welcome">
	 <div class="row">
            <div class="col-md-12">
                <div class="wel_header">
                    <h2>Tentang Perusahaan</h2>
                </div>
            </div>
        </div>
<div class="aboutus">
    <div class="container">
      <figure class="col-md-5 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
        <?php
            foreach($tentang->result() as $key) {
            ?>
			 <?php
        if($key->foto) {
            ?>

            <img src="<?php echo base_url()?>front/img/about/<?php echo $key->foto; ?>" style="float: left; max-width: 400px; margin : 0 5px 5px 0;">
        <?php
        }
        ?>
		</figure>
        <h3>
           <?php echo $key->judul_tentang; ?>
            </h3><br>
        <p>
           <?php echo $key->isi; ?>
            <?php } ?>    
        </p>
      </div>
      </div>
 </section>
 <section id="market">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="market_area text-center">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="market_logo">
                                <a href=""><img src="<?php echo base_url();?>front/img/audiojungle.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="market_logo">
                                <a href=""><img src="<?php echo base_url();?>front/img/codecanyon.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="market_logo">
                                <a href=""><img src="<?php echo base_url();?>front/img/graphicriver.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="market_logo">
                                <a href=""><img src="<?php echo base_url();?>front/img/audiojungle.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!--End of row-->
                </div>
                <!--End of market Area-->
            </div>
            <!--End of col-md-12-->
        </div>
        <!--End of row-->
    </div>
    <!--End of container-->
</section>
<!--End of market-->