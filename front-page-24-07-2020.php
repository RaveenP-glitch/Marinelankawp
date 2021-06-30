<?php get_header() ?>


<header id="header-top" class="home-header" style="height:100vh">

<!--
    <video id="home-bg-video" poster="<?php echo get_theme_file_uri('/images/colombo-port-control-tower-lg.jpg') ?>" autoplay loop muted>
        <source data-src="<?php echo get_theme_file_uri('/video/colombo-port-8.mp4') ?>" type="video/mp4">
        <source data-src="<?php echo get_theme_file_uri('/video/colombo-port-8.ogv') ?>" type="video/ogg">
        <source data-src="<?php echo get_theme_file_uri('/video/colombo-port-8.webm') ?>" type="video/webm">
    </video>
-->


<!--
    <picture>
           <source media="(max-width:768px)" srcset="<?php echo get_theme_file_uri('/images/colombo-port-control-tower.jpg' ) ?>">
           <img class="lazyload home-bg-image" data-src="<?php echo get_theme_file_uri('/images/colombo-port-control-tower-lg.jpg') ?>" alt="">
     </picture>
-->

    

    <!--overlay-->
    <div id="home-overlay" style="background: "> </div>

    <?php include_once( get_template_directory().'/template-parts/navigation-bar.php'); ?>

    <div class="page-header-title">
        <h1>Sri Lanka Ship Agent | Ship Chandler | Ship Service Provider</h1>
    </div>
    <div class="container" style="">
        <div class="hero-section" style="background-color:  ;">
            <div class="hero-section__text-box">
                <h1 class="wow fadeIn mb-4 ">
                    <span class="heading__subscript">LEADER IN</span>
                    PORT AGENCY
                    <span class="heading__subscript">SERVICES</span>
                </h1>
            </div>

            <div class="inquiry-buttons-box">
                <div class="wow fadeInLeft  pda-request d-flex flex-column">
                    <a href="<?php echo site_url('/pda-request') ?>" class="btn btn--secondary"> PDA Request </a>
                    <span class="">Port Disbursement Account</span>
                </div>
                <div class="wow fadeInUp   bunker-inquiry-request d-flex flex-column">
                    <a href="<?php echo site_url('/bunker-inquiry') ?>" class="btn btn--secondary"> Bunker inquiry</a>
                    <span class="">Place your bunker inquiry </span>
                </div>
                <div class="wow fadeInRight  maritime-security-request d-flex flex-column">
                    <a href="<?php echo site_url('/maritime-security-quote') ?>" class="btn btn--secondary"> Maritime security </a>
                    <span class=""> Request for <br> quote </span>
                </div>

            </div>
        </div>
    </div>
</header>



    <main>

    
    <section id="service" style="">

<div class="container">


    <div class="row service-left-text">
        <div class="col-md-6">

        <div class="wow zoomIn vertical-heading ">
                    <!-- <h5>fun facts</h5> -->
                    <h2 class="highlighted "  style="margin-bottom:10rem">We deliver <br> <span class="">custom-made</span> solutions</h2>
                </div>

                <p class="wow fadeInLeft paragraph-text">
                   Services with <strong style="">lowest price</strong > points in the market with <strong style=""> uncompromised quality</strong>
                 and with <strong style="; "> intransigent commitment</strong>.                          
                </p>
  
                <p>  You can be assured of our personal touch as we highly value the quality of our services, we are looking to build a lasting partnership that will enable our customer to be on top of their game.   </p>
              
          
        </div>
        <div class="col-md-6">
         



            <div class="wow fadeInRight img-box">
                <span class="service-img-box">

                    <picture>
                        <source media="(max-width:768px)" srcset="<?php echo get_theme_file_uri('/images/maersk.jpg' ) ?>">

                        <img data-src="<?php echo get_theme_file_uri('/images/maersk.jpg' ) ?>" alt="" class="lazyload img-fluid">
                    </picture>

                </span>
            </div>
        </div>
    </div>

</div>
<div class="speciality text-center "  >
    <h3 class="speciality-main-text mb-2">We provide </h3>
    <div class="spl-text">
        <div class="container">
                <div class="spl-text-container d-flex justify-content-center flex-wrap">
                    
                 <div class="spl-text-box">
                    <span style="color:#fff; font-size:1.7rem;font-family : Raleway  ">Lowest</span>
                    <br>
                    <h3 class="mt-md-2"> price &nbsp; </h3>
                </div>

                <div class="spl-text-box">
                    <span style="color:#fff; font-size:1.7rem;font-family : Raleway  ">Highest</span><br>
                    <h3 class="mt-md-2"> &nbsp; Quality &nbsp; </h3>
                </div>

                <div class="spl-text-box">
                    <span style="color:#fff; font-size:1.7rem;font-family : Raleway  ">Continuous</span><br>
                    <h3 class="mt-md-2"> &nbsp; reliability</h3>
                </div>
                </div>
         </div>
    </div>
</div>

