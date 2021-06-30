<?php get_header() ?>

<header id="header-top">
<div class="page-banner"
    style="background-image:linear-gradient(rgba(102, 102, 102, 0.5), rgba(0, 0, 0, 0.9)) , url( <?php echo get_theme_file_uri('/images/services-bg.jpg')?> )">

    <?php include_once( get_template_directory().'/template-parts/navigation-bar.php'); ?>

    <div class="page-banner-content">
        <div class="container">
            <div class="page-title">
                <h1 class="text-center"><?php the_title() ?></h1>
            </div>

            <div class="page-site-map">
                <ul class="text-center d-flex justify-content-center" style="background-color;">

                    <li>
                        <a href="" class="mr-1">
                            <i class="fa fa-home"></i> Home &nbsp;</a>
                        <i class="fa fa-chevron-right"></i>
                    </li>
                    <li><a href=""> <?php the_title() ?></a></li>
                </ul>
            </div>
        </div>
    </div>

</div>

  </header>



  <main>
        <div class="container">
            <div class="row">

                <div class="col-md-9">
                    <section id="services-page" class="pr-3">
                        <div class="wow zoomIn vertical-heading">
                            <h2>Colombo Port</h2>

                            <div class="s-page-service-box">
                                <div class="row">



                        <?php   while( have_posts()){  the_post(); ?>

                                    <div class="col-sm-6 col-md-6  col-lg-4 mb-5">
                                        <div class="service-page-service-box-item" style="background-image: linear-gradient(to right bottom, rgba(0, 0, 0, 0.7),   
                                        rgba(17, 40, 78, 0.803)), url(<?php echo get_theme_file_uri('/images/branches/branch-2.jpg') ?>)">
                                            <div class="img-box">
                                                <img src="<?php if(has_post_thumbnail()){echo get_the_post_thumbnail_url();} else{echo 'http://localhost/marinelanka/wp-content/uploads/2020/04/no-image.jpg' ;}  ?>" class="img-fluid" alt="">
                                            </div>
                                            <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                                            <hr
                                                style="height: 2px; background-color: red;width:10rem;margin:.5rem auto">
                                            <p><?php  echo wp_trim_words( get_the_content(),20) ?></p>
                                            <a href="<?php the_permalink() ?>" class="read-more">Read More</a>
                                        </div>
                                    </div>


                                    <?php }wp_reset_postdata()?>
                                    

                                </div>

                                <?php bittersweet_pagination() ?>

                            </div>
                        </div>
                    </section>
                </div>

                <div class="col-md-3">
                    <section class="ports-archive-page-side-bar">
                        <div class="wow zoomIn vertical-heading">
                            <h2>other <strong>Ports</strong></h2>
                        </div>

                        <div class="row">
                                <div class="other-ports">
                                    <div class="other-ports-img-box">
                                        <img src="<?php echo get_theme_file_uri('/images/ports/header-bg.jpg') ?>" alt="">
                                    </div>
                                    <div class="other-ports-text">
                                        <h3>Trincomalee Port</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, dolorum!</p>
                                        <a href="" class="read-more">View detail</a>
                                    </div>
                                </div>

                        </div>
 
                    </section>



                </div>
            </div>
        </div>

    </main>



  <?php get_footer() ?>