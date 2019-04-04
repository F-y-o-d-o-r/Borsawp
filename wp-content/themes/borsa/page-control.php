<?php

/*
Template Name: delivery
Template Post Type: page
 */
get_header();
?>
<main>
      <section class="control-page-wrapper">
        <div class="container">
          <p class="breadcrambs"><a href="#" title="title">Главная</a><span>/ </span><a href="#" title="title">Контроль качества</a></p>
          <h1 class="breadcrambs-h1">Контроль качества выпускаемой продукции</h1>
        </div>
        <div class="control-wrapper gray-bg">
          <div class="container">
            <div class="subheader">В нашей лаборатории мы тестируем сырьё и готовую продукцию</div>
            <div class="content-wrapper">
              <p class="first-p">В испытательной лаборатории нашего предприятия на современном аттестованном оборудовании осуществляется непрерывный контроль и тестирование всей номенклатуры сырья, нитей , пленки и готовой продукции что позволяет обеспечить требования международного стандарта <span>ISO 21898:2004</span>.</p>
              <div class="inside-content-wrapper"><img src="<?PHP bloginfo('template_url');?>/img/advantages/machinery.svg" alt="machinery">
                <p>Мы всегда предавали большое значение качеству выпускаемой продукции. Как показал опыт предыдущих лет развития упаковочной продукции - достижение высокого качества мягких контейнеров возможно только там, где используются передовые технологии.</p>
                <ul>
                  <li>Мягкие пропиленовые контейнеры нашего производства изготовлены в соответствии международным стандартом качества <span>ISO 21898</span></li>
                  <li>Высокий уровень качества продукции «БОРСА МСК» подтвержден сертификатами соответствия в системе сертификации <span>ГОСТ Р ГОССТАНДАРТА России</span>, а также сертификатами соответствия МКР требованиям международных и национальных регламентов по перевозке опасных грузов. Выпуск продукции осуществляется согласно техническим условиям, зарегистрированным в Госреестре.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="run-slider-wrapper control-page-slider-wrapper">
        <div class="container">
          <h3 class="h3">Лаборатория ООО "БОРСА МСК"</h3>
          <div class="link-wrapper"><a class="runSlider" href="#" title="title" data-slide="testslider1" style="background-image:url('<?PHP echo wp_get_attachment_image_url(carbon_get_the_post_meta('production_photo'), 'large'); ?>')" id="runSlider">
              <div class="info-wrapper">
                <div class="num">1/<?php
echo count(carbon_get_the_post_meta('production_hidden_gallery'));
?></div>
                <div class="more"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.3359 18.207L15.0352 13.9062C16.25 12.4336 16.9102 10.6016 16.9102 8.67188C16.9102 6.46875 16.0547 4.40234 14.4961 2.84375C12.9414 1.28516 10.8711 0.429688 8.67188 0.429688C6.47266 0.429688 4.40234 1.28516 2.84375 2.84375C1.28516 4.39844 0.429688 6.46875 0.429688 8.67188C0.429688 10.8711 1.28516 12.9414 2.84375 14.5C4.39844 16.0547 6.46875 16.9141 8.67188 16.9141C10.6055 16.9141 12.4375 16.2539 13.9062 15.0391L18.207 19.3359C18.5195 19.6484 19.0234 19.6484 19.3359 19.3359C19.6484 19.0234 19.6484 18.5195 19.3359 18.207ZM3.97266 13.3672C2.71484 12.1133 2.02344 10.4453 2.02344 8.67188C2.02344 6.89844 2.71484 5.22656 3.96875 3.97266C5.22266 2.71875 6.89062 2.02734 8.66797 2.02734C10.4414 2.02734 12.1133 2.71875 13.3672 3.97266C14.6211 5.22656 15.3125 6.89453 15.3125 8.67188C15.3125 10.4453 14.6211 12.1172 13.3672 13.3711C12.1133 14.625 10.4414 15.3164 8.66797 15.3164C6.89453 15.3164 5.22656 14.625 3.97266 13.3672Z" fill="#3ECC29" /></svg></div>
              </div>
            </a>
            <p><?PHP echo carbon_get_the_post_meta('production_slider_text'); ?></p>
          </div>
        </div>
      </section>
      <!--START Popup slider-->
      <div class="hidden-slider-popup dnone" id="testslider1">
        <div class="container"><img class="close-popup" src="<?PHP bloginfo('template_url');?>/img/close.svg" alt="close" id="closePopup">
          <div class="hidden-slider-wrapper">
            <div class="slick-popup-slider" id="slick">
            <?PHP
foreach (carbon_get_the_post_meta('production_hidden_gallery') as $key => $value) {
    ?>
                  <div class="slide" style="background-image: url(<?PHP echo wp_get_attachment_image_url($value, 'large'); ?>)"></div>
                <?PHP
}
?>
            </div>
            <div class="hidden-slick-btns-wrapper"></div>
          </div>
          <div class="hidden-info-wrapper">
            <p><?PHP echo carbon_get_the_post_meta('production_slider_text'); ?></p>
            <div class="num"><span id="thisSlideNum">1</span><span>/</span><span id="sliders">39</span></div>
          </div>
        </div>
      </div>
      <!--END Popup slider-->
    </main>
<?php
get_footer();