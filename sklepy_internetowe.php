<?php
    /*
     Template Name: Sklepy Internetowe
    */
?>


<?php get_header(); ?>
<?php the_post(); ?>


    <section class="header-subpage" style="box-shadow: inset 0 0 0 1000px rgba(0, 0, 0, 0.5); background: url('<?php echo get_field('headimg') ?>');background-attachment: fixed;background-position: center center !important;background-repeat: no-repeat;background-size: cover;">
      <div class="title">
        <h2>SKLEP MA SPRZEDAWAĆ. SKUTECZNE SKLEPY INTERNETOWE.</h2>
      </div>
    </section>

    <div class="container-fluid content content-shop">
      <div class="row">
        <?php the_content(); ?>
      </div>
    </div>

    <section class="work">
      <div class="container-fluid">
        <div class="row center-row">
          <?php $loop_posts = new WP_Query (array(
           'post_type' => 'sklepyint',
           'category_name' => 'wyroznione-web',
           'posts_per_page' => 3
           ));
         ?>
   <?php if($loop_posts->have_posts()) : ?>
   <?php while($loop_posts->have_posts()) : $loop_posts->the_post(); ?>
          <div class="col-md-3 col-sm-6 col-xs-12 box-work">
            <a href="<?php the_permalink(); ?>">
              <div class="img-work">
                <img src="<?php the_post_thumbnail_url('home-img-work'); ?>" alt="">
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

        <a href="javascript:history.go(-1)"><button type="button" name="button" class="back-page">powrót</button></a>

    <section class="question">
      <div class="container-fluid">
        <h3>Czekamy na Państwa pytania. Chętnie doradzimy, lub umówimy się na spotkanie. Porozmawiajmy.</h3><button class="btn"><a href="#">szybki kontakt</a></button>
      </div>
    </section>
    <section class="logo-carousel carousel-page">
      <?php echo do_shortcode('[logoshowcase dots="false" slides_column="6" arrows="false" autoplay="true" autoplay_interval="2000" hide_border="true"]'); ?>
    </section>



  <?php get_footer(); ?>
