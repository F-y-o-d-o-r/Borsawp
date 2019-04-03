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
                <p><span>T:</span><a href="tel:<?php echo carbon_get_theme_option('phone_two'); ?>"><?php echo carbon_get_theme_option('phone_two'); ?> (отдел продаж)</a></p>
                <p><span>E:</span><a href="mailto:<?php echo carbon_get_theme_option('email'); ?>"><?php echo carbon_get_theme_option('email'); ?></a></p>
                <p><span>с 9 до 21:00 (без обеда и выходных)</span></p>
              </div>
              <div class="right-part">
                <p><span>Общество с ограниченной ответственностью "Борса" ИНН/КПП:</span><br><span>7736305438/773601001 ОГРН: 1177746536890</span></p>
                <p><span>Фактический адрес:</span><br><a href="https://goo.gl/maps/g1zpUZMFSbN2" title="google map" target="_blank"><?php echo carbon_get_theme_option('adr_fact'); ?></a></p>
                <p><span>Юридический адрес:</span><br><a href="https://goo.gl/maps/WYzQ4mV3P972" title="google map" target="_blank"><?php echo carbon_get_theme_option('adr_ur'); ?></a></p>
                <p><span>Почтовый адрес:</span><br><a href="https://goo.gl/maps/WYzQ4mV3P972" title="google map" target="_blank"><?php echo carbon_get_theme_option('adr_post'); ?></a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="form-wrapper">
          <div class="container">
            <h3 class="h3">Отправьте сообщение с вопросом или предложением о сотрудничестве</h3>
            <form>
              <div class="inputs-wrapper"><input type="text" name="name" placeholder="Ваше имя" required="true"><input type="email" name="name" placeholder="Ваш E-mail" required="true"><input type="number" name="name" placeholder="Ваш телефон" required="true"></div><textarea name="message" placeholder="Сообщение" required="true"></textarea>
              <footer class="form-footer">
                <div class="checkbox-wrapper"><label><input class="checkbox" type="checkbox"><span class="checkbox-custom"></span><span class="label">Я принимаю <a href="/terms" title="title" target="_blank">условия передачи информации</a></span></label></div><button class="btn-more" type="submit">Отправить сообщение</button>
              </footer>
            </form>
          </div>
        </div>
      </section>
      <section class="contact-page-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2276.5680671822693!2d36.476043015909504!3d55.208313180411245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46cacf9c7e4ec303%3A0x12c6ddab43f2f853!2z0YPQuy4g0KPRgNC40YbQutC-0LPQviwgMzAsINCR0L7RgNC-0LLRgdC6LCDQmtCw0LvRg9C20YHQutCw0Y8g0L7QsdC7Liwg0KDQvtGB0YHQuNGPLCAyNDkwMTA!5e0!3m2!1sru!2sua!4v1553606413464" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></section>
      <section class="popup-wrapper dnone">
        <div class="container">
          <div class="content-wrapper clearfix"><img class="close" src="<?PHP bloginfo('template_url');?>/img/closesort.svg" alt="close"><img class="mail" src="<?PHP bloginfo('template_url');?>/img/advantages/mail.svg" alt="mail">
            <h4>Спасибо большое!</h4>
            <p>Ваше сообщение успешно отправлено. В скором времени наши менеджеры свяжутся с вами для обсуждения всех дополнительных вопросов. Хорошего вам дня!</p>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();