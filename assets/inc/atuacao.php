<?php
$all_posts = new WP_Query(array(
  'post_type' => 'atuacao',
  'posts_per_page' => -1,
));

// Verifica se há posts
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
          <svg id="icon" xmlns="http://www.w3.org/2000/svg" height="80px" viewBox="0 -960 960 960" width="80px" fill="#212421">
            <path d="M120-120v-560h160v-160h400v320h160v400H520v-160h-80v160H120Zm80-80h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm160 160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm160 320h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm160 480h80v-80h-80v80Zm0-160h80v-80h-80v80Z" />
          </svg>
          <h2><?php the_title(); ?></h2>
          <p><?php the_excerpt(); ?></p>
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
  // Restaurar as configurações originais do postdata
  wp_reset_postdata();
} else {
  echo '<p>Nenhum post encontrado.</p>';
}
?>