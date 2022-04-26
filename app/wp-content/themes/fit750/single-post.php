<?php get_header();
$img_url = get_the_post_thumbnail_url();
$alt = !empty(get_the_post_thumbnail_caption()) ? get_the_post_thumbnail_caption() : get_the_title();
$challenge = get_field('challenge');
?>
<div class="post">
  <?php if (!empty($img_url)) { ?>
    <div class="post__image">
      <img src="<?php echo $img_url ?>" alt="<?php echo $alt; ?>">
    </div>
  <?php } ?>

  <div class="post__right animate-main " >
    <?php if (!empty($challenge['before_title'])) { ?>
      <p class="post__before-title"><?php echo $challenge['before_title']; ?></p>
    <?php } ?>
    <h1 class="post__title"><?php the_title(); ?></h1>
    <p class="post__after-title"><?php echo $challenge['after_title']; ?></p>

    <h3 class="post__subtitle yellow"><?php echo $challenge['subtitle']; ?></h3>

    <div class="post__content">
      <?php echo $challenge['content']; ?>
    </div>
    <div class="post__link__wrapper">
    <?php
    $link = $challenge['link'];
    if (isset($link)) { ?>
      <div class="post__link d-flex">
        <a href="<?php echo $link['url']; ?>" class="btn bold"><?php echo $link['title']; ?></a></div>
    <?php } ?>

    <div class="post__decor">
      <?php svg_embed_url('logo.svg') ?>
      <?php svg_embed_url('post-line.svg') ?>

    </div>
  </div>
  </div>
</div>
</main>
<?php wp_footer(); ?>
</body>
</html>