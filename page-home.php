<?php
// Template Name:Home
?>

<?php get_header(); ?>


<style>
  .hero-img {
    position: relative;

    background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/bg.webp');

    height: 90vh;
    background-size: cover;
    /* ou outra propriedade de tamanho desejada */
  }
</style>

<div class="hero-img">

  <div class="hero container">
    <div class="hero__wrap">
      <div class="hero-txt">
        <h1 class="txt-principal">
          Pessoas não vencem disputas entre si. <span>Advogados vencem.</span>
        </h1>
      </div>
      <hr>
      <div class="hero-btn">
        <a href="" class="btn-pri bd-sm gotham bold">
          Áreas de Atuação
        </a>
        <a href="" class="btn-sec gotham bold bd-sm">
          CONTATO
        </a>
      </div>
    </div>
  </div>
</div>


<div class="whatsapp-button">
  <a href="#">
    <svg width="60" height="60" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M24 48C37.2548 48 48 37.2548 48 24C48 10.7452 37.2548 0 24 0C10.7452 0 0 10.7452 0 24C0 37.2548 10.7452 48 24 48Z" fill="#25D366" />
      <path fill-rule="evenodd" clip-rule="evenodd" d="M24.7911 37.3525H24.7852C22.3967 37.3517 20.0498 36.7524 17.9653 35.6154L10.4 37.6L12.4246 30.2048C11.1757 28.0405 10.5186 25.5855 10.5196 23.0702C10.5228 15.2017 16.9248 8.79999 24.7909 8.79999C28.6086 8.80164 32.1918 10.2879 34.8862 12.9854C37.5806 15.6828 39.0636 19.2683 39.0621 23.0815C39.059 30.9483 32.6595 37.3493 24.7911 37.3525ZM18.3159 33.0319L18.749 33.2889C20.5702 34.3697 22.6578 34.9415 24.7863 34.9423H24.7911C31.3288 34.9423 36.6499 29.6211 36.6525 23.0807C36.6538 19.9112 35.4212 16.9311 33.1817 14.689C30.9422 12.4469 27.964 11.2115 24.7957 11.2104C18.2529 11.2104 12.9318 16.5311 12.9292 23.0711C12.9283 25.3124 13.5554 27.4951 14.7427 29.3836L15.0248 29.8324L13.8265 34.2095L18.3159 33.0319ZM31.4924 26.154C31.7411 26.2742 31.9091 26.3554 31.9808 26.4751C32.0699 26.6238 32.0699 27.3378 31.7729 28.1708C31.4756 29.0038 30.051 29.764 29.3659 29.8663C28.7516 29.9582 27.9741 29.9965 27.1199 29.725C26.602 29.5607 25.9379 29.3413 25.0871 28.9739C21.7442 27.5304 19.485 24.2904 19.058 23.678C19.0281 23.6351 19.0072 23.6051 18.9955 23.5895L18.9927 23.5857C18.804 23.3339 17.5395 21.6468 17.5395 19.9008C17.5395 18.2582 18.3463 17.3973 18.7177 17.001C18.7432 16.9739 18.7666 16.9489 18.7875 16.926C19.1144 16.569 19.5007 16.4797 19.7384 16.4797C19.9761 16.4797 20.2141 16.4819 20.4219 16.4924C20.4475 16.4937 20.4742 16.4935 20.5017 16.4933C20.7095 16.4921 20.9686 16.4906 21.2242 17.1045C21.3225 17.3407 21.4664 17.691 21.6181 18.0604C21.9249 18.8074 22.264 19.6328 22.3236 19.7522C22.4128 19.9307 22.4722 20.1389 22.3533 20.3769C22.3355 20.4126 22.319 20.4463 22.3032 20.4785C22.2139 20.6608 22.1483 20.7948 21.9967 20.9718C21.9372 21.0413 21.8756 21.1163 21.814 21.1913C21.6913 21.3407 21.5687 21.4901 21.4619 21.5965C21.2833 21.7743 21.0975 21.9672 21.3055 22.3242C21.5135 22.6812 22.2292 23.8489 23.2892 24.7945C24.4288 25.8109 25.4192 26.2405 25.9212 26.4582C26.0192 26.5008 26.0986 26.5352 26.1569 26.5644C26.5133 26.7429 26.7213 26.713 26.9294 26.4751C27.1374 26.2371 27.8208 25.4338 28.0584 25.0769C28.2961 24.7201 28.5339 24.7795 28.8607 24.8984C29.1877 25.0176 30.9408 25.8801 31.2974 26.0586C31.367 26.0934 31.4321 26.1249 31.4924 26.154Z" fill="#FDFDFD" />
    </svg>

  </a>
