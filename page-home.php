<?php
// Template Name:Home
?>
<?php get_header(); ?>

<!-- HERO -->
<?php get_template_part("/assets/inc/hero"); ?>

<!-- destaque -->
<?php get_template_part("/assets/inc/area-destaque"); ?>

<!-- sobre -->
<?php get_template_part("/assets/inc/sobre"); ?>

<!-- AREAS DE ATUACAO -->
<section class="areas-atuacao container p-80">
  <div class="titulo">
    <h2>
      Áreas de Atuação.
    </h2>
    <hr>
  </div>
  <?php get_template_part("/assets/inc/atuacao", null, array('posts_per_page' => 8)); ?>

  <a href="/areas-de-atuacao" class="btn-pri bd-sm gotham bold">
    Areas de Atuacao
  </a>
</section>

<!-- experiencias -->
<?php get_template_part("/assets/inc/experiencias"); ?>

<!-- equipe -->
<?php get_template_part("/assets/inc/equipe"); ?>


<!-- testemunahs -->
<?php get_template_part("/assets/inc/testemunhas"); ?>

<section class="contato secao container">
  <div class="titulo">
    <h2>Contate-nos</h2>
    <p>Alguma pergunta ou comentário? Basta nos escrever uma mensagem!</p>
  </div>

  <?php get_template_part("/assets/inc/form"); ?>

</section>



<?php get_footer(); ?>
