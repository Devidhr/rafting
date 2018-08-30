<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Company-HTML Bootstrap theme</title>
</head>

<body>

  <section id="portfolio">
    <div class="container">
      <div class="center">
        <p>GALERI KEGIATAN</p>
      </div>

      <ul class="portfolio-filter text-center">
        <li><a class="btn btn-default" href="#" data-filter="*">All Works</a></li>
        <li><a class="btn btn-default" href="#" data-filter=".bootstrap">Creative</a></li>
        <li><a class="btn btn-default" href="#" data-filter=".html">Photography</a></li>
        <li><a class="btn btn-default" href="#" data-filter=".wordpress">Web Development</a></li>
      </ul>
    </div>
    <div class="container">
        <?php
            foreach($galeri->result() as $key) {
            ?>
      <div class="">
        <div class="portfolio-items">
          <div class="portfolio-item apps col-xs-12 col-sm-4 col-md-3">
            <div class="recent-work-wrap">
                <?php
                    if($key->images) {
                        ?>
              <img class="img-responsive" src="<?php echo base_url()?>front/img/galeri/<?php echo $key->images; ?>" alt="">
              <div class="overlay">
                 <?php
                    }
                    ?>
                  <div class="recent-work-inner">
                  <!--&nbsp;<h5><?php echo $key->nama_galeri; ?></h5>--><br>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <a class="preview btn btn-info btn-sm" href="<?php echo base_url()?>front/img/galeri/<?php echo $key->images; ?>" rel="prettyPhoto"><i class="fa fa-eye"></i>&nbsp;Lihat</a>
                </div>
              </div>
            </div>
          </div>
          <!--/.portfolio-item-->
        </div><?php } ?>
      </div>
    </div>
  </section>
  <!--/#portfolio-item-->


</body>

</html>
