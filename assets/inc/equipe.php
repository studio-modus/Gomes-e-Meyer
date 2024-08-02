<?php
$equipe = get_field('equipe');
if ($equipe) :
?>
  <div class="secao">
    <section class="time container p-80">
      <div class="time-txt">
        <h2>
          <?php echo $equipe['titulo']; ?>
        </h2>
      </div>
      <ul class="time-cards grid-3">
        <li class="time-card">
          <!-- bg image nesse time card -->
          <img src="<?php echo $equipe['img1']; ?>" alt="" srcset="" class="img-equipe">
          <div class="time-card-info bd-sm">
            <div class="redes-sociais">
              <a href=" <?php echo $equipe['link1-1']; ?>" class="">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5 0C2.243 0 0 2.243 0 5V13C0 15.757 2.243 18 5 18H13C15.757 18 18 15.757 18 13V5C18 2.243 15.757 0 13 0H5ZM5 2H13C14.654 2 16 3.346 16 5V13C16 14.654 14.654 16 13 16H5C3.346 16 2 14.654 2 13V5C2 3.346 3.346 2 5 2ZM14 3C13.7348 3 13.4804 3.10536 13.2929 3.29289C13.1054 3.48043 13 3.73478 13 4C13 4.26522 13.1054 4.51957 13.2929 4.70711C13.4804 4.89464 13.7348 5 14 5C14.2652 5 14.5196 4.89464 14.7071 4.70711C14.8946 4.51957 15 4.26522 15 4C15 3.73478 14.8946 3.48043 14.7071 3.29289C14.5196 3.10536 14.2652 3 14 3ZM9 4C6.243 4 4 6.243 4 9C4 11.757 6.243 14 9 14C11.757 14 14 11.757 14 9C14 6.243 11.757 4 9 4ZM9 6C10.654 6 12 7.346 12 9C12 10.654 10.654 12 9 12C7.346 12 6 10.654 6 9C6 7.346 7.346 6 9 6Z" fill="#212421" />
                </svg>

              </a>
              <a href=" <?php echo $equipe['link1-2']; ?>" class="">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2 0C0.895 0 0 0.895 0 2V16C0 17.105 0.895 18 2 18H16C17.105 18 18 17.105 18 16V2C18 0.895 17.105 0 16 0H2ZM2 2H16V16H2V2ZM4.7793 3.31641C3.9223 3.31641 3.4082 3.83158 3.4082 4.51758C3.4082 5.20358 3.92236 5.7168 4.69336 5.7168C5.55036 5.7168 6.06445 5.20358 6.06445 4.51758C6.06445 3.83158 5.5503 3.31641 4.7793 3.31641ZM3.47656 7V14H6V7H3.47656ZM8.08203 7V14H10.6055V10.1738C10.6055 9.03483 11.4181 8.87109 11.6621 8.87109C11.9061 8.87109 12.5586 9.11583 12.5586 10.1738V14H15V10.1738C15 7.97683 14.0237 7 12.8027 7C11.5817 7 10.9305 7.40656 10.6055 7.97656V7H8.08203Z" fill="#212421" />
                </svg>

              </a>
              <a href=" <?php echo $equipe['link1-3']; ?>" class="">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M20 10C20 4.48 15.52 0 10 0C4.48 0 0 4.48 0 10C0 14.84 3.44 18.87 8 19.8V13H6V10H8V7.5C8 5.57 9.57 4 11.5 4H14V7H12C11.45 7 11 7.45 11 8V10H14V13H11V19.95C16.05 19.45 20 15.19 20 10Z" fill="#212421" />
                </svg>

              </a>
              <a href=" <?php echo $equipe['link1-4']; ?>" class="">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M17.05 2.91C15.18 1.03 12.69 0 10.04 0C4.58005 0 0.130049 4.45 0.130049 9.91C0.130049 11.66 0.590049 13.36 1.45005 14.86L0.0500488 20L5.30005 18.62C6.75005 19.41 8.38005 19.83 10.04 19.83C15.5 19.83 19.9501 15.38 19.9501 9.92C19.9501 7.27 18.92 4.78 17.05 2.91ZM10.04 18.15C8.56005 18.15 7.11005 17.75 5.84005 17L5.54005 16.82L2.42005 17.64L3.25005 14.6L3.05005 14.29C2.23005 12.98 1.79005 11.46 1.79005 9.91C1.79005 5.37 5.49005 1.67 10.03 1.67C12.23 1.67 14.3 2.53 15.85 4.09C17.41 5.65 18.26 7.72 18.26 9.92C18.2801 14.46 14.58 18.15 10.04 18.15ZM14.56 11.99C14.31 11.87 13.09 11.27 12.87 11.18C12.64 11.1 12.48 11.06 12.31 11.3C12.14 11.55 11.67 12.11 11.53 12.27C11.39 12.44 11.24 12.46 10.99 12.33C10.74 12.21 9.94005 11.94 9.00005 11.1C8.26005 10.44 7.77005 9.63 7.62005 9.38C7.48005 9.13 7.60005 9 7.73005 8.87C7.84005 8.76 7.98005 8.58 8.10005 8.44C8.22005 8.3 8.27005 8.19 8.35005 8.03C8.43005 7.86 8.39005 7.72 8.33005 7.6C8.27005 7.48 7.77005 6.26 7.57005 5.76C7.37005 5.28 7.16005 5.34 7.01005 5.33C6.86005 5.33 6.70005 5.33 6.53005 5.33C6.36005 5.33 6.10005 5.39 5.87005 5.64C5.65005 5.89 5.01005 6.49 5.01005 7.71C5.01005 8.93 5.90005 10.11 6.02005 10.27C6.14005 10.44 7.77005 12.94 10.25 14.01C10.84 14.27 11.3 14.42 11.66 14.53C12.25 14.72 12.79 14.69 13.22 14.63C13.7 14.56 14.69 14.03 14.89 13.45C15.1 12.87 15.1 12.38 15.03 12.27C14.96 12.16 14.81 12.11 14.56 11.99Z" fill="#212421" />
                </svg>

              </a>
            </div>
            <!--  -->
            <hr>
            <div class="time-card-info-txt">
              <h3>
                <?php echo $equipe['nome1']; ?>
              </h3>
              <h4>
                <?php echo $equipe['profissao1']; ?>
              </h4>
            </div>
          </div>
        </li>
        <!-- card 2 -->
        <li class="time-card">
          <!-- bg image nesse time card -->
          <img src="<?php echo $equipe['img2']; ?>" alt="" srcset="" class="img-equipe">
          <div class="time-card-info bd-sm">
            <div class="redes-sociais">
              <a href="<?php echo $equipe['link2-1']; ?>" class="">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5 0C2.243 0 0 2.243 0 5V13C0 15.757 2.243 18 5 18H13C15.757 18 18 15.757 18 13V5C18 2.243 15.757 0 13 0H5ZM5 2H13C14.654 2 16 3.346 16 5V13C16 14.654 14.654 16 13 16H5C3.346 16 2 14.654 2 13V5C2 3.346 3.346 2 5 2ZM14 3C13.7348 3 13.4804 3.10536 13.2929 3.29289C13.1054 3.48043 13 3.73478 13 4C13 4.26522 13.1054 4.51957 13.2929 4.70711C13.4804 4.89464 13.7348 5 14 5C14.2652 5 14.5196 4.89464 14.7071 4.70711C14.8946 4.51957 15 4.26522 15 4C15 3.73478 14.8946 3.48043 14.7071 3.29289C14.5196 3.10536 14.2652 3 14 3ZM9 4C6.243 4 4 6.243 4 9C4 11.757 6.243 14 9 14C11.757 14 14 11.757 14 9C14 6.243 11.757 4 9 4ZM9 6C10.654 6 12 7.346 12 9C12 10.654 10.654 12 9 12C7.346 12 6 10.654 6 9C6 7.346 7.346 6 9 6Z" fill="#212421" />
                </svg>

              </a>
              <a href="<?php echo $equipe['link2-2']; ?>" class="">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2 0C0.895 0 0 0.895 0 2V16C0 17.105 0.895 18 2 18H16C17.105 18 18 17.105 18 16V2C18 0.895 17.105 0 16 0H2ZM2 2H16V16H2V2ZM4.7793 3.31641C3.9223 3.31641 3.4082 3.83158 3.4082 4.51758C3.4082 5.20358 3.92236 5.7168 4.69336 5.7168C5.55036 5.7168 6.06445 5.20358 6.06445 4.51758C6.06445 3.83158 5.5503 3.31641 4.7793 3.31641ZM3.47656 7V14H6V7H3.47656ZM8.08203 7V14H10.6055V10.1738C10.6055 9.03483 11.4181 8.87109 11.6621 8.87109C11.9061 8.87109 12.5586 9.11583 12.5586 10.1738V14H15V10.1738C15 7.97683 14.0237 7 12.8027 7C11.5817 7 10.9305 7.40656 10.6055 7.97656V7H8.08203Z" fill="#212421" />
                </svg>

              </a>
              <a href="<?php echo $equipe['link2-3']; ?>" class="">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M20 10C20 4.48 15.52 0 10 0C4.48 0 0 4.48 0 10C0 14.84 3.44 18.87 8 19.8V13H6V10H8V7.5C8 5.57 9.57 4 11.5 4H14V7H12C11.45 7 11 7.45 11 8V10H14V13H11V19.95C16.05 19.45 20 15.19 20 10Z" fill="#212421" />
                </svg>

              </a>
              <a href="<?php echo $equipe['link2-4']; ?>" class="">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M17.05 2.91C15.18 1.03 12.69 0 10.04 0C4.58005 0 0.130049 4.45 0.130049 9.91C0.130049 11.66 0.590049 13.36 1.45005 14.86L0.0500488 20L5.30005 18.62C6.75005 19.41 8.38005 19.83 10.04 19.83C15.5 19.83 19.9501 15.38 19.9501 9.92C19.9501 7.27 18.92 4.78 17.05 2.91ZM10.04 18.15C8.56005 18.15 7.11005 17.75 5.84005 17L5.54005 16.82L2.42005 17.64L3.25005 14.6L3.05005 14.29C2.23005 12.98 1.79005 11.46 1.79005 9.91C1.79005 5.37 5.49005 1.67 10.03 1.67C12.23 1.67 14.3 2.53 15.85 4.09C17.41 5.65 18.26 7.72 18.26 9.92C18.2801 14.46 14.58 18.15 10.04 18.15ZM14.56 11.99C14.31 11.87 13.09 11.27 12.87 11.18C12.64 11.1 12.48 11.06 12.31 11.3C12.14 11.55 11.67 12.11 11.53 12.27C11.39 12.44 11.24 12.46 10.99 12.33C10.74 12.21 9.94005 11.94 9.00005 11.1C8.26005 10.44 7.77005 9.63 7.62005 9.38C7.48005 9.13 7.60005 9 7.73005 8.87C7.84005 8.76 7.98005 8.58 8.10005 8.44C8.22005 8.3 8.27005 8.19 8.35005 8.03C8.43005 7.86 8.39005 7.72 8.33005 7.6C8.27005 7.48 7.77005 6.26 7.57005 5.76C7.37005 5.28 7.16005 5.34 7.01005 5.33C6.86005 5.33 6.70005 5.33 6.53005 5.33C6.36005 5.33 6.10005 5.39 5.87005 5.64C5.65005 5.89 5.01005 6.49 5.01005 7.71C5.01005 8.93 5.90005 10.11 6.02005 10.27C6.14005 10.44 7.77005 12.94 10.25 14.01C10.84 14.27 11.3 14.42 11.66 14.53C12.25 14.72 12.79 14.69 13.22 14.63C13.7 14.56 14.69 14.03 14.89 13.45C15.1 12.87 15.1 12.38 15.03 12.27C14.96 12.16 14.81 12.11 14.56 11.99Z" fill="#212421" />
                </svg>

              </a>
            </div>
            <!--  -->
            <hr>
            <div class="time-card-info-txt">
              <h3>
                <?php echo $equipe['nome2']; ?>
              </h3>
              <h4>
                <?php echo $equipe['profissao2']; ?>
              </h4>
            </div>
          </div>
        </li>
        <!-- card 2 -->
        <li class="time-card">
          <!-- bg image nesse time card -->
          <img src="<?php echo $equipe['img3']; ?>" alt="" srcset="" class="img-equipe">
          <div class="time-card-info bd-sm">
            <div class="redes-sociais">
              <a href="<?php echo $equipe['link3-1']; ?>" class="">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5 0C2.243 0 0 2.243 0 5V13C0 15.757 2.243 18 5 18H13C15.757 18 18 15.757 18 13V5C18 2.243 15.757 0 13 0H5ZM5 2H13C14.654 2 16 3.346 16 5V13C16 14.654 14.654 16 13 16H5C3.346 16 2 14.654 2 13V5C2 3.346 3.346 2 5 2ZM14 3C13.7348 3 13.4804 3.10536 13.2929 3.29289C13.1054 3.48043 13 3.73478 13 4C13 4.26522 13.1054 4.51957 13.2929 4.70711C13.4804 4.89464 13.7348 5 14 5C14.2652 5 14.5196 4.89464 14.7071 4.70711C14.8946 4.51957 15 4.26522 15 4C15 3.73478 14.8946 3.48043 14.7071 3.29289C14.5196 3.10536 14.2652 3 14 3ZM9 4C6.243 4 4 6.243 4 9C4 11.757 6.243 14 9 14C11.757 14 14 11.757 14 9C14 6.243 11.757 4 9 4ZM9 6C10.654 6 12 7.346 12 9C12 10.654 10.654 12 9 12C7.346 12 6 10.654 6 9C6 7.346 7.346 6 9 6Z" fill="#212421" />
                </svg>

              </a>
              <a href="<?php echo $equipe['link3-2']; ?>" class="">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2 0C0.895 0 0 0.895 0 2V16C0 17.105 0.895 18 2 18H16C17.105 18 18 17.105 18 16V2C18 0.895 17.105 0 16 0H2ZM2 2H16V16H2V2ZM4.7793 3.31641C3.9223 3.31641 3.4082 3.83158 3.4082 4.51758C3.4082 5.20358 3.92236 5.7168 4.69336 5.7168C5.55036 5.7168 6.06445 5.20358 6.06445 4.51758C6.06445 3.83158 5.5503 3.31641 4.7793 3.31641ZM3.47656 7V14H6V7H3.47656ZM8.08203 7V14H10.6055V10.1738C10.6055 9.03483 11.4181 8.87109 11.6621 8.87109C11.9061 8.87109 12.5586 9.11583 12.5586 10.1738V14H15V10.1738C15 7.97683 14.0237 7 12.8027 7C11.5817 7 10.9305 7.40656 10.6055 7.97656V7H8.08203Z" fill="#212421" />
                </svg>

              </a>
              <a href="<?php echo $equipe['link3-3']; ?>" class="">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M20 10C20 4.48 15.52 0 10 0C4.48 0 0 4.48 0 10C0 14.84 3.44 18.87 8 19.8V13H6V10H8V7.5C8 5.57 9.57 4 11.5 4H14V7H12C11.45 7 11 7.45 11 8V10H14V13H11V19.95C16.05 19.45 20 15.19 20 10Z" fill="#212421" />
                </svg>

              </a>
              <a href="<?php echo $equipe['link3-4']; ?>" class="">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M17.05 2.91C15.18 1.03 12.69 0 10.04 0C4.58005 0 0.130049 4.45 0.130049 9.91C0.130049 11.66 0.590049 13.36 1.45005 14.86L0.0500488 20L5.30005 18.62C6.75005 19.41 8.38005 19.83 10.04 19.83C15.5 19.83 19.9501 15.38 19.9501 9.92C19.9501 7.27 18.92 4.78 17.05 2.91ZM10.04 18.15C8.56005 18.15 7.11005 17.75 5.84005 17L5.54005 16.82L2.42005 17.64L3.25005 14.6L3.05005 14.29C2.23005 12.98 1.79005 11.46 1.79005 9.91C1.79005 5.37 5.49005 1.67 10.03 1.67C12.23 1.67 14.3 2.53 15.85 4.09C17.41 5.65 18.26 7.72 18.26 9.92C18.2801 14.46 14.58 18.15 10.04 18.15ZM14.56 11.99C14.31 11.87 13.09 11.27 12.87 11.18C12.64 11.1 12.48 11.06 12.31 11.3C12.14 11.55 11.67 12.11 11.53 12.27C11.39 12.44 11.24 12.46 10.99 12.33C10.74 12.21 9.94005 11.94 9.00005 11.1C8.26005 10.44 7.77005 9.63 7.62005 9.38C7.48005 9.13 7.60005 9 7.73005 8.87C7.84005 8.76 7.98005 8.58 8.10005 8.44C8.22005 8.3 8.27005 8.19 8.35005 8.03C8.43005 7.86 8.39005 7.72 8.33005 7.6C8.27005 7.48 7.77005 6.26 7.57005 5.76C7.37005 5.28 7.16005 5.34 7.01005 5.33C6.86005 5.33 6.70005 5.33 6.53005 5.33C6.36005 5.33 6.10005 5.39 5.87005 5.64C5.65005 5.89 5.01005 6.49 5.01005 7.71C5.01005 8.93 5.90005 10.11 6.02005 10.27C6.14005 10.44 7.77005 12.94 10.25 14.01C10.84 14.27 11.3 14.42 11.66 14.53C12.25 14.72 12.79 14.69 13.22 14.63C13.7 14.56 14.69 14.03 14.89 13.45C15.1 12.87 15.1 12.38 15.03 12.27C14.96 12.16 14.81 12.11 14.56 11.99Z" fill="#212421" />
                </svg>

              </a>
            </div>
            <!--  -->
            <hr>
            <div class="time-card-info-txt">
              <h3>
                <?php echo $equipe['nome3']; ?>
              </h3>
              <h4>
                <?php echo $equipe['profissao3']; ?>
              </h4>
            </div>
          </div>
        </li>
        <!-- card 3 -->
      </ul>
      <div class="btn">
        <a href="<?php echo $equipe['link_btn']; ?>" class="btn-pri bd-sm gotham bold">
          <?php echo $equipe['txt_btn']; ?>
        </a>
      </div>
    </section>
  </div>
<?php endif; ?>
