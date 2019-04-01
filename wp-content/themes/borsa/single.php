<?php
get_header();
?>
<main>
      <section class="product-page-product-wrapper">
        <div class="container">
          <p class="breadcrambs">
            <?php
            the_breadcrumb();
            ?>
          </p>
          <h1 class="breadcrambs-h1"><?PHP echo get_the_title();?></h1>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="product-description-wrapper">
            <div class="slider-wrapper">
              <div class="slick-product-slider">
              <?PHP 
              $data = carbon_get_post_meta( $post->ID, 'prod_main_slider_complex' );
              foreach ($data as $value) {
                // echo $value['prod_main_slider'];
                // echo wp_get_attachment_image_url($value['prod_main_slider'], large);
                ?>
                <div class="slide" style="background-image: url('<?PHP echo wp_get_attachment_image_url($value['prod_main_slider'], 'large'); ?>')"></div>
                <?PHP
              }
              ?>
              </div>
              <div class="slick-btns-wrapper"></div>
            </div>
            <div class="info-wrapper">
              <h3>Основные варианты исполнения:</h3>
              <ul id="types">
              <?PHP 
              $data = carbon_get_post_meta( $post->ID, 'prod_main_slider_complex' );
              $num = 0;
              foreach ($data as $key => $value) {
                ?>
                <li class="<?PHP echo (($key == 0) ? 'active' : ''); ?>"><?PHP echo $value['prod_main_slide_name']; ?></li>
                <?PHP
              }
              ?>
              </ul>
              <div class="pc-desc-wrapper">
                <h3>Описание продукта:</h3>
                <div class="producr-description">
                <?php the_content(); ?>
                </div>
                <div class="give-info-wrapper"><svg width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0)">
                      <path d="M11.7512 0C5.76008 0 0.902344 5.37295 0.902344 11.9995C0.902344 18.626 5.76008 24 11.7512 24C17.7423 24 22.601 18.626 22.601 11.9995C22.601 5.37295 17.7423 0 11.7512 0ZM14.0097 18.5976C13.4513 18.8414 13.0067 19.0263 12.6733 19.1543C12.3409 19.2823 11.9542 19.3463 11.5142 19.3463C10.8383 19.3463 10.312 19.1634 9.93724 18.7987C9.56251 18.434 9.37606 17.9718 9.37606 17.41C9.37606 17.1916 9.38984 16.9681 9.41739 16.7406C9.44586 16.513 9.49087 16.257 9.55241 15.9695L10.2514 13.2389C10.3129 12.9768 10.3662 12.7279 10.4084 12.4963C10.4507 12.2626 10.4709 12.0483 10.4709 11.8532C10.4709 11.5058 10.4057 11.262 10.2762 11.1248C10.1448 10.9877 9.89775 10.9206 9.52944 10.9206C9.34943 10.9206 9.1639 10.9501 8.97378 11.0121C8.78549 11.0761 8.622 11.134 8.48791 11.1909L8.67252 10.3497C9.12991 10.1435 9.56802 9.96673 9.98592 9.82045C10.4038 9.67213 10.7988 9.59898 11.1707 9.59898C11.8421 9.59898 12.3601 9.77981 12.7248 10.1374C13.0876 10.496 13.2703 10.9623 13.2703 11.5352C13.2703 11.6541 13.2575 11.8634 13.2327 12.162C13.2079 12.4617 13.161 12.735 13.0931 12.9859L12.3978 15.7084C12.3409 15.9269 12.2903 16.1768 12.2444 16.4561C12.1994 16.7355 12.1774 16.9488 12.1774 17.0921C12.1774 17.4537 12.2499 17.7006 12.3969 17.8316C12.542 17.9627 12.7964 18.0287 13.1564 18.0287C13.3264 18.0287 13.5165 17.9952 13.7314 17.9302C13.9445 17.8651 14.0988 17.8072 14.1961 17.7575L14.0097 18.5976ZM13.8866 7.54692C13.5624 7.88013 13.1721 8.04673 12.7156 8.04673C12.26 8.04673 11.8669 7.88013 11.54 7.54692C11.2148 7.21371 11.0504 6.80838 11.0504 6.33498C11.0504 5.8626 11.2157 5.45625 11.54 5.12C11.8669 4.78273 12.26 4.61511 12.7156 4.61511C13.1721 4.61511 13.5633 4.78273 13.8866 5.12C14.2108 5.45625 14.3734 5.8626 14.3734 6.33498C14.3734 6.8094 14.2108 7.21371 13.8866 7.54692Z" fill="black" />
                    </g>
                    <defs>
                      <clipPath id="clip0">
                        <rect width="21.6986" height="24" fill="white" transform="translate(0.902344)" />
                      </clipPath>
                    </defs>
                  </svg>
                  <p><?PHP echo carbon_get_the_post_meta('prod_info'); ?></p>
                </div>
              </div>
            </div>
          </div>
          <div class="mobile-desc-wrapper">
            <h3>Описание продукта:</h3>
            <div class="producr-description">
            <?php the_content(); ?>
            </div>
            <div class="give-info-wrapper"><svg width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0)">
                  <path d="M11.7512 0C5.76008 0 0.902344 5.37295 0.902344 11.9995C0.902344 18.626 5.76008 24 11.7512 24C17.7423 24 22.601 18.626 22.601 11.9995C22.601 5.37295 17.7423 0 11.7512 0ZM14.0097 18.5976C13.4513 18.8414 13.0067 19.0263 12.6733 19.1543C12.3409 19.2823 11.9542 19.3463 11.5142 19.3463C10.8383 19.3463 10.312 19.1634 9.93724 18.7987C9.56251 18.434 9.37606 17.9718 9.37606 17.41C9.37606 17.1916 9.38984 16.9681 9.41739 16.7406C9.44586 16.513 9.49087 16.257 9.55241 15.9695L10.2514 13.2389C10.3129 12.9768 10.3662 12.7279 10.4084 12.4963C10.4507 12.2626 10.4709 12.0483 10.4709 11.8532C10.4709 11.5058 10.4057 11.262 10.2762 11.1248C10.1448 10.9877 9.89775 10.9206 9.52944 10.9206C9.34943 10.9206 9.1639 10.9501 8.97378 11.0121C8.78549 11.0761 8.622 11.134 8.48791 11.1909L8.67252 10.3497C9.12991 10.1435 9.56802 9.96673 9.98592 9.82045C10.4038 9.67213 10.7988 9.59898 11.1707 9.59898C11.8421 9.59898 12.3601 9.77981 12.7248 10.1374C13.0876 10.496 13.2703 10.9623 13.2703 11.5352C13.2703 11.6541 13.2575 11.8634 13.2327 12.162C13.2079 12.4617 13.161 12.735 13.0931 12.9859L12.3978 15.7084C12.3409 15.9269 12.2903 16.1768 12.2444 16.4561C12.1994 16.7355 12.1774 16.9488 12.1774 17.0921C12.1774 17.4537 12.2499 17.7006 12.3969 17.8316C12.542 17.9627 12.7964 18.0287 13.1564 18.0287C13.3264 18.0287 13.5165 17.9952 13.7314 17.9302C13.9445 17.8651 14.0988 17.8072 14.1961 17.7575L14.0097 18.5976ZM13.8866 7.54692C13.5624 7.88013 13.1721 8.04673 12.7156 8.04673C12.26 8.04673 11.8669 7.88013 11.54 7.54692C11.2148 7.21371 11.0504 6.80838 11.0504 6.33498C11.0504 5.8626 11.2157 5.45625 11.54 5.12C11.8669 4.78273 12.26 4.61511 12.7156 4.61511C13.1721 4.61511 13.5633 4.78273 13.8866 5.12C14.2108 5.45625 14.3734 5.8626 14.3734 6.33498C14.3734 6.8094 14.2108 7.21371 13.8866 7.54692Z" fill="black" />
                </g>
                <defs>
                  <clipPath id="clip0">
                    <rect width="21.6986" height="24" fill="white" transform="translate(0.902344)" />
                  </clipPath>
                </defs>
              </svg>
              <p><?PHP echo carbon_get_the_post_meta('prod_info'); ?></p>
            </div>
          </div>
        </div>
        <div class="container">
          <hr>
        </div>
      </section>
      <section class="product-page-containers-wrapper">
        <div class="container">
          <h3 class="h3">Характеристики контейнеров:</h3>
          <div class="table-block">
            <div class="table-wrapper">
            <?PHP echo carbon_get_the_post_meta('prod_table_cont'); ?>
            </div>
          </div>
        </div>
      </section>
      <section class="product-page-price-wrapper">
        <div class="container">
          <h3 class="h3">Стоимость зависит от:</h3>
          <div class="price-types-wrapper">
            <div class="price-type">
              <div class="num">01</div>
              <p>Плотности материала, количества слоев ткани;</p>
            </div>
            <div class="price-type">
              <div class="num">02</div>
              <p>Объёма партии поставляемой продукции;</p>
            </div>
            <div class="price-type">
              <div class="num">03</div>
              <p>Размера МКР поставляемой продукции;</p>
            </div>
            <div class="price-type">
              <div class="num">04</div>
              <p>Конструкции мягкого контейнера;</p>
            </div>
            <div class="price-type">
              <div class="num">05</div>
              <p>Индивидуальных требований заказчика.</p>
            </div>
          </div>
        </div>
      </section>
      <section class="product-page-advantages-wrapper">
        <div class="container">
          <h3 class="h3">Каждому клиенту дополнительно предлагаем:</h3>
          <div class="advantages">
            <div class="advantage">
              <div class="advantage__img" style="background-image:url('img/advantages/pallet.svg')"></div>
              <div class="advantage__header">1. Удобство транспортировки продукции</div>
              <div class="advantage__body">Контейнеры могут быть упакованы на европаллет, паллет наружного размера, пресс-кип</div>
            </div>
            <div class="advantage">
              <div class="advantage__img" style="background-image:url('img/advantages/flyers.svg')"></div>
              <div class="advantage__header">2. Нанесение печати на продукцию</div>
              <div class="advantage__body">Возможность печати логотипа, технической информации и особенности эксплуатации</div>
            </div>
            <div class="advantage">
              <div class="advantage__img" style="background-image:url('img/advantages/molecule.svg')"></div>
              <div class="advantage__header">3. Повышенная прочность продукции</div>
              <div class="advantage__body">Контейнер может быть изготовлен из ткани с улучшенными прочностными характеристиками для перевозки тяжёлых и острых грузов</div>
            </div>
          </div>
        </div>
      </section>
      <section class="run-slider-wrapper">
        <div class="container">
          <div class="link-wrapper"><a class="runSlider" href="#" title="title" data-slide="testslider1" style="background-image:url('img/slider/one.jpg')" id="runSlider">
              <div class="info-wrapper">
                <div class="num">1/4</div>
                <div class="more"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.3359 18.207L15.0352 13.9062C16.25 12.4336 16.9102 10.6016 16.9102 8.67188C16.9102 6.46875 16.0547 4.40234 14.4961 2.84375C12.9414 1.28516 10.8711 0.429688 8.67188 0.429688C6.47266 0.429688 4.40234 1.28516 2.84375 2.84375C1.28516 4.39844 0.429688 6.46875 0.429688 8.67188C0.429688 10.8711 1.28516 12.9414 2.84375 14.5C4.39844 16.0547 6.46875 16.9141 8.67188 16.9141C10.6055 16.9141 12.4375 16.2539 13.9062 15.0391L18.207 19.3359C18.5195 19.6484 19.0234 19.6484 19.3359 19.3359C19.6484 19.0234 19.6484 18.5195 19.3359 18.207ZM3.97266 13.3672C2.71484 12.1133 2.02344 10.4453 2.02344 8.67188C2.02344 6.89844 2.71484 5.22656 3.96875 3.97266C5.22266 2.71875 6.89062 2.02734 8.66797 2.02734C10.4414 2.02734 12.1133 2.71875 13.3672 3.97266C14.6211 5.22656 15.3125 6.89453 15.3125 8.67188C15.3125 10.4453 14.6211 12.1172 13.3672 13.3711C12.1133 14.625 10.4414 15.3164 8.66797 15.3164C6.89453 15.3164 5.22656 14.625 3.97266 13.3672Z" fill="#3ECC29" /></svg></div>
              </div>
            </a>
            <p><?PHP echo carbon_get_the_post_meta('prod_slider_text'); ?></p>
          </div>
        </div>
      </section>
      <!--START Popup slider-->
      <div class="hidden-slider-popup dnone" id="testslider1">
        <div class="container"><img class="close-popup" src="img/close.svg" alt="close" id="closePopup">
          <div class="hidden-slider-wrapper">
            <div class="slick-popup-slider" id="slick">
              <div class="slide" style="background-image: url('img/slider/one.jpg')"></div>
              <div class="slide" style="background-image: url('img/slider/one.jpg')"></div>
              <div class="slide" style="background-image: url('img/slider/one.jpg')"></div>
              <div class="slide" style="background-image: url('img/slider/one.jpg')"></div>
              <div class="slide" style="background-image: url('img/slider/one.jpg')"></div>
            </div>
            <div class="hidden-slick-btns-wrapper"></div>
          </div>
          <div class="hidden-info-wrapper">
            <p><?PHP echo carbon_get_the_post_meta('prod_slider_text'); ?></p>
            <div class="num"><span id="thisSlideNum">1</span><span>/</span><span id="sliders">39</span></div>
          </div>
        </div>
      </div>
      <!--END Popup slider-->
      <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>
      <section class="product-page-more-wrapper">
        <div class="container">
          <h3 class="h3">Вас могут заинтересовать</h3>
          <div class="products-wrapper"><a class="product-item" href="#" title="product"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="15" cy="15" r="15" fill="#3ECC29" />
                <path d="M22.9471 14.6694H15.3306V7H14.6694V14.6694H7V15.3306H14.6694V23H15.3306V15.3306H23V14.6694H22.9471Z" fill="white" /></svg>
              <div class="product-item__header">Строповые мягкие контейнеры</div>
              <div class="product-item__image" style="background-image:url(&quot;img/products/preview/1.jpg&quot;)"></div>
            </a><a class="product-item" href="#" title="product"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="15" cy="15" r="15" fill="#3ECC29" />
                <path d="M22.9471 14.6694H15.3306V7H14.6694V14.6694H7V15.3306H14.6694V23H15.3306V15.3306H23V14.6694H22.9471Z" fill="white" /></svg>
              <div class="product-item__header">Ленточные мягкие контейнеры</div>
              <div class="product-item__image" style="background-image:url(&quot;img/products/preview/2.jpg&quot;)"></div>
            </a><a class="product-item" href="#" title="product"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="15" cy="15" r="15" fill="#3ECC29" />
                <path d="M22.9471 14.6694H15.3306V7H14.6694V14.6694H7V15.3306H14.6694V23H15.3306V15.3306H23V14.6694H22.9471Z" fill="white" /></svg>
              <div class="product-item__header">Вентиляционные мягкие контейнеры (овощные)</div>
              <div class="product-item__image" style="background-image:url(&quot;img/products/preview/3.jpg&quot;)"></div>
            </a><a class="product-item" href="#" title="product"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="15" cy="15" r="15" fill="#3ECC29" />
                <path d="M22.9471 14.6694H15.3306V7H14.6694V14.6694H7V15.3306H14.6694V23H15.3306V15.3306H23V14.6694H22.9471Z" fill="white" /></svg>
              <div class="product-item__header">Вагонный вкладыш</div>
              <div class="product-item__image" style="background-image:url(&quot;img/products/preview/4.jpg&quot;)"></div>
            </a></div>
        </div>
      </section>
    </main>

<?php
get_footer();
