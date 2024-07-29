<?php get_header(); ?>

<style>
  .hero-single {
    position: relative;
    background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/bg-single-post.png');
    height: 90vh;
    background-size: cover;
    /* ou outra propriedade de tamanho desejada */
  }
</style>

<div class="hero-single">
  <div class="single-post-introducao container secao">
    <h1>
      <?php the_title(); ?>
    </h1>
    <p>
      <?php the_excerpt(); ?>
    </p>
    <h5>
      <?php echo get_the_date(); ?> | <?php the_category(', '); ?>
    </h5>
  </div>
  <!--  -->
  <div class="single-post-img">
    <?php if (has_post_thumbnail()) : ?>
      <?php the_post_thumbnail('full'); ?>
    <?php endif; ?>
  </div>
  <!--  -->
</div>
<!--  -->

<div class="single-post-content container secao">

  <div class="navegue-por-topicos">
    <h3>
      Navegue por Tópicos
    </h3>
    <ul>
        <li>
          <a href=""></a>
        </li>
    </ul>
  </div>
  <div class="single-post-conteudo">
    <?php
    if (have_posts()) :
      while (have_posts()) : the_post();
        the_content();
      endwhile;
    endif;
    ?>
  </div>
  <!--  -->
</div>

<?php get_footer(); ?>
