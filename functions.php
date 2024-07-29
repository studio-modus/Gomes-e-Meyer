<?php

include 'inc/functions/utils.php';
include 'inc/functions/reset-wp.php';
include 'inc/functions/setup-theme.php';

function custom_post_type_atuacao()
{
  // Registrando o Custom Post Type
  register_post_type('atuacao', [
    'label' => 'Áreas de Atuação',
    'description' => 'Áreas de Atuação',
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_icon' => 'dashicons-portfolio',
    'capability_type' => 'post',
    'map_meta_cap' => true,
    'hierarchical' => false,
    'rewrite' => ['slug' => 'atuacao', 'with_front' => true],
    'query_var' => true,
    'supports' => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'],
    'labels' => [
      'name' => 'Áreas de Atuação',
      'singular_name' => 'Área de Atuação',
      'menu_name' => 'Áreas de Atuação',
      'add_new' => 'Adicionar Novo',
      'add_new_item' => 'Adicionar Nova Área de Atuação',
      'edit' => 'Editar',
      'edit_item' => 'Editar Área de Atuação',
      'new_item' => 'Nova Área de Atuação',
      'view' => 'Ver Área de Atuação',
      'view_item' => 'Ver Área de Atuação',
      'search_items' => 'Procurar Área de Atuação',
      'not_found' => 'Nenhuma Área de Atuação Encontrada',
      'not_found_in_trash' => 'Nenhuma Área de Atuação Encontrado no Lixo',
    ],
  ]);

  // Registrando a Taxonomia
  register_taxonomy('categoria-atuacao', 'atuacao', [
    'label' => 'Categorias das Áreas de Atuação',
    'rewrite' => ['slug' => 'categoria-atuacao', 'with_front' => true],
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'show_in_quick_edit' => true,
    'hierarchical' => true,
    'labels' => [
      'name' => 'Categorias',
      'singular_name' => 'Categoria',
      'menu_name' => 'Categorias',
      'add_new' => 'Adicionar Novo',
      'add_new_item' => 'Adicionar Nova Categoria',
      'edit' => 'Editar',
      'edit_item' => 'Editar Categoria',
      'new_item' => 'Nova Categoria',
      'view' => 'Ver Categoria',
      'view_item' => 'Ver Categoria',
      'search_items' => 'Procurar Categorias',
      'not_found' => 'Nenhuma Categoria Encontrada',
      'not_found_in_trash' => 'Nenhuma Categoria Encontrada no Lixo',
    ],
  ]);
}
add_action('init', 'custom_post_type_atuacao');



//



function theme_enqueue_scripts()
{
  wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');


add_action('wp_ajax_search_news', 'search_news');
add_action('wp_ajax_nopriv_search_news', 'search_news');

function search_news()
{
  $post_title = sanitize_text_field($_GET['post_title']);
  $category = sanitize_text_field($_GET['category']);
  $date_range = sanitize_text_field($_GET['date_range']);
  $dates = explode(' to ', $date_range);

  $query_args = array(
    'post_type' => 'post',
    'posts_per_page' => -1,
    's' => $post_title,
    'cat' => $category,
  );

  if (!empty($dates[0]) && !empty($dates[1])) {
    $query_args['date_query'] = array(
      array(
        'after' => $dates[0],
        'before' => $dates[1],
        'inclusive' => true,
      ),
    );
  }

  $query = new WP_Query($query_args);

  if ($query->have_posts()) {
    ob_start();
    while ($query->have_posts()) {
      $query->the_post();
?>
      <li class="noticia">
        <div class="noticia-img">
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail(); ?>
          </a>
        </div>
        <div class="noticia-txt">
          <div class="noticia-compartilhamento">
            <h4 class="noticia-categoria">
              <?php the_category(', '); ?>
            </h4>
          </div>
          <h2 class="noticia-titulo">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h2>
          <p class="noticia-resumo">
            <?php the_excerpt(); ?>
          </p>
          <h6 class="noticia-data">
            <?php echo get_the_date(); ?>
          </h6>
        </div>
      </li>
<?php
    }
    $data = ob_get_clean();
    wp_send_json_success($data);
  } else {
    wp_send_json_error();
  }

  wp_die();
}


