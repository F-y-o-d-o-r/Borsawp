<?php
/*
Template Name: page-products
Template Post Type: page
 */
get_header();
$categories = get_categories(array(
    'taxonomy' => 'category',
    'type' => 'post',
    'child_of' => 0,
    'parent' => '',
    'orderby' => 'name',
    'order' => 'ASC',
    'hide_empty' => 1,
    'hierarchical' => 1,
    'exclude' => '14',
    'include' => '',
    'number' => 0,
    'pad_counts' => false,
    // полный список параметров смотрите в описании функции http://wp-kama.ru/function/get_terms
));
?>

<main>
      <section class="products-page-wrapper">
        <div class="container">
          <p class="breadcrambs">
            <?php
the_breadcrumb();
?>
          </p>
          <h1 class="breadcrambs-h1">Наша продукция</h1>
          <div class="products-wrapper">
          <?PHP
if ($categories) {
    foreach ($categories as $category) {
        // Получаем ID таксономии
        $term_id = $category->term_id;
        // получим ID картинки из метаполя термина
        $term_thumbnail_id = carbon_get_term_meta($term_id, 'thumb');
        // ссылка на полный размер картинки по ID вложения
        $term_thumbnail_url = wp_get_attachment_image_url($term_thumbnail_id, 'large');

        ?>
              <a class="product-item" href="<?PHP echo get_category_link($category->term_id) ?>" title="<?PHP echo sprintf(__("Вся продукция в категории в %s"), $category->name) ?>"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="15" cy="15" r="15" fill="#3ECC29" />
                  <path d="M22.9471 14.6694H15.3306V7H14.6694V14.6694H7V15.3306H14.6694V23H15.3306V15.3306H23V14.6694H22.9471Z" fill="white" /></svg>
                <div class="product-item__header"><?PHP echo $category->name ?></div>
                <div class="product-item__image" style="background-image:url('<?PHP echo $term_thumbnail_url; ?>')"></div>
              </a>
              <?PHP
}
}
?>
            </div>
        </div>
      </section>
      <section class="products-page-advantages">
        <div class="container">
          <h2>Приемущества контейнеров</h2>
          <div class="advantages">
            <div class="advantage">
              <div class="advantage__img" style="background-image:url('<?PHP bloginfo('template_url');?>/img/advantages/security.svg')"></div>
              <div class="advantage__header">Безопасность</div>
              <div class="advantage__body">При производстве не используются вредные для здоровья вещества и химические соединения</div>
            </div>
            <div class="advantage">
              <div class="advantage__img" style="background-image:url('<?PHP bloginfo('template_url');?>/img/advantages/spaciousness.svg')"></div>
              <div class="advantage__header">Вместительность</div>
              <div class="advantage__body">В один мешок помещается до 2,5 тонн цемента, песка и других строительных материалов.</div>
            </div>
            <div class="advantage">
              <div class="advantage__img" style="background-image:url('<?PHP bloginfo('template_url');?>/img/advantages/durability.svg')"></div>
              <div class="advantage__header">Долговечность</div>
              <div class="advantage__body">Такие контейнеры можно применять до 20 раз. Средний срок службы биг бэга — 7 лет.</div>
            </div>
            <div class="advantage">
              <div class="advantage__img" style="background-image:url('<?PHP bloginfo('template_url');?>/img/advantages/price.svg')"></div>
              <div class="advantage__header">Доступная стоимость</div>
              <div class="advantage__body">Цена одного биг бэга —140 рублей, что на 30 % выгоднее фанерных или картонных коробок</div>
            </div>
            <div class="advantage">
              <div class="advantage__img" style="background-image:url('<?PHP bloginfo('template_url');?>/img/advantages/saving.svg')"></div>
              <div class="advantage__header">Экономия</div>
              <div class="advantage__body">При доставке груза потребителю исключаются потери товара — биг бэги прочные и надежные</div>
            </div>
            <div class="advantage">
              <div class="advantage__img" style="background-image:url('<?PHP bloginfo('template_url');?>/img/advantages/transportation.svg')"></div>
              <div class="advantage__header">Транспортировка</div>
              <div class="advantage__body">Груз в мягких контейнерах можно перевозить в открытом транспорте — они не пропускают влагу</div>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php
get_footer();