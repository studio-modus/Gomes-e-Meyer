<?php
// Template Name:Contato
?>

<?php get_header(); ?>

<div class="page-contato-hero">
  <style>
    .hero-contato {
      position: relative;

      background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/bg-contato.webp');
      height: 90vh;
      background-size: cover;
      /* ou outra propriedade de tamanho desejada */
    }
  </style>

  <div class="hero-contato">

    <div class="hero__subpages container">
      <div class="hero__wrap_subpages">

        <div class="hero-txt-subpages">
          <p class="txt-sec-subpages ">
            não se preocupe.
          </p>
          <h1 class="">
            Contate-nos.
          </h1>
        </div>
        <hr>

      </div>
    </div>
  </div>

</div>


<div class="container subpage-pg secao">
  <?php get_template_part("/assets/inc/form"); ?>
</div>


<?php get_footer(); ?>
