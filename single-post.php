<?php get_header(); ?>

<style>
  .hero-single {
    position: relative;
    background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/bg-single-post.png');
    height: 90vh;
    background-size: cover;
    /* ou outra propriedade de tamanho desejada */
  }
</style>

<div class="hero-single">

  <div class="single-post-container secao container">
    <div class="single-post-introducao  ">
      <div class="single-post-introducao-txt">
        <h1 class="single-post-title">
          <?php echo get_the_title(); ?>
        </h1>
        <p class="single-post-excerpt">
          <?php echo get_the_excerpt(); ?>
        </p>
        <h5 class="single-post-date">
          <?php echo get_the_date(); ?> | <?php the_category(', '); ?>
        </h5>
      </div>
    </div>

    <!--  -->
    <div class="single-post-img">

      <?php if (get_the_post_thumbnail_url()) {
        $thumbnail_url = get_the_post_thumbnail_url();
      } else {
        $thumbnail_url = get_template_directory_uri() . '/assets/img/postagem-blog.jpg';
      }
      ?>
      <img class="single-post-img-thumbnail" src="<?php echo $thumbnail_url; ?>" alt="">
    </div>
  </div>
</div>


<!-- topicos post -->
<div class="single-post-content container secao ">
  <div class="fixed">
    <div class="post-topicos ">
      <h2>
        Navegue por tópicos
      </h2>
      <aside class="aside-nav-links">
        <ul>
          <!-- Links de navegação dinâmica serão inseridos aqui -->
        </ul>
      </aside>
      <div class="redes-social">
        <ul>

          <!-- icone fb -->
          <li>
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" target="_blank" class="">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 10C20 4.48 15.52 0 10 0C4.48 0 0 4.48 0 10C0 14.84 3.44 18.87 8 19.8V13H6V10H8V7.5C8 5.57 9.57 4 11.5 4H14V7H12C11.45 7 11 7.45 11 8V10H14V13H11V19.95C16.05 19.45 20 15.19 20 10Z" fill="#212421" />
              </svg>
            </a>
            <!-- icone linkend -->
          <li>
            <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(get_permalink()); ?>&title=<?php echo urlencode(get_the_title()); ?>" target="_blank" class="">
              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 0C0.895 0 0 0.895 0 2V16C0 17.105 0.895 18 2 18H16C17.105 18 18 17.105 18 16V2C18 0.895 17.105 0 16 0H2ZM2 2H16V16H2V2ZM4.7793 3.31641C3.9223 3.31641 3.4082 3.83158 3.4082 4.51758C3.4082 5.20358 3.92236 5.7168 4.69336 5.7168C5.55036 5.7168 6.06445 5.20358 6.06445 4.51758C6.06445 3.83158 5.5503 3.31641 4.7793 3.31641ZM3.47656 7V14H6V7H3.47656ZM8.08203 7V14H10.6055V10.1738C10.6055 9.03483 11.4181 8.87109 11.6621 8.87109C11.9061 8.87109 12.5586 9.11583 12.5586 10.1738V14H15V10.1738C15 7.97683 14.0237 7 12.8027 7C11.5817 7 10.9305 7.40656 10.6055 7.97656V7H8.08203Z" fill="#212421" />
              </svg>
            </a>
          </li>
          <!-- twitter -->
          <li>
            <a href="">
              <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.367188 0L7.46289 10.1406L0.740234 18H3.38086L8.64453 11.8301L12.9609 18H19.8711L12.4492 7.375L18.7402 0H16.1406L11.2715 5.6875L7.29883 0H0.367188ZM4.20703 2H6.25586L16.0332 16H14.002L4.20703 2Z" fill="#212421" />
              </svg>
            </a>
          </li>
          <!-- zap -->
          <li>
            <a href="https://api.whatsapp.com/send?text=<?php echo urlencode(get_the_title() . ' ' . get_permalink()); ?>" target="_blank" class="">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.05 2.91C15.18 1.03 12.69 0 10.04 0C4.58005 0 0.130049 4.45 0.130049 9.91C0.130049 11.66 0.590049 13.36 1.45005 14.86L0.0500488 20L5.30005 18.62C6.75005 19.41 8.38005 19.83 10.04 19.83C15.5 19.83 19.9501 15.38 19.9501 9.92C19.9501 7.27 18.92 4.78 17.05 2.91ZM10.04 18.15C8.56005 18.15 7.11005 17.75 5.84005 17L5.54005 16.82L2.42005 17.64L3.25005 14.6L3.05005 14.29C2.23005 12.98 1.79005 11.46 1.79005 9.91C1.79005 5.37 5.49005 1.67 10.03 1.67C12.23 1.67 14.3 2.53 15.85 4.09C17.41 5.65 18.26 7.72 18.26 9.92C18.2801 14.46 14.58 18.15 10.04 18.15ZM14.56 11.99C14.31 11.87 13.09 11.27 12.87 11.18C12.64 11.1 12.48 11.06 12.31 11.3C12.14 11.55 11.67 12.11 11.53 12.27C11.39 12.44 11.24 12.46 10.99 12.33C10.74 12.21 9.94005 11.94 9.00005 11.1C8.26005 10.44 7.77005 9.63 7.62005 9.38C7.48005 9.13 7.60005 9 7.73005 8.87C7.84005 8.76 7.98005 8.58 8.10005 8.44C8.22005 8.3 8.27005 8.19 8.35005 8.03C8.43005 7.86 8.39005 7.72 8.33005 7.6C8.27005 7.48 7.77005 6.26 7.57005 5.76C7.37005 5.28 7.16005 5.34 7.01005 5.33C6.86005 5.33 6.70005 5.33 6.53005 5.33C6.36005 5.33 6.10005 5.39 5.87005 5.64C5.65005 5.89 5.01005 6.49 5.01005 7.71C5.01005 8.93 5.90005 10.11 6.02005 10.27C6.14005 10.44 7.77005 12.94 10.25 14.01C10.84 14.27 11.3 14.42 11.66 14.53C12.25 14.72 12.79 14.69 13.22 14.63C13.7 14.56 14.69 14.03 14.89 13.45C15.1 12.87 15.1 12.38 15.03 12.27C14.96 12.16 14.81 12.11 14.56 11.99Z" fill="#212421" />
              </svg>
            </a>
          </li>
          <!-- copy -->
          <li>
            <a href="#" id="copyPostLink">
              <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#212421">
                <path d="M680-80q-50 0-85-35t-35-85q0-6 3-28L282-392q-16 15-37 23.5t-45 8.5q-50 0-85-35t-35-85q0-50 35-85t85-35q24 0 45 8.5t37 23.5l281-164q-2-7-2.5-13.5T560-760q0-50 35-85t85-35q50 0 85 35t35 85q0 50-35 85t-85 35q-24 0-45-8.5T598-672L317-508q2 7 2.5 13.5t.5 14.5q0 8-.5 14.5T317-452l281 164q16-15 37-23.5t45-8.5q50 0 85 35t35 85q0 50-35 85t-85 35Zm0-80q17 0 28.5-11.5T720-200q0-17-11.5-28.5T680-240q-17 0-28.5 11.5T640-200q0 17 11.5 28.5T680-160ZM200-440q17 0 28.5-11.5T240-480q0-17-11.5-28.5T200-520q-17 0-28.5 11.5T160-480q0 17 11.5 28.5T200-440Zm480-280q17 0 28.5-11.5T720-760q0-17-11.5-28.5T680-800q-17 0-28.5 11.5T640-760q0 17 11.5 28.5T680-720Zm0 520ZM200-480Zm480-280Z" />
              </svg>
            </a>

            <script>
              document.addEventListener('DOMContentLoaded', function() {
                // Selecionar o link
                var copyPostLink = document.getElementById('copyPostLink');

                // Adicionar um ouvinte de evento de clique ao link
                copyPostLink.addEventListener('click', function(event) {
                  // Prevenir o comportamento padrão do link
                  event.preventDefault();

                  // Obter o URL do post atual no WordPress
                  var postLink = "<?php echo get_permalink(); ?>";

                  // Criar um elemento de entrada para copiar o texto
                  var input = document.createElement('input');
                  input.style.position = 'fixed';
                  input.style.opacity = 0;
                  input.value = postLink;

                  // Adicionar o elemento de entrada à página
                  document.body.appendChild(input);

                  // Selecionar o texto no elemento de entrada
                  input.select();

                  // Copiar o texto selecionado para a área de transferência
                  document.execCommand('copy');

                  // Remover o elemento de entrada da página
                  document.body.removeChild(input);

                  // Alerta ou feedback de que o link foi copiado
                  alert('Link do post copiado para a área de transferência: ' + postLink);
                });
              });
            </script>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--  -->
  <div class="post-content">
    <article class="post-principal article-content">
      <?php the_content(); ?>
    </article>
  </div>
  <!--  -->

