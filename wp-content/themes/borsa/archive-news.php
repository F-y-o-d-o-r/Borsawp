<?php
get_header();
?>
<main>
      <section class="news-page-wrapper">
        <div class="container">
          <p class="breadcrambs">
            <a href="/">Главная /</a>
            <span>Новости и события</span>
          </p>
          <h1 class="breadcrambs-h1">Новости и события</h1>
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
            // номер текущей страницы
            $current_page = $_GET['page'];
            // имя custom post type
            $post_type = 'news';
            // если GET параметр пустой, то принимаем,
            // что текущая страница равна 1
            if ( empty($current_page) ) {
                $current_page = 1;
            }
            $args = array(
                'post_type' => $post_type,
                'posts_per_page' => 6, // количество постов на странице
                'paged' => $current_page, // номер текущей страницы
            );
            $projects = new WP_Query( $args );
            if ( $projects->have_posts() ) :
              while ( $projects->have_posts() ) : $projects->the_post();
                // здесь HTML разметка поста
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
              endwhile; 
          endif;
        ?>
        
        <?php
          // ссылка на следующую страницу
          function nextlink($current){
              echo '?page=' . ($current + 1);
          }
          // ссылка на предыдущую страницу
          function prevlink($current){
              echo '?page=' . ($current - 1);
          }
        ?>
            
            </div>
            <!-- <a class="btn-more more-news" href="#" title="more">Показать больше новостей</a> -->
            <?php
            if ( $projects->max_num_pages > 1 ) : // если максимальное количество страниц больше 1, то выводим пагинацию
              // если это не последняя страница и не первая, то выводим ссылки на следующую и предыдущую страницу
              if ( $projects->max_num_pages > $current_page && $current_page > 1 ) : ?>
                <!-- <a href="<?php prevlink($current_page) ?>">Предыдущая страница</a>
                <a href="<?php nextlink($current_page) ?>">Следующая страница</a> -->
                <div class="btn-more-wrapper">
                  <a class="btn-more more-news" href="<?php prevlink($current_page) ?>" title="more">Предыдущая страница</a>
                  <a class="btn-more more-news" href="<?php nextlink($current_page) ?>" title="more">Следующая страница</a>
                </div>
              <!-- // если текущая страница является первой страницей, выводим только ссылку на следующую страницу -->
              <?php elseif ( $current_page == 1 ) : ?> 
                <!-- <a href="<?php nextlink($current_page) ?>">Следующая страница</a> -->
                <a class="btn-more more-news" href="<?php nextlink($current_page) ?>" title="more">Следующая страница</a>
              <!-- // если текущая страница - это последняя страница, выводим ссылку только на предыдущую страницу -->
              <?php elseif ( $current_page == $projects->max_num_pages ) : ?>
              <!-- <a href="<?php prevlink($current_page) ?>">Предыдущая страница</a> -->
              <a class="btn-more more-news" href="<?php prevlink($current_page) ?>" title="more">Предыдущая страница</a>
            <?php endif;
          endif;
        ?>
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