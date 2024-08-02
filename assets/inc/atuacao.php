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
            echo '<img src="path/to/default-image.jpg" class="thumbnail-class" alt="Imagem padrão">';
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