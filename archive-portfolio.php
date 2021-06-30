<?php get_header() ?>

<div class="hero-section">


 



<h2> Portfolio </h2>

</div>
</header>

<main>

 
 
<section id="portfolio-all">
        <div class="container-md">


                    <?php
                    
                    $topPortfolio  = new  WP_Query(array(
                        'posts_per_page' => 3,
                        'post_type' => 'portfolio'
                    ));
                    
                    while ( $topPortfolio -> have_posts()): $topPortfolio->the_post() ?>
                          <?php if ($topPortfolio->current_post % 2 == 0): ?>
                              
                    <div class="row mb-5">
                        <div class="col-md-4 ">
                            <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                        </div>
                        <div class="col-md-8 ">
                            <div class="portfolio-text-content">
                           <h3><?php echo get_the_title() ?></h3>
                                 <!-- <a href="" class="portfolio-category">Portfolio Category</a> -->
                                <p class="text-justify"> <?php echo wp_trim_words(get_the_content(),50) ?>  </p>
                                <a href="<?php echo get_the_permalink() ?>" class="learn-more"> Read More <i class="fa fa-chevron-right" aria-hidden="true"></i> </a>
                            </div>

                        </div>
                    </div>

                         <?php else: ?>
                            
                    <div class="row  mb-5">
                        <div class="col-md-8 ">
                        <div class="portfolio-text-content">
                                <h3><?php echo get_the_title() ?></h3>
                      
                                <!-- <a href="" class="portfolio-category">Portfolio Category</a> -->
                                <p class="text-justify"> <?php echo wp_trim_words(get_the_content(),50) ?>  </p>
                                <a href="<?php echo get_the_permalink() ?>" class="learn-more"> Read More <i class="fa fa-chevron-right" aria-hidden="true"></i> </a>
                            </div>
                        </div>
                        <div class="col-md-4 ">
                        <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                        </div>
                    </div>

                        <?php endif ?>
                    <?php endwhile ?>

                    <?php     wp_reset_postdata() ?>

  
        </div>



<section class="cover-img" style="background-image: url(<?php echo get_theme_file_uri('/images/portfolio-cover.jpg') ?>); background-attachment: fixed ; 
background-size: cover; background-position: center bottom;">
</section>


     <div class="container-md mt-5 second-portfolio-section">

    
    <?php
                    
                    $topPortfolio  = new  WP_Query(array(
                        'posts_per_page' => 10,
                        'post_type' => 'portfolio'
                    ));
                    
                    while ( $topPortfolio -> have_posts()): $topPortfolio->the_post() ?>
                          <?php if ($topPortfolio->current_post % 2 == 0): ?>
                              
                    <div class="row mb-5">
                        <div class="col-md-4 ">
                            <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                        </div>
                        <div class="col-md-8 ">
                            <div class="portfolio-text-content">
                           <h3><?php echo get_the_title() ?></h3>
                                 <!-- <a href="" class="portfolio-category">Portfolio Category</a> -->
                                <p class="text-justify"> <?php echo wp_trim_words(get_the_content(),50) ?>  </p>
                                <a href="<?php echo get_the_permalink() ?>" class="learn-more"> Read More <i class="fa fa-chevron-right" aria-hidden="true"></i> </a>
                            </div>

                        </div>
                    </div>

                         <?php else: ?>
                            
                    <div class="row  mb-5">
                        <div class="col-md-8 ">
                        <div class="portfolio-text-content">
                                <h3><?php echo get_the_title() ?></h3>
                      
                                <!-- <a href="" class="portfolio-category">Portfolio Category</a> -->
                                <p class="text-justify"> <?php echo wp_trim_words(get_the_content(),50) ?>  </p>
                                <a href="<?php echo get_the_permalink() ?>" class="learn-more"> Read More <i class="fa fa-chevron-right" aria-hidden="true"></i> </a>
                            </div>
                        </div>
                        <div class="col-md-4 ">
                        <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                        </div>
                    </div>

                        <?php endif ?>
                    <?php endwhile ?>



    
    </div>
 
    </section>

</main>

<?php get_footer() ?>