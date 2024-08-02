<div class="contato-bloco">
  <style>
    .contato-info {
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      border-radius: 8px;
      position: relative;
      background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/contato-bg.webp');
    }
  </style>

  <div class="contato-info">
    <div class="contato-info-txt">
      <h2>Informações de contato</h2>
      <p>Como podemos ajudá-lo?</p>
    </div>

    <?php
    $contato = get_field('contato');
    if ($contato) :
    ?>
      <div class="contato-info-loc">
        <a href="nav-item" class="gotham">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Telefone Escritorio de Advocacia.svg" alt="">
          <span><?php echo $contato['numero']; ?></span>
        </a>
        <a href="" class="gotham">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Email Escritorio de Advocacia.svg" alt="">
          <span><?php echo $contato['email']; ?></span>
        </a>
        <a href="" class="gotham">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Localizacao Escritorio de Advocacia.svg" alt="">
          <span><?php echo $contato['local']; ?></span>
        </a>
      </div>
    <?php endif; ?>

    <div class="redes-sociais">
      <?php
      $social = get_field('social');
      if ($social) :
      ?>
        <a href="<?php echo $social['insta']; ?>" class="">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Instagram Gomes e Meyer Escritorio de Advocacia.svg" alt="">
        </a>
        <a href="<?php echo $social['x']; ?>" class="">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Twitter Gomes e Meyer Escritorio de Advocacia.svg" alt="">
        </a>
        <a href="<?php echo $social['in']; ?>" class="">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Linkedin Escritorio de Advocacia.svg" alt="">
        </a>
        <a href="<?php echo $social['face']; ?>" class="">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Facebook Escritorio de Advocacia.svg" alt="">
        </a>
        <a href="<?php echo $social['wpp']; ?>" class="">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Whatsapp Escritorio de Advocacia.svg" alt="">
        </a>
      <?php endif; ?>
    </div>
  </div>

  <div class="contato-form">

    <form action="/enviar-contato" method="post">
      <div class="form-item">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required placeholder="John Doe">
        <hr>
      </div>
      <div class="form-item">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required placeholder="contato@contato.com">
        <hr>
      </div>
      <div class="form-item">
        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" name="telefone" placeholder="(19) 9 9384-3063">
        <hr>
      </div>
      <div class="form-item">
        <label for="mensagem">Mensagem:</label>
        <textarea id="mensagem" name="mensagem" placeholder="Escreva sua mensagem..." required></textarea>
        <hr>
      </div>

      <input type="submit" value="Enviar">
    </form>
  </div>
</div>
