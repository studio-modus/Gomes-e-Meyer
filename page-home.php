<?php
// Template Name:Home
?>

<?php get_header(); ?>


<style>
  .hero-img {
    position: relative;

    background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/bg.webp'); /*imagem do hero

    height: 90vh;
    background-size: cover;
    /* ou outra propriedade de tamanho desejada */
  }
</style>
<?php
$hero = get_field('hero');
if ($hero):
    ?>
<div class="hero-img">

  <div class="hero container">
    <div class="hero__wrap">
      <div class="hero-txt">
        <h1 class="txt-principal">
        <?php echo $hero['titulo']; ?>
        </h1>
      </div>
      <hr>
      <div class="hero-btn">
        <a href="<?php echo $hero['link_btn_hero01']; ?>" class="btn-pri bd-sm gotham bold">
        <?php echo $hero['txt_btn_hero01']; ?>
        </a>
        <a href="<?php echo $hero['link_btn_hero02']; ?>" class="btn-sec gotham bold bd-sm">
        <?php echo $hero['txt_btn_hero02']; ?>
        </a>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>

<div class="whatsapp-button">
  <a href="#">
    <svg width="60" height="60" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M24 48C37.2548 48 48 37.2548 48 24C48 10.7452 37.2548 0 24 0C10.7452 0 0 10.7452 0 24C0 37.2548 10.7452 48 24 48Z" fill="#25D366" />
      <path fill-rule="evenodd" clip-rule="evenodd" d="M24.7911 37.3525H24.7852C22.3967 37.3517 20.0498 36.7524 17.9653 35.6154L10.4 37.6L12.4246 30.2048C11.1757 28.0405 10.5186 25.5855 10.5196 23.0702C10.5228 15.2017 16.9248 8.79999 24.7909 8.79999C28.6086 8.80164 32.1918 10.2879 34.8862 12.9854C37.5806 15.6828 39.0636 19.2683 39.0621 23.0815C39.059 30.9483 32.6595 37.3493 24.7911 37.3525ZM18.3159 33.0319L18.749 33.2889C20.5702 34.3697 22.6578 34.9415 24.7863 34.9423H24.7911C31.3288 34.9423 36.6499 29.6211 36.6525 23.0807C36.6538 19.9112 35.4212 16.9311 33.1817 14.689C30.9422 12.4469 27.964 11.2115 24.7957 11.2104C18.2529 11.2104 12.9318 16.5311 12.9292 23.0711C12.9283 25.3124 13.5554 27.4951 14.7427 29.3836L15.0248 29.8324L13.8265 34.2095L18.3159 33.0319ZM31.4924 26.154C31.7411 26.2742 31.9091 26.3554 31.9808 26.4751C32.0699 26.6238 32.0699 27.3378 31.7729 28.1708C31.4756 29.0038 30.051 29.764 29.3659 29.8663C28.7516 29.9582 27.9741 29.9965 27.1199 29.725C26.602 29.5607 25.9379 29.3413 25.0871 28.9739C21.7442 27.5304 19.485 24.2904 19.058 23.678C19.0281 23.6351 19.0072 23.6051 18.9955 23.5895L18.9927 23.5857C18.804 23.3339 17.5395 21.6468 17.5395 19.9008C17.5395 18.2582 18.3463 17.3973 18.7177 17.001C18.7432 16.9739 18.7666 16.9489 18.7875 16.926C19.1144 16.569 19.5007 16.4797 19.7384 16.4797C19.9761 16.4797 20.2141 16.4819 20.4219 16.4924C20.4475 16.4937 20.4742 16.4935 20.5017 16.4933C20.7095 16.4921 20.9686 16.4906 21.2242 17.1045C21.3225 17.3407 21.4664 17.691 21.6181 18.0604C21.9249 18.8074 22.264 19.6328 22.3236 19.7522C22.4128 19.9307 22.4722 20.1389 22.3533 20.3769C22.3355 20.4126 22.319 20.4463 22.3032 20.4785C22.2139 20.6608 22.1483 20.7948 21.9967 20.9718C21.9372 21.0413 21.8756 21.1163 21.814 21.1913C21.6913 21.3407 21.5687 21.4901 21.4619 21.5965C21.2833 21.7743 21.0975 21.9672 21.3055 22.3242C21.5135 22.6812 22.2292 23.8489 23.2892 24.7945C24.4288 25.8109 25.4192 26.2405 25.9212 26.4582C26.0192 26.5008 26.0986 26.5352 26.1569 26.5644C26.5133 26.7429 26.7213 26.713 26.9294 26.4751C27.1374 26.2371 27.8208 25.4338 28.0584 25.0769C28.2961 24.7201 28.5339 24.7795 28.8607 24.8984C29.1877 25.0176 30.9408 25.8801 31.2974 26.0586C31.367 26.0934 31.4321 26.1249 31.4924 26.154Z" fill="#FDFDFD" />
    </svg>

  </a>
