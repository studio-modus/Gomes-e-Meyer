
<?php
$experiencia = get_field('experiencia');
if ($experiencia) :
?>
  <style>
    .dados-img {
      position: relative;
      background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/bg-dados.webp');
      background-size: cover;
    }
  </style>
  <div class="secao">
    <div class="dados-img">
      <section class="dados secao container">
        <div class="dados-txt">
          <h2>
            <?php echo $experiencia['titulo']; ?>
          </h2>
          <p>
            <?php echo $experiencia['subtitulo']; ?> </p>
        </div>
        <ul class="dados-estatisticas">
          <li class="dado-estatistica">
            <div class="dado-estatistica-txt">
              <h3>
                <?php echo $experiencia['numeros1']; ?>
              </h3>
              <p>
                <?php echo $experiencia['txt1']; ?>
              </p>
            </div>
          </li>
          <li class="dado-estatistica">
            <div class="dado-estatistica-txt">
              <h3>
                <?php echo $experiencia['numeros2']; ?>
              </h3>
              <p>
                <?php echo $experiencia['txt2']; ?>
              </p>
            </div>
          </li>
          <li class="dado-estatistica">
            <div class="dado-estatistica-txt">
              <h3>
                <?php echo $experiencia['numeros3']; ?>
              </h3>
              <p>
                <?php echo $experiencia['txt3']; ?>
              </p>
            </div>
          </li>
          <li class="dado-estatistica">
            <div class="dado-estatistica-txt">
              <h3>
                <?php echo $experiencia['numeros4']; ?>
              </h3>
              <p>
                <?php echo $experiencia['txt4']; ?>
              </p>
            </div>
          </li>

        </ul>
      </section>
    </div>
  </div>
<?php endif; ?>
