<?php
// Template Name:Blog
?>
<?php get_header(); ?>
<style>
  .bg-blog {
    position: relative;
    background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/bg-blog.webp');
    height: 80vh;
    background-size: cover;
  }
</style>

<div class="bg-blog">

  <div class="hero__subpages container">
    <div class="hero__wrap_subpages">

      <div class="hero-txt-subpages">
        <h1 class="">
          Notícias.
        </h1>
      </div>
      <hr>
    </div>
  </div>
</div>

<div class="cima">
  <div class="secao container sec-noticias">

    <div class="bloco-noticias">
      <div class="bloco-pesquisa">
        <!--  -->
        <div class="section-modal">
          <input class="modal-btn" type="checkbox" id="modal-btn" name="modal-btn" />
          <label for="modal-btn"><i class="uil uil-expand-arrows">
              <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#212421">
                <path d="M680-80q-50 0-85-35t-35-85q0-6 3-28L282-392q-16 15-37 23.5t-45 8.5q-50 0-85-35t-35-85q0-50 35-85t85-35q24 0 45 8.5t37 23.5l281-164q-2-7-2.5-13.5T560-760q0-50 35-85t85-35q50 0 85 35t35 85q0 50-35 85t-85 35q-24 0-45-8.5T598-672L317-508q2 7 2.5 13.5t.5 14.5q0 8-.5 14.5T317-452l281 164q16-15 37-23.5t45-8.5q50 0 85 35t35 85q0 50-35 85t-85 35Zm0-80q17 0 28.5-11.5T720-200q0-17-11.5-28.5T680-240q-17 0-28.5 11.5T640-200q0 17 11.5 28.5T680-160ZM200-440q17 0 28.5-11.5T240-480q0-17-11.5-28.5T200-520q-17 0-28.5 11.5T160-480q0 17 11.5 28.5T200-440Zm480-280q17 0 28.5-11.5T720-760q0-17-11.5-28.5T680-800q-17 0-28.5 11.5T640-760q0 17 11.5 28.5T680-720Zm0 520ZM200-480Zm480-280Z" />
              </svg>
            </i></label>
          <div class="modal">
            <div class="modal-wrap">
              <div class="modal-header">
                <h3>
                  Compartilhar
                </h3>
              </div>
              <?php
              $current_url = urlencode(home_url(add_query_arg(array(), $_SERVER['REQUEST_URI'])));
              ?>
              <div class="modal-buttons">

                <a class="btn-whatsapp" href="https://wa.me/?text=<?php echo $current_url; ?>" target="_blank">

                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.05 2.91C15.18 1.03 12.69 0 10.04 0C4.58005 0 0.130049 4.45 0.130049 9.91C0.130049 11.66 0.590049 13.36 1.45005 14.86L0.0500488 20L5.30005 18.62C6.75005 19.41 8.38005 19.83 10.04 19.83C15.5 19.83 19.9501 15.38 19.9501 9.92C19.9501 7.27 18.92 4.78 17.05 2.91ZM10.04 18.15C8.56005 18.15 7.11005 17.75 5.84005 17L5.54005 16.82L2.42005 17.64L3.25005 14.6L3.05005 14.29C2.23005 12.98 1.79005 11.46 1.79005 9.91C1.79005 5.37 5.49005 1.67 10.03 1.67C12.23 1.67 14.3 2.53 15.85 4.09C17.41 5.65 18.26 7.72 18.26 9.92C18.2801 14.46 14.58 18.15 10.04 18.15ZM14.56 11.99C14.31 11.87 13.09 11.27 12.87 11.18C12.64 11.1 12.48 11.06 12.31 11.3C12.14 11.55 11.67 12.11 11.53 12.27C11.39 12.44 11.24 12.46 10.99 12.33C10.74 12.21 9.94005 11.94 9.00005 11.1C8.26005 10.44 7.77005 9.63 7.62005 9.38C7.48005 9.13 7.60005 9 7.73005 8.87C7.84005 8.76 7.98005 8.58 8.10005 8.44C8.22005 8.3 8.27005 8.19 8.35005 8.03C8.43005 7.86 8.39005 7.72 8.33005 7.6C8.27005 7.48 7.77005 6.26 7.57005 5.76C7.37005 5.28 7.16005 5.34 7.01005 5.33C6.86005 5.33 6.70005 5.33 6.53005 5.33C6.36005 5.33 6.10005 5.39 5.87005 5.64C5.65005 5.89 5.01005 6.49 5.01005 7.71C5.01005 8.93 5.90005 10.11 6.02005 10.27C6.14005 10.44 7.77005 12.94 10.25 14.01C10.84 14.27 11.3 14.42 11.66 14.53C12.25 14.72 12.79 14.69 13.22 14.63C13.7 14.56 14.69 14.03 14.89 13.45C15.1 12.87 15.1 12.38 15.03 12.27C14.96 12.16 14.81 12.11 14.56 11.99Z" fill="#E6E0E6" />
                  </svg>

                  Whatsapp

                </a>

              </div>
            </div>
          </div>

          <script>
            document.addEventListener('DOMContentLoaded', function() {
              const modalBtn = document.querySelector('.modal-btn');
              const modal = document.querySelector('.modal');
              const modalWrap = document.querySelector('.modal-wrap');
              const closeButton = document.querySelector('.modal-btn + label:after');

              // Função para fechar o modal
              function closeModal() {
                modalBtn.checked = false; // Desmarca o checkbox
                modal.style.opacity = '0'; // Oculta o modal ajustando a opacidade
                modal.style.pointerEvents = 'none'; // Desabilita eventos de mouse no modal
              }

              // Evento de clique fora do modal para fechar
              document.addEventListener('click', function(event) {
                // Verifica se o clique foi fora do modal, do botão e do "X"
                if (!modalWrap.contains(event.target) && event.target !== modalBtn && !event.target.closest('label[for="modal-btn"]')) {
                  closeModal();
                }
              });

              // Evento para fechar o modal ao pressionar a tecla ESC
              document.addEventListener('keydown', function(event) {
                if (event.key === 'Escape') {
                  closeModal();
                }
              });

              // Evento para abrir o modal ao clicar no botão
              modalBtn.addEventListener('click', function() {
                if (modalBtn.checked) {
                  modal.style.opacity = '1'; // Mostra o modal ajustando a opacidade
                  modal.style.pointerEvents = 'auto'; // Habilita eventos de mouse no modal
                } else {
                  closeModal();
                }
              });

              // Adiciona evento de clique no "X" para fechar o modal
              document.querySelector('.modal-btn + label:after').addEventListener('click', closeModal);
            });
          </script>
        </div>
        <!--  -->
        <div class="pesquisar-noticia">
          <label class="dropdown">
            <div class="dd-button">
              <div class="dd-img">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                  <path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z" />
                </svg>
              </div>
              Pesquisar Notícias
            </div>
            <input type="checkbox" class="dd-input" id="test">
            <ul class="dd-menu">
              <li>
                <form id="search-form">
                  <div class="form-pitem">
                    <label for="">Período:</label>
                    <input type="text" id="date-range" name="date_range" class="underline" placeholder="Selecione a data">
                  </div>
                  <div class="form-pitem">
                    <label for="">Titulo:</label>
                    <input type="text" name="post_title" class="border" placeholder="Escreva o Título">
                  </div>
                  <div class="form-pitem">
                    <label for="">Categoria:</label>
                    <select name="category">
                      <option value="">Todas Categorias</option>
                      <?php
                      $categories = get_categories();
                      foreach ($categories as $category) {
                        echo '<option value="' . $category->term_id . '">' . $category->name . '</option>';
                      }
                      ?>
                    </select>
                  </div>
                  <div class="form-pitem">
                    <button type="submit">Pesquisar</button>
                  </div>
                </form>

              </li>
            </ul>

          </label>
        </div>
        <!-- script -->
        <script>
          document.addEventListener('DOMContentLoaded', function() {
            // Configuração do Flatpickr
            flatpickr("#date-range", {
              mode: "range",
              dateFormat: "Y-m-d",
              onChange: function(selectedDates, dateStr, instance) {
                if (selectedDates.length > 1) {
                  // Obter a data inicial e final
                  var startDate = selectedDates[0];
                  var endDate = selectedDates[1];

                  // Preencher todas as datas entre a data inicial e final com a cor cinza
                  var currentDate = new Date(startDate);
                  while (currentDate <= endDate) {
                    instance.calendarContainer.querySelector(`[aria-label='${currentDate.toDateString()}']`).style.backgroundColor = '#d3d3d3';
                    currentDate.setDate(currentDate.getDate() + 1);
                  }
                }
              }
            });

            // Manipular a submissão do formulário
            jQuery('#search-form').on('submit', function(e) {
              e.preventDefault();

              var formData = jQuery(this).serialize();

              jQuery.ajax({
                url: '<?php echo admin_url("admin-ajax.php"); ?>',
                type: 'GET',
                data: formData + '&action=search_news',
                success: function(response) {
                  if (response.success) {
                    jQuery('.noticias-listagem').html(response.data);
                  } else {
                    alert('Nenhum post foi encontrado.');
                  }
                }
              });
            });

            document.addEventListener('click', function(event) {
              const dropdown = document.querySelector('.dd-input');
              const dropdownMenu = document.querySelector('.dropdown');

              if (!dropdownMenu.contains(event.target) && event.target !== dropdown) {
                dropdown.checked = false;
              }
            });
          });
        </script>
      </div>

      <div class="noticias">
        <!-- DESTAQUE  --><?php $post_destaque_id = get_field('post_destaque', get_option('page_for_posts')); ?>
        <div class="noticias-destaque">
          <li class="noticia">
            <div class="noticia-img">
              <a href="<?php echo get_the_permalink($post_destaque_id); ?>">
                <?php if (has_post_thumbnail($post_destaque_id)) : ?>
                  <img src="<?= get_the_post_thumbnail_url($post_destaque_id); ?>" alt="">
                <?php else : ?>
                  <img class="noticia-thumbnail" src="<?php echo get_template_directory_uri(); ?>/assets/img/post-imgblog.webp" alt="">
                <?php endif; ?>
              </a>
            </div>
            <div class="noticia-txt">
              <div class="noticia-compartilhamento">
                <h4 class="noticia-categoria">
                  <?php
                  $category = get_the_category($post_destaque_id);
                  if (!empty($category)) {
                    echo esc_html($category[0]->name);
                  }
                  ?> |
                </h4>

                <a href="https://www.instagram.com/?url=<?php echo urlencode(get_permalink($post_destaque_id)); ?>" target="_blank" class="">
                  <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 0C2.243 0 0 2.243 0 5V13C0 15.757 2.243 18 5 18H13C15.757 18 18 15.757 18 13V5C18 2.243 15.757 0 13 0H5ZM5 2H13C14.654 2 16 3.346 16 5V13C16 14.654 14.654 16 13 16H5C3.346 16 2 14.654 2 13V5C2 3.346 3.346 2 5 2ZM14 3C13.7348 3 13.4804 3.10536 13.2929 3.29289C13.1054 3.48043 13 3.73478 13 4C13 4.26522 13.1054 4.51957 13.2929 4.70711C13.4804 4.89464 13.7348 5 14 5C14.2652 5 14.5196 4.89464 14.7071 4.70711C14.8946 4.51957 15 4.26522 15 4C15 3.73478 14.8946 3.48043 14.7071 3.29289C14.5196 3.10536 14.2652 3 14 3ZM9 4C6.243 4 4 6.243 4 9C4 11.757 6.243 14 9 14C11.757 14 14 11.757 14 9C14 6.243 11.757 4 9 4ZM9 6C10.654 6 12 7.346 12 9C12 10.654 10.654 12 9 12C7.346 12 6 10.654 6 9C6 7.346 7.346 6 9 6Z" fill="#212421" />
                  </svg>
                </a>
                <a href="https://twitter.com/share?url=<?php echo urlencode(get_permalink($post_destaque_id)); ?>&text=<?php echo urlencode(get_the_title($post_destaque_id)); ?>" target="_blank" class="">
                  <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.367188 0L7.46289 10.1406L0.740234 18H3.38086L8.64453 11.8301L12.9609 18H19.8711L12.4492 7.375L18.7402 0H16.1406L11.2715 5.6875L7.29883 0H0.367188ZM4.20703 2H6.25586L16.0332 16H14.002L4.20703 2Z" fill="#212421" />
                  </svg>
                </a>
                <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(get_permalink($post_destaque_id)); ?>&title=<?php echo urlencode(get_the_title($post_destaque_id)); ?>" target="_blank" class="">
                  <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 0C0.895 0 0 0.895 0 2V16C0 17.105 0.895 18 2 18H16C17.105 18 18 17.105 18 16V2C18 0.895 17.105 0 16 0H2ZM2 2H16V16H2V2ZM4.7793 3.31641C3.9223 3.31641 3.4082 3.83158 3.4082 4.51758C3.4082 5.20358 3.92236 5.7168 4.69336 5.7168C5.55036 5.7168 6.06445 5.20358 6.06445 4.51758C6.06445 3.83158 5.5503 3.31641 4.7793 3.31641ZM3.47656 7V14H6V7H3.47656ZM8.08203 7V14H10.6055V10.1738C10.6055 9.03483 11.4181 8.87109 11.6621 8.87109C11.9061 8.87109 12.5586 9.11583 12.5586 10.1738V14H15V10.1738C15 7.97683 14.0237 7 12.8027 7C11.5817 7 10.9305 7.40656 10.6055 7.97656V7H8.08203Z" fill="#212421" />
                  </svg>
                </a>
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink($post_destaque_id)); ?>" target="_blank" class="">
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 10C20 4.48 15.52 0 10 0C4.48 0 0 4.48 0 10C0 14.84 3.44 18.87 8 19.8V13H6V10H8V7.5C8 5.57 9.57 4 11.5 4H14V7H12C11.45 7 11 7.45 11 8V10H14V13H11V19.95C16.05 19.45 20 15.19 20 10Z" fill="#212421" />
                  </svg>
                </a>
                <a href="https://api.whatsapp.com/send?text=<?php echo urlencode(get_the_title($post_destaque_id) . ' ' . get_permalink($post_destaque_id)); ?>" target="_blank" class="">
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.05 2.91C15.18 1.03 12.69 0 10.04 0C4.58005 0 0.130049 4.45 0.130049 9.91C0.130049 11.66 0.590049 13.36 1.45005 14.86L0.0500488 20L5.30005 18.62C6.75005 19.41 8.38005 19.83 10.04 19.83C15.5 19.83 19.9501 15.38 19.9501 9.92C19.9501 7.27 18.92 4.78 17.05 2.91ZM10.04 18.15C8.56005 18.15 7.11005 17.75 5.84005 17L5.54005 16.82L2.42005 17.64L3.25005 14.6L3.05005 14.29C2.23005 12.98 1.79005 11.46 1.79005 9.91C1.79005 5.37 5.49005 1.67 10.03 1.67C12.23 1.67 14.3 2.53 15.85 4.09C17.41 5.65 18.26 7.72 18.26 9.92C18.2801 14.46 14.58 18.15 10.04 18.15ZM14.56 11.99C14.31 11.87 13.09 11.27 12.87 11.18C12.64 11.1 12.48 11.06 12.31 11.3C12.14 11.55 11.67 12.11 11.53 12.27C11.39 12.44 11.24 12.46 10.99 12.33C10.74 12.21 9.94005 11.94 9.00005 11.1C8.26005 10.44 7.77005 9.63 7.62005 9.38C7.48005 9.13 7.60005 9 7.73005 8.87C7.84005 8.76 7.98005 8.58 8.10005 8.44C8.22005 8.3 8.27005 8.19 8.35005 8.03C8.43005 7.86 8.39005 7.72 8.33005 7.6C8.27005 7.48 7.77005 6.26 7.57005 5.76C7.37005 5.28 7.16005 5.34 7.01005 5.33C6.86005 5.33 6.70005 5.33 6.53005 5.33C6.36005 5.33 6.10005 5.39 5.87005 5.64C5.65005 5.89 5.01005 6.49 5.01005 7.71C5.01005 8.93 5.90005 10.11 6.02005 10.27C6.14005 10.44 7.77005 12.94 10.25 14.01C10.84 14.27 11.3 14.42 11.66 14.53C12.25 14.72 12.79 14.69 13.22 14.63C13.7 14.56 14.69 14.03 14.89 13.45C15.1 12.87 15.1 12.38 15.03 12.27C14.96 12.16 14.81 12.11 14.56 11.99Z" fill="#212421" />
                  </svg>
                </a>
              </div>
              <a href="<?php echo get_the_permalink($post_destaque_id); ?>" class="noticia-titulo">
                <h2>
                  <?php echo get_the_title($post_destaque_id); ?>
                </h2>
              </a>

              <p class="noticia-resumo">
                <?php echo get_the_excerpt($post_destaque_id); ?>
              </p>

              <h6 class="noticia-data"><?php echo get_the_date("d/m/Y", $post_destaque_id); ?>
                -
                <?= get_the_time("H:i", $post_destaque_id); ?>
              </h6>
            </div>
          </li>
        </div>

        <!-- DESTAQUE -->
      </div>
      <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $posts_per_page = get_option('posts_per_page');
      $total_posts = $wp_query->found_posts;
      $start_post = ($paged - 1) * $posts_per_page + 1;
      $end_post = min($paged * $posts_per_page, $total_posts);
      ?>

      <div class="post-count">
        <span>

          Exibindo
          <?php echo $start_post; ?> a <?php echo $end_post; ?> de <?php echo $total_posts; ?> resultados encontrados
        </span>
      </div>

      <hr>

      <ul class="noticias-listagem">
        <?php
        $args = array(
          'post_type' => 'post',
          'post_status' => 'publish',
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) :
          while ($query->have_posts()) : $query->the_post();

        ?>
            <li class="noticia">
              <div class="noticia-img">
                <a href="<?php the_permalink(); ?>">
                  <?php if (has_post_thumbnail()) : ?>
                    <img class="noticia-thumbnail" src="<?= get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                  <?php else : ?>
                    <img class="noticia-thumbnail" src="<?php echo get_template_directory_uri() ?>/assets/img/post-imgblog.webp" alt="<?php the_title(); ?>">
                  <?php endif; ?>
                </a>
              </div>
              <div class="noticia-txt">
                <div class="noticia-compartilhamento">
                  <h4 class="noticia-categoria"><?php the_category(', '); ?> |</h4>
                  <a href="https://www.instagram.com/?url=<?php echo urlencode(get_permalink()); ?>" target="_blank">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M5 0C2.243 0 0 2.243 0 5V13C0 15.757 2.243 18 5 18H13C15.757 18 18 15.757 18 13V5C18 2.243 15.757 0 13 0H5ZM5 2H13C14.654 2 16 3.346 16 5V13C16 14.654 14.654 16 13 16H5C3.346 16 2 14.654 2 13V5C2 3.346 3.346 2 5 2ZM14 3C13.7348 3 13.4804 3.10536 13.2929 3.29289C13.1054 3.48043 13 3.73478 13 4C13 4.26522 13.1054 4.51957 13.2929 4.70711C13.4804 4.89464 13.7348 5 14 5C14.2652 5 14.5196 4.89464 14.7071 4.70711C14.8946 4.51957 15 4.26522 15 4C15 3.73478 14.8946 3.48043 14.7071 3.29289C14.5196 3.10536 14.2652 3 14 3ZM9 4C6.243 4 4 6.243 4 9C4 11.757 6.243 14 9 14C11.757 14 14 11.757 14 9C14 6.243 11.757 4 9 4ZM9 6C10.654 6 12 7.346 12 9C12 10.654 10.654 12 9 12C7.346 12 6 10.654 6 9C6 7.346 7.346 6 9 6Z" fill="#212421" />
                    </svg>
                  </a>
                  <a href="https://twitter.com/share?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>" target="_blank">
                    <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0.367188 0L7.46289 10.1406L0.740234 18H3.38086L8.64453 11.8301L12.9609 18H19.8711L12.4492 7.375L18.7402 0H16.1406L11.2715 5.6875L7.29883 0H0.367188ZM4.20703 2H6.25586L16.0332 16H14.002L4.20703 2Z" fill="#212421" />
                    </svg>
                  </a>
                  <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(get_permalink()); ?>&title=<?php echo urlencode(get_the_title()); ?>" target="_blank">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M2 0C0.895 0 0 0.895 0 2V16C0 17.105 0.895 18 2 18H16C17.105 18 18 17.105 18 16V2C18 0.895 17.105 0 16 0H2ZM2 2H16V16H2V2ZM4.7793 3.31641C3.9223 3.31641 3.4082 3.83158 3.4082 4.51758C3.4082 5.20358 3.92236 5.7168 4.69336 5.7168C5.55036 5.7168 6.06445 5.20358 6.06445 4.51758C6.06445 3.83158 5.5503 3.31641 4.7793 3.31641ZM3.47656 7V14H6V7H3.47656ZM8.08203 7V14H10.6055V10.1738C10.6055 9.03483 11.4181 8.87109 11.6621 8.87109C11.9061 8.87109 12.5586 9.11583 12.5586 10.1738V14H15V10.1738C15 7.97683 14.0237 7 12.8027 7C11.5817 7 10.9305 7.40656 10.6055 7.97656V7H8.08203Z" fill="#212421" />
                    </svg>
                  </a>
                  <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" target="_blank">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M20 10C20 4.48 15.52 0 10 0C4.48 0 0 4.48 0 10C0 14.84 3.44 18.87 8 19.8V13H6V10H8V7.5C8 5.57 9.57 4 11.5 4H14V7H12C11.45 7 11 7.45 11 8V10H14V13H11V19.95C16.05 19.45 20 15.19 20 10Z" fill="#212421" />
                    </svg>
                  </a>
                  <a href="https://api.whatsapp.com/send?text=<?php echo urlencode(get_the_title() . ' ' . get_permalink()); ?>" target="_blank">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M17.05 2.91C15.18 1.03 12.69 0 10.04 0C4.58005 0 0.130049 4.45 0.130049 9.91C0.130049 11.66 0.590049 13.36 1.45005 14.86L0.0500488 20L5.30005 18.62C6.75005 19.41 8.38005 19.83 10.04 19.83C15.5 19.83 19.9501 15.38 19.9501 9.92C19.9501 7.27 18.92 4.78 17.05 2.91ZM10.04 18.15C8.56005 18.15 7.11005 17.75 5.84005 17L5.54005 16.82L2.42005 17.64L3.25005 14.6L3.05005 14.29C2.23005 12.98 1.79005 11.46 1.79005 9.91C1.79005 5.37 5.49005 1.67 10.03 1.67C12.23 1.67 14.3 2.53 15.85 4.09C17.41 5.65 18.26 7.72 18.26 9.92C18.2801 14.46 14.58 18.15 10.04 18.15ZM14.56 11.99C14.31 11.87 13.09 11.27 12.87 11.18C12.64 11.1 12.48 11.06 12.31 11.3C12.14 11.55 11.67 12.11 11.53 12.27C11.39 12.44 11.24 12.46 10.99 12.33C10.74 12.21 9.94005 11.94 9.00005 11.1C8.26005 10.44 7.77005 9.63 7.62005 9.38C7.48005 9.13 7.60005 9 7.73005 8.87C7.84005 8.76 7.98005 8.58 8.10005 8.44C8.22005 8.3 8.27005 8.19 8.35005 8.03C8.43005 7.86 8.39005 7.72 8.33005 7.6C8.27005 7.48 7.77005 6.26 7.57005 5.76C7.37005 5.28 7.16005 5.34 7.01005 5.33C6.86005 5.33 6.70005 5.33 6.53005 5.33C6.36005 5.33 6.10005 5.39 5.87005 5.64C5.65005 5.89 5.01005 6.49 5.01005 7.71C5.01005 8.93 5.90005 10.11 6.02005 10.27C6.14005 10.44 7.77005 12.94 10.25 14.01C10.84 14.27 11.3 14.42 11.66 14.53C12.25 14.72 12.79 14.69 13.22 14.63C13.7 14.56 14.69 14.03 14.89 13.45C15.1 12.87 15.1 12.38 15.03 12.27C14.96 12.16 14.81 12.11 14.56 11.99Z" fill="#212421" />
                    </svg>
                  </a>
                </div>
                <a href="<?php the_permalink(); ?>" class="noticia-titulo">
                  <h2><?php the_title(); ?></h2>
                </a>
                <a href="<?php the_permalink(); ?>" class="noticia-resumo">
                  <p>
                    <?php echo get_the_excerpt(); ?>
                  </p>
                </a>
                <h6 class="noticia-data"><?php echo get_the_date("d/m/Y"); ?>
                  -
                  <?= get_the_time("H:i") ?>
                </h6>
              </div>
            </li>
        <?php
          endwhile;
        endif;
        wp_reset_postdata();
        ?>
      </ul>

      <div class="paginacao-noticias">
        <?php
        // Adicionando a paginação
        the_posts_pagination(array(
          'mid_size' => 2,
          'prev_text' => __('&laquo; Anterior', 'textdomain'),
          'next_text' => __('Próximo &raquo;', 'textdomain'),
        ));
        ?>
      </div>
    </div>
  </div>
</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>


<?php get_footer(); ?>