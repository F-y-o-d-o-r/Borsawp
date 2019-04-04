<?php

/*
Template Name: contacts
Template Post Type: page
 */
get_header();

?>
<main>
      <section class="contacts-page-wrapper">
        <div class="container">
          <p class="breadcrambs">
          <?php
the_breadcrumb();
?>
          </p>
          <h1 class="breadcrambs-h1"><?PHP echo get_post_field('post_title', 43, 'db'); ?></h1>
        </div>
        <div class="contacts-wrapper gray-bg">
          <div class="container">
          <?PHP // echo get_post_field('post_content', 43, 'db'); ?>
            <div class="two-col-wrapper">
              <div class="left-part">
                <p><span>T:</span><a href="tel:<?php echo carbon_get_theme_option('phone_one'); ?>"><?php echo carbon_get_theme_option('phone_one'); ?></a></p>
                <p><span>T:</span>
                  <a href="tel:<?php echo carbon_get_theme_option('phone_two'); ?>"><?php echo carbon_get_theme_option('phone_two'); ?>
                  <?php
if (carbon_get_theme_option('phone_title')) {
    echo carbon_get_theme_option('phone_title');
}
?>
                  </a>
                </p>
                <p><span>E:</span><a href="mailto:<?php echo carbon_get_theme_option('email'); ?>"><?php echo carbon_get_theme_option('email'); ?></a></p>
                <p><span><?php echo carbon_get_theme_option('time'); ?></span></p>
              </div>
              <div class="right-part">
                <p><span>Общество с ограниченной ответственностью "БОРСА МСК" ИНН/КПП:</span><br><span>7736305438/773601001 ОГРН: 1177746536890</span></p>
                <p><span>Фактический адрес:</span><br><a href="https://goo.gl/maps/V9oNfsJX23v" title="google map" target="_blank"><?php echo carbon_get_theme_option('adr_fact'); ?></a></p>
                <p><span>Юридический адрес:</span><br><a href="https://goo.gl/maps/V9oNfsJX23v" title="google map" target="_blank"><?php echo carbon_get_theme_option('adr_ur'); ?></a></p>
                <p><span>Почтовый адрес:</span><br><a href="https://goo.gl/maps/V9oNfsJX23v" title="google map" target="_blank"><?php echo carbon_get_theme_option('adr_post'); ?></a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="form-wrapper">
          <div class="container">
            <h3 class="h3">Отправьте сообщение с вопросом или предложением о сотрудничестве</h3>
            <?php
echo do_shortcode('[contact-form-7 id="197" title="contacts page"]');
?>
            <!-- <form>
              <div class="inputs-wrapper"><input type="text" name="name" placeholder="Ваше имя" required="true"><input type="email" name="name" placeholder="Ваш E-mail" required="true"><input type="number" name="name" placeholder="Ваш телефон" required="true"></div><textarea name="message" placeholder="Сообщение" required="true"></textarea>
              <footer class="form-footer">
                <div class="checkbox-wrapper"><label><input class="checkbox" type="checkbox"><span class="checkbox-custom"></span><span class="label">Я принимаю <a href="/terms" title="title" target="_blank">условия передачи информации</a></span></label></div><button class="btn-more" type="submit">Отправить сообщение</button>
              </footer>
            </form> -->
          </div>
        </div>
      </section>
      <section class="contact-page-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2247.268838278495!2d37.4127713!3d55.71908!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54ef309ba4795%3A0xd037d169e2105f15!2z0JzQvtC20LDQudGB0LrQvtC1INGILiwgMzYsINGN0YLQsNC2IDEsINCc0L7RgdC60LLQsCwg0KDQvtGB0YHQuNGPLCAxMjEzNTQ!5e0!3m2!1sru!2sua!4v1554368839987!5m2!1sru!2sua" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </section>
      <!-- <section class="popup-wrapper contact-page-popup-wrapper dnone">
        <div class="container">
          <div class="content-wrapper clearfix"><img class="close" src="<?PHP bloginfo('template_url');?>/img/closesort.svg" alt="close"><img class="mail" src="<?PHP bloginfo('template_url');?>/img/advantages/mail.svg" alt="mail">
            <h4>Спасибо большое!</h4>
            <p>Ваше сообщение успешно отправлено. В скором времени наши менеджеры свяжутся с вами для обсуждения всех дополнительных вопросов. Хорошего вам дня!</p>
          </div>
        </div>
      </section> -->
    </main>

<?php
get_footer();