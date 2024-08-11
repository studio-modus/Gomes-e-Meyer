
<?php
$area = get_field('area');
if ($area) :
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
