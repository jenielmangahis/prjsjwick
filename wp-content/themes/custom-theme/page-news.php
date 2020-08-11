<?php get_header('pages'); ?>
<section class="page-content">
  <div class="col-12 pr-0 pl-0 home-nav-container">
  	<div class="container page-content pl-0 pr-0 pt-0">

      <section class="home-news desktop-only">
        <div class="container-home-news">
          <div class="row">
            <?php
              $currCat = get_category(get_query_var('cat'));
              $cat_name = $currCat->name;
              $cat_id   = get_cat_ID( $cat_name );
              $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
              $query = new WP_Query( array(
                'category_name' => $cat_name,
                'order' => 'asc',
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page'=>3,
                'paged' => $paged
              ));
              if ($query->have_posts()) {
                  while ($query->have_posts()) : $query->the_post();
             ?>
            <div class="col-4 pl-3 pr-3">
              <div class="home-news-block">
                <?php if(has_post_thumbnail()){ ?>
                  <?php the_post_thumbnail(); ?>
                <?php }else{ ?>
                  <img class="img-news-home" src="<?php bloginfo('template_directory'); ?>/images/home/ft-banner-2.jpg" alt="Menu">
                <?php } ?>

                <span class="home-news-date mt-2 d-block"><?php the_date('F d Y, h:i A'); ?></span>
                <h5 class="txt-yellow bold mt-2"><?php the_title(); ?></h5>
                <?php
                        $content = get_the_content();
                        $content = preg_replace('/\[caption.*ids=.(.*).\]/', "", $content);
                        $content = apply_filters('the_content', $content);
                        $content = str_replace(']]>', ']]&gt;', $content);
                ?>
                <span class="home-news-description mt-2 d-block text-justify"><?php echo mb_strimwidth(wp_strip_all_tags( $content ), 0, 120, "..."); ?></span>
                <div class="parallelogram-yellow margin-auto mt-3 read-more">
                  <div class="normalize-shape-white">
                    <a class="opensans-bold fp-btn pl-2" href="<?php the_permalink(); ?>">READ MORE</a>
                  </div>
                </div>
              </div>
            </div>

                <?php endwhile; ?>
           <?php } ?>


          </div>

          <br style="clear:both;">
          <div style="margin-top: 40px;text-align: center;padding-bottom: 10px;">
          	<div>
          	    <?php
          	    	$big = 999999999; // need an unlikely integer
          	    	echo paginate_links(array(
          			    'base' => str_replace($big,'%#%', get_pagenum_link($big)),
          			    'format' => '?paged=%#%',
          			    'current' => max( 1, get_query_var('paged') ),
          			    'total' => $query->max_num_pages
          			));
          	    ?>
          	    <?php  wp_reset_postdata(); ?>
              </div>
          </div>
        </div>
      </section>

      <section class="home-news mobile-only">
        <div class="container-home-news">
          <div class="row">
            <div id="carousel-a" class="carousel slide">
               <div class="carousel-inner">

                 <?php
                   $currCat = get_category(get_query_var('cat'));
                   $cat_name = $currCat->name;
                   $cat_id   = get_cat_ID( $cat_name );
                   $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                   $query = new WP_Query( array(
                     'category_name' => $cat_name,
                     'order' => 'asc',
                     'post_type' => 'post',
                     'post_status' => 'publish',
                     'posts_per_page'=>10,
                     'paged' => $paged
                   ));
                   if ($query->have_posts()) {
                       while ($query->have_posts()) : $query->the_post();
                  ?>
                    <?php if ($query->current_post === 0) { ?>
                    <div class="carousel-item active">

                    <?php } else { ?>
                    <div class="carousel-item">
                    <?php } ?>
                      <div class="col-12 pl-5 pr-5">
                        <div class="home-news-block">
                          <?php if(has_post_thumbnail()){ ?>
                            <?php the_post_thumbnail(); ?>
                          <?php }else{ ?>
                            <img class="img-news-home" src="<?php bloginfo('template_directory'); ?>/images/home/ft-banner-2.jpg" alt="Menu">
                          <?php } ?>

                          <span class="home-news-date mt-2 d-block"><?php the_date('F d Y, h:i A'); ?></span>
                          <?php
                                  $content = get_the_content();
                                  $content = preg_replace('/\[caption.*ids=.(.*).\]/', "", $content);
                                  $content = apply_filters('the_content', $content);
                                  $content = str_replace(']]>', ']]&gt;', $content);
                          ?>
                          <h5 class="txt-yellow bold mt-2"><?php the_title(); ?></h5>
                          <span class="home-news-description mt-2 d-block text-justify"><?php echo mb_strimwidth(wp_strip_all_tags( $content ), 0, 120, "..."); ?></span>
                          <div class="parallelogram-yellow margin-auto mt-3 read-more">
                            <div class="normalize-shape-white">
                              <a class="opensans-bold fp-btn pl-2" href="<?php the_permalink(); ?>">READ MORE</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                      <?php endwhile; ?>
                  <?php } ?>
               </div>
               <a class="carousel-control-prev" href="#carousel-a" role="button" data-slide="prev">
                 <span class="arrow-prev" aria-hidden="true">
                   <i class="fa fa-angle-left st-black wide-gap-left" aria-hidden="true"></i>
                 </span>
                 <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#carousel-a" role="button" data-slide="next">
                 <span class="arrow-next" aria-hidden="true">
                   <i class="fa fa-angle-right st-black wide-gap-right" aria-hidden="true"></i>
                 </span>
                 <span class="sr-only">Next</span>
               </a>
            </div>
          </div>
        </div>
      </section>



    </div>
  </div>
</section>
<?php get_footer('news'); ?>
