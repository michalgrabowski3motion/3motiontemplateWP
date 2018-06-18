<?php
    /*
     Template Name: Portfolio
    */
?>


<?php get_header(); ?>


    <section class="work">
      <div class="container-fluid">
        <div class="row center-row">
          <?php $loop_posts = new WP_Query (array(
            'post_type' => 'portfolio',
            'posts_per_page' => 12,
            'paged' => $paged,
           ));
        ?>
   <?php if($loop_posts->have_posts()) : ?>
   <?php while($loop_posts->have_posts()) : $loop_posts->the_post(); ?>
          <div class="col-md-6 col-sm-6 col-xs-12 box-work">
            <a href="<?php the_permalink(); ?>">
              <div class="img-work">
                <img src="<?php the_post_thumbnail_url(''); ?>" alt="">
              </div>
              <div class="content-work">
                <h3 class="title-work"><?php the_title(); ?></h3>
                <p class="desc-work"><?php echo get_field('krotkiopis') ?></p>
                <div class="line"></div>
              </div>
            </a>
          </div>
        <?php endwhile; wp_reset_query(); ?>
       <?php endif; ?>
        </div>
      </div>
    </section>

    <section class="pagination">
      <div class="container-fluid">

        <div class="pagination-number">
          <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
          <?php if (function_exists('wp_pagenavi')) wp_pagenavi(array( 'query' => $loop_posts ));
      wp_reset_postdata();	// avoid errors further down the page
      ?>
        </div>
      </div>
    </section>

<?php get_footer(); ?>
