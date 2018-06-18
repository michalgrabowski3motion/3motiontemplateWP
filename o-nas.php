<?php
    /*
     Template Name: O nas
    */
?>


 <?php the_post(); ?>
    <?php get_header(); ?>
    <section class="header-subpage" style="box-shadow: inset 0 0 0 1000px rgba(0, 0, 0, 0.5); background: url('<?php echo get_field('headimgabout') ?>');background-attachment: fixed;background-position: center center !important;background-repeat: no-repeat;background-size: cover;">
        <div class="title">
            <h2>Skontaktuj się z nami</h2>
            <p>Pracujemy od poniedziałku do czwartku: od 7:00 do 16:00, w piątki od 8:00 do 12:00. Zadzwoń do nas pod nr. +48 537 787 440 lub wypełnij formularz kontaktowy poniżej:</p>
        </div>
    </section>
    <section class="header-about-text"><?php the_content();?></section>
    <section class="about-team">
             <div class="container">
           <?php $loop_posts = new WP_Query (array(
'category_name' => 'zespol'
           ));
        ?>
   <?php if($loop_posts->have_posts()) : ?>
   <?php while($loop_posts->have_posts()) : $loop_posts->the_post(); ?>

   <div class="col-md-4 col-sm-6 col-xs-12 box-team">
     <div class="imgTeam"><?php the_post_thumbnail();?></div>
     <div class="nameTeam"><?php the_title(); ?></div>
     <div class="descTeam"><?php the_content(); ?></div>
  </div>

<?php endwhile; wp_reset_query(); ?>
<?php endif; ?>
        </div>
   </section>
   <section class="questionAbout">
     <div class="container">
      <h2>Masz pytanie?</h2>
       <div class="col-xs-12">
         <?php the_field('pytanie'); ?>
       </div>
     </div>
   </section>
    <section class="logo-carousel">
        <?php echo do_shortcode('[logoshowcase dots="false" slides_column="6" arrows="false" autoplay="true" autoplay_interval="2000" hide_border="true"]'); ?>
    </section>
    <?php get_footer(); ?>