</div>
<div class="cards_hero p-80">
  <ul class="cards container">
    <li>
      <a href="" class="card bd-sm">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gavel_24dp_BD9C61.svg" alt="" srcset="">
        <div class="card-txt">
          <h2>
            Contratos Comerciais
          </h2>
          <hr>
          <p>
            A negociação exige precisão para garantir os melhores termos para nossos clientes.
          </p>
        </div>
      </a>
    </li>
    <!-- 2 -->
    <li>
      <a href="" class="card bd-sm">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gavel_24dp_BD9C61.svg" alt="" srcset="">
        <div class="card-txt">
          <h2>
            Contratos Comerciais
          </h2>
          <hr>
          <p>
            A negociação exige precisão para garantir os melhores termos para nossos clientes.
          </p>
        </div>
      </a>
    </li>
    <!-- 3 -->
    <li>
      <a href="" class="card bd-sm">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gavel_24dp_BD9C61.svg" alt="" srcset="">
        <div class="card-txt">
          <h2>
            Contratos Comerciais
          </h2>
          <hr>
          <p>
            A negociação exige precisão para garantir os melhores termos para nossos clientes.
          </p>
        </div>
      </a>
    </li>
    <!-- 4 -->
    <li>
      <a href="" class="card bd-sm">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gavel_24dp_BD9C61.svg" alt="" srcset="">
        <div class="card-txt">
          <h2>
            Contratos Comerciais
          </h2>
          <hr>
          <p>
            A negociação exige precisão para garantir os melhores termos para nossos clientes.
          </p>
        </div>
      </a>
    </li>
  </ul>

</div>

<section class="sobre secao grid-3 container">

  <div class="sobre-bloco left">
    <span class="start">
      Sobre Nós
    </span>
    <h2 class="start">
      Nosso objetivo é oferecer soluções jurídicas eficientes que realmente façam a diferença.
    </h2>
    <hr>
    <p class="start">
      Somos uma equipe de advogados dedicados a fornecer serviços de alta qualidade. Valorizamos transparência, compromisso e excelência em tudo o que fazemos.
    </p>
    <a href="" class="btn-pri bd-sm gotham bold">
      Áreas de Atuação
    </a>
  </div>
  <!-- img -->
  <div class="sobre-bloco">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sobre-bg.png" alt="">
  </div>
  <!--  -->
  <div class="sobre-bloco right">
    <span class="end">
      Por Que Nos Escolher
    </span>
    <h2 class="end">
      Trabalhamos para garantir sua satisfação e confiança.
    </h2>
    <hr>
    <p class="end">
      Nos destacamos pelo cuidado em entender e atender às necessidades específicas de cada cliente, sempre buscando a excelência em nossos serviços jurídicos.
    </p>

  </div>
</section>

<section class="areas-atuacao container p-80">
  <div class="titulo">
    <h2>
      Áreas de Atuação.
    </h2>
    <hr>
  </div>
  <ul class="cards-atuacao grid-4">
    <li>
      <a href="" class="card-atuacao bd-sm">
        <img class="icon" src="<?= get_template_directory_uri(); ?>/assets/img/apartment_24dp_212421_FILL0_wght400_GRAD0_opsz24.svg" alt="">
        <h2>
          Empresarial
        </h2>
        <p>
          A Jornada Rumo ao Sucesso
          Empresarial Começa Aqui.
        </p>
        <img class="arrow" src="<?= get_template_directory_uri(); ?>/assets/img/arrow_forward_24dp_212421_FILL0_wght400_GRAD0_opsz24.svg" alt="">
      </a>
    </li>
    <!-- 2 -->
    <li>
      <a href="" class="card-atuacao bd-sm">
        <img class="icon" src="<?= get_template_directory_uri(); ?>/assets/img/apartment_24dp_212421_FILL0_wght400_GRAD0_opsz24.svg" alt="">
        <h2>
          Empresarial
        </h2>
        <p>
          A Jornada Rumo ao Sucesso
          Empresarial Começa Aqui.
        </p>
        <img class="arrow" src="<?= get_template_directory_uri(); ?>/assets/img/arrow_forward_24dp_212421_FILL0_wght400_GRAD0_opsz24.svg" alt="">
      </a>
    </li>
    <!-- 3 -->
    <li>
      <a href="" class="card-atuacao bd-sm">
        <img class="icon" src="<?= get_template_directory_uri(); ?>/assets/img/apartment_24dp_212421_FILL0_wght400_GRAD0_opsz24.svg" alt="">
        <h2>
          Empresarial
        </h2>
        <p>
          A Jornada Rumo ao Sucesso
          Empresarial Começa Aqui.
        </p>
        <img class="arrow" src="<?= get_template_directory_uri(); ?>/assets/img/arrow_forward_24dp_212421_FILL0_wght400_GRAD0_opsz24.svg" alt="">
      </a>
    </li>
    <!-- 4 -->
    <li>
      <a href="" class="card-atuacao bd-sm">
        <img class="icon" src="<?= get_template_directory_uri(); ?>/assets/img/apartment_24dp_212421_FILL0_wght400_GRAD0_opsz24.svg" alt="">
        <h2>
          Empresarial
        </h2>
        <p>
          A Jornada Rumo ao Sucesso
          Empresarial Começa Aqui.
        </p>
        <img class="arrow" src="<?= get_template_directory_uri(); ?>/assets/img/arrow_forward_24dp_212421_FILL0_wght400_GRAD0_opsz24.svg" alt="">
      </a>
    </li>
    <!-- 5 -->
    <li>
      <a href="" class="card-atuacao bd-sm">
        <img class="icon" src="<?= get_template_directory_uri(); ?>/assets/img/apartment_24dp_212421_FILL0_wght400_GRAD0_opsz24.svg" alt="">
        <h2>
          Empresarial
        </h2>
        <p>
          A Jornada Rumo ao Sucesso
          Empresarial Começa Aqui.
        </p>
        <img class="arrow" src="<?= get_template_directory_uri(); ?>/assets/img/arrow_forward_24dp_212421_FILL0_wght400_GRAD0_opsz24.svg" alt="">
      </a>
    </li>
    <!-- 6 -->
    <li>
      <a href="" class="card-atuacao bd-sm">
        <img class="icon" src="<?= get_template_directory_uri(); ?>/assets/img/apartment_24dp_212421_FILL0_wght400_GRAD0_opsz24.svg" alt="">
        <h2>
          Empresarial
        </h2>
        <p>
          A Jornada Rumo ao Sucesso
          Empresarial Começa Aqui.
        </p>
        <img class="arrow" src="<?= get_template_directory_uri(); ?>/assets/img/arrow_forward_24dp_212421_FILL0_wght400_GRAD0_opsz24.svg" alt="">
      </a>
    </li>
    <!-- 7 -->
    <li>
      <a href="" class="card-atuacao bd-sm">
        <img class="icon" src="<?= get_template_directory_uri(); ?>/assets/img/apartment_24dp_212421_FILL0_wght400_GRAD0_opsz24.svg" alt="">
        <h2>
          Empresarial
        </h2>
        <p>
          A Jornada Rumo ao Sucesso
          Empresarial Começa Aqui.
        </p>
        <img class="arrow" src="<?= get_template_directory_uri(); ?>/assets/img/arrow_forward_24dp_212421_FILL0_wght400_GRAD0_opsz24.svg" alt="">
      </a>
    </li>
    <!-- 8 -->
    <li>
      <a href="" class="card-atuacao bd-sm">
        <img class="icon" src="<?= get_template_directory_uri(); ?>/assets/img/apartment_24dp_212421_FILL0_wght400_GRAD0_opsz24.svg" alt="">
        <h2>
          Empresarial
        </h2>
        <p>
          A Jornada Rumo ao Sucesso
          Empresarial Começa Aqui.
        </p>
        <img class="arrow" src="<?= get_template_directory_uri(); ?>/assets/img/arrow_forward_24dp_212421_FILL0_wght400_GRAD0_opsz24.svg" alt="">
      </a>
    </li>
  </ul>
  <a href="" class="btn-pri bd-sm gotham bold">
    Áreas de Atuação
  </a>
