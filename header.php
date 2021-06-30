<!doctype html>
<html lang="en">

<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131000909-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-131000909-1');
</script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
     <!-- <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200;300;400;500;600;700&display=swap"    rel="stylesheet"> -->
    <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->
  
    <meta name="description"   content="Sri Lanka Ship Agent, Ship Chandler, Port Operations, Ship repair, Technical services, Ship Provisions, Bunker Supply, Ship Tank Cleaning, Maritime Security">
 
    <link rel="icon" href="<?php echo get_theme_file_uri('/images/images/cropped-logo-32x32.png') ?>" sizes="32x32" />
    <link rel="icon" href="<?php echo get_theme_file_uri('/images/cropped-logo-192x192.png') ?>" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_theme_file_uri('/images/cropped-logo-180x180.png') ?>  " />
    <meta name="msapplication-TileImage" content="<?php echo get_theme_file_uri('/images/cropped-logo-270x270.png') ?> " />
    
    <script type="text/javascript">
            document.addEventListener( 'wpcf7mailsent', function( event ) {
 
                location = 'http://www.marinelanka.com/wp-content/themes/marinelanka/html-temp-2.html';


            }, false );
    </script>

    <?php wp_head() ; ?>
 </head>

<body <?php body_class() ?>>




<header class="" style="background-image:url( <?php if(get_field('page_banner_image')){ echo get_field('page_banner_image')['url'] ;}
    elseif(  get_post_type() == 'service' )  { echo get_field('page_banner_image',44)['url']; }
    elseif(  get_post_type() == 'post' )  { echo get_field('page_banner_image',18)['url']; }
    elseif(  get_post_type() == 'portfolio' )  { echo get_field('page_banner_image',22)['url']; }
    elseif(  get_post_type() == 'port' )  { echo get_field('page_banner_image')['url']; }


else{ echo get_theme_file_uri('/images/no-img.jpg'); } ?>   )">



<div class="container-lg navbar-container">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#"><img src="<?php echo get_theme_file_uri('/images/logo.png') ?>" width="130px" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url()  ?>">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('/profile') ?>">PROFILE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('/portfolios') ?>">PORTFOLIO</a>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('/services') ?>">SERVICES</a>
                </li>
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="services.html" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Services
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Port agency services</a>
                        <a class="dropdown-item" href="#">Bunker and lube oil</a>
                        <a class="dropdown-item" href="#">Hull and tank cleaning</a>
                        <a class="dropdown-item" href="#">Crew changes</a>
                        <a class="dropdown-item" href="#">Maritime security</a>
                        <a class="dropdown-item" href="#">Ships Stores, Spares and Repairs</a>
                    </div>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('/news') ?>">NEWS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('/vendors') ?>">VENDORS</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('/contact') ?>">CONTACTS</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!-- end of main menu  container -->
