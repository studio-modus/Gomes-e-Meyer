<?php
$sobre = get_field('sobre');
if ($sobre) :
?>
  <section class="sobre secao grid-3 container">

    <div class="sobre-bloco left">
      <span class="start">
        <?php echo $sobre['titulo01']; ?>
      </span>
      <h2 class="start">
        <?php echo $sobre['subtitulo01']; ?>
      </h2>
      <hr>
      <p class="start">
        <?php echo $sobre['descricao01']; ?>
      </p>
      <a href="<?php echo $sobre['link_btn']; ?>" class="btn-pri bd-sm gotham bold">
        <?php echo $sobre['txt_btn']; ?>

      </a>
    </div>
    <!-- img -->
    <div class="sobre-bloco">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sobre-bg.png" alt="">
    </div>
    <!--  -->
    <div class="sobre-bloco right">
      <span class="end">
        <?php echo $sobre['titulo02']; ?>

      </span>
      <h2 class="end">
        <?php echo $sobre['subtitulo02']; ?>
      </h2>
      <hr>
      <p class="end">
        <?php echo $sobre['descricao02']; ?>
      </p>

    </div>
  </section>

<?php endif; ?>