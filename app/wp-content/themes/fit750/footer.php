<?php $footer = get_field("footer", "option"); ?>
<footer class="footer">
  <div class="container padding-top d-flex-column-center">
    <div class="h3 bold footer__title content" data-aos="fade-up"   data-aos-delay="50"
         data-aos-duration="1000">
      <?php echo $footer['title']; ?>
    </div>
    <div class="footer__icon" data-aos="fade-up"   data-aos-delay="100"
         data-aos-duration="1000">
      <?php svg_embed_url('logo.svg') ?>
    </div>
    <div class="h3 bold footer__info content" data-aos="fade-up"   data-aos-delay="150"
         data-aos-duration="1000">
      <?php echo $footer['info']; ?>
    </div>
    <p class="footer__logo italic-logo" data-aos="fade-up"   data-aos-delay="200"
       data-aos-duration="1000">
      Zoom Media x
    </p>
  </div>
</footer>
</main>
<?php wp_footer(); ?>
</body>
</html>