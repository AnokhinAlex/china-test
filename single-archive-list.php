<?php get_header(); ?>


<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?> 
<section>
        <div class="catalog card">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                       <? chinatheme_breadcrumbs();?>
                       <h3 class="title"><?php the_title(); ?></h3>
                        <div class="cards">
                            <div class="left-block">
                            <?php $images = get_field('gallery');									
									if( $images ): ?>

									   <div class="slider-card slider-product">
									        <?php foreach( $images as $image ): ?>
									        	<div class="item-slider">
                                                                  	                             
                                       <a href="<?php echo $image['url']; ?>" style="background-image:url(<?php echo $image['sizes']['thumbnail']; ?>);" data-zoom-image="<?php echo $image['url']; ?>">
                                        </a>
                                    </div>
									        
									        <?php endforeach; ?>
									    </div>
									<?php endif; ?>                                                                                                 		                                                            

                            </div>
                            <div class="right-block">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#product-details" data-toggle="tab">Product Details:</a>
                                    </li>
                                    <li>
                                        <a href="#product-description" data-toggle="tab">Product Description:</a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane active" id="product-details">
                                        <h5><?echo get_field_object('card_description')['label'];?></h5>
                                        <p><?php the_field('card_description'); ?></p>
                                        <h5><?echo get_field_object('card_device_compatibility')['label']?></h5>
                                        <p><?php the_field('card_device_compatibility'); ?></p>
                                        <!--card_key_features-->
                                        <h5><?= get_field_object('card_key_features')['label'];?></h5>
                                        <? $textAr = explode("\n", get_field_object('card_key_features')['value']);?>
                                         <?php 
                                            echo '<ul>';
                                            foreach($textAr as $value)
                                            {
                                              echo '<li>' . $value . '</li>';
                                            }
                                            echo '</ul>';
                                         ?>
                                    </div>
                                    <div class="tab-pane" id="product-description">
                                        <h5><?echo get_field_object('card_description')['label'];?></h5>
                                        <p><?php the_field('card_description'); ?></p>
                                        <h5><?= get_field_object('card_key_features')['label'];?></h5>
                                        <? $textAr = explode("\n", get_field_object('card_key_features')['value']);?>
                                         <?php 
                                            echo '<ul>';
                                            foreach($textAr as $value)
                                            {
                                              echo '<li>' . $value . '</li>';
                                            }
                                            echo '</ul>';
                                         ?>
                                    </div>
                                </div>
                                <a href="#" class="button" data-toggle="modal" data-target=".enquiry">enquiry</a>
                            </div>

                            


                                    <?php 

                                    $images = get_field('gallery');

                                    if( $images ): ?>
                                        <div class="slider-card slider-product-nav">

                                            <?php foreach( $images as $image ): ?>
                                                <div class="item-slider">
                                   
                                        
                                        <img src="<?php echo $image['url']; ?>" alt="#">
                                        <a href="<?php echo $image['url']; ?>"></a>

                                        
                                    </div>
                                               
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>

                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endwhile; ?> 

<?php get_footer(); ?>