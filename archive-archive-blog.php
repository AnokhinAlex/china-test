<?php get_header('in'); ?>
<section class="blog">
        <h2 class="title">blog</h2>
        <div class="blog-banner" style="background-image:url(<?echo  get_template_directory_uri();?>/images/blog-bg.png );">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        
                        <div class="banner-content">
                            <h1 class="title">Lorem ipsum dolor sit amet, consectetur</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog-items">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">


<?php global $paged;
$args = array( 
        'post_type' => 'archive-blog', 
        'posts_per_page' => 2, 
        'orderby' => 'ID', 
        'order' => 'DESC',
        'orderby' => 'date', 
'order' => 'DESC', 
'paged' => $paged,  
        ); 
        $the_query = new WP_Query( $args ); 
        if ( $the_query->have_posts() ) { 
        while ( $the_query->have_posts() ) { 
        $the_query->the_post(); ?> 
                           
                            <div class="blog-item">
                            <div class="left-block">
                                <a href="<?php the_permalink(); ?>">

                                <? $thumbnail_id = get_post_thumbnail_id(get_the_ID()); 
                        echo ' <img src="'. current(wp_get_attachment_image_src($thumbnail_id, 'medium')) .'" alt=""/>'

                                    ?>

                                </a>
                            </div>
                            <div class="right-block">
                                <a href="<?php the_permalink(); ?>"><h3 class="title"><?php the_title(); ?> <br> <?php the_category(); ?> </h3>
                                    <p><?php echo get_the_excerpt();?></p>    
                                    <span><?php echo get_the_date('M Y'); ?></span>
                                </a>
                            </div>
                        </div>



<?php } 
}
?> 

<hr class="sline">
<?wp_bootstrap_pagination('archive-blog');?>

                

                    </div>
                </div>
            </div>
        </div>
    </section>
<!--END CONTENT-->


<?php get_footer('in'); ?>
<!--END FOOTER-->
</div>

<!--START MODAL-->

<div class="modal fade enquiry" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
        <i class="icon-close-button" data-dismiss="modal" aria-hidden="true"></i>
        <form>
            <label>Your name: *</label>
            <input type="text">
            <label>Your E-mail: *</label>
            <input type="email">
            <label>Message: *</label>
            <textarea></textarea>
            <p>* - Required fields</p>
            <input type="submit" value="SEND" class="button">
        </form>
    </div>
  </div>
</div>
<!--END MODAL-->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/common.js"></script>

</body>

</html>