</div>
<?php
$area = get_field('area');
if ($area):
    ?>
<div class="cards_hero p-80">
  <ul class="cards container">
    <li>
      <a href=" <?php echo $area['link1']; ?>" class="card bd-sm">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gavel_24dp_BD9C61.svg" alt="" srcset="">
        <div class="card-txt">
          <h2>
          <?php echo $area['area_txt1']; ?>
          </h2>
          <hr>
          <p>
          <?php echo $area['descricao_area1']; ?>
          </p>
        </div>
      </a>
    </li>
    <!-- 2 -->
    <li>
      <a href="<?php echo $area['link2']; ?>" class="card bd-sm">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gavel_24dp_BD9C61.svg" alt="" srcset="">
        <div class="card-txt">
          <h2>
          <?php echo $area['area_txt2']; ?>
          </h2>
          <hr>
          <p>
          <?php echo $area['descricao_area2']; ?>
          </p>
        </div>
      </a>
    </li>
    <!-- 3 -->
    <li>
      <a href="<?php echo $area['link3']; ?>" class="card bd-sm">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gavel_24dp_BD9C61.svg" alt="" srcset="">
        <div class="card-txt">
          <h2>
          <?php echo $area['area_txt3']; ?>
          </h2>
          <hr>
          <p>
          <?php echo $area['descricao_area3']; ?>
          </p>
        </div>
      </a>
    </li>
    <!-- 4 -->
    <li>
      <a href="<?php echo $area['link4']; ?>" class="card bd-sm">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gavel_24dp_BD9C61.svg" alt="" srcset="">
        <div class="card-txt">
          <h2>
          <?php echo $area['area_txt4']; ?>
          </h2>
          <hr>
          <p>
          <?php echo $area['descricao_area4']; ?>
          </p>
        </div>
      </a>
    </li>
  </ul>

</div>
<?php endif; ?>
<?php
$sobre = get_field('sobre');
if ($sobre):
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

<?php
$atuacao = get_field('atuacao');
if ($atuacao):
    ?>
