<?php
    /*
     Template Name: Kontakt
    */


?>
    <?php the_post(); ?>
    <?php get_header(); ?>
    <section class="header-subpage" style="box-shadow: inset 0 0 0 1000px rgba(0, 0, 0, 0.5); background: url('<?php echo get_field('headimgcontact') ?>');background-attachment: fixed;background-position: center center !important;background-repeat: no-repeat;background-size: cover;">
        <div class="title title-contact">
            <h2>Skontaktuj się z nami</h2>
            <p>Pracujemy od poniedziałku do czwartku: od 7:00 do 16:00, w piątki od 8:00 do 12:00. Zadzwoń do nas pod nr. +48 537 787 440 lub wypełnij formularz kontaktowy poniżej:</p>
            <div class="checkboxes">
              <label class="contentQuest" id="zapytanie">Zapytanie
                <input type="radio" name="radio" value="zapytanie">
                <span class="checkmark"></span>
              </label>
              <label class="contentQuest" id="spotkanie">Spotkanie
                <input type="radio" name="radio" value="spotkanie">
                <span class="checkmark"></span>
              </label>
              <label class="contentQuest" id="oferta">Oferta
                <input type="radio" name="radio" value="oferta">
                <span class="checkmark"></span>
              </label>
            </div>
            <div class="btn-sendmail">Wyślij</div>
        </div>
    </section>
    <div class="forms">
      <div id="zapytanieForm" style="display: none;">
        <div class="form-content">
          <?php echo do_shortcode('[contact-form-7 id="605" title="Zapytanie"]'); ?>
        </div>
        <div class="closeForm" id="CloseForm1"><img src="<?php echo AGENCY_THEME_URL ?>/images/svg/close-button.svg" alt=""></div>
      </div>
    </div>
    <div class="forms">
      <div id="spotkanieForm" style="display: none;">
        <div class="form-content">
          <?php echo do_shortcode('[contact-form-7 id="605" title="Spotkanie"]'); ?>
        </div>
        <div class="closeForm" id="CloseForm2"><img src="<?php echo AGENCY_THEME_URL ?>/images/svg/close-button.svg" alt=""></div>
      </div>
    </div>
    <div class="forms">
      <div id="ofertaForm" style="display: none;">
        <div class="form-content">
          <?php echo do_shortcode('[contact-form-7 id="605" title="Oferta"]'); ?>
        </div>
        <div class="closeForm" id="CloseForm3"><img src="<?php echo AGENCY_THEME_URL ?>/images/svg/close-button.svg" alt=""></div>
      </div>
    </div>
    <section class="header-contact-text">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <?php the_content();?>
          </div>
        </div>
      </div>
    </section>
    <section class="content-contact">
        <div class="row">
            <div class="col-md-6 col-sm-12 box-content-contact"><?php echo do_shortcode('[wpgmza id="1"]'); ?></div>
            <div class="col-md-6 col-sm-12 box-content-contact"><iframe width="100%" height="530" src="<?php echo get_field('film') ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
        </div>
    </section>
    <section class="logo-carousel">
        <?php echo do_shortcode('[logoshowcase dots="false" slides_column="6" arrows="false" autoplay="true" autoplay_interval="2000" hide_border="true"]'); ?>
    </section>
    <div class="icon-footer">
      <div class="col-xs-12 box-social">
          <a href="#"><div class="iconfa fa-fb"><i class="fab fa-facebook"></i></div></a>
          <a href="#"><div class="iconfa fa-gplus"><i class="fab fa-google-plus-g"></i></div></a>
          <a href="#"><div class="iconfa fa-in"><i class="fab fa-linkedin-in"></i></div></a>
          <a href="#"><div class="iconfa fa-be"><i class="fab fa-behance"></i></div></a>
      </div>
    </div>
    <?php get_footer(); ?>
