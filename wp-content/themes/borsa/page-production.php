<?php

/*
Template Name: production
Template Post Type: page
 */
get_header();
?>

<main>
      <section class="production-content-wrapper">
        <div class="white-bg">
          <div class="container">
            <p class="breadcrambs">
            <?php
the_breadcrumb();
?>
            </p>
            <h1 class="breadcrambs-h1"><?PHP echo get_post_field('post_title', 25, 'db'); ?></h1>
          </div>
        </div>
        <div class="gray-bg">
          <div class="container">
          <?PHP echo get_post_field('post_content', 25, 'db'); ?>
          
            <!-- <div class="subheader">ООО «Борса» – Это современное производство полимерной продукции полного цикла. Мы изготавливаем полипропиленовые мешки, мягкие контейнеры, полиэтиленовую пленку — самые востребованные типы упаковки.</div>
            <div class="img-2-wrapper">
              <div class="img" style="background-image:url('img/prodaction1.jpg')"></div>
              <div class="img" style="background-image:url('img/prodaction2.jpg')"></div>
            </div>
            <h3 class="h3">Этапы производства, которые реализованы на производственных площадках:</h3>
            <div class="two-ul">
              <div class="ul-left ul-both">
                <ul>
                  <li>растарка сырья;</li>
                  <li>подготовка и смешение сырья до требуемых параметров переработки;</li>
                  <li>производство ПП/ПЭ нити;</li>
                  <li>производство ПП/ПЭ ткани;</li>
                  <li>производство стропной ленты;</li>
                  <li>производство швейной нити;</li>
                  <li>производство полимерного шнура;</li>
                  <li>ламинирование ПП/ПЭ ткани;</li>
                  <li>раскрой и комплектовка полуфабрикатов;</li>
                  <li>нанесение флексографической печати;</li>
                </ul>
              </div>
              <div class="ul-right ul-both">
                <ul>
                  <li>производство рукавной пленки;</li>
                  <li>сварка/формирование вкладыша;</li>
                  <li>пошив готового изделия;</li>
                  <li>упаковка готового изделия;</li>
                  <li>регрануляция технологических отходов.</li>
                </ul>
              </div>
            </div>
            <div class="text-wrapper">
              <p>Многие производители мягкой тары работают по стандартным позициям, которые были разработаны много лет назад, не уделяя должного внимания новым тенденциям на рынке промышленной упаковки. Как показал многолетний опыт работы ООО «Борса», предпосылок будущего для развития у таких предприятий практически нет.</p><br>
              <p>Наше предприятие очень тесно работает с ведущими производителями оборудования и сырья и постоянно предлагает своему потребителю как новые виды продукции, так и возможность оптимизации и модернизации уже имеющихся видов упаковки.</p><br>
              <p>На сегодняшний день производственные мощности компании «Борса» базируются на нескольких производственных площадках с совокупной мощностью переработки до 20 тысяч тонн полимерного сырья в год. Это позволяет оптимизировать логистику поставок как сырья, так и готовой продукции по всей России и странам СНГ.</p>
              <p class="small-info">* В производственной лаборатории нашего предприятия на современном аттестованном оборудовании осуществляется непрерывный контроль и тестирование всей номенклатуры, что позволяет обеспечить требования стандарта Европейской Ассоциации производителей МКР EFIBCA</p>
            </div>
          </div>
        </div>
        <div class="container">
          <h3 class="h3 h3-slider">Производственная площадка ООО "Борса"</h3>
        </div>
      </section>
      <section class="run-slider-wrapper">
        <div class="container">
          <div class="link-wrapper"><a class="runSlider" href="#" title="title" data-slide="testslider2" style="background-image:url('img/slider/three.jpg')" id="runSlider">
              <div class="info-wrapper">
                <div class="num">1/4</div>
                <div class="more"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.3359 18.207L15.0352 13.9062C16.25 12.4336 16.9102 10.6016 16.9102 8.67188C16.9102 6.46875 16.0547 4.40234 14.4961 2.84375C12.9414 1.28516 10.8711 0.429688 8.67188 0.429688C6.47266 0.429688 4.40234 1.28516 2.84375 2.84375C1.28516 4.39844 0.429688 6.46875 0.429688 8.67188C0.429688 10.8711 1.28516 12.9414 2.84375 14.5C4.39844 16.0547 6.46875 16.9141 8.67188 16.9141C10.6055 16.9141 12.4375 16.2539 13.9062 15.0391L18.207 19.3359C18.5195 19.6484 19.0234 19.6484 19.3359 19.3359C19.6484 19.0234 19.6484 18.5195 19.3359 18.207ZM3.97266 13.3672C2.71484 12.1133 2.02344 10.4453 2.02344 8.67188C2.02344 6.89844 2.71484 5.22656 3.96875 3.97266C5.22266 2.71875 6.89062 2.02734 8.66797 2.02734C10.4414 2.02734 12.1133 2.71875 13.3672 3.97266C14.6211 5.22656 15.3125 6.89453 15.3125 8.67188C15.3125 10.4453 14.6211 12.1172 13.3672 13.3711C12.1133 14.625 10.4414 15.3164 8.66797 15.3164C6.89453 15.3164 5.22656 14.625 3.97266 13.3672Z" fill="#3ECC29" /></svg></div>
              </div>
            </a>
            <p>Двухстропный мягкий контейнер при транспортировке евроцемента</p>
          </div>-->
        </div>
      </section> 
      <!--START Popup slider-->
      <div class="hidden-slider-popup dnone" id="testslider2">
        <div class="container"><img class="close-popup" src="<?PHP bloginfo('template_url');?>/img/close.svg" alt="close" id="closePopup">
          <div class="hidden-slider-wrapper">
            <div class="slick-popup-slider" id="slick">
              <div class="slide" style="background-image: url('img/slider/one.jpg')"></div>
              <div class="slide" style="background-image: url('img/slider/three.jpg')"></div>
              <div class="slide" style="background-image: url('img/slider/one.jpg')"></div>
              <div class="slide" style="background-image: url('img/slider/three.jpg')"></div>
            </div>
            <div class="hidden-slick-btns-wrapper"></div>
          </div>
          <div class="hidden-info-wrapper">
            <p>Ткань изготавливается на новом австрийском оборудовании фирмы Starlinger — это гарантия качества!</p>
            <div class="num"><span id="thisSlideNum">1</span><span>/</span><span id="sliders">39</span></div>
          </div>
        </div>
      </div>
      <!--END Popup slider-->
    </main>

<?php
// get_sidebar();
get_footer();