</section>

<style>
  .dados-img {
    position: relative;

    background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/bg-dados.webp');

    background-size: cover;
    /* ou outra propriedade de tamanho desejada */
  }
</style>
<div class="secao">
  <div class="dados-img">
    <section class="dados secao container">
      <div class="dados-txt">
        <h2>
          20 Anos de Experiência em Diversos Casos.
        </h2>
        <p>
          Com vasta experiência e dedicação, nossa equipe é especializada em resolver os mais diversos casos com eficiência e profissionalismo. Estamos comprometidos em oferecer soluções justas e rápidas para nossos clientes.
        </p>
      </div>
      <ul class="dados-estatisticas">
        <li class="dado-estatistica">
          <div class="dado-estatistica-txt">
            <h3>
              20 anos
            </h3>
            <p>
              Atuando no mundo jurídico.
            </p>
          </div>
        </li>
        <li class="dado-estatistica">
          <div class="dado-estatistica-txt">
            <h3>
              20 anos
            </h3>
            <p>
              Atuando no mundo jurídico.
            </p>
          </div>
        </li>
        <li class="dado-estatistica">
          <div class="dado-estatistica-txt">
            <h3>
              20 anos
            </h3>
            <p>
              Atuando no mundo jurídico.
            </p>
          </div>
        </li>
        <li class="dado-estatistica">
          <div class="dado-estatistica-txt">
            <h3>
              20 anos
            </h3>
            <p>
              Atuando no mundo jurídico.
            </p>
          </div>
        </li>

      </ul>
    </section>
  </div>
</div>

<section class="time container">
  <div class="time-txt">
    <h2>
      Nossos advogados experientes estão prontos  Para responder a quaisquer perguntas!
    </h2>
  </div>
  <ul class="time-cards grid-3">
    <li class="time-card">
      <!-- bg image nesse time card -->
      <img src="<?= get_template_directory_uri(); ?>/assets/img/time.webp" alt="" srcset="">
      <div class="time-card-info">
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
        <!--  -->
        <hr>
        <div class="time-card-info-txt">
          <h3>
            Kamily Rinco
          </h3>
          <h4>
            Advogado Civil
          </h4>
        </div>
      </div>
    </li>
  </ul>
  <a href="" class="btn-pri bd-sm gotham bold">
    Áreas de Atuação
  </a>
</section>

<?php get_footer(); ?>