<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" id="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <title>Home Page</title>
  <!--  <link rel="stylesheet" href="css/bootstrap-grid-3.3.1.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/icon.css">
    <link rel="stylesheet" href="css/main.css">  -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
<!--START HEADER-->
<div class="internal-page">
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12  col-xs-12">
                    <div class="logo">
                       <?php the_custom_logo(); ?>
                        
                        
                    </div>
                    
                
                        <?php
                           wp_nav_menu(array(
                              'theme_location' => 'primary',
                              'container'       => 'ul', 
                              'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul> ',
                              'menu_class' => '',
                              'menu_id' => '',
                              'depth' => 1


                          ));
                        ?>  
                      
                        <!--<ul> 
                        <li class="active">
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="catalog.html">Catalog</a>
                        </li>
                        <li>
                            <a href="blog.html">Blog</a>
                        </li>
                        <li>
                            <a href="about-us.html">About us</a>
                        </li>
                        <li>
                            <a href="faq.html">FAQ</a>
                        </li>
                        </ul>-->
                    

                    <a href="#" class="button request-sample">Request Sample</a>
                </div>
            </div>
        </div>
        <div class="right-popup">
            <i class="icon-close-button" data-dismiss="modal" aria-hidden="true"></i>
            <p>Get to know KO Software Service. <br> Chat with us for about 15 minutes about your project, and we'll create a free guided test drive to help you find solutions.</p>
            <form>    
              <?php echo do_shortcode( '[contact-form-7 id="98" title="CF_copy"]' ); ?> 
            </form>
        </div>
    </header>