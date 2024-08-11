<?php
global $theme_uri;
$theme_uri = get_template_directory_uri();
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
  <?php
  $home_page_id = get_option('page_on_front');
  $contato = get_field('contato', $home_page_id);
  $social = get_field('social', $home_page_id);
  if ($contato) :
  ?>
    <header class="header-topo">
      <nav class="container nav-topo">
        <div class="nav-info">
          <a href="<?php  echo $social['wpp']; ?>" class="gotham nav-item" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Telefone Escritorio de Advocacia.svg" alt="">
            <span>
              <?php echo $contato['numero']; ?>
            </span>
          </a>
          <a href="mailto:hgm.advocacia@gmail.com" class="gotham" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Email Escritorio de Advocacia.svg" alt="">
            <span>
              <?php echo $contato['email']; ?>
            </span>
          </a>
          <a href="" class="gotham none-mobile" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Localizacao Escritorio de Advocacia.svg" alt="">
            <span>
              <?php echo $contato['local']; ?>
            </span>
          </a>
        </div>
        <div class="nav-info info-2">
          <a href="<?php echo $social['insta']; ?>" class="" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Instagram Gomes e Meyer Escritorio de Advocacia.svg" alt="">
          </a>
          <a href="<?php echo $social['x']; ?>" class="" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Twitter Gomes e Meyer Escritorio de Advocacia.svg" alt="">
          </a>
          <a href="<?php echo $social['in']; ?>" class="" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Linkedin Escritorio de Advocacia.svg" alt="">
          </a>
          <a href="<?php echo $social['face']; ?>" class="" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Facebook Escritorio de Advocacia.svg" alt="">
          </a>
          <a href="<?php echo $social['wpp']; ?>" class="" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Whatsapp Escritorio de Advocacia.svg" alt="">
          </a>
        </div>
      </nav>
    </header>

    <header class="">

      <nav class="navbar container">
        <a href="/">
          <img id="img_logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/Logo-Escritorio-de-Advocacia.png" alt="">
        </a>
        <button class="hamburger"></button>

        <?php wp_nav_menu(); ?>



        <div class="none">
          <a href="/contato" class="btn-pri bd-sm gotham bold">
            ENTRE EM CONTATO
          </a>
        </div>
      </nav>
      </section>
    </header>
  <?php endif; ?>
