<?php get_header(); ?>
<!--END HEADER-->
<!--START CONTENT-->
    <section>
        <div class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="banner-content">
                            <h1 class="title">Lorem ipsum dolor sit amet, consectetur</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate</p>
                            <form>
                                <input type="email" value="Enter your e-mail...">
                                <input type="submit" class="button" value="Subscribe">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="who-we-are">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="title">Who We Are</h2>
                        <div class="descriptions">
                            <div class="description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit</p>
                            </div>
                            <div class="description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit</p>
                            </div>
                        </div>
                        <h3 class="title">All Of Our Product Are Sourced Directly Form Third Party Microsoft Resellers</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="advantages">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="title">Our Advantages</h2>
                        <div class="items">
                            <div class="item">
                                <i class="icon-quality"></i>
                                <h3>Quality</h3>
                                <p>100% online activation, original, new sealed product.</p>
                            </div>
                            <div class="item">
                                <i class="icon-price-tag"></i>
                                <h3>Price</h3>
                                <p>The same product, less than 30% of your location</p>
                            </div>
                            <div class="item">
                                <i class="icon-network"></i>
                                <h3>Full range</h3>
                                <p>We have all the major language products and packaging, and can be customized for you</p>
                            </div>
                        </div>
                        <a href="#" class="button">contact us</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="order-process">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="title">Order Process</h2>
                        <div class="items">
                            <div class="item">
                                <i class="icon-Screen-mail"></i>
                                <p>1 - Send Enquiry to Us</p>
                            </div>
                            <div class="item">
                                <i class="icon-abacus"></i>
                                <p>2 - Enquiry - Counter Offer, Discuss the Details</p>
                            </div>
                            <div class="item">
                                <i class="icon-contract"></i>
                                <p>3 - Signing the <br> Contract</p>
                            </div>
                            <div class="item">
                                <i class="icon-credit-card"></i>
                                <p>4 - Payment <br> method</p>
                            </div>
                            <div class="item">
                                <i class="icon-worldwide-shipping"></i>
                                <p>5 - Shipping</p>
                            </div>
                            <div class="item">
                                <i class="icon-like"></i>
                                <p>6 -Order <br> Complete</p>
                            </div>
                        </div>
                        <div class="descriptions">
                            <div class="description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exerci</p>
                            </div>
                            <div class="description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exerci</p>
                            </div>
                        </div>
                        <a href="#" class="button">Request Sample</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="our-production">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="title">Our Production</h2>
                        <div class="slider">
                                                      
                                <?php $args = array( 
                                        'post_type' => 'archive-list', 
                                        'posts_per_page' => 3, 
                                        'orderby' => 'date', 
                                        'order' => 'DESC', 
                                        ); 
                                $the_query = new WP_Query( $args ); 
                                if ( $the_query->have_posts() ) { 
                                while ( $the_query->have_posts() ) { 
                                $the_query->the_post(); ?> 
                            

                            <div class="item">
                            <? $thumbnail_id = get_post_thumbnail_id(get_the_ID());?>                      
                                <div class="img" style="background-image:url(<?echo current(wp_get_attachment_image_src($thumbnail_id, 'full'));?>);"></div>                                
                                <h2 class="title"><?php the_title(); ?></h2>
                                <p><?php echo get_the_excerpt();?></p>
                                <a href="<?php the_permalink(); ?>" class="button">Learn more</a>
                            </div>

                            <?php } 
                            }
                            ?> 

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="top-sales">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <h2 class="title">Top Sales</h2>
                        <div class="items hide-visible">
                        <?php $args = array( 
                                'post_type' => 'archive-list', 
                                'posts_per_page' => 8, 
                                'orderby' => 'date', 
                                'order' => 'DESC', 
                                ); 
                         $the_query = new WP_Query( $args ); ?>
                        <?if ( $the_query->have_posts() ) { 
                        while ( $the_query->have_posts() ) { 
                                $the_query->the_post(); ?> 
                            

                            <div class="item">
                                <div class="description-item">
                                    <a href="<?php the_permalink(); ?>">
                                    <? $thumbnail_id = get_post_thumbnail_id(get_the_ID()); 
                        echo ' <img src="'. current(wp_get_attachment_image_src($thumbnail_id, 'full')) .'" alt=""/>'
                                    ?>
                                    
                                        
                                        <h3><?php the_title(); ?></h3>
                                        <p><?php echo wp_trim_words(get_the_excerpt(),15); ?></p>
                                    </a>
                                </div>
                            </div>

                                <?php } 
                                }
                                ?> 

                            
                        </div>                       
                        <div class="items mobile-visible">
                                <?if ( $the_query->have_posts() ) { 
                                    while ( $the_query->have_posts() ) { 
                                    $the_query->the_post(); ?> 
                            

                            <div class="item">
                                <div class="description-item">
                                    <a href="<?php the_permalink(); ?>">
                                    <? $thumbnail_id = get_post_thumbnail_id(get_the_ID()); 
                        echo ' <img src="'. current(wp_get_attachment_image_src($thumbnail_id, 'full')) .'" alt=""/>'
                                    ?>
                                    
                                        
                                        <h3><?php the_title(); ?></h3>
                                        <p><?php echo wp_trim_words(get_the_excerpt(),15); ?></p>
                                    </a>
                                </div>
                            </div>

                                <?php } 
                                }
                                ?> 
                        </div>
                        <a href="http://china/catalog/" class="button">CATALOG</a>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="clients-about-us">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="title">Clients About Us</h2>
                        <div class="video">
                            <iframe src="https://www.youtube.com/embed/L3wKzyIN1yk?ecver=2" frameborder="0" allowfullscreen></iframe>
                            <p>Jerry Santucci, Santucci Builders</p>
                        </div>
                        <div class="video">
                            <iframe src="https://www.youtube.com/embed/L3wKzyIN1yk?ecver=2" frameborder="0" allowfullscreen></iframe>
                            <p>Jerry Santucci, Santucci Builders</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-form">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="title">Contact Form</h2>
                        <form>
                        <?php echo do_shortcode( '[contact-form-7 id="108" title="Без названия"]' ); ?>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--END CONTENT-->
<!--START FOOTER-->
<?php get_footer(); ?>