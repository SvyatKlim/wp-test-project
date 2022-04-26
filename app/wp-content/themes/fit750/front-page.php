<?php get_header();

$intro = get_field('intro');
if (isset($intro)) { ?>

  <section class="intro" style="background-image: url('<?php echo $intro['background_image']['url']; ?>')">
    <div class="container padding-top padding-bottom">
      <div class="intro__inner animate-main">
        <?php svg_embed_url('logo.svg') ?>
        <?php if (!empty($intro['title'])) { ?>
          <h1><?php echo $intro['title']; ?></h1>
        <?php } ?>
      </div>
    </div>
  </section>
<?php } ?>

<?php $about = get_field('about'); ?>
<?php $about_gallery = $about['gallery_info'];
if (!empty($about)) { ?>
  <section class="about">
    <div class="container padding-top-increased padding-bottom">
      <div class="about__info " data-aos="fade-up"   data-aos-delay="50"
           data-aos-duration="1000">
        <div class="about__logo">
          <?php svg_embed_url('logo.svg') ?>
        </div>
        <?php if (!empty($about['title_left'])) { ?>
          <h3 class="about__info__title yellow"><?php echo $about['title_left']; ?></h3>
          <div class="about__info__description content">
            <?php echo $about['text_left']; ?>
          </div>
        <?php } ?>
      </div>
      <div class="arrow">
        <?php svg_embed_url('arrow-down.svg') ?>
      </div>
      <div class="about__columns">
        <div class="about__images__wrapper">
          <div class="about__images">
            <?php
            $about_images = $about_gallery['images'];
            if (isset($about_images) && $about_images) {
              foreach ($about_images as $img) { ?>
                <div class="about__img"><img src="<?php echo $img['image']['url']; ?>"
                                             alt="<?php echo $img['image']['alt']; ?>">
                </div>
              <?php }
            } ?>
          </div>
        </div>
        <?php if (!empty($about_gallery['title'])) { ?>
          <div class="about__columns__info " data-aos="fade-up"   data-aos-delay="50"
               data-aos-duration="1000">
            <h3 class="yellow title"><?php echo $about_gallery['title']; ?></h3>
            <p><?php echo $about_gallery['subtitle']; ?></p>
            <div class="arrow info-arrow">
              <?php svg_embed_url('arrow-down.svg') ?>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>

  </section>
<?php } ?>
<?php $donate = get_field('donate');
if (!empty($donate)) { ?>
  <section class="donate">
    <div class="donate__decor--top decor">
      <?php svg_embed_url('logo-white.svg') ?>
    </div>
    <div class="container padding-top d-flex-column-center" data-aos="fade-up"   data-aos-delay="200"
         data-aos-duration="1000">
      <div class="donate__title">
        <?php svg_embed_url('target.svg') ?>
      </div>
      <h3 class="donate__description blue">
        <?php echo $donate['description'] ?>
      </h3>
      <?php if (!empty($donate['link'])) { ?>
        <div class="donate__link">
          <div class="donate__link__logo"><?php svg_embed_url('just-giving.svg') ?></div>
          <a href="<?php echo $donate['link']['url'] ?>" class="btn btn-donate"
             target="<?php echo $donate['link']['target'] ?>"> <?php echo $donate['link']['title'] ?></a>
        </div>
      <?php } ?>
    </div>
    <div class="donate__decor--bottom"></div>
    <div class="donate__quote container padding-bottom">
      <blockquote class="h2 donate__quote__text" data-aos="fade-up"   data-aos-delay="50"
                  data-aos-duration="1000">
        <?php echo $donate['blockquote'] ?>
      </blockquote>
    </div>
  </section>
<?php } ?>
<?php $why = get_field('why');
$why_info = $why['info'];
$why_provided = $why['provided'];
if (isset($why_info)) {
  ?>
  <section class="why">
    <div class="container d-flex-column">
      <div class="why__info d-flex">
        <?php if (!empty($why_info['image'])) { ?>
          <div class="why__info__map">
            <img src="<?php echo $why_info['image']['url'] ?>" alt="<?php echo $why_info['image']['title'] ?>">
          </div>
        <?php } ?>
        <div class="why__info__text black" data-aos="fade-up"   data-aos-delay="50"
             data-aos-duration="1000">
          <h2 class="h1 blue"> <?php echo $why_info['title'] ?></h2>
          <p><?php echo $why_info['text'] ?></p>
        </div>
      </div>
      <div class="why__list d-flex">
        <div class="why__list__info black content" data-aos="fade-up"   data-aos-delay="50"
             data-aos-duration="1000">
          <h2 class="h1 blue title"> <?php echo $why_provided['title'] ?></h2>
          <?php echo $why_provided['text'] ?>
        </div>
        <div class="why__list__images">
          <?php $why_images = $why_provided['images'];
          if (isset($why_images) && $why_images) {
            foreach ($why_images as $img) { ?>
              <div class="why__img d-flex"><img src="<?php echo $img['image']['url']; ?>"
                                                alt="<?php echo $img['image']['alt']; ?>">
              </div>
            <?php }
          } ?>
        </div>
      </div>
    </div>
  </section>
<?php } ?>
<?php $involve = get_field('involve');
if (isset($involve)) {
  ?>
  <section class="involve">
    <div class="involve__decor decor">
      <?php svg_embed_url('logo-white.svg') ?>
    </div>
    <div class="arrow info-arrow" data-aos="fade-up"   data-aos-delay="100"
         data-aos-duration="1000">
      <?php svg_embed_url('arrow-down.svg') ?>
    </div>
    <div class="container padding-top-small padding-bottom d-flex-column-center">
      <h2 class="involve__title h1 yellow" data-aos="fade-up"   data-aos-delay="150"
          data-aos-duration="1000">
        <?php echo $involve['title'] ?>
      </h2>
      <p class="involve__description h3" data-aos="fade-up"   data-aos-delay="150"
         data-aos-duration="1000">
        <?php echo $involve['description'] ?>
      </p>
      <div class="involve__steps d-flex-column-center">
        <?php $involve_steps = $involve['steps'];
        if (isset($involve_steps) && $involve_steps) {
          foreach ($involve_steps as $key => $step) { ?>
            <div class="involve__step" data-aos="fade-up"   data-aos-delay="<?php echo $key + 1?> 00"
                 data-aos-duration="1000">
              <div class="involve__step__number">
                <img src="<?php echo $step['image']['url'] ?>" alt="<?php echo $step['image']['alt'] ?>">
              </div>
              <p class="h3 involve__step__text">
                <?php echo $step['text'] ?>
              </p>
            </div>
          <?php }
        }
        if (!empty($involve['qr_img'])) { ?>
        <div class="involve__qr-code" data-aos="fade-up"   data-aos-delay="450"
             data-aos-duration="1000">
          <img src="<?php echo $involve['qr_img']['url'] ?>" alt="<?php echo $involve['qr_img']['url'] ?>">
        </div>
      </div>
      <?php } ?>
    </div>
  </section>
<?php } ?>
<?php $challenges = get_field('challenges');
$challenges_cards = $challenges['cards'];
if (isset($challenges)) {
  ?>
  <section class="challenges">
    <div class="container padding-top padding-bottom d-flex-column-center">
      <div class="challenges__inner d-flex-column-center" data-aos="fade-up"   data-aos-delay="50"
           data-aos-duration="1000">
        <div class="challenges__logo d-flex"> <?php svg_embed_url('logo.svg') ?></div>
        <h2 class="h1 blue title"><?php echo $challenges['title']; ?></h2>
      </div>
      <div class="challenges__cards padding-top padding-bottom  cards-<?php echo (count($challenges_cards)) ?>">
        <?php if (isset($challenges_cards) && $challenges_cards) {
          foreach ($challenges_cards as $key => $card) {
            $card_post = $card['challenge_post'];
            $card_info = get_field('challenge', $card_post->ID);

            ?>
            <div class="challenges__card d-flex" data-aos="fade-up"   data-aos-delay="<?php echo $key + 1 ?>50"
                 data-aos-duration="1000"
                 style="background-image: url('<?php echo $card['background_image']['url']; ?>')">
              <div class="challenges__card__info d-flex-column-center">
                <?php if (!empty($card_info['before_title'])) { ?>
                  <p class="challenges__card__subtitle"><?php echo $card_info['before_title']; ?></p>
                <?php } ?>
                <h2 class="h1 challenges__card__title"><?php echo $card_post->post_title; ?></h2>
                <p class="challenges__card__description"><?php echo $card_info['after_title']; ?></p>
              </div>
              <div class="challenges__card__link d-flex">
                <a href="<?php echo get_permalink($card_post); ?>" class="btn bold">Learn more</a>
              </div>
            </div>
          <?php }
        } ?>
      </div>
    </div>
  </section>
<?php } ?>
<?php $journey = get_field('journey');
$journey_gallery = $journey['gallery'];
if (isset($journey)) {
  ?>
  <section class="journey">
    <div class="container d-flex journey__wrapper padding-top-small padding-bottom">
      <?php if (!empty($journey_gallery)) { ?>
        <div class="journey__gallery">
          <div class="journey__gallery__left">
            <img src="<?php echo $journey_gallery['image_left']['url']; ?>"
                 alt="<?php echo $journey_gallery['image_left']['alt']; ?>">
          </div>
          <div class="journey__gallery__right">
            <div class="img">
              <img src="<?php echo $journey_gallery['image_right_top']['url']; ?>"
                   alt="<?php echo $journey_gallery['image_right_top']['alt']; ?>">
            </div>
            <div class="img">
              <img src="<?php echo $journey_gallery['image_right_bottom']['url']; ?>"
                   alt="<?php echo $journey_gallery['image_right_bottom']['alt']; ?>">
            </div>
          </div>
        </div>
      <?php } ?>
      <div class="journey__info">
        <div class="journey__info__icon" data-aos="fade-up"   data-aos-delay="50"
             data-aos-duration="1000">
          <?php svg_embed_url('fit-like-hash.svg') ?>
        </div>
        <h2 class="journey__title h1 yellow" data-aos="fade-up"   data-aos-delay="100"
            data-aos-duration="1000">
          <?php echo $journey['title']; ?>
        </h2>
        <h3 class="journey__subtitle bold" data-aos="fade-up"   data-aos-delay="150"
            data-aos-duration="1000">
          <?php echo $journey['subtitle']; ?>
        </h3>
        <div class="journey__description" data-aos="fade-up"   data-aos-delay="150"
             data-aos-duration="1000">
          <?php echo $journey['description']; ?>
        </div>
      </div>
      <div class="journey__decor">
        <?php svg_embed_url('journey-line.svg') ?>
      </div>
      <div class="journey__promote-text bold" data-aos="fade-up"   data-aos-delay="50"
           data-aos-duration="1000">
        <div class="journey__promote-text__icon">
          <?php svg_embed_url('flag-heart.svg') ?>
        </div>
        <?php echo $journey['text_bottom']; ?>
      </div>
    </div>
  </section>
<?php } ?>

<?php $banner = get_field('banner_image');
if (!empty($banner)) { ?>
<section class="footer-banner">
  <div class="footer-banner__img img">
    <div class="footer-banner__decor decor">
      <?php svg_embed_url('logo-white.svg') ?>
    </div>
    <img src="<?php echo $banner['url']; ?>"
         alt="<?php echo $banner['alt']; ?>">
  </div>
</section>
<?php } ?>
<?php get_footer(); ?>