<section class="areas-atuacao container p-80">
  <div class="titulo">
    <h2>
    <?php echo $atuacao['titulo']; ?>
    </h2>
    <hr>
  </div>
  <ul class="cards-atuacao grid-4">
    <li>
      <a href="" class="card-atuacao bd-sm">
        <img class="icon" src="<?= get_template_directory_uri(); ?>/assets/img/apartment_24dp_212421_FILL0_wght400_GRAD0_opsz24.svg" alt="">
        <h2>
          <?php echo $atuacao['titulo_area1']; ?>
        </h2>
        <p> 
         <?php echo $atuacao['txt_area1']; ?>
        </p>
        <img class="arrow" src="<?= get_template_directory_uri(); ?>/assets/img/arrow_forward_24dp_212421_FILL0_wght400_GRAD0_opsz24.svg" alt="">
      </a>
    </li>
    <!-- 2 -->
    <li>
      <a href="" class="card-atuacao bd-sm">
        <img class="icon" src="<?= get_template_directory_uri(); ?>/assets/img/apartment_24dp_212421_FILL0_wght400_GRAD0_opsz24.svg" alt="">
        <h2>
          <?php echo $atuacao['titulo_area2']; ?>
        </h2>
        <p>
         <?php echo $atuacao['txt_area2']; ?>
        </p>
        <img class="arrow" src="<?= get_template_directory_uri(); ?>/assets/img/arrow_forward_24dp_212421_FILL0_wght400_GRAD0_opsz24.svg" alt="">
      </a>
    </li>
    <!-- 3 -->
    <li>
      <a href="" class="card-atuacao bd-sm">
        <img class="icon" src="<?= get_template_directory_uri(); ?>/assets/img/apartment_24dp_212421_FILL0_wght400_GRAD0_opsz24.svg" alt="">
        <h2>
          <?php echo $atuacao['titulo_area3']; ?>
        </h2>
        <p>
         <?php echo $atuacao['txt_area3']; ?>
        </p>
        <img class="arrow" src="<?= get_template_directory_uri(); ?>/assets/img/arrow_forward_24dp_212421_FILL0_wght400_GRAD0_opsz24.svg" alt="">
      </a>
    </li>
    <!-- 4 -->
    <li>
      <a href="" class="card-atuacao bd-sm">
        <img class="icon" src="<?= get_template_directory_uri(); ?>/assets/img/apartment_24dp_212421_FILL0_wght400_GRAD0_opsz24.svg" alt="">
        <h2>
          <?php echo $atuacao['titulo_area4']; ?>
        </h2>
        <p>
         <?php echo $atuacao['txt_area4']; ?>
        </p>
        <img class="arrow" src="<?= get_template_directory_uri(); ?>/assets/img/arrow_forward_24dp_212421_FILL0_wght400_GRAD0_opsz24.svg" alt="">
      </a>
    </li>
    <!-- 5 -->
    <li>
      <a href="" class="card-atuacao bd-sm">
        <img class="icon" src="<?= get_template_directory_uri(); ?>/assets/img/apartment_24dp_212421_FILL0_wght400_GRAD0_opsz24.svg" alt="">
        <h2>
          <?php echo $atuacao['titulo_area5']; ?>
        </h2>
        <p>
         <?php echo $atuacao['txt_area5']; ?>
        </p>
        <img class="arrow" src="<?= get_template_directory_uri(); ?>/assets/img/arrow_forward_24dp_212421_FILL0_wght400_GRAD0_opsz24.svg" alt="">
      </a>
    </li>
    <!-- 6 -->
    <li>
      <a href="" class="card-atuacao bd-sm">
        <img class="icon" src="<?= get_template_directory_uri(); ?>/assets/img/apartment_24dp_212421_FILL0_wght400_GRAD0_opsz24.svg" alt="">
        <h2>
          <?php echo $atuacao['titulo_area6']; ?>
        </h2>
        <p>
         <?php echo $atuacao['txt_area6']; ?>
        </p>
        <img class="arrow" src="<?= get_template_directory_uri(); ?>/assets/img/arrow_forward_24dp_212421_FILL0_wght400_GRAD0_opsz24.svg" alt="">
      </a>
    </li>
    <!-- 7 -->
    <li>
      <a href="" class="card-atuacao bd-sm">
        <img class="icon" src="<?= get_template_directory_uri(); ?>/assets/img/apartment_24dp_212421_FILL0_wght400_GRAD0_opsz24.svg" alt="">
        <h2>
          <?php echo $atuacao['titulo_area7']; ?>
        </h2>
        <p>
         <?php echo $atuacao['txt_area7']; ?>
        </p>
        <img class="arrow" src="<?= get_template_directory_uri(); ?>/assets/img/arrow_forward_24dp_212421_FILL0_wght400_GRAD0_opsz24.svg" alt="">
      </a>
    </li>
    <!-- 8 -->
    <li>
      <a href="" class="card-atuacao bd-sm">
        <img class="icon" src="<?= get_template_directory_uri(); ?>/assets/img/apartment_24dp_212421_FILL0_wght400_GRAD0_opsz24.svg" alt="">
        <h2>
          <?php echo $atuacao['titulo_area8']; ?>
        </h2>
        <p>
         <?php echo $atuacao['txt_area8']; ?>
        </p>
        <img class="arrow" src="<?= get_template_directory_uri(); ?>/assets/img/arrow_forward_24dp_212421_FILL0_wght400_GRAD0_opsz24.svg" alt="">
      </a>
    </li>
  </ul>
  <a href=" <?php echo $atuacao['link_btn']; ?>" class="btn-pri bd-sm gotham bold">
  <?php echo $atuacao['txt_btn']; ?>
  </a>
</section>
<?php endif; ?>

<?php
$experiencia = get_field('experiencia');
if ($experiencia):
    ?>
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
        <?php echo $experiencia['titulo']; ?> 
       </h2>
        <p>
        <?php echo $experiencia['subtitulo']; ?>        </p>
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