</div>
<!--  -->
<script>
  document.addEventListener("DOMContentLoaded", function() {
    // Seleciona o conteúdo do post principal
    var postContent = document.querySelector('.article-content');

    if (postContent) {
      // Seleciona o aside onde serão inseridos os links
      var asideNav = document.querySelector('.aside-nav-links ul');

      // Seleciona todos os títulos h2 dentro do post principal
      var headings = postContent.querySelectorAll('h2');

      // Itera sobre os títulos h2 encontrados
      headings.forEach(function(heading, index) {
        // Cria um novo item de lista <li>
        var listItem = document.createElement('li');

        // Cria um novo link <a>
        var link = document.createElement('a');
        link.textContent = heading.textContent; // Define o texto do link como o texto do título h2
        link.setAttribute('href', '#heading-' + index); // Define o href do link como um identificador único

        // Adiciona um identificador único ao título h2
        heading.setAttribute('id', 'heading-' + index);

        // Adiciona um evento de clique ao link
        link.addEventListener('click', function(event) {
          event.preventDefault(); // Impede o comportamento padrão do link

          // Obtém a posição do título h2 na página
          var targetPosition = heading.offsetTop;

          // Rola suavemente a página até a posição do título h2
          window.scrollTo({
            top: targetPosition,
            behavior: 'smooth' // Adiciona animação de rolagem suave
          });

          // Remove a classe 'active' de todos os itens de lista
          var allListItems = document.querySelectorAll('.aside-nav-links ul li');
          allListItems.forEach(function(item) {
            item.style.color = ''; // Remove a cor definida anteriormente
          });

          // Altera a cor do marcador (bolinha) para o link clicado
          listItem.style.color = '#073b3e'; // Define a cor desejada para a bolinha/marcador
        });

        // Adiciona o link ao item da lista
        listItem.appendChild(link);

        // Adiciona o item da lista ao aside de navegação
        asideNav.appendChild(listItem);
      });
    }
  });
</script>
<?php get_footer(); ?>