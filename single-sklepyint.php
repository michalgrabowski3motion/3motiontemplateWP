<?php get_header(); ?>
<?php the_post(); ?>

<section class="header-subpage" style="background: url('<?php echo get_field('background_img') ?>');background-attachment: fixed;background-position: center center !important;background-repeat: no-repeat;background-size: cover;">
  <div class="title">
    <h2 class="wow fadeInDown" data-wow-delay="0.7s"><?php the_title(); ?></h2>
    <h1 class="wow fadeInDown" data-wow-delay="0.9s"><?php echo get_field('krotkiopis'); ?></h1>
  </div>
</section>


<section class="nav-work">
  <button class="prev"><?php previous_post_link('%link', 'Poprzednia', TRUE); ?></button>
  <button class="next"><?php next_post_link('%link', 'Następna', TRUE); ?></button>
</section>

<section class="work-subpage wow fadeIn">
  <div class="container">
    <div class="row">
      <div class="image-work">
        <div class="browser"></div>
        <img src="<?php echo get_field('screen_www'); ?>" alt="">
      </div>
      <div class="col-md-8 col-md-offset-2 wow fadeIn">
        <div class="desc-work ">
          <p>
            <?php the_content(); ?>
          </p>
        </div>
        <div class="technology">
          <?php echo get_field('co_uzylismy'); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="img-project">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 col-md-6 col-sm-6 col-xs-12 box-img-project">
        <img src="<?php echo AGENCY_THEME_URL ?>images/assets/mac.jpg" class="static" alt="">
        <div class="img-gif mac">
          <img src="<?php echo get_field('gif_desktop'); ?>" alt="">
        </div>
      </div>
      <div class="col-md-6 col-md-6 col-sm-6 col-xs-12 box-img-project">
        <img src="<?php echo get_field('dodatkowe_zdjecie1'); ?>" alt="">
      </div>
      <div class="col-md-6 col-md-6 col-sm-6 col-xs-12 box-img-project">
        <img src="<?php echo get_field('dodatkowe_zdjecie2'); ?>" alt="">
      </div>
      <div class="col-md-6 col-md-6 col-sm-6 col-xs-12 box-img-project">
        <img src="<?php echo AGENCY_THEME_URL ?>images/assets/iphone.jpg" class="static" alt="">
        <div class="img-gif iphone">
          <img src="<?php echo get_field('gif_telefon'); ?>" alt="">
        </div>
      </div>
    </div>
  </div>
</section>



<section class="online">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <p>Możesz zobaczyć tę realizację on-line, w pełni responsywnej wersji dostępnej na komputery, tablety i smartfony. Chętnie zrealizujemy kolejny udany projekt!</p>
          <button class="btn"><a href="<?php echo get_field('realizacja_online') ?>">zobacz online</a></button>
        </div>
      </div>
    </div>
</section>


<?php get_footer(); ?>
