document.addEventListener('DOMContentLoaded', function() {
  // Encontra todos os títulos h2 dentro do conteúdo do post
  var headings = document.querySelectorAll('.post-principal h2');

  // Verifica se existem títulos h2 no post
  if (headings.length > 0) {
      // Cria uma lista de navegação
      var navList = document.createElement('ul');

      // Itera sobre os títulos h2 encontrados
      headings.forEach(function(heading, index) {
          var headingId = 'heading-' + index;
          var headingText = heading.textContent;

          // Adiciona um ID único ao título h2
          heading.setAttribute('id', headingId);

          // Cria um link na lista de navegação para cada título h2
          var listItem = document.createElement('li');
          var link = document.createElement('a');
          link.setAttribute('href', '#' + headingId);
          link.textContent = headingText;
          listItem.appendChild(link);
          navList.appendChild(listItem);
      });

      // Insere a lista de navegação dentro da div.post-topicos
      var topicNavContainer = document.querySelector('.post-topicos ul');
      topicNavContainer.appendChild(navList);
  }
});

//



// function toggleMenu() {

//   var menu = document.getElementById('menu-menu-principal');
//   if (menu.style.display === 'none') {
//       menu.style.display = 'block';
//   } else {
//       menu.style.display = 'none';
//   }

//   document.getElementById("menu-bar").classList.toggle("change");

// }



// btnMobile.addEventListener('click', toggleMenu);
// btnMobile.addEventListener('touchstart', toggleMenu);
//
function toggleMenu() {
  var menu = document.getElementById('menu-menu-principal');
  var menuBar = document.getElementById("menu-bar");

  if (menu.classList.contains('open')) {
      menu.classList.remove('open');
      menuBar.classList.remove('change');
  } else {
      menu.classList.add('open');
      menuBar.classList.add('change');


  }

}