<?php
$equipe = get_field('equipe');
if ($equipe):
    ?>
<div class="secao">
  <section class="time container p-80">
    <div class="time-txt">
      <h2>
      <?php echo $equipe['titulo']; ?>
      </h2>
    </div>
    <ul class="time-cards grid-3">
      <li class="time-card">
        <!-- bg image nesse time card -->
        <img src="<?= get_template_directory_uri(); ?>/assets/img/time.webp" alt="" srcset="">
        <div class="time-card-info bd-sm">
          <div class="redes-sociais">
            <a href=" <?php echo $equipe['link1-1']; ?>" class="">
              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 0C2.243 0 0 2.243 0 5V13C0 15.757 2.243 18 5 18H13C15.757 18 18 15.757 18 13V5C18 2.243 15.757 0 13 0H5ZM5 2H13C14.654 2 16 3.346 16 5V13C16 14.654 14.654 16 13 16H5C3.346 16 2 14.654 2 13V5C2 3.346 3.346 2 5 2ZM14 3C13.7348 3 13.4804 3.10536 13.2929 3.29289C13.1054 3.48043 13 3.73478 13 4C13 4.26522 13.1054 4.51957 13.2929 4.70711C13.4804 4.89464 13.7348 5 14 5C14.2652 5 14.5196 4.89464 14.7071 4.70711C14.8946 4.51957 15 4.26522 15 4C15 3.73478 14.8946 3.48043 14.7071 3.29289C14.5196 3.10536 14.2652 3 14 3ZM9 4C6.243 4 4 6.243 4 9C4 11.757 6.243 14 9 14C11.757 14 14 11.757 14 9C14 6.243 11.757 4 9 4ZM9 6C10.654 6 12 7.346 12 9C12 10.654 10.654 12 9 12C7.346 12 6 10.654 6 9C6 7.346 7.346 6 9 6Z" fill="#212421" />
              </svg>

            </a>
            <a href=" <?php echo $equipe['link1-2']; ?>" class="">
              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 0C0.895 0 0 0.895 0 2V16C0 17.105 0.895 18 2 18H16C17.105 18 18 17.105 18 16V2C18 0.895 17.105 0 16 0H2ZM2 2H16V16H2V2ZM4.7793 3.31641C3.9223 3.31641 3.4082 3.83158 3.4082 4.51758C3.4082 5.20358 3.92236 5.7168 4.69336 5.7168C5.55036 5.7168 6.06445 5.20358 6.06445 4.51758C6.06445 3.83158 5.5503 3.31641 4.7793 3.31641ZM3.47656 7V14H6V7H3.47656ZM8.08203 7V14H10.6055V10.1738C10.6055 9.03483 11.4181 8.87109 11.6621 8.87109C11.9061 8.87109 12.5586 9.11583 12.5586 10.1738V14H15V10.1738C15 7.97683 14.0237 7 12.8027 7C11.5817 7 10.9305 7.40656 10.6055 7.97656V7H8.08203Z" fill="#212421" />
              </svg>

            </a>
            <a href=" <?php echo $equipe['link1-3']; ?>" class="">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 10C20 4.48 15.52 0 10 0C4.48 0 0 4.48 0 10C0 14.84 3.44 18.87 8 19.8V13H6V10H8V7.5C8 5.57 9.57 4 11.5 4H14V7H12C11.45 7 11 7.45 11 8V10H14V13H11V19.95C16.05 19.45 20 15.19 20 10Z" fill="#212421" />
              </svg>

            </a>
            <a href=" <?php echo $equipe['link1-4']; ?>" class="">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.05 2.91C15.18 1.03 12.69 0 10.04 0C4.58005 0 0.130049 4.45 0.130049 9.91C0.130049 11.66 0.590049 13.36 1.45005 14.86L0.0500488 20L5.30005 18.62C6.75005 19.41 8.38005 19.83 10.04 19.83C15.5 19.83 19.9501 15.38 19.9501 9.92C19.9501 7.27 18.92 4.78 17.05 2.91ZM10.04 18.15C8.56005 18.15 7.11005 17.75 5.84005 17L5.54005 16.82L2.42005 17.64L3.25005 14.6L3.05005 14.29C2.23005 12.98 1.79005 11.46 1.79005 9.91C1.79005 5.37 5.49005 1.67 10.03 1.67C12.23 1.67 14.3 2.53 15.85 4.09C17.41 5.65 18.26 7.72 18.26 9.92C18.2801 14.46 14.58 18.15 10.04 18.15ZM14.56 11.99C14.31 11.87 13.09 11.27 12.87 11.18C12.64 11.1 12.48 11.06 12.31 11.3C12.14 11.55 11.67 12.11 11.53 12.27C11.39 12.44 11.24 12.46 10.99 12.33C10.74 12.21 9.94005 11.94 9.00005 11.1C8.26005 10.44 7.77005 9.63 7.62005 9.38C7.48005 9.13 7.60005 9 7.73005 8.87C7.84005 8.76 7.98005 8.58 8.10005 8.44C8.22005 8.3 8.27005 8.19 8.35005 8.03C8.43005 7.86 8.39005 7.72 8.33005 7.6C8.27005 7.48 7.77005 6.26 7.57005 5.76C7.37005 5.28 7.16005 5.34 7.01005 5.33C6.86005 5.33 6.70005 5.33 6.53005 5.33C6.36005 5.33 6.10005 5.39 5.87005 5.64C5.65005 5.89 5.01005 6.49 5.01005 7.71C5.01005 8.93 5.90005 10.11 6.02005 10.27C6.14005 10.44 7.77005 12.94 10.25 14.01C10.84 14.27 11.3 14.42 11.66 14.53C12.25 14.72 12.79 14.69 13.22 14.63C13.7 14.56 14.69 14.03 14.89 13.45C15.1 12.87 15.1 12.38 15.03 12.27C14.96 12.16 14.81 12.11 14.56 11.99Z" fill="#212421" />
              </svg>

            </a>
          </div>
          <!--  -->
          <hr>
          <div class="time-card-info-txt">
            <h3>
              <?php echo $equipe['nome1']; ?>
            </h3>
            <h4>
               <?php echo $equipe['profissao1']; ?>
            </h4>
          </div>
        </div>
      </li>
      <!-- card 2 -->
      <li class="time-card">
        <!-- bg image nesse time card -->
        <img src="<?= get_template_directory_uri(); ?>/assets/img/time.webp" alt="" srcset="">
        <div class="time-card-info bd-sm">
          <div class="redes-sociais">
            <a href="<?php echo $equipe['link2-1']; ?>" class="">
              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 0C2.243 0 0 2.243 0 5V13C0 15.757 2.243 18 5 18H13C15.757 18 18 15.757 18 13V5C18 2.243 15.757 0 13 0H5ZM5 2H13C14.654 2 16 3.346 16 5V13C16 14.654 14.654 16 13 16H5C3.346 16 2 14.654 2 13V5C2 3.346 3.346 2 5 2ZM14 3C13.7348 3 13.4804 3.10536 13.2929 3.29289C13.1054 3.48043 13 3.73478 13 4C13 4.26522 13.1054 4.51957 13.2929 4.70711C13.4804 4.89464 13.7348 5 14 5C14.2652 5 14.5196 4.89464 14.7071 4.70711C14.8946 4.51957 15 4.26522 15 4C15 3.73478 14.8946 3.48043 14.7071 3.29289C14.5196 3.10536 14.2652 3 14 3ZM9 4C6.243 4 4 6.243 4 9C4 11.757 6.243 14 9 14C11.757 14 14 11.757 14 9C14 6.243 11.757 4 9 4ZM9 6C10.654 6 12 7.346 12 9C12 10.654 10.654 12 9 12C7.346 12 6 10.654 6 9C6 7.346 7.346 6 9 6Z" fill="#212421" />
              </svg>

            </a>
            <a href="<?php echo $equipe['link2-2']; ?>" class="">
              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 0C0.895 0 0 0.895 0 2V16C0 17.105 0.895 18 2 18H16C17.105 18 18 17.105 18 16V2C18 0.895 17.105 0 16 0H2ZM2 2H16V16H2V2ZM4.7793 3.31641C3.9223 3.31641 3.4082 3.83158 3.4082 4.51758C3.4082 5.20358 3.92236 5.7168 4.69336 5.7168C5.55036 5.7168 6.06445 5.20358 6.06445 4.51758C6.06445 3.83158 5.5503 3.31641 4.7793 3.31641ZM3.47656 7V14H6V7H3.47656ZM8.08203 7V14H10.6055V10.1738C10.6055 9.03483 11.4181 8.87109 11.6621 8.87109C11.9061 8.87109 12.5586 9.11583 12.5586 10.1738V14H15V10.1738C15 7.97683 14.0237 7 12.8027 7C11.5817 7 10.9305 7.40656 10.6055 7.97656V7H8.08203Z" fill="#212421" />
              </svg>

            </a>
            <a href="<?php echo $equipe['link2-3']; ?>" class="">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 10C20 4.48 15.52 0 10 0C4.48 0 0 4.48 0 10C0 14.84 3.44 18.87 8 19.8V13H6V10H8V7.5C8 5.57 9.57 4 11.5 4H14V7H12C11.45 7 11 7.45 11 8V10H14V13H11V19.95C16.05 19.45 20 15.19 20 10Z" fill="#212421" />
              </svg>

            </a>
            <a href="<?php echo $equipe['link2-4']; ?>" class="">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.05 2.91C15.18 1.03 12.69 0 10.04 0C4.58005 0 0.130049 4.45 0.130049 9.91C0.130049 11.66 0.590049 13.36 1.45005 14.86L0.0500488 20L5.30005 18.62C6.75005 19.41 8.38005 19.83 10.04 19.83C15.5 19.83 19.9501 15.38 19.9501 9.92C19.9501 7.27 18.92 4.78 17.05 2.91ZM10.04 18.15C8.56005 18.15 7.11005 17.75 5.84005 17L5.54005 16.82L2.42005 17.64L3.25005 14.6L3.05005 14.29C2.23005 12.98 1.79005 11.46 1.79005 9.91C1.79005 5.37 5.49005 1.67 10.03 1.67C12.23 1.67 14.3 2.53 15.85 4.09C17.41 5.65 18.26 7.72 18.26 9.92C18.2801 14.46 14.58 18.15 10.04 18.15ZM14.56 11.99C14.31 11.87 13.09 11.27 12.87 11.18C12.64 11.1 12.48 11.06 12.31 11.3C12.14 11.55 11.67 12.11 11.53 12.27C11.39 12.44 11.24 12.46 10.99 12.33C10.74 12.21 9.94005 11.94 9.00005 11.1C8.26005 10.44 7.77005 9.63 7.62005 9.38C7.48005 9.13 7.60005 9 7.73005 8.87C7.84005 8.76 7.98005 8.58 8.10005 8.44C8.22005 8.3 8.27005 8.19 8.35005 8.03C8.43005 7.86 8.39005 7.72 8.33005 7.6C8.27005 7.48 7.77005 6.26 7.57005 5.76C7.37005 5.28 7.16005 5.34 7.01005 5.33C6.86005 5.33 6.70005 5.33 6.53005 5.33C6.36005 5.33 6.10005 5.39 5.87005 5.64C5.65005 5.89 5.01005 6.49 5.01005 7.71C5.01005 8.93 5.90005 10.11 6.02005 10.27C6.14005 10.44 7.77005 12.94 10.25 14.01C10.84 14.27 11.3 14.42 11.66 14.53C12.25 14.72 12.79 14.69 13.22 14.63C13.7 14.56 14.69 14.03 14.89 13.45C15.1 12.87 15.1 12.38 15.03 12.27C14.96 12.16 14.81 12.11 14.56 11.99Z" fill="#212421" />
              </svg>

            </a>
          </div>
          <!--  -->
          <hr>
          <div class="time-card-info-txt">
            <h3>
              <?php echo $equipe['nome2']; ?>
            </h3>
            <h4>
               <?php echo $equipe['profissao2']; ?>
            </h4>
          </div>
        </div>
      </li>
      <!-- card 2 -->
      <li class="time-card">
        <!-- bg image nesse time card -->
        <img src="<?= get_template_directory_uri(); ?>/assets/img/time.webp" alt="" srcset="">
        <div class="time-card-info bd-sm">
          <div class="redes-sociais">
            <a href="<?php echo $equipe['link3-1']; ?>" class="">
              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 0C2.243 0 0 2.243 0 5V13C0 15.757 2.243 18 5 18H13C15.757 18 18 15.757 18 13V5C18 2.243 15.757 0 13 0H5ZM5 2H13C14.654 2 16 3.346 16 5V13C16 14.654 14.654 16 13 16H5C3.346 16 2 14.654 2 13V5C2 3.346 3.346 2 5 2ZM14 3C13.7348 3 13.4804 3.10536 13.2929 3.29289C13.1054 3.48043 13 3.73478 13 4C13 4.26522 13.1054 4.51957 13.2929 4.70711C13.4804 4.89464 13.7348 5 14 5C14.2652 5 14.5196 4.89464 14.7071 4.70711C14.8946 4.51957 15 4.26522 15 4C15 3.73478 14.8946 3.48043 14.7071 3.29289C14.5196 3.10536 14.2652 3 14 3ZM9 4C6.243 4 4 6.243 4 9C4 11.757 6.243 14 9 14C11.757 14 14 11.757 14 9C14 6.243 11.757 4 9 4ZM9 6C10.654 6 12 7.346 12 9C12 10.654 10.654 12 9 12C7.346 12 6 10.654 6 9C6 7.346 7.346 6 9 6Z" fill="#212421" />
              </svg>

            </a>
            <a href="<?php echo $equipe['link3-2']; ?>" class="">
              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 0C0.895 0 0 0.895 0 2V16C0 17.105 0.895 18 2 18H16C17.105 18 18 17.105 18 16V2C18 0.895 17.105 0 16 0H2ZM2 2H16V16H2V2ZM4.7793 3.31641C3.9223 3.31641 3.4082 3.83158 3.4082 4.51758C3.4082 5.20358 3.92236 5.7168 4.69336 5.7168C5.55036 5.7168 6.06445 5.20358 6.06445 4.51758C6.06445 3.83158 5.5503 3.31641 4.7793 3.31641ZM3.47656 7V14H6V7H3.47656ZM8.08203 7V14H10.6055V10.1738C10.6055 9.03483 11.4181 8.87109 11.6621 8.87109C11.9061 8.87109 12.5586 9.11583 12.5586 10.1738V14H15V10.1738C15 7.97683 14.0237 7 12.8027 7C11.5817 7 10.9305 7.40656 10.6055 7.97656V7H8.08203Z" fill="#212421" />
              </svg>

            </a>
            <a href="<?php echo $equipe['link3-3']; ?>" class="">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 10C20 4.48 15.52 0 10 0C4.48 0 0 4.48 0 10C0 14.84 3.44 18.87 8 19.8V13H6V10H8V7.5C8 5.57 9.57 4 11.5 4H14V7H12C11.45 7 11 7.45 11 8V10H14V13H11V19.95C16.05 19.45 20 15.19 20 10Z" fill="#212421" />
              </svg>

            </a>
            <a href="<?php echo $equipe['link3-4']; ?>" class="">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.05 2.91C15.18 1.03 12.69 0 10.04 0C4.58005 0 0.130049 4.45 0.130049 9.91C0.130049 11.66 0.590049 13.36 1.45005 14.86L0.0500488 20L5.30005 18.62C6.75005 19.41 8.38005 19.83 10.04 19.83C15.5 19.83 19.9501 15.38 19.9501 9.92C19.9501 7.27 18.92 4.78 17.05 2.91ZM10.04 18.15C8.56005 18.15 7.11005 17.75 5.84005 17L5.54005 16.82L2.42005 17.64L3.25005 14.6L3.05005 14.29C2.23005 12.98 1.79005 11.46 1.79005 9.91C1.79005 5.37 5.49005 1.67 10.03 1.67C12.23 1.67 14.3 2.53 15.85 4.09C17.41 5.65 18.26 7.72 18.26 9.92C18.2801 14.46 14.58 18.15 10.04 18.15ZM14.56 11.99C14.31 11.87 13.09 11.27 12.87 11.18C12.64 11.1 12.48 11.06 12.31 11.3C12.14 11.55 11.67 12.11 11.53 12.27C11.39 12.44 11.24 12.46 10.99 12.33C10.74 12.21 9.94005 11.94 9.00005 11.1C8.26005 10.44 7.77005 9.63 7.62005 9.38C7.48005 9.13 7.60005 9 7.73005 8.87C7.84005 8.76 7.98005 8.58 8.10005 8.44C8.22005 8.3 8.27005 8.19 8.35005 8.03C8.43005 7.86 8.39005 7.72 8.33005 7.6C8.27005 7.48 7.77005 6.26 7.57005 5.76C7.37005 5.28 7.16005 5.34 7.01005 5.33C6.86005 5.33 6.70005 5.33 6.53005 5.33C6.36005 5.33 6.10005 5.39 5.87005 5.64C5.65005 5.89 5.01005 6.49 5.01005 7.71C5.01005 8.93 5.90005 10.11 6.02005 10.27C6.14005 10.44 7.77005 12.94 10.25 14.01C10.84 14.27 11.3 14.42 11.66 14.53C12.25 14.72 12.79 14.69 13.22 14.63C13.7 14.56 14.69 14.03 14.89 13.45C15.1 12.87 15.1 12.38 15.03 12.27C14.96 12.16 14.81 12.11 14.56 11.99Z" fill="#212421" />
              </svg>

            </a>
          </div>
          <!--  -->
          <hr>
          <div class="time-card-info-txt">
            <h3>
              <?php echo $equipe['nome3']; ?>
            </h3>
            <h4>
               <?php echo $equipe['profissao3']; ?>
            </h4>
          </div>
        </div>
      </li>
      <!-- card 3 -->
    </ul>
    <div class="btn">
      <a href="<?php echo $equipe['link_btn']; ?>" class="btn-pri bd-sm gotham bold">
      <?php echo $equipe['txt_btn']; ?>
      </a>
    </div>
  </section>