<div class="service-bg-overlay"></div>
</section>

        <section id="news">

            <div class="container">

                <div class="wow zoomIn vertical-heading dir-right">
                    <!-- <h5>fun facts</h5> -->
                    <h2>See the <br> latest <strong> news</strong> </h2>
                </div>

                <div class="row home-news">

                <?php $news = new WP_Query(array(
                        'posts_per_page' => 3,
                        'post_type' => 'post',
 

                )) ?>


                <?php while($news->have_posts()){ $news->the_post();?>
                   
                    <div class="col-md-6 col-lg-4  mb-5">
                                    <div class="s-page-news-box">
                                        <div class="s-page-news-card">
                                        <img class="lazyload img-fluid" data-src="<?php if(has_post_thumbnail()){echo get_the_post_thumbnail_url();}else{echo get_theme_file_uri('/images/m1-no-news-image.jpg') ;}  ?>" 
                                        alt="">
                                            <p class="date"><i class="fa fa-calendar-alt"></i> <?php echo get_the_date(); ?> </p>
                                        </div>
                                        <div class="s-page-news-text">
                                        <!-- <div class="row">
                                            <div class="col-6">
                                                         <p   class="author-box mt-4"><i class="fa fa-user pr-2"></i><?php echo get_the_author_link()  ?> </p>
                                            </div>
                                            <div class="col-6">
                                                     <p   class="category text-right mt-4"><i class="fa fa-bookmark pr-2"></i> maritime </p>
                                            </div>
                                        </div> -->
                                            <h3><a href="<?php the_permalink()?>"><?php the_title() ?> </a></h3>
                                            <p style="text-align:justify"> <?php  echo wp_trim_words( get_the_content(),18) ?></p>
                                            <a href="<?php the_permalink() ?>" class="read-more"> Read More</a>
                                        </div>
                                        
                                    </div>
                                </div>  
                   
                   
                     

                 <?php } wp_reset_postdata() ?>

                    

                </div>
                <div class="button-box text-center">
                    <a href="<?php echo site_url('/news') ?>" class="btn btn--see-all">See All news</a>
                </div>

            </div>

        </section>


        <section id="newsletter"  >
            <div class="container">

                <div class="wow zoomIn horizontal-heading text-center">
                    <h5>Subscribe to</h5>
                    <h2>our <strong>newsletter</strong></h2>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <p class=" paragraph-text text-center"> Subscribe to our newsletter and get the valuable promotion offers to your mailbox weekly from Marine One</p>
                        <!-- <form action="" class="wow heartBeat text-center">
                            <div class="form-group">
                                <input type="email" placeholder="Enter Your Email" name="" required>
                                <input type="submit">
                            </div>
                        </form> -->



                        <form action="https://marinelanka.us10.list-manage.com/subscribe/post?u=6d27f9e60253994f6b9bc4b9f&amp;id=11382bce88" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>

 
                            <div id="mce-responses" class="clear">
                                <div class="response" id="mce-error-response" style="display:none"> 
                                </div>
                                <div class="response" id="mce-success-response" style="display:none "> </div>
                            </div>
                            <div class="form-group wow fadeIn">
                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->

                                <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                                <input type="submit" value="Subscribe" name="subscribe" id="" class="button">
                            </div>

                        </form>

                        <script type='text/javascript'
                            src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
                        <script type='text/javascript'>
                            (function ($) {
                                window.fnames = new Array();
                                window.ftypes = new Array();
                                fnames[0] = 'EMAIL';
                                ftypes[0] = 'email';
                            }(jQuery));
                            var $mcj = jQuery.noConflict(true);
                        </script>
                        <!--End mc_embed_signup-->
                    </div>
                </div>
            </div>


        </section>



        <section id="accreditation">
            <div class="container">

                <div class="wow slideInLeft vertical-heading">
                    <!-- <h5>fun facts</h5> -->
                    <h2>Membership <br><strong>accreditation</strong> certification</h2>
                </div> 

                <div class="ac-board owl-carousel owl-carousel-theme">
                    <div class="ac-board-item">
                        <img class="lazyload" data-src="<?php echo get_theme_file_uri('/images/ac-board/100-Series.png') ?>" alt="">
                    </div>
                    <div class="ac-board-item">
                        <img class="lazyload" data-src="<?php echo get_theme_file_uri('/images/ac-board/amcham-srilanka.jpg') ?>" alt="">
                    </div>
                    <div class="ac-board-item">
                        <img class="lazyload" data-src="<?php echo get_theme_file_uri('/images/ac-board/bimco.png') ?>" alt="">
                    </div>
                    <div class="ac-board-item">
                        <img class="lazyload" data-src="<?php echo get_theme_file_uri('/images/ac-board/CASA.png') ?>" alt="">
                    </div>
                    <div class="ac-board-item">
                        <img class="lazyload" data-src="<?php echo get_theme_file_uri('/images/ac-board/ceylon-chamber-of-commerce.png') ?>" alt="">
                    </div>
                    <div class="ac-board-item">
                        <img class="lazyload" data-src="<?php echo get_theme_file_uri('/images/ac-board/CILT.pn') ?>g" alt="">
                    </div>
                    <div class="ac-board-item">
                        <img class="lazyload" data-src="<?php echo get_theme_file_uri('/images/ac-board/icoca.png') ?>" alt="">
                    </div>
                    <div class="ac-board-item">
                        <img class="lazyload" data-src="<?php echo get_theme_file_uri('/images/ac-board/IMPA.png') ?>" alt="">
                    </div>
                    <div class="ac-board-item">
                        <img class="lazyload" data-src="<?php echo get_theme_file_uri('/images/ac-board/ISO-28000.png')?>" alt="">
                    </div>
                    <div class="ac-board-item">
                        <img class="lazyload" data-src="<?php echo get_theme_file_uri('/images/ac-board/ISSA.png')?>" alt="">
                    </div>
                    <div class="ac-board-item">
                        <img class="lazyload" data-src="<?php echo get_theme_file_uri('/images/ac-board/panama.png') ?>" alt="">
                    </div>



                </div>

            </div>
        </section>
    </main>


  
<?php get_footer() ?>