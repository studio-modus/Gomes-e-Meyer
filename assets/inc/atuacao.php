<?php
$all_posts = new WP_Query(array(
  'post_type' => 'atuacao',
  'posts_per_page' => $posts_per_page,
));

if ($all_posts->have_posts()) {
?>
  <ul class="cards-atuacao grid-4">
    <?php
    while ($all_posts->have_posts()) {
      $all_posts->the_post();
      $post_id = get_the_ID();
      $post_link = get_permalink($post_id);
    ?>
      <li>
        <a href="<?php echo esc_url($post_link); ?>" class="card-atuacao bd-sm">
          <?php
          if (has_post_thumbnail()) {
            // Exibe a imagem destacada do post
            the_post_thumbnail('thumbnail', ['class' => 'thumbnail-class', 'alt' => get_the_title()]);
          } else {
            // Caso o post não tenha uma imagem destacada, você pode exibir uma imagem padrão ou outro conteúdo
            echo '<svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px" fill="#212421"><path d="m374-353 106-78 103 78-43-126 106-76H518l-38-125-38 125H314l104 76-44 126ZM480-81q-140-35-230-162.5T160-523v-238l320-120 320 120v238q0 152-90 279.5T480-81Zm0-62q115-38 187.5-143.5T740-523v-196l-260-98-260 98v196q0 131 72.5 236.5T480-143Zm0-337Z"/></svg>
';
          }
          ?>
          <h2><?php the_title(); ?></h2>
          <p>
            <?php
            $excerpt = get_the_excerpt();
            if (strlen($excerpt) > 300) {
              echo mb_strimwidth($excerpt, 0, 150, '...');
            } else {
              echo $excerpt;
            }
            ?>
          </p>
          <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#212421">
            <path d="M673-446.67H160v-66.66h513l-240-240L480-800l320 320-320 320-47-46.67 240-240Z" />
          </svg>
        </a>
      </li>
    <?php
    }
    ?>
  </ul>

<?php
  wp_reset_postdata();
} else {
  echo '<p>Nenhum post encontrado.</p>';
}
?>
