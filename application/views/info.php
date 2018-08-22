<section id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="latest_blog text-center">
                            <h2>Paket Kami</h2>
                            <p>Tersedia berbagai macam paket permainan rafting silahkan pilih!!</p>
                        </div>
                    </div>
                </div>
                <!--End of row-->
                <div class="row">
                     <?php
                        foreach($info->result() as $key) {
                        ?>
                        <?php
                        if($key->images) {
                            ?>
                    <div class="col-md-4">
                        <div class="blog_news">
                            <div class="single_blog_item">
                                <div class="blog_img">
                                <img src="<?php echo base_url()?>front/img/paket/<?php echo $key->images; ?>" style="float: center; max-width: 400px; margin : 0 5px 5px 0;"> 
                                </div>
                                <?php
                                    }
                                    ?>
                                <div class="blog_content">
                                    <a href=""><h3><?php echo $key->nama_paket; ?></h3></a>
                                    <div class="expert">
                                        <div class="left-side text-left">
                                        </div>
                                    </div>
                                    <p class="blog_news_content">Harga : <?php echo $key->harga_paket; ?>/orang </p><br>
                                    <p class="blog_news_content">Durasi : <?php echo $key->durasi; ?> </p><br>
                                     <p class="blog_news_content">Tingkat Kesulitan : <?php echo $key->tingkat_kesulitan; ?> </p><br>
                                      <p class="blog_news_content">Jumlah Jeram :  <?php echo $key->jumlah_jeram; ?> </p><br>
                                    <p class="blog_news_content">Jarak Tempuh : <?php echo $key->jarak_tempuh; ?> </p>
                                        
                                </div>
                            </div>
                        </div>
                    </div><?php } ?>
                    <!--End of col-md-4-->
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
        <!-- end of blog-->