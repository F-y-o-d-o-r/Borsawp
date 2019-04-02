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
                <div class="give-info-wrapper">
                  <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.9018 0C6.2753 0 0.902344 5.37295 0.902344 11.9995C0.902344 18.626 6.2753 24 12.9018 24C19.5284 24 24.9023 18.626 24.9023 11.9995C24.9023 5.37295 19.5284 0 12.9018 0ZM15.3999 18.5976C14.7822 18.8414 14.2905 19.0263 13.9218 19.1543C13.554 19.2823 13.1263 19.3463 12.6397 19.3463C11.8921 19.3463 11.31 19.1634 10.8955 18.7987C10.481 18.434 10.2748 17.9718 10.2748 17.41C10.2748 17.1916 10.29 16.9681 10.3205 16.7406C10.352 16.513 10.4018 16.257 10.4698 15.9695L11.2429 13.2389C11.311 12.9768 11.3699 12.7279 11.4166 12.4963C11.4634 12.2626 11.4857 12.0483 11.4857 11.8532C11.4857 11.5058 11.4136 11.262 11.2703 11.1248C11.1251 10.9877 10.8518 10.9206 10.4444 10.9206C10.2453 10.9206 10.0401 10.9501 9.82984 11.0121C9.62158 11.0761 9.44076 11.134 9.29244 11.1909L9.49663 10.3497C10.0025 10.1435 10.4871 9.96673 10.9493 9.82045C11.4116 9.67213 11.8484 9.59898 12.2598 9.59898C13.0024 9.59898 13.5754 9.77981 13.9787 10.1374C14.3799 10.496 14.5821 10.9623 14.5821 11.5352C14.5821 11.6541 14.5679 11.8634 14.5404 12.162C14.513 12.4617 14.4612 12.735 14.386 12.9859L13.617 15.7084C13.554 15.9269 13.4982 16.1768 13.4474 16.4561C13.3976 16.7355 13.3732 16.9488 13.3732 17.0921C13.3732 17.4537 13.4535 17.7006 13.616 17.8316C13.7765 17.9627 14.0579 18.0287 14.4561 18.0287C14.6441 18.0287 14.8543 17.9952 15.0921 17.9302C15.3277 17.8651 15.4984 17.8072 15.6061 17.7575L15.3999 18.5976ZM15.2637 7.54692C14.9051 7.88013 14.4734 8.04673 13.9685 8.04673C13.4646 8.04673 13.0298 7.88013 12.6682 7.54692C12.3086 7.21371 12.1267 6.80838 12.1267 6.33498C12.1267 5.8626 12.3096 5.45625 12.6682 5.12C13.0298 4.78273 13.4646 4.61511 13.9685 4.61511C14.4734 4.61511 14.9062 4.78273 15.2637 5.12C15.6223 5.45625 15.8022 5.8626 15.8022 6.33498C15.8022 6.8094 15.6223 7.21371 15.2637 7.54692Z" fill="black" /></svg>
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
            <div class="give-info-wrapper">
                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.9018 0C6.2753 0 0.902344 5.37295 0.902344 11.9995C0.902344 18.626 6.2753 24 12.9018 24C19.5284 24 24.9023 18.626 24.9023 11.9995C24.9023 5.37295 19.5284 0 12.9018 0ZM15.3999 18.5976C14.7822 18.8414 14.2905 19.0263 13.9218 19.1543C13.554 19.2823 13.1263 19.3463 12.6397 19.3463C11.8921 19.3463 11.31 19.1634 10.8955 18.7987C10.481 18.434 10.2748 17.9718 10.2748 17.41C10.2748 17.1916 10.29 16.9681 10.3205 16.7406C10.352 16.513 10.4018 16.257 10.4698 15.9695L11.2429 13.2389C11.311 12.9768 11.3699 12.7279 11.4166 12.4963C11.4634 12.2626 11.4857 12.0483 11.4857 11.8532C11.4857 11.5058 11.4136 11.262 11.2703 11.1248C11.1251 10.9877 10.8518 10.9206 10.4444 10.9206C10.2453 10.9206 10.0401 10.9501 9.82984 11.0121C9.62158 11.0761 9.44076 11.134 9.29244 11.1909L9.49663 10.3497C10.0025 10.1435 10.4871 9.96673 10.9493 9.82045C11.4116 9.67213 11.8484 9.59898 12.2598 9.59898C13.0024 9.59898 13.5754 9.77981 13.9787 10.1374C14.3799 10.496 14.5821 10.9623 14.5821 11.5352C14.5821 11.6541 14.5679 11.8634 14.5404 12.162C14.513 12.4617 14.4612 12.735 14.386 12.9859L13.617 15.7084C13.554 15.9269 13.4982 16.1768 13.4474 16.4561C13.3976 16.7355 13.3732 16.9488 13.3732 17.0921C13.3732 17.4537 13.4535 17.7006 13.616 17.8316C13.7765 17.9627 14.0579 18.0287 14.4561 18.0287C14.6441 18.0287 14.8543 17.9952 15.0921 17.9302C15.3277 17.8651 15.4984 17.8072 15.6061 17.7575L15.3999 18.5976ZM15.2637 7.54692C14.9051 7.88013 14.4734 8.04673 13.9685 8.04673C13.4646 8.04673 13.0298 7.88013 12.6682 7.54692C12.3086 7.21371 12.1267 6.80838 12.1267 6.33498C12.1267 5.8626 12.3096 5.45625 12.6682 5.12C13.0298 4.78273 13.4646 4.61511 13.9685 4.61511C14.4734 4.61511 14.9062 4.78273 15.2637 5.12C15.6223 5.45625 15.8022 5.8626 15.8022 6.33498C15.8022 6.8094 15.6223 7.21371 15.2637 7.54692Z" fill="black" /></svg>
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
              <div class="advantage__img" style="background-image:url('<?PHP bloginfo('template_url');?>/img/advantages/pallet.svg')"></div>
              <div class="advantage__header">1. Удобство транспортировки продукции</div>
              <div class="advantage__body">Контейнеры могут быть упакованы на европаллет, паллет наружного размера, пресс-кип</div>
            </div>
            <div class="advantage">
              <div class="advantage__img" style="background-image:url('<?PHP bloginfo('template_url');?>/img/advantages/flyers.svg')"></div>
              <div class="advantage__header">2. Нанесение печати на продукцию</div>
              <div class="advantage__body">Возможность печати логотипа, технической информации и особенности эксплуатации</div>
            </div>
            <div class="advantage">
              <div class="advantage__img" style="background-image:url('<?PHP bloginfo('template_url');?>/img/advantages/molecule.svg')"></div>
              <div class="advantage__header">3. Повышенная прочность продукции</div>
              <div class="advantage__body">Контейнер может быть изготовлен из ткани с улучшенными прочностными характеристиками для перевозки тяжёлых и острых грузов</div>
            </div>
          </div>
        </div>
      </section>
      <section class="run-slider-wrapper">
        <div class="container">
          <div class="link-wrapper"><a class="runSlider" href="#" title="title" data-slide="testslider1" style="background-image:url('<?PHP echo wp_get_attachment_image_url(carbon_get_the_post_meta('prod_photo'), 'large'); ?>')" id="runSlider">
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
        <div class="container"><img class="close-popup" src="<?PHP bloginfo('template_url');?>/img/close.svg" alt="close" id="closePopup">
          <div class="hidden-slider-wrapper">
            <div class="slick-popup-slider" id="slick">
            <?PHP
          foreach (carbon_get_the_post_meta('prod_hidden_gallery') as $key => $value) {
            ?>
              <div class="slide" style="background-image: url(<?PHP echo wp_get_attachment_image_url($value, 'large'); ?>)"></div>
            <?PHP
            }
            ?>
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
          <div class="products-wrapper">
            <?php
            $categories = get_categories( array(
              'taxonomy'     => 'category',
              'type'         => 'post',
              'child_of'     => 0,
              'parent'       => '',
              'orderby'      => 'name',
              'order'        => 'ASC',
              'hide_empty'   => 1,
              'hierarchical' => 1,
              'exclude'      => '',
              'include'      => '',
              'number'       => 0,
              'pad_counts'   => false,
              // полный список параметров смотрите в описании функции http://wp-kama.ru/function/get_terms
            ) );
            ?>
            <?PHP
          if( $categories ){
            shuffle($categories);
            $num = 0;
            foreach( $categories as $category ){
              if($num < 4) {
              // Получаем ID таксономии
              $term_id = $category->term_id;
              // получим ID картинки из метаполя термина
              $term_thumbnail_id = carbon_get_term_meta( $term_id, 'thumb');
              // ссылка на полный размер картинки по ID вложения
              $term_thumbnail_url = wp_get_attachment_image_url( $term_thumbnail_id, 'large' );
              ?>
              <a class="product-item" href="<?PHP echo get_category_link( $category->term_id ) ?>" title="<?PHP echo sprintf( __( "Вся продукция в категории в %s" ), $category->name ) ?>"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="15" cy="15" r="15" fill="#3ECC29" />
                  <path d="M22.9471 14.6694H15.3306V7H14.6694V14.6694H7V15.3306H14.6694V23H15.3306V15.3306H23V14.6694H22.9471Z" fill="white" /></svg>
                <div class="product-item__header"><?PHP echo $category->name ?></div>
                <div class="product-item__image" style="background-image:url('<?PHP echo $term_thumbnail_url; ?>')"></div>
              </a>
              <?PHP
              $num++;
              }
            }
          }
          ?>
            </div>
        </div>
      </section>
    </main>

<?php
get_footer();
