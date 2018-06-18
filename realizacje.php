<?php
    /*
     Template Name: Realizacje
    */
?>


<?php get_header(); ?>

<section class="realizations-comment">
  <?php $loop_posts = new WP_Query (array(
      'post_type' => 'any',
      'p' => 546,
     ));
  ?>
<?php if($loop_posts->have_posts()) : ?>
<?php while($loop_posts->have_posts()) : $loop_posts->the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
<?php endwhile; wp_reset_query(); ?>
<?php endif; ?>
    </section>


    <section class="work">
      <div class="container-fluid">
        <div class="row center-row">
          <?php $loop_posts = new WP_Query (array(
            'post_type' => array( 'sklepyint', 'stronywww'),
            'posts_per_page' => 12,
            'paged' => $paged,
           ));
        ?>
   <?php if($loop_posts->have_posts()) : ?>
   <?php while($loop_posts->have_posts()) : $loop_posts->the_post(); ?>
          <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12 box-work">
            <a href="<?php the_permalink(); ?>">
              <div class="img-work">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
              </div>
              <div class="content-work">
                <h3 class="title-work"><?php the_title(); ?></h3>
                <p class="desc-work"><?php echo get_field('krotkiopis') ?></p>
              </div>
            </a>
          </div>
        <?php endwhile; wp_reset_query(); ?>
       <?php endif; ?>
       
      </div>
        </div>
    </section>


    
    <section class="realizations-comment">
  <?php $loop_posts = new WP_Query (array(
      'post_type' => 'any',
      'p' => 542,
     ));
  ?>
<?php if($loop_posts->have_posts()) : ?>
<?php while($loop_posts->have_posts()) : $loop_posts->the_post(); ?>
        <p><?php the_content(); ?></p>
<?php endwhile; wp_reset_query(); ?>
<?php endif; ?>
    </section>
    
    <section class="logo-carousel">
      <?php echo do_shortcode('[logoshowcase dots="false" slides_column="6" arrows="false" autoplay="true" autoplay_interval="2000" hide_border="true"]'); ?>
    </section>

<?php get_footer(); ?>
