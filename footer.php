
    <footer>



        <div class="container-xl" style="background-color: " ; backgr>

            <div class="row">


                <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                    <div class="wow fadeIn footer-marinelanka-info">
                        <img src="<?php echo get_theme_file_uri('/images/logo.png') ?>" width="150px" alt="marine one pvt Ltd logo" class="img-fliud mb-4"
                            alt="">
                        <p class="mb-3">Marine One is a leader in agency , technical, engineer services and an accredited provider of maritime security.
                        </p>
                        <a target="_blank" href="<?php echo site_url('/grieveance-procedure') ?>" class="btn btn-footer mb-lg-2">Grievance procedure</a>
                        <a target="_blank" href=" <?php  echo site_url('/security-policy')  ?> " class="btn btn-footer">Security Policy</a>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                    <div class="wow fadeIn footer-news">
                        <h3>Our operations</h3>
                        <div class="footer-news-box">
                             <?php echo do_shortcode('[instagram-feed]') ?>
                        </div>
                    </div>
                </div>



                <div class="col-lg-2 col-md-6 mb-5 mb-md-0">
                    <div class="wow fadeIn f-pages text-center text-md-left pl-lg-5">
                        <h3>Pages</h3>
                        <ul class="list-of-pages">
                            <li>
                                <a href="<?php echo site_url() ?> "> <i class="fa fa-chevron-right" aria-hidden="true"></i> Home</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('/portfolios') ?> "> <i class="fa fa-chevron-right" aria-hidden="true"></i> Portfolio</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('/profile') ?>"> <i class="fa fa-chevron-right" aria-hidden="true"></i> Profile</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('/services') ?> "> <i class="fa fa-chevron-right" aria-hidden="true"></i> Services</a>
                            </li>
                            <li><a href="<?php echo site_url('/news') ?> "><i class="fa fa-chevron-right" aria-hidden="true"></i> News</a></li>
                            <li>
                                <a href="<?php echo site_url('/vendors') ?> "> <i class="fa fa-chevron-right" aria-hidden="true"></i> Vendors</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('/contact') ?> "> <i class="fa fa-chevron-right" aria-hidden="true"></i> Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6 mb-5 mb-md-0">
                    <div class="wow fadeIn footer-contact">
                        <h3>Contact us</h3>
                        
                        <ul class="f-contact-list  ">
                            <li> <i class="fa fa-map-o" aria-hidden="true"></i>
                                <p>Level 14, East Tower, World Trade Center, Echelon Square, Colombo 01, Sri Lanka
                                </p>
                            </li>

                            
                            <li>
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <div class="telephone-number-box">
                                    <p><a href="tel:+94112333246">Telephone : +94112333246</a> </p>
                                 </div>
                            </li>

                            <li>
                                <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                <div class="telephone-number-box">
                                       <p><a href="">  <a href="tel:+94777443465"> Hotline 24/7: +94777443465</a></a></p>
                                </div>
                            </li>



                            <li>
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                <p>
                                    <a href="mailto:info@marinelanka.lk">info@marinelanka.lk</a></p>
                            </li>
                        </ul>


                        <div class="f-social-media-links d-flex  ">
                            <a href="https://twitter.com/MarineLanka"> <i class="fa fa-twitter"></i> </a>
                            <a href="https://www.linkedin.com/company/marine-one-private-limited"><i class="fa fa-linkedin"></i> </a>
                            <a href="https://www.facebook.com/m1SriLanka"><i class="fa fa-facebook"></i> </a>
                            <a href="https://www.instagram.com/marineonepvtltd/"><i class="fa fa-instagram"></i> </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <p class="text-center copyright-text">©
            <script>
                document.write(new Date().getFullYear());
            </script> Marine One Pvt Ltd. All Rights Reserved.
        </p>




    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->

<?php wp_footer() ?>
</body>

</html>