<?php
// Obter o campo personalizado 'comentarios'
$comentarios = get_field('coment');;


if ($comentarios) :
?>
  <section class="comentarios secao container">

    <div class="titulo">
      <h2>
        <?php echo $comentarios['t']; ?>
      </h2>
    </div>
    <ul class="comentarios-cards">
      <!-- Exemplo de um comentário -->
      <li class="comentario-card">
        <div class="comentario-perfil">
          <div class="img-perfil">
            <img src=" <?php echo $comentarios['i1']; ?>" alt="Imagem do perfil" srcset="">
          </div>
          <div class="txt-perfil">
            <h3>
              <?php echo $comentarios['n1']; ?>

            </h3>
            <h4>
              <?php echo $comentarios['pr1']; ?>

            </h4>
          </div>
        </div>
        <div class="comentario-txt">
          <h4>
            <?php echo $comentarios['t1']; ?>
          </h4>
          <p>
            <?php echo $comentarios['p1']; ?>

          </p>
        </div>
      </li>
      <li class="comentario-card">
        <div class="comentario-perfil">
          <div class="img-perfil">
            <img src=" <?php echo $comentarios['i2']; ?>" alt="Imagem do perfil" srcset="">
          </div>
          <div class="txt-perfil">
            <h3>
              <?php echo $comentarios['n2']; ?>

            </h3>
            <h4>
              <?php echo $comentarios['pr2']; ?>

            </h4>
          </div>
        </div>
        <div class="comentario-txt">
          <h4>
            <?php echo $comentarios['t2']; ?>
          </h4>
          <p>
            <?php echo $comentarios['p2']; ?>

          </p>
        </div>
      </li>
      <li class="comentario-card">
        <div class="comentario-perfil">
          <div class="img-perfil">
            <img src=" <?php echo $comentarios['i3']; ?>" alt="Imagem do perfil" srcset="">
          </div>
          <div class="txt-perfil">
            <h3>
              <?php echo $comentarios['n3']; ?>

            </h3>
            <h4>
              <?php echo $comentarios['pr3']; ?>

            </h4>
          </div>
        </div>
        <div class="comentario-txt">
          <h4>
            <?php echo $comentarios['t3']; ?>
          </h4>
          <p>
            <?php echo $comentarios['p3']; ?>

          </p>
        </div>
      </li>
      <!-- Repetir para outros comentários -->
    </ul>

  </section>

<?php endif; ?>
