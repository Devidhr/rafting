<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>Jogja Rafting</title>

        <!--    Google Fonts-->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

        <!--Fontawesom-->
        <link rel="stylesheet" href="<?php echo base_url();?>front/css/font-awesome.min.css">

        <!--Animated CSS-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>front/css/animate.min.css">

        <!-- Bootstrap -->
        <link href="<?php echo base_url();?>front/css/bootstrap.min.css" rel="stylesheet">
        <!--Bootstrap Carousel-->
        <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>front/css/carousel.css" />

        <link rel="stylesheet" href="<?php echo base_url();?>front/css/isotope/style.css">

        <!--Main Stylesheet-->
        <link href="<?php echo base_url();?>front/css/style.css" rel="stylesheet">
        <!--Responsive Framework-->
        <link href="<?php echo base_url();?>front/css/responsive.css" rel="stylesheet">
        

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body data-spy="scroll" data-target="#header">

        <!--Start Hedaer Section-->
        <section id="header">
            <div class="header-area">
                <div class="top_header">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zero_mp">
                                <div class="address">
                                    <i class="fa fa-home floatleft"></i>
                                    <p>Jalan Kali Urang no 40, Jogjakarta 1205, Indonesia</p>
                                </div>
                            </div>
                            <!--End of col-md-4-->
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zero_mp">
                                <div class="phone">
                                    <i class="fa fa-phone floatleft"></i>
                                    <p>+ 62-7798-5644</p>
                                </div>
                            </div>
                            <!--End of col-md-4-->
                            <div class="col-md-4">
                                <div class="social text-right">
                                    <a href=""><i class="fa fa-facebook"></i></a>&nbsp;
                                    <a href=""><i class="fa fa-twitter"></i></a>&nbsp;
                                    <a href=""><i class="fa fa-google-plus"></i></a>&nbsp;
                                    <a href=""><i class="fa fa-youtube"></i></a>
                                </div>
                            </div>
                            <!--End of col-md-4-->
                        </div>
                        <!--End of row-->
                    </div>
                    <!--End of container-->
                </div>
                <!--End of top header-->
                <div class="header_menu text-center" data-spy="affix" data-offset-top="50" id="nav">
                    <div class="container">
                        <nav class="navbar navbar-default zero_mp ">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand custom_navbar-brand" href="#"><h1><span>JOGJA</span>RAFTING</h1></a>
                            </div>
                            <!--End of navbar-header-->

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse zero_mp" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-right main_menu">
                                    <li><a href="<?php echo base_url();?>Home">Beranda </a></li>
                                    <li><a href="<?php echo base_url();?>tentang">Tentang Kami</a></li>
                                    <li><a href="<?php echo base_url();?>galeri">Galeri</a></li>
                                    <li><a href="<?php echo base_url();?>info">Info</a></li>
                                    <li><a href="<?php echo base_url();?>kontak">Kontak</a></li>
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->
                        </nav>
                        <!--End of nav-->
                    </div>
                    <!--End of container-->
                </div>
                <!--End of header menu-->
            </div>
            <!--end of header area-->
        </section>
        <!--End of Hedaer Section-->



        <!--Start of slider section-->
        <?php
        echo $contents;
        ?>
        <!--End of contact-->



        <!--Start of footer-->
        <section id="footer">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-6">
                        <div class="copyright">
                         <p>
                            Copyright. &copy;
                            <?php 
                                $openday = date('Y',strtotime('-1 year'));
                                $current = date('Y');
                               echo '2018'.'-'.$current;
                            ?>
                           <span><a href=""></a></span></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="designer">
                            <p> By <a href="#">Jogja Rafting</a></p>
                        </div>
                    </div>
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
        <!--End of footer-->



        <!--Scroll to top-->
        <a href="#" id="back-to-top" title="Back to top">&uarr;</a>
        <!--End of Scroll to top-->


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>-->
        <script src="<?php echo base_url();?>front/js/jquery-1.12.3.min.js"></script>

        <!--Counter UP Waypoint-->
        <script src="<?php echo base_url();?>front/js/waypoints.min.js"></script>
        <!--Counter UP-->
        <script src="<?php echo base_url();?>front/js/jquery.counterup.min.js"></script>

        <script>
            //for counter up
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        </script>

        <!--Gmaps-->
       
        <!--Google Maps API-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjxvF9oTfcziZWw--3phPVx1ztAsyhXL4"></script>


        <!--Isotope-->
        <script src="<?php echo base_url();?>front/js/isotope/min/scripts-min.js"></script>
        <script src="<?php echo base_url();?>front/js/isotope/cells-by-row.js"></script>
        <script src="<?php echo base_url();?>front/js/isotope/isotope.pkgd.min.js"></script>
        <script src="<?php echo base_url();?>front/js/isotope/packery-mode.pkgd.min.js"></script>
        <script src="<?php echo base_url();?>front/js/isotope/scripts.js"></script>


        <!--Back To Top-->
        <script src="<?php echo base_url();?>front/js/backtotop.js"></script>


        <!--JQuery Click to Scroll down with Menu-->
        <script src="<?php echo base_url();?>front/js/jquery.localScroll.min.js"></script>
        <script src="<?php echo base_url();?>front/js/jquery.scrollTo.min.js"></script>
        <!--WOW With Animation-->
        <script src="<?php echo base_url();?>front/js/wow.min.js"></script>
        <!--WOW Activated-->
        <script>
            new WOW().init();
        </script>


        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo base_url();?>front/js/bootstrap.min.js"></script>
        <!-- Custom JavaScript-->
        <script src="<?php echo base_url();?>front/js/main.js"></script>
         <script src="js/jquery-2.1.1.min.js"></script>
          <!-- Include all compiled plugins (below), or include individual files as needed -->
          
    </body>

</html>