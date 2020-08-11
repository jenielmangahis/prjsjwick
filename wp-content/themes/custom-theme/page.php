<?php get_header('pages'); ?>
<section class="page-content">
  <div class="col-12 pr-0 pl-0 home-nav-container">
  	<div class="container page-content pl-0 pr-0 pt-4">
      <?php
          while ( have_posts() ) : the_post();

              get_template_part( 'template-parts/page/content', 'page' );
              the_content();
              // If comments are open or we have at least one comment, load up the comment template.
              if ( comments_open() || get_comments_number() ) :
                  comments_template();
              endif;

          endwhile; // End of the loop.
      ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>
