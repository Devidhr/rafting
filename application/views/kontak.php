        <!--Start of contact-->
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="colmd-12">
                        <div class="contact_area text-center">
                            <h3>Hubungi Kami</h3>
                        </div>
                    </div>
                </div>
                <!--End of row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="office">
                            <div class="title">
                                <h5>Informasi Perusahaan</h5>
                            </div>
                            <div class="office_location">
                                <div class="address">
                                    <i class="fa fa-map-marker"><span>Jalan Kali Urang no 40, Jogjakarta 1205, Indonesia</span></i>
                                </div>
                                <div class="phone">
                                    <i class="fa fa-phone"><span>+ 62-7798-5644</span></i>
                                </div>
                                <div class="email">
                                    <i class="fa fa-envelope"><span>youremail@mail.com</span></i>
                                </div>
                                <div id="map"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="msg">
                            <div class="msg_title">
                                <h5>Tulis Pesan</h5>
                            </div>
                            <div class="form_area">
                                <!-- CONTACT FORM -->
                                <div class="contact-form wow fadeIn animated" data-wow-offset="10" data-wow-duration="1.5s">
                                    <div id="message"></div>
                                    <form action="<?php echo base_url();?>Kontak/add_action" class="form-horizontal contact-1" role="form" name="contactform" id="contactform" method="post">
                                        <div class="form-group">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="nama_pengirim" id="nama_pengirim" placeholder="Nama Anda">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="email_pengirim" id="email_pengirim" placeholder="Email Anda">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" name="judul_pesan" id="judul_pesan" placeholder="Subjek Pesan">
                                            </div>
                                        </div>
                                         <div class="form-group">
                                        <div class="col-sm-12">
                                            <textarea name="isi_pesan" id="isi_pesan" class="form-control" cols="30" rows="8" placeholder="Isi Pesan"></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn custom-btn" data-loading-text="Loading...">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--End of col-md-6-->
    </div>
    <!--End of row-->
</div>
<!--End of container-->
</section>