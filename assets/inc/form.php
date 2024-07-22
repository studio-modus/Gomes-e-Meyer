<div class="contato-bloco">
    <style>
      .contato-info {
        position: relative;
        background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/contato-bg.webp');
      }
    </style>

    <div class="contato-info bd-sm">
      <div class="contato-info-txt">
        <h2>
          Informações de contato
        </h2>
        <p>
          Como podemos ajudá-lo?
        </p>
      </div>
      <div class="contato-info-loc">
        <a href="nav-item" class="gotham">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Telefone Escritorio de Advocacia.svg" alt="">
          <span>
            (00)0 0000-0000
          </span>
        </a>
        <a href="" class="gotham">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Email Escritorio de Advocacia.svg" alt="">
          <span>
            contato@contato.com
          </span>
        </a>
        <a href="" class="gotham">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Localizacao Escritorio de Advocacia.svg" alt="">
          <span>
            Dr Paschoal Brando, 315 |SP
          </span>
        </a>
      </div>
      <div class="redes-sociais">
        <a href="" class="">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Instagram Gomes e Meyer Escritorio de Advocacia.svg" alt="">
        </a>
        <a href="" class="">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Twitter Gomes e Meyer Escritorio de Advocacia.svg" alt="">
        </a>
        <a href="" class="">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Linkedin Escritorio de Advocacia.svg" alt="">
        </a>
        <a href="" class="">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Facebook Escritorio de Advocacia.svg" alt="">
        </a>
        <a href="" class="">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Whatsapp Escritorio de Advocacia.svg" alt="">
        </a>
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
