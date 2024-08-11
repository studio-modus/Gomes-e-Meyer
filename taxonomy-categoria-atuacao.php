<?php
// Template Name: Áreas de Atuação
get_header();
?>

<style>
  .hero-atuacao {
    position: relative;
    background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/bg-atuacao.webp');
    height: 90vh;
    background-size: cover;
  }
</style>

<div class="hero-atuacao">
  <div class="hero__subpages container">
    <div class="hero__wrap_subpages">
      <div class="hero-txt-subpages">
        <h1>Áreas de Atuação</h1>
        <hr>
        <p class="txt-sec-subpages">Atuamos com excelência em diversas áreas jurídicas para atender suas necessidades.</p>
      </div>
    </div>
  </div>
</div>

<div class="container subpage-pg secao">
  <?php get_template_part("/assets/inc/atuacao"); ?>
</div>

<?php get_footer(); ?>
