<section id="slider">
    <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="slider_overlay">
                    <img src="<?php echo base_url();?>front/img/slider/img1.jpg" alt="...">
                    <div class="carousel-caption">
                        <div class="slider_text">
                            <h3>Welcome to</h3>
                            <h2>JOGJA RAFTING</h2>
                            <p>Temukan Tantangan Adrenalinmu di Sini (Fine Your Adventure In Here)</p>
                            <a href="#blog" class="custom_btn">Selanjutnya</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of item With Active-->
            <div class="item">
                <div class="slider_overlay">
                    <img src="<?php echo base_url();?>front/img/slider/img2.jpg" alt="...">
                    <div class="carousel-caption">
                        <div class="slider_text">
                           <h3>Welcome to</h3>
                            <h2>JOGJA RAFTING</h2>
                            <p>Temukan Tantangan Adrenalinmu di Sini (Fine Your Adventure In Here)</p>
                            <a href="#blog" class="custom_btn">Selanjutnya</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of Item-->
            <div class="item">
                <div class="slider_overlay">
                    <img src="<?php echo base_url();?>front/img/slider/img3.jpg" alt="...">
                    <div class="carousel-caption">
                        <div class="slider_text">
                            <h3>Welcome to</h3>
                            <h2>JOGJA RAFTING</h2>
                            <p>Temukan Tantangan Adrenalinmu di Sini (Fine Your Adventure In Here)</p>
                            <a href="#blog" class="custom_btn">Selanjutnya</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of item-->
        </div>
        <!--End of Carousel Inner-->
    </div>
</section>
<!--end of slider section-->

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

<!--Start of welcome section-->
<section id="welcome">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wel_header">
                    <h2>welcome to jogja rafting</h2>
                    <p>Jogja Rafting adalah sebuah perusahaan yang menyediakan beberapa paket rafting yang menarik, kami siap memberi pelayanan terbaik untuk anda</p>
                </div>
            </div>
        </div>
        <!--End of row-->
        <div class="row">
            <div class="col-md-3">
                <div class="item">
                    <div class="single_item">
                        <div class="item_list">
                            <div class="welcome_icon">
                                <i class="fa fa-home"></i>
                            </div>
                            <h4>Lokasi</h4>
                            <p>Lokasi kami yang sangat strategis dan tempat parkir yang luas dapat membuat anda dan keluarga serta krabat anda menjadi nyaman</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of col-md-3-->
            <div class="col-md-3">
                <div class="item">
                    <div class="single_item">
                        <div class="item_list">
                            <div class="welcome_icon">
                                <i class="fa fa-coffee"></i>
                            </div>
                            <h4>Paket Rafting</h4>
                            <p>Paket kami tersedia dalam berbagai macam varian anda dapat memilih sesuai dengan yang anda sukai dan cocok untuk keluarga serta teman-teman</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of col-md-3-->
            <div class="col-md-3">
                <div class="item">
                    <div class="single_item">
                        <div class="item_list">
                            <div class="welcome_icon">
                                <i class="fa fa-user"></i>
                            </div>
                            <h4>Profesional</h4>
                            <p>Kami memiliki motivasi untuk membuat pelayanan yang profesional dengan para pemandu wisata yang terlatih</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of col-md-3-->
            <div class="col-md-3">
                <div class="item">
                    <div class="single_item">
                        <div class="item_list">
                            <div class="welcome_icon">
                                <i class="fa fa-thumbs-o-up"></i>
                            </div>
                            <h4>Pelayanan Ramah</h4>
                            <p>Para pegawai kami yang selalu ramah terhadap para konsumen akan membuat anda terasa nyaman</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of col-md-3-->
        </div>
        <!--End of row-->
    </div>
    <!--End of container-->
</section>
<!--end of welcome section-->

