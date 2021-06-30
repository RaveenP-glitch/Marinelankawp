




    <footer>
        <div class="container-xl" style="background-color: ">

            <div class="row">


                <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                    <div class="wow fadeIn footer-marinelanka-info">
                        <img src="<?php echo get_theme_file_uri('/images/marineone-logo.png') ?>" alt="marine one pvt Ltd logo" class="img-fliud mb-4" alt="">
                        <p class="mb-3">Marine One Private Limited is a service provider and a respected maritime risk
                            mitigating
                            expert.</p>
                        <a target="_blank" href="<?php echo site_url('/grieveance-procedure') ?>" class="btn btn--primary mb-lg-4">Grievance procedure</a>
                        <a target="_blank" href="<?php echo site_url('/security-policy') ?>" class="btn btn--primary">Security Policy</a>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                    <div class="wow fadeIn footer-news">
                        <h3>latest news</h3>
                        <div class="footer-news-box">
                        <?php $footerNews = new WP_Query(array(
                            'posts_per_page' => 2 
                        )); while($footerNews -> have_posts()){ $footerNews -> the_post() ?>
                            <div class="f-news-card">
                                <img class="img-fluid" src="<?php if(has_post_thumbnail()){echo get_the_post_thumbnail_url();} else{echo get_theme_file_uri('/images/no-image.jpg') ;}  ?>" alt="">
                                <div class="f-news-info">
                                    <p class="date"><i class="fa fa-calendar-alt"></i> <?php the_time('M') ?> <?php the_time('d') ?> , <?php the_time('Y') ?></p>
                                    <p class="title"><a href="<?php the_permalink() ?>"><?php echo wp_trim_words(get_the_title() , 8) ?> ...</a>
                                    </p>
                                </div>
                            </div>  
                            <?php } ?>  
                        </div>
                    </div>
                </div>


                <div class="col-lg-2 col-md-6 mb-5 mb-md-0">
                    <div class="wow fadeIn f-pages text-center text-md-left pl-lg-5">
                        <h3>Pages</h3>
                        <ul class="list-of-pages">
                            <li><a href="<?php echo site_url('/') ?>">Home</a></li>
                            <li><a href="<?php echo site_url('/about') ?>">About</a></li>
                            <li><a href="<?php echo site_url('/services') ?>">Services</a></li>
                            <li><a href="<?php echo site_url('/news') ?>">News</a></li>
                            <li><a href="<?php echo site_url('/contact') ?>">Contact</a></li>
                            <li>  <a  href="<?php echo site_url('/pda-request') ?>"> PDA request </a>  </li>
                            <li>  <a href="<?php echo site_url('/bunker-inquiry') ?>" > Bunker Inquiry</a> </li>
                            <li> <a href="<?php echo site_url('/maritime-security-quote') ?>" > Maritime Security </a>  </li>




                           





                        </ul>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6 mb-5 mb-md-0">
                    <div class="wow fadeIn footer-contact">
                        <h3>contact us</h3>
                        <ul class="f-contact-list">
                            <li> <i class="far fa-map"></i>
                                <p>Level 14, East Tower, World Trade Center, Echelon Square, Colombo 01, Sri Lanka
                                </p>
                            </li>
                            <li>
                                <i class="fa fa-phone-alt"></i>
                                <div class="telephone-number-box">
                                    <p><a href="tel:+94112333246">Telephone : +94112333246</a> <br>
                                        <a href="tel:+94777443465"> Hotline : +94777443465</a></p>
                                </div>
                            </li>
                            <li>
                                <i class="far fa-envelope"></i>

                                <p> <a href="mailto:info@marinelanka.com">info@marinelanka.com</a> <br>
                                    <a href="mailto:info@marinelanka.lk">info@marinelanka.lk</a></p>
                            </li>
                            <li>
                                <div class="f-social-media-links">
                                    <a href="https://www.facebook.com/m1SriLanka"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://twitter.com/MarineLanka"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.instagram.com/m1srilanka/"><i class="fab fa-instagram"></i></a>
                                    <a href="https://www.linkedin.com/company/marine-one/"><i
                                            class="fab fa-linkedin-in"></i></a>
                                    <a
                                        href="https://www.youtube.com/channel/UC8G-6olfwuk_lgIVXctMqNw?view_as=subscriber"><i
                                            class="fab fa-youtube"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <p class="text-center copyright-text">©<script>
                document.write(new Date().getFullYear());
            </script> Marine One Pvt Ltd. All Rights Reserved.
        </p>
    </footer>

<?php wp_footer() ?>
</body>

</html>