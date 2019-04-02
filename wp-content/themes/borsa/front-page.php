<?php
get_header();
?>
  <main>
      <!--slider start-->
      <section class="slider-wrapper">
        <div class="slick slick-main">
          <?php
            $posts = get_posts( array(
              'numberposts' => 0,
              'orderby'     => 'date',
              'order'       => 'DESC',
              'include'     => array(),
              'exclude'     => array(),
              'meta_key'    => '',
              'meta_value'  =>'',
              'post_type'   => 'slider',
              'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ) );
            // print_r($posts);
            foreach( $posts as $post ){
                // формат вывода the_title() ...
                ?>
                <div class="slick__item-wrapper" style="background-image:url('<?PHP echo get_the_post_thumbnail_url(); ?>')">
                  <div class="container">
                    <h5 class="slick__text">
                    <?php 
                      echo $post->post_content;
                    ?>
                    </h5>
                  </div>
                </div>
              <?php
            }
            wp_reset_postdata(); // сброс
          ?>
        </div>
        <div class="container dots"></div>
      </section>
      <!--slider end-->
      <section class="products-whole-wrapper">
        <div class="container">
          <div class="section-header-wrapper">
            <h3>Наша продукция</h3><a class="btn-more" href="/products" title="more">Вся продукция<svg width="10" height="20" viewBox="0 0 10 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.656432 19.1095L1.84379 20L9.34375 10L1.84379 -6.55667e-07L0.656434 0.890519L7.4885 10L0.656432 19.1095Z" fill="#3ECC29" /></svg></a>
          </div>
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
          <a class="btn-more mobile" href="/products" title="more">Вся продукция<svg width="10" height="20" viewBox="0 0 10 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0.656432 19.1095L1.84379 20L9.34375 10L1.84379 -6.55667e-07L0.656434 0.890519L7.4885 10L0.656432 19.1095Z" fill="#3ECC29" /></svg></a>
        </div>
      </section>
      <section class="industries-wrapper">
        <div class="container clearfix">
          <div class="right-part">
            <h3>Отрасли, где применяются мягике контейнеры / биг бэг</h3>
            <div class="advantages">
              <div class="advantage">
                <div class="advantage__img" style="background-image:url('<?PHP bloginfo('template_url');?>/img/advantages/chemistry.svg')"></div>
                <div class="advantage__header">Химическая</div>
              </div>
              <div class="advantage">
                <div class="advantage__img" style="background-image:url('<?PHP bloginfo('template_url');?>/img/advantages/agrar.svg')"></div>
                <div class="advantage__header">Аграрная</div>
              </div>
              <div class="advantage">
                <div class="advantage__img" style="background-image:url('<?PHP bloginfo('template_url');?>/img/advantages/build.svg')"></div>
                <div class="advantage__header">Строительная</div>
              </div>
              <div class="advantage">
                <div class="advantage__img" style="background-image:url('<?PHP bloginfo('template_url');?>/img/advantages/food.svg')"></div>
                <div class="advantage__header">Пищевая</div>
              </div>
              <div class="advantage">
                <div class="advantage__img" style="background-image:url('<?PHP bloginfo('template_url');?>/img/advantages/metal.svg')"></div>
                <div class="advantage__header">Металлургия</div>
              </div>
              <div class="advantage">
                <div class="advantage__img" style="background-image:url('<?PHP bloginfo('template_url');?>/img/advantages/metal.svg')"></div>
                <div class="advantage__header">Газовая и нефтяная</div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="news-wrapper">
        <div class="container">
          <div class="section-header-wrapper">
            <h3>Новости и события</h3><a class="btn-more" href="#" title="more">Все новости<svg width="10" height="20" viewBox="0 0 10 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.656432 19.1095L1.84379 20L9.34375 10L1.84379 -6.55667e-07L0.656434 0.890519L7.4885 10L0.656432 19.1095Z" fill="#3ECC29" /></svg></a>
          </div>
          <div class="news"><a class="news__item clearfix" href="#" title="title">
              <div class="news__content">
                <div class="header">
                  <div class="header__left">10<span>февраля 2019</span></div>
                  <div class="header__right"></div>
                </div>
                <div class="body">Обзор XXIV международной специализированной торгово-промышленной выставки «MVC: Зерно-Комбикорма-Ветеринария-2019»</div>
              </div>
              <div class="news__bg"></div>
            </a><a class="news__item clearfix" href="#" title="title">
              <div class="news__content">
                <div class="header">
                  <div class="header__left">25<span>января 2019</span></div>
                </div>
                <div class="body">Обзор XXIV международной специализированной торгово-промышленной выставки «MVC: Зерно-Комбикорма-Ветеринария-2019»</div>
              </div>
              <div class="news__bg"></div>
            </a><a class="news__item clearfix" href="#" title="title">
              <div class="news__content">
                <div class="header">
                  <div class="header__left">7<span>ноября 2018</span></div>
                  <div class="header__right"></div>
                </div>
                <div class="body">Обзор XXIV международной специализированной торгово-промышленной выставки «MVC: Зерно-Комбикорма-Ветеринария-2019»</div>
              </div>
              <div class="news__bg"></div>
            </a><a class="btn-more mobile" href="#" title="more">Все новости<svg width="10" height="20" viewBox="0 0 10 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.656432 19.1095L1.84379 20L9.34375 10L1.84379 -6.55667e-07L0.656434 0.890519L7.4885 10L0.656432 19.1095Z" fill="#3ECC29" /></svg></a></div>
        </div>
      </section>
      <div class="container">
        <h3 class="companies">70 компаний успешно сотрудничают с нами.<br> Присоединяйтесь!</h3>
      </div>
    </main>
<?php
// get_sidebar();
get_footer();
