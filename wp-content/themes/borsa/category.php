<?php
get_header();
?>

<main>
      <section class="products-page-wrapper">
        <div class="container">
          <p class="breadcrambs">
            <a href='/'>Главная / </a>
            <a href='/products/'>Продукция / </a>
            <?php
              $thisCat = get_category( get_query_var('cat') );
              echo $thisCat->name;
              // the_breadcrumb();
            ?>
          </p>
          <h1 class="breadcrambs-h1">Наша продукция</h1>
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
            </a><a class="product-item" href="#" title="product"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
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
            </a><a class="product-item" href="#" title="product"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
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
            </a></div>
        </div>
      </section>
      <section class="products-page-advantages">
        <div class="container">
          <h2>Приемущества контейнеров</h2>
          <div class="advantages">
            <div class="advantage">
              <div class="advantage__img" style="background-image:url('img/advantages/security.svg')"></div>
              <div class="advantage__header">Безопасность</div>
              <div class="advantage__body">При производстве не используются вредные для здоровья вещества и химические соединения</div>
            </div>
            <div class="advantage">
              <div class="advantage__img" style="background-image:url('img/advantages/spaciousness.svg')"></div>
              <div class="advantage__header">Вместительность</div>
              <div class="advantage__body">В один мешок помещается до 2,5 тонн цемента, песка и других строительных материалов.</div>
            </div>
            <div class="advantage">
              <div class="advantage__img" style="background-image:url('img/advantages/durability.svg')"></div>
              <div class="advantage__header">Долговечность</div>
              <div class="advantage__body">Такие контейнеры можно применять до 20 раз. Средний срок службы биг бэга — 7 лет.</div>
            </div>
            <div class="advantage">
              <div class="advantage__img" style="background-image:url('img/advantages/price.svg')"></div>
              <div class="advantage__header">Доступная стоимость</div>
              <div class="advantage__body">Цена одного биг бэга —140 рублей, что на 30 % выгоднее фанерных или картонных коробок</div>
            </div>
            <div class="advantage">
              <div class="advantage__img" style="background-image:url('img/advantages/saving.svg')"></div>
              <div class="advantage__header">Экономия</div>
              <div class="advantage__body">При доставке груза потребителю исключаются потери товара — биг бэги прочные и надежные</div>
            </div>
            <div class="advantage">
              <div class="advantage__img" style="background-image:url('img/advantages/transportation.svg')"></div>
              <div class="advantage__header">Транспортировка</div>
              <div class="advantage__body">Груз в мягких контейнерах можно перевозить в открытом транспорте — они не пропускают влагу</div>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php
get_footer();