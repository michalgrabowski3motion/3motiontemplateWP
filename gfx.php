<?php
    /*
     Template Name: gfx
    */
?>


<?php get_header(); ?>
<?php the_post(); ?>


    <section class="header-subpage" style="box-shadow: inset 0 0 0 1000px rgba(0, 0, 0, 0.5); background: url('<?php echo get_field('headimg') ?>');background-attachment: fixed;background-position: center center !important;background-repeat: no-repeat;background-size: cover;">
      <div class="title">
        <h2>Projektujemy nowoczesne, profesionalne strony internetowe</h2>
        <p>Strony www projektujemy już od blisko 10 lat. Wszystkie nasze realizacje oparte są o autorski, nieszablonowy layout graficzny i system zarządzania treścią (CMS). Wdrażane przez nas serwisy są w pełni responsywne (urządzenia mobilne).</p>

      </div>
    </section>

    <div class="container-fluid content content-gfx">
      <div class="row">
        <?php the_content(); ?>
      </div>
    </div>

    <section class="work">
      <div class="container-fluid">
        <div class="row center-row">
          <?php $loop_posts = new WP_Query (array(
           'post_type' => 'portfolio',
           'category_name' => 'wyroznione-web',
           'posts_per_page' => 3
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
                <div class="category-work">

                </div>
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

    <section class="logo-carousel carousel-page">
      <?php echo do_shortcode('[logoshowcase dots="false" slides_column="6" arrows="false" autoplay="true" autoplay_interval="2000" hide_border="true"]'); ?>
    </section>


  <?php get_footer(); ?>
