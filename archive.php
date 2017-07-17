<?php get_header('in'); ?>
<!--<?php query_posts($query_string . '&posts_per_page=2');?>

 <?php $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
<?php $params = array(
	'posts_per_page' => 3, // количество постов на странице
	//'post_type'       => '', // тип постов
	'paged'           => $current_page // текущая страница
);
query_posts($params); ?>
 
<?php $wp_query->is_archive = true;
$wp_query->is_home = false;?>-->

<!--START CONTENT-->
    <section class="blog">
        <h2 class="title">blog</h2>
        <div class="blog-banner" style="background-image:url(images/blog-bg.png);">
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

							<? while(have_posts()): the_post(); ?>
                            

							
							
							<div class="blog-item">
                            <div class="left-block">
                                <a href="<?php the_permalink(); ?>"><? the_post_thumbnail(); ?></a>
                            </div>
                            <div class="right-block">
                                <a href="#5"><h3 class="title"><?php the_title(); ?> <br> <?php the_category(); ?></h3>
                                    <p><? the_excerpt(); ?></p>    
                                    <span><? the_time('j F Y'); ?></span>
                                </a>
                            </div>
                        </div>
							
							
							<?php endwhile; ?>

					

                      <?php if ( function_exists('wp_bootstrap_pagination') )
                        var_dump(wp_bootstrap_pagination()); ?>
                        <?var_dump(wp_count_posts());?>
                        
                   
                        <hr class="sline">
                        <ul class="pagination">
                            <li>
                                <a href="#">Prev</a>
                            </li>
                            <li>
                                <a href="#">1</a>
                            </li>
                            <li class="active">
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a href="#">...</a>
                            </li>
                            <li>
                                <a href="#">100</a>
                            </li>
                            <li>
                                <a href="#">Next</a>
                            </li>
                        </ul>
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
