<?php get_header(); ?>


<div class="topHead">
 <img class="img-sygnet wow fadeIn" data-wow-delay="0.5s" src="<?php echo AGENCY_THEME_URL ?>images/svg/3m-sygnet.svg" alt="3motion sygnet">

  <div class="top-header">
    <div id="video-container">
      <div class="overlay"></div>
      <video muted="" autoplay="" loop="" class="fillWidth">
          <source src="<?php echo AGENCY_THEME_URL ?>images/movie.mp4" type="video/mp4">
          <source src="<?php echo AGENCY_THEME_URL ?>images/movie.mp4" type="video/ogg">
          <source src="<?php echo AGENCY_THEME_URL ?>images/movie.mp4" type="video/webm">
      </video>

      </div>
  </div>

  <section class="header col-sm-12">
        <div class="header-content">
          <h1 class="wow fadeInDown" data-wow-delay="0.5s">Projektujemy. Budujemy. Promujemy.</h1>
          <p class="wow fadeInDown" data-wow-delay="0.65s">Jesteśmy zespołem kreatywnych profesjonalistów. Od blisko 10 lat projektujemy i wdrażamy nowoczesne strony internetowe, sklepy i aplikacje. Kreujemy wizerunek i dbamy o kompleksowy marketing.</p>
        </div>
  </section>

</div>

    <section class="logo-carousel">
      <?php echo do_shortcode('[logoshowcase dots="false" slides_column="6" arrows="false" autoplay="true" autoplay_interval="2000" hide_border="true"]'); ?>
    </section>

    <section class="work">
      <div class="container-fluid">
        <div class="row center-row">
          <?php $loop_posts = new WP_Query (array(
         'post_type' => array('sklepyint', 'stronywww', 'portfolio'),
         'category_name' => 'wyroznione-home',
         'posts_per_page' => 4,
         ));
      ?>
   <?php if($loop_posts->have_posts()) : ?>
   <?php while($loop_posts->have_posts()) : $loop_posts->the_post(); ?>
          <div class="col-md-6 col-sm-6 col-xs-12 box-work">
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
      'p' => 528,
     ));
  ?>
<?php if($loop_posts->have_posts()) : ?>
<?php while($loop_posts->have_posts()) : $loop_posts->the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
<?php endwhile; wp_reset_query(); ?>
<?php endif; ?>
    </section>

    <section class="news">
      <div class="container-fluid">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 testimonials">
            <!-- <h4>wybrane opinie</h4> -->
            <div class="my-slider">
              	<ul>
                  <?php $loop_posts = new WP_Query (array(
                 'post_type' => 'opinie',
             ));
          ?>
           <?php if($loop_posts->have_posts()) : ?>
           <?php while($loop_posts->have_posts()) : $loop_posts->the_post(); ?>
                  <li>
              		  <div class="logo-testimonials"><img src="<?php the_post_thumbnail_url(); ?>" alt=""></div>
                    <div class="desc-testimonials">
                      <p><?php the_content(); ?></p>
                    </div>
                    <div class="person">
                      <div class="name"><?php echo get_field('imieinazwisko') ?></div>
                      <div class="firm"><?php echo get_field('nazwafirmy') ?></div>
                    </div>
              		</li>
                <?php endwhile; wp_reset_query(); ?>
               <?php endif; ?>
              	</ul>
              </div>
          </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 twitter">

          </div>
        </div>
      </div>
    </section>


<?php get_footer(); ?>
