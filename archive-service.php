<?php
/* Template Name: Services
 */
get_header() ?>
        <div class="hero-section">

<h2> Services </h2>

</div>
</header>

<main>


<section id="services">
<div class="container">

<?php $allNews = new WP_Query(array(
    'post_type' => 'service',
    'posts_per_page' => 4,
));

while($allNews->have_posts()) { $allNews->the_post()    ?>
    
        <div class="service-item">
            <h4>  <a href="<?php echo get_the_permalink() ?>"> <?php echo get_the_title() ?> </a> </h4>
            <img src=" <?php if(has_post_thumbnail() ) {echo get_the_post_thumbnail_url() ;}else{echo get_theme_file_uri('/images/no-img.jpg'); } ?>" alt="">
    
            <p>  <?php  echo wp_trim_words(get_the_content(),38) ?>  </p>
            <a href="<?php echo get_the_permalink() ?>" class="learn-more"> Read more</a>
        </div>

<?php } ?>
 


    <div class="clearfix"></div>
</div>
</section>


<section class="cover-img" style="background-image: url(<?php echo get_theme_file_uri('/images/bg-4.jpeg') ?>); background-attachment: fixed ; 
background-size: 100%; background-position: top center;">
</section>

<section id="services">
        <div class="container second-service-section">


        <?php $allNews = new WP_Query(array(
    'post_type' => 'service',
    'posts_per_page' => 8,
));

while($allNews->have_posts()) { $allNews->the_post()    ?>
    
        <div class="service-item">
            <h4>  <a href="<?php echo get_the_permalink() ?>"> <?php echo get_the_title() ?> </a> </h4>
            <img src=" <?php if(has_post_thumbnail() ) {echo get_the_post_thumbnail_url() ;}else{echo get_theme_file_uri('/images/no-img.jpg'); } ?>" alt="">
    
            <p>  <?php  if(get_field('service_excerpt')){echo get_field('service_excerpt');} else {  echo wp_trim_words(get_the_content(),40); } ?>  </p>
             <a href="<?php echo get_the_permalink() ?>" class="learn-more"> Read more</a>
        </div>

<?php } ?>
 
        
            <div class="clearfix"></div>


            
        </div>
</section>
</main>

<?php get_footer() ?>

