<style>
  .hero-img {
    position: relative;
    background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/bg.webp');
    height: 90vh;
    background-size: cover;
  }
</style>

<?php
$hero = get_field('hero');
if ($hero) :
?>
  <div class="hero-img">

    <div class="hero container">
      <div class="hero__wrap">
        <div class="hero-txt">
          <h1 class="txt-principal">
            <?php echo $hero['titulo']; ?>
          </h1>
        </div>
        <hr>
        <div class="hero-btn">
          <a href="<?php echo $hero['link_btn_hero01']; ?>" class="btn-pri bd-sm gotham bold">
            <?php echo $hero['txt_btn_hero01']; ?>
          </a>
          <a href="<?php echo $hero['link_btn_hero02']; ?>" class="btn-sec gotham bold bd-sm">
            <?php echo $hero['txt_btn_hero02']; ?>
          </a>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>