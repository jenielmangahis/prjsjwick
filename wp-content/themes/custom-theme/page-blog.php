<?php
/**
Template Name: Homepage
 */
?>
<?php get_header('blog'); ?>
<section class="page-section" style="padding-left:20px;padding-right:20px;">
    <div class="container-pages">
        <div class="col-md-8 left page-content">
			 <h1 class="uppercase page-title"><?php the_title();?></h1>
			 <?php $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
			 	   $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'order'=>'DESC', 'posts_per_page'=>4, 'paged' => $paged)); ?>
		    	<?php if ( $wpb_all_query->have_posts() ) : ?>
    				<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>

						<div class="col span_12_of_12 blog-container">
							<div class="col span_3_of_12 blog-img">
                <a href="<?php the_permalink(); ?>">
    							<?php if(has_post_thumbnail()){ ?>
    								<?php the_post_thumbnail(); ?>
    							<?php }else{ ?>
    								<img class="img-frame img-center" src="<?php bloginfo('template_directory'); ?>/images/blog-img.jpg">
    							<?php } ?>
                </a>
							</div>
							<div class="col span_9_of_12 blog-text">
								<a class="blog-title" style="text-decoration:none !important;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								<p>
<?php 
        $content = get_the_content();
        $content = preg_replace('/\[caption.*ids=.(.*).\]/', "", $content);
        $content = apply_filters('the_content', $content);
        $content = str_replace(']]>', ']]&gt;', $content);
?>
<?php // echo wp_strip_all_tags( get_the_content() ); ?>
<?php echo mb_strimwidth(wp_strip_all_tags( $content ), 0, 400, "..."); ?>
<?php // echo get_post_meta( get_the_ID(), 'short_desc', true); ?></p>
								<p style="float:left;margin-top: 1px;margin-right: 10px;" class="category">Category: <?php the_category(); ?></p>
<br/><br/>
								<a class-"read-btn" href="<?php the_permalink(); ?>" style="text-decoration:none !important;" class="blog-button">Read More</a>
							</div>
						</div>



		     <?php endwhile; ?>
		<?php endif; ?>
		<br style="clear:both;">
		<div style="margin-top: 20px;text-align: center;padding-bottom: 40px;">
			<div>
			    <?php
			    	$big = 999999999; // need an unlikely integer
			    	echo paginate_links(array(
					    'base' => str_replace($big,'%#%', get_pagenum_link($big)),
					    'format' => '?paged=%#%',
					    'current' => max( 1, get_query_var('paged') ),
					    'total' => $wpb_all_query->max_num_pages
					));
			    ?>
			    <?php  wp_reset_postdata(); ?>
		    </div>
		</div>

        </div>
    </div>
 </section>
 </div></div>

<?php get_footer(); ?>
