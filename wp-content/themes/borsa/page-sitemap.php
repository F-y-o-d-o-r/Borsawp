<?php
/*
Template Name: page-sitemap
Template Post Type: page
 */
get_header();
?>
<main>
      <section class="map-page-wrapper">
        <div class="container">
          <p class="breadcrambs">
          <?php
            the_breadcrumb();
            ?>
          </p>
          <h1 class="breadcrambs-h1"><?PHP echo get_post_field('post_title'); ?></h1>
        </div>
        <div class="map-wrapper gray-bg">
          <div class="container">
            <div class="content-wrapper">
            <?php
            echo do_shortcode( '[wp-realtime-sitemap]' );
            ?>

              <!-- <ul>
                <li> <a href="#" title="link of the map">Главная</a></li>
                <li> <a href="#" title="link of the map">О компании</a></li>
                <li> <a href="#" title="link of the map">Производство</a></li>
                <li> <a href="#" title="link of the map">Продукция</a>
                  <ul>
                    <li><a href="#" title="link of the map">Строповые мягкие контейнеры</a></li>
                    <li><a href="#" title="link of the map">Ленточные мягкие контейнеры</a></li>
                    <li><a href="#" title="link of the map">Вентиляционные мягкие контейнеры (овощные)</a></li>
                  </ul>
                </li>
              </ul>
              <ul>
                <li><a href="#" title="link of the map">Доставка</a></li>
                <li><a href="#" title="link of the map">Контроль качества</a></li>
                <li><a href="#" title="link of the map">Новости</a></li>
              </ul> -->
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();