</div>
<?php endif; ?>

<section class="comentarios secao container">
  <div class="titulo">
    <h2>
      Testemunhas
    </h2>
  </div>
  <ul class="comentarios-cards grid-3">
    <li class="comentario-card">
      <div class="comentario-perfil">
        <div class="img-perfil">
          <img src="<?= get_template_directory_uri(); ?>/assets/img/adv.jpeg" alt="" srcset="">
        </div>
        <div class="txt-perfil">
          <h3>
            Mario Santos
          </h3>
          <h4>
            Consultor de Negócios
          </h4>
        </div>
      </div>
      <!--  -->
      <div class="comentario-txt">
        <h4>
          Profissionalismo e Competência Notáveis
        </h4>
        <p>
          Os advogados deste escritório demonstraram um nível de profissionalismo e competência que me deixaram muito impressionado. Resolveram meu caso com eficiência e clareza.
        </p>
      </div>
    </li>
    <!-- dois -->
    <li class="comentario-card">
      <div class="comentario-perfil">
        <div class="img-perfil">
          <img src="<?= get_template_directory_uri(); ?>/assets/img/adv.jpeg" alt="" srcset="">
        </div>
        <div class="txt-perfil">
          <h3>
            Mario Santos
          </h3>
          <h4>
            Consultor de Negócios
          </h4>
        </div>
      </div>
      <!--  -->
      <div class="comentario-txt">
        <h4>
          Profissionalismo e Competência Notáveis
        </h4>
        <p>
          Os advogados deste escritório demonstraram um nível de profissionalismo e competência que me deixaram muito impressionado. Resolveram meu caso com eficiência e clareza.
        </p>
      </div>
    </li>
    <!-- 3 -->
    <li class="comentario-card">
      <div class="comentario-perfil">
        <div class="img-perfil">
          <img src="<?= get_template_directory_uri(); ?>/assets/img/adv.jpeg" alt="" srcset="">
        </div>
        <div class="txt-perfil">
          <h3>
            Mario Santos
          </h3>
          <h4>
            Consultor de Negócios
          </h4>
        </div>
      </div>
      <!--  -->
      <div class="comentario-txt">
        <h4>
          Profissionalismo e Competência Notáveis
        </h4>
        <p>
          Os advogados deste escritório demonstraram um nível de profissionalismo e competência que me deixaram muito impressionado. Resolveram meu caso com eficiência e clareza.
        </p>
      </div>
    </li>
  </ul>
  </div>
</section>

<section class="contato secao container">
  <div class="titulo">
    <h2>
      Contate-nos
    </h2>
    <p>
      Alguma pergunta ou comentário? Basta nos escrever uma mensagem!
    </p>
  </div>

  <div class="contato-bloco">
    <style>
      .contato-info {
        position: relative;
        background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/contato-bg.webp');
      }
    </style>

    <div class="contato-info">
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

    </div>
  </div>
</section>

<?php get_footer(); ?>