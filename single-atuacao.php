<?php get_header(); ?>

<style>
  .single-a-img {
    position: relative;

    background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/bg-sinlge-a.webp');

    height: 90vh;
    background-size: cover;
    /* ou outra propriedade de tamanho desejada */
  }
</style>
<?php
if (have_posts()) {
  while (have_posts()) {
    the_post();
?>
    <div class="single-a-img">
      <div class="hero__sa container">
        <div class="hero__wrap secao">
          <div class="hero-txt ">
            <h1 class="txt-principal-sa">
              <?php the_title(); ?>
            </h1>
          </div>
          <hr>
        </div>
        <div class="article-content-s-a secao">
          <?php the_content(); ?>
      <?php
    }
  } else {
    echo '<p>Post não encontrado.</p>';
  }
      ?>
        </div>
      </div>
    </div>



    <?php get_footer(); ?>
