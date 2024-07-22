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
  <header class="header-topo">
    <nav class="container nav-topo">
    <?php
$contato = get_field('contato');
if ($contato):
    ?>
      <div class="nav-info">
        <a href="nav-item" class="gotham">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/Telefone Escritorio de Advocacia.svg" alt="">
            <span>
            <?php echo $contato['numero']; ?>
            </span>
        </a>
        <a href="" class="gotham">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/Email Escritorio de Advocacia.svg" alt="">
            <span>
            <?php echo $contato['email']; ?>
            </span>
        </a>
        <a href="" class="gotham">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/Localizacao Escritorio de Advocacia.svg" alt="">
            <span>
            <?php echo $contato['local']; ?>
            </span>
        </a>
      </div>
      <?php endif; ?>

      <?php
$social = get_field('social');
if ($social):
    ?>
      <div class="nav-info info-2">
      <a href="<?php echo $social['insta']; ?>" class="">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/Instagram Gomes e Meyer Escritorio de Advocacia.svg" alt="">
        </a>
        <a href="<?php echo $social['x']; ?>" class="">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/Twitter Gomes e Meyer Escritorio de Advocacia.svg" alt="">
        </a>
        <a href="<?php echo $social['in']; ?>" class="">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/Linkedin Escritorio de Advocacia.svg" alt="">
        </a>
        <a href="<?php echo $social['face']; ?>" class="">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/Facebook Escritorio de Advocacia.svg" alt="">
        </a>
        <a href="<?php echo $social['wpp']; ?>" class="">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/Whatsapp Escritorio de Advocacia.svg" alt="">
        </a>
      </div>
    </nav>
  </header>
  <?php endif; ?>

  <header class="">

    <nav class="navbar container">
      <img id="img_logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/Logo-Escritorio-de-Advocacia.png" alt="">
      <button class="hamburger"></button>

      <?php wp_nav_menu(); ?>



      <div class="none">
        <a href="" class="btn-pri bd-sm gotham bold">
          ENTRE EM CONTATO
        </a>
      </div>
    </nav>
    </section>
  </header>
