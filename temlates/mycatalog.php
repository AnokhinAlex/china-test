<?php
/*
Template Name: mycatalog
Template Post Type: page
*/
?>
<?php get_header('in'); ?>

<!--START CONTENT-->
    <section>	
		   
        <div class="catalog">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  
                        <? get_template_part('temlates/bread');?>
					    <div class="items">
					       <?php 
$args = array( 
'post_type' => 'archive-list', 
'posts_per_page' => 1, 
'orderby' => 'rand', 
'order' => 'DESC', 
); 
$the_query = new WP_Query( $args ); 
if ( $the_query->have_posts() ) { 
while ( $the_query->have_posts() ) { 
$the_query->the_post(); ?> 
                            <div class="item">
                                <div class="description-item">
                                    <a href="<?php the_permalink(); ?>">
                                        <img src="images/windows-img-2.png" alt="#">
                                        <h3><?php the_title(); ?></h3>
                                        <h3><?php the_category(); ?></h3>
                                        <p><?php echo get_the_excerpt();?>.</p>
                                    </a>
                                </div>
                            </div>
<?php } 
}
?> 
					   
                       
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--END CONTENT-->

<?php get_footer(); ?>
