<?php get_header('in'); ?>
<section>   
           
        <div class="catalog">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  
                        <? chinatheme_breadcrumbs();?>
                        <div class="items">
                           <?php 
$args = array( 
'post_type' => 'archive-list', 
'posts_per_page' => 10, 
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
                                    <? $thumbnail_id = get_post_thumbnail_id(get_the_ID()); 
                        echo ' <img src="'. current(wp_get_attachment_image_src($thumbnail_id, 'full')) .'" alt=""/>'

                                    ?>

                                        
                                        <h3><?php the_title(); ?></h3>
                                        <h3><?php the_category(); ?></h3>
                                        <p><?php echo wp_trim_words(get_the_excerpt(),18);?>.</p>
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
