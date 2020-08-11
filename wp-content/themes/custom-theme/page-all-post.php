<?php
/**
Template Name: Custom
 */
?>
<?php get_header('blog'); ?>
<section class="page-section" style="padding-left:20px;padding-right:20px;">
    <div class="container-pages">
        <div class="col-md-8 left page-content">
			       <h1 class="uppercase page-title"><?php the_title();?></h1>
             <ul style="list-style-type: disc;color: #000000;">

           		<?php
           		$temp = $wp_query; $wp_query= null;
           		$wp_query = new WP_Query(); $wp_query->query('posts_per_page=1000' . '&paged='.$paged);
           		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

           		<li><a href="<?php the_permalink(); ?>" style="text-decoration: none;" title="Read more"><?php the_title(); ?></a></li>

           		<?php endwhile; ?>

           		<?php wp_reset_postdata(); ?>

           	</ul>

        </div>
    </div>
 </section>
 </div></div>

<?php get_footer(); ?>
