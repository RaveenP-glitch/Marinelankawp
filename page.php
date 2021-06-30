<?php get_header() ?>


<div class="hero-section">



<h2> <?php the_title() ?> </h2>

</div>
</header>


<main>
         <section id="form"  style=" background-image: url(<?php echo get_theme_file_uri('/images/world-map.png') ?>); 
         background-size:cover" >
        
        <div class="container-md">

       
                
                    
                    <?php while(have_posts()){the_post();  ?>
             
                                
                                <?php  the_content();    ?>
             
                    <?php } ?>
                
                    

                    <?php echo get_field('urgent_inquiry') ?>
        
        </div>
        
        </section>



         
       
    </main>


<?php get_footer() ?>