<?php

/*
Template Name: news
Template Post Type: page
 */
get_header();
?>
<main>
      <section class="news-page-wrapper">
        <div class="container">
          <p class="breadcrambs">
            <?php
              the_breadcrumb();
            ?>
          </p>
          <h1 class="breadcrambs-h1"><?PHP echo get_the_title() ?></h1>
          <!-- <div class="date-chose-wrapper"><select name="date1">
              <option value="0">Год</option>
              <option value="1">2019</option>
              <option value="2">2018</option>
            </select><select name="date2">
              <option value="0">Месяц</option>
              <option value="1">Июль</option>
              <option value="2">Август</option>
            </select><select name="date3">
              <option value="0">Все</option>
              <option value="1">Что</option>
              <option value="2">Все</option>
            </select>
            <div class="clear dnone"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.761901 16L0 15.2381L15.2381 0L16 0.761906L0.761901 16Z" fill="#BCBCBC" />
                <path d="M15.2381 16L0 0.761906L0.761901 0L16 15.2381L15.2381 16Z" fill="#BCBCBC" /></svg>
              <p>Очистить</p>
            </div>
          </div><button class="btn-more sort-mobile-btn">Сортировать</button>
        </div> -->
        <div class="container news-wrpaper">
          <div class="news">
          <?php
            $posts = get_posts( array(
              'numberposts' => 0,
              'orderby'     => 'date',
              'order'       => 'DESC',
              'include'     => array(),
              'exclude'     => array(),
              'meta_key'    => '',
              'meta_value'  =>'',
              'post_type'   => 'news',
              'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ) );
            // print_r($posts);
            wp_list_sort( $posts, $orderby, $order, $preserve_keys );
            foreach( $posts as $post ){
                // формат вывода the_title() ...
                ?>
                <a class="news__item clearfix" href="<?php echo get_post_permalink($post->ID) ?>" title="title">
                  <div class="news__content">
                    <div class="header">
                      <div class="header__left"><?php echo get_the_date('d'); ?><span><?php echo get_the_date('F Y'); ?></span></div>
                      <?php echo get_the_post_thumbnail_url() ? '<div class="header__right"></div>' : null; ?>
                    </div>
                    <div class="body"><?php echo $post->post_title; ?></div>
                  </div>
                  <div class="news__bg"></div>
                </a>
              <?php
            }
            wp_reset_postdata(); // сброс
          ?>
            
            </div>
            <a class="btn-more more-news" href="#" title="more">Показать больше новостей</a>
        </div>
      </section>
      <!-- <div class="date-chose-wrapper-mobile-popup dnone">
        <div class="container">
          <div class="date-chose-wrapper date-chose-wrapper-mobile"><img src="img/closesort.svg" alt="close">
            <h4>Сортировать новости</h4><select name="date1">
              <option value="0">Год</option>
              <option value="1">2019</option>
              <option value="2">2018</option>
            </select><select name="date2">
              <option value="0">Месяц</option>
              <option value="1">Июль</option>
              <option value="2">Август</option>
            </select><select name="date3">
              <option value="0">Все</option>
              <option value="1">Что</option>
              <option value="2">Все</option>
            </select>
            <div class="clear dnone"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.761901 16L0 15.2381L15.2381 0L16 0.761906L0.761901 16Z" fill="#BCBCBC" />
                <path d="M15.2381 16L0 0.761906L0.761901 0L16 15.2381L15.2381 16Z" fill="#BCBCBC" /></svg>
              <p>Очистить</p>
            </div>
          </div>
        </div>
      </div> -->
    </main>
<?php
get_footer();