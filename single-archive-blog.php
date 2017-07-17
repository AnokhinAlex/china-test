<?php get_header('in'); ?>
<!--END HEADER-->

<!--START CONTENT-->
    <section class="blog">
        <h2 class="title">blog</h2>
        <div class="blog-banner" style="background-image:url(<?echo  get_template_directory_uri();?>/images/Microsoft-Windows-10-S.png);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    </div>
                </div>
            </div>
        </div>
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); // Начало цикла ?> 
        <div class="blog-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">              
                        <p class="date"><? the_date();?></p>
                        <h1 class="title"><?php the_title(); // Заголовок ?></h1>
                        <p><? the_content(); ?></p>
                    </div>
                </div>
            </div>
        </div>
                                        
        <?php endwhile; ?> 



<?php
$next_post = get_next_post();
if ( ! empty( $next_post ) ): ?>
    <a href="<?php echo get_permalink( $next_post->ID ); ?>">
        <?php echo apply_filters( 'the_title', $next_post->post_title ); ?>
    </a>
<?php endif; ?>

<?php
$prev_post = get_previous_post();
if (!empty( $prev_post )): ?>
  <a href="<?php echo $prev_post->guid ?>"><?php echo $prev_post->post_title ?></a>
<?php endif ?>

        <div class="blog-pagination">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="left-block">
                            <a href="<?php echo $prev_post->guid ?>"><i class="icon-prev"></i>Previous</a>
                            <?$pp = $prev_post->ID?>
                            <?$np = $next_post->ID?>
                           
                            
                            <img alt="#" src="<?if($pp!=""){echo get_the_post_thumbnail_url($pp,'medium');}?>">
                           
                            <div class="description">
                                <h3 class="title"><?php echo $prev_post->post_name; ?></h3>
                                <p><?php $ct = apply_filters( 'the_title', $prev_post->post_content); ?>
                                 <?echo   wp_trim_words( $ct, 10, null );?></p>
                                <p class="date"><?php $dd = apply_filters( 'the_title', $prev_post->post_date_gmt ); ?>
                                 <?echo $dd;?>   
                                </p>
                            </div>
                        </div>
                        <div class="right-block">
                            <a href="<?php echo get_permalink( $next_post->ID ); ?>">Next<i class="icon-next"></i></a>
                            <img alt="#" src="<?if($np!=""){echo get_the_post_thumbnail_url($np,'medium');}?>">

                            <div class="description">

                                <h3 class="title"><?php echo $next_post->post_name; ?></h3>
                               
                            
                                <p><?php $ct = apply_filters( 'the_title', $next_post->post_content); ?>
                                 <?echo   wp_trim_words( $ct, 10, null );?>
                                </p>
                                <p class="date"><?php $dd = apply_filters( 'the_title', $next_post->post_date_gmt ); ?>
                                    <?echo $dd;?>                                
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<!--END CONTENT-->

<!--START FOOTER-->
 <?php get_footer(); ?>