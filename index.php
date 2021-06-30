<?php get_header() ?>


<?php get_header() ?>


<div class="hero-section">

<h2> News </h2>

</div>
</header>

<main>

<section id="news-archive">
<div class="container">
    <div class="row">
 

    <?php 
    
    $mainNews = new WP_Query(array(
        'post_type' => 'post' ,
        'posts_per_page' => 12

    ));
    
    while($mainNews -> have_posts()) { $mainNews -> the_post() ; ?>
        
                <div class="col-md-6 col-sm-12 col-lg-3 mb-4">
                    <div class="news-item">
                        <div class="news-img-box">
                            <img src="
                            
                            <?php if(has_post_thumbnail() ) {echo get_the_post_thumbnail_url() ;}else{echo get_theme_file_uri('/images/no-img.jpg'); } ?> " >
                         </div>
        
                        <div class="news-content">
                            <p class="date"> <?php the_time('d') ?>   <?php the_time('M') ?> ,  <?php the_time('yy') ?></p>
                            <h4 class="portfolio-title"> <a href="<?php echo get_the_permalink() ?>">  <?php echo get_the_title() ?></a></h4>
        
                        </div>
                    </div>
                </div>
 
    <?php } ?>
 
 

 

    </div>

    <div class="news-pagination" id="news-pagination-box">
                        <?php   bittersweet_pagination() ; ?>
                    </div>

    <!-- <div class="pagination">

        <a href="" class="pagination-link"> 1 </a>
        <a href="" class="pagination-link"> 2 </a>
        <a href="" class="pagination-link"> 3 </a>
        <a href="" class="pagination-link"> 4 </a>
        <a href="" class="pagination-link"> 5 </a>
    </div> -->

</div>


</section>


</main>



<?php get_footer() ?>