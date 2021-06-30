<?php get_header() ?>

 <!-- original site -->
 <!-- original site -->
 <!-- original site -->


<header id="header-top">
<div class="page-banner page-banner-about" style="background-image:  linear-gradient( rgba(0, 0, 0,.6) , rgba(0, 0, 0,.4), rgba(0, 0, 0,.2)) , 
     url( <?php if(get_field('banner_image')){ echo get_field('banner_image')['url'] ;
     }else{ echo get_theme_file_uri('/images/header-bg-edit.jpg'); } ?>  );  ">
    
 
    <?php include_once( get_template_directory().'/template-parts/navigation-bar.php'); ?>

    <div class="page-banner-content">
        <div class="container">
            <div class="page-title">
                <h1 class="text-center"> Profile </h1>
            </div>

            <div class="page-site-map">
                <ul class="text-center d-flex justify-content-center" style="background-color;">

                    <li>
                        <a href="" class="mr-1">
                            <i class="fa fa-home"></i> Home &nbsp; </a>
                        <i class="fa fa-chevron-right"></i>
                    </li>
                    <li><a href="">  Profile </a></li>
                </ul>
            </div>
        </div>
    </div>

</div>
    

  </header>
  <main>
        <section id="about-us">


            <div class="container">

                <div class="row">
                    
 
                            <div class="offset-md-1 col-md-5  mb-5 mb-md-0">
                                <div class="wow slideInLeft  abt-card mission-card text-center">
                                    <!-- <i class="fa fa-key fa-2x mb-3"></i> -->
                                    <h3 class="text-uppercase">mission</h3>
                                    <span class="heading-underline"
                                        style="width: 8rem ;margin-bottom:1rem;height: 2px;background-color: var(--primary-color);display: inline-block;"></span>
                                    <p> To develop a competent, skilled team along with a network of partners to enhance the service levels from regional to global while doubling the service segments and customer base from 2018 – 2023 </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="wow slideInRight abt-card  vission-card text-center">
                                    <!-- <i class="fa fa-book-open fa-2x"></i> -->
                                    <h3 class="text-uppercase">vision</h3>
                                    <span class="heading-underline"
                                        style="width: 8rem ;margin-bottom:1rem;height: 2px;background-color: var(--primary-color);display: inline-block;"></span>
                                    <p> To be the premier maritime service provider in the region </p>
                                </div>
                            </div>
                      
                </div>

                <div class="row mt-5">
                <div class="col-md-12  align-items-center d-flex"  style="background-color: ">
                        <div class="wow zoomIn vertical-heading mb-5" style="background-color: ;width:100%">
                     
                            <h2 class="text-center">Service   <strong>Profile</strong> </h2>

                            <img data-src="<?php echo get_theme_file_uri('/images/wave.png') ?>" alt="" class="lazyload img-fluid" style="width:20rem; margin:0 auto; display:block">
                        </div>
                    </div>

                    <div class="col-md-8">
                        <p class="wow fadeInLeft ">   The geographical location of Sri Lanka is ideally positioned on the maritime map to ships trading in the international shipping lanes and the Indian sub-continent .         </p>
                        <p  class="wow fadeInRight ">  Based in Colombo M1, your Sri Lanka ship services partner is a provider of maritime services within Sri Lanka and beyond. 
                        We cover all ports in Sri Lanka with Agency Services operating a 24X7 control room in Colombo, and a base station at the Port of Galle with 2XCrew boats on 24X7 standby.</p>

                        <!-- <h3 class="mt-5">Ports served </h3>
                        <ul>
                            <li><a href="">Colombo</a></li>
                            <li><a href="">Galle</a></li>
                            <li><a href="">Trincomalee</a></li>
                            <li><a href="">Hambantota</a></li>
                        </ul> -->

                       
                    </div>
                    <div class="col-md-4">
                        <div class="about-img-box">
                        <span class="wow fadeInLeft service-img-box">


                        <picture>
                                <source media="(max-width:768px)" srcset="<?php echo get_theme_file_uri('/images/new-control-tower-sm.jpg' ) ?>">                              
                                 <img class="lazyload img-fluid" data-src="<?php echo get_theme_file_uri('/images/new-control-tower-lg.jpg') ?>" alt="">
                            </picture>
                            
                        </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section id="aboutme-services" style="">
            <div class="container">

                <div class="wow zoomIn vertical-heading">
               
                    <h2>M1 <br><strong>services</strong> </h2>
                </div>


                <div class="about-me-s-list-box">
                    <div class="row">
                        <div class="offset-md-1 col-md-6">
                            <ul class="wow slideInLeft about-me-s-list">
                                
                                <li> <a href="#aboutme-services"><i class="far fa-check-circle"></i>  Container operations  </a></li>
                                 <li> <a href="#aboutme-services"><i class="far fa-check-circle"></i> Break bulk operations</a></li>
                                <li> <a href="#aboutme-services"><i class="far fa-check-circle"></i> Technical Services – maintenance and repairs </a></li>
                                <li> <a href="#aboutme-services"><i class="far fa-check-circle"></i> Crew Change </a></li>
                                <li> <a href="#aboutme-services"><i class="far fa-check-circle"></i> Cash to Master   </a></li>
                                <li> <a href="#aboutme-services"><i class="far fa-check-circle"></i>  Repairs and Dry docking  </a></li>
                                <li> <a href="#aboutme-services"><i class="far fa-check-circle"></i> Clearance & delivery ship spares   </a></li>
                                <li> <a href="#aboutme-services"><i class="far fa-check-circle"></i>  Bunker supply (LSHFO 180 cst/ 380cst/LSMGO)*  </a></li>
                                <li> <a href="#aboutme-services"><i class="far fa-check-circle"></i>  Ship Tank Cleaning  </a></li>
                               
                            </ul>
                        </div>


                        <div class="col-md-5">
                            <ul class="wow slideInRight  about-me-s-list">
                                <li> <a href="#aboutme-services"><i class="far fa-check-circle"></i> LSA &amp; FFA Servicing   </a></li>
                                    
                                    <li> <a href="#aboutme-services"><i class="far fa-check-circle"></i>  Ship’s Stores - catering, engine and deck  </a></li>
                                    <li> <a href="#aboutme-services"><i class="far fa-check-circle"></i> Waste Oil Removal   </a></li>
                                    <li> <a href="#aboutme-services"><i class="far fa-check-circle"></i>  Hull Cleaning  </a></li>
                                    <li> <a href="#aboutme-services"><i class="far fa-check-circle"></i>  Fresh Water   </a></li>
                                    <li> <a href="#aboutme-services"><i class="far fa-check-circle"></i>  Charts & Publications  </a></li>
                                    <li> <a href="#aboutme-services"><i class="far fa-check-circle"></i>  Garbage  </a></li>
                                    <li> <a href="#aboutme-services"><i class="far fa-check-circle"></i>  Lubricating Oil   </a></li>
                                    <li> <a href="#aboutme-services"><i class="far fa-check-circle"></i> Maritime security </a></li>
                            </ul>
                        </div>
                    </div> 
                </div>
            </div>
        </section>

 
        <section id="service-points">  
            <div class="container-xl">
                <div class="wow zoomIn vertical-heading"> 
                    <h2>See our <br><strong>service</strong> points </h2>
                </div>


                <div class="row"> 

                <?php $otherPorts = new WP_Query(array(
                                    'post_type' => 'port',
                                    'post__not_in' => array( get_the_ID()),
                                    'posts_per_page' => 5   )) ?>
                        



                    <?php while($otherPorts->have_posts()) { $otherPorts->the_post() ?>


                        <div class="col-sm-6 col-md-3">
                            <div class="port-box">
                                <div class="img-box">
                                <img class="lazyload w-100" data-src="<?php if( has_post_thumbnail() ){ the_post_thumbnail_url() ;} else{echo 'http://localhost/marinelanka/wp-content/uploads/2020/04/no-image.jpg' ;}  ?>" alt="">                                </div>
                                <div class="details">
                                    <div class="content">

                                    <h2><a href="<?php the_permalink() ?>"> <?php the_title() ?></a></h2>
                                    <hr style="background-color: #fff;width: 10rem;height: 2px;">
                                    
                                   <a class="hover-text" href="<?php the_permalink() ?>">  <p> <?php if(has_excerpt()){echo get_the_excerpt();}else{ echo wp_trim_words(get_the_content()), 20 ;} ?> </p>  </a> 

                                    </div>
                                </div>
                            </div>
                        </div>  


                    <?php }  wp_reset_postdata() ?>




 

 
                



                </div>

            </div>
        </section>
 

    </main>

<?php get_footer() ?>