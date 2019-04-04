<section class="connect-wrapper">
      <div class="questions">
        <div class="container">
          <div class="left-part">
            <div class="left-part__one"><svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="25" cy="25" r="24.5" stroke="white" />
                <path d="M23.1563 26.8431C25.5314 29.2182 28.2818 31.4886 29.3687 30.4014C30.9254 28.845 31.8851 27.4893 35.3162 30.2469C38.7476 33.0057 36.1121 34.8438 34.6043 36.3522C32.8643 38.0919 26.378 36.4437 19.9667 30.0333C13.5563 23.6214 11.9069 17.1351 13.6481 15.3945C15.1562 13.8864 16.9943 11.2518 19.7519 14.6835C22.5101 18.1137 21.155 19.0737 19.598 20.6304C18.5114 21.7176 20.7812 24.4677 23.1563 26.8431Z" fill="white" /></svg>
              <h6>Остались вопросы?</h6>
            </div>
            <div class="left-part__two">
              <p>Наши менеджеры помогут вам разобраться</p>
            </div>
          </div>
          <?php
echo do_shortcode('[contact-form-7 id="195" title="call"]');
?>
          <!-- <form><input type="text" name="phone" placeholder="Телефон"><button class="btn">Перезвоните мне</button></form> -->
        </div>
      </div>
    </section>
<footer class="footer">
      <div class="container">
        <div class="row menu">
          <nav>
            <!-- <ul class="flex">
              <li><a href="#" title="menu">О компании</a></li>
              <li><a href="#" title="menu">Продукция</a></li>
              <li><a href="#" title="menu">Производство</a></li>
              <li><a href="#" title="menu">Доставка</a></li>
              <li><a href="#" title="menu">Контроль качества</a></li>
              <li><a href="#" title="menu">Новости</a></li>
              <li><a href="#" title="menu">Карьера</a></li>
              <li><a href="#" title="menu">Контакты</a></li>
              <?php
$file = carbon_get_theme_option('price');
// Проверяем, есть ли значение в произвольном поле
if ($file) {
    // printf('<a href="%s">Скачать прайс-лист</a>', $file);
    printf('<li><a class="price-list" href="%s" title="menu">Прайс-лист</a></li>', $file);
}
?>
              <li><a href="#" title="menu">Карта сайта</a></li>
            </ul> -->
            <?php
wp_nav_menu([
    'theme_location' => '',
    'menu' => 'footer',
    'container' => 'div',
    'container_class' => '',
    'container_id' => '',
    'menu_class' => 'flex',
    'menu_id' => '',
    'echo' => true,
    'fallback_cb' => 'wp_page_menu',
    'before' => '',
    'after' => '',
    'link_before' => '',
    'link_after' => '',
    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    'depth' => 0,
    'walker' => '',
]);
?>
          </nav>
        </div>
        <div class="row flex">
          <p>© 2019 БОРСА МСК. Все права защищены.</p>
          <div class="social-wrapper"><a class="facebook-footer-link" href="<?php echo carbon_get_theme_option('link_fb'); ?>" title="facebook"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M24.2628 17.6691H21.5658V15.9003C21.5658 15.236 22.0061 15.0812 22.3161 15.0812C22.6255 15.0812 24.2194 15.0812 24.2194 15.0812V12.1609L21.5982 12.1506C18.6885 12.1506 18.0264 14.3287 18.0264 15.7225V17.6691H16.3436V20.6783H18.0264C18.0264 24.5402 18.0264 29.1933 18.0264 29.1933H21.5658C21.5658 29.1933 21.5658 24.4943 21.5658 20.6783H23.9541L24.2628 17.6691Z" fill="#808080" />
                <circle cx="20" cy="20" r="19.5" stroke="#808080" /></svg></a><a class="instagram-footer-link" href="<?php echo carbon_get_theme_option('link_insta'); ?>" title="instagram"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20.1994 16.0117C17.659 16.0117 15.5542 18.0803 15.5542 20.6569C15.5542 23.2335 17.6227 25.302 20.1994 25.302C22.776 25.302 24.8445 23.1972 24.8445 20.6569C24.8445 18.1166 22.7397 16.0117 20.1994 16.0117ZM20.1994 23.6327C18.5663 23.6327 17.2236 22.2899 17.2236 20.6569C17.2236 19.0238 18.5663 17.6811 20.1994 17.6811C21.8324 17.6811 23.1752 19.0238 23.1752 20.6569C23.1752 22.2899 21.8324 23.6327 20.1994 23.6327Z" fill="#808080" />
                <path d="M25.0259 16.9552C25.6072 16.9552 26.0784 16.484 26.0784 15.9028C26.0784 15.3215 25.6072 14.8503 25.0259 14.8503C24.4447 14.8503 23.9735 15.3215 23.9735 15.9028C23.9735 16.484 24.4447 16.9552 25.0259 16.9552Z" fill="#808080" />
                <path d="M27.7477 13.181C26.8042 12.2012 25.4614 11.6931 23.9372 11.6931H16.4614C13.3042 11.6931 11.1993 13.798 11.1993 16.9552V24.3947C11.1993 25.9552 11.7074 27.298 12.7235 28.2778C13.7034 29.2213 15.0098 29.6931 16.4977 29.6931H23.901C25.4614 29.6931 26.7679 29.1851 27.7114 28.2778C28.6913 27.3342 29.1993 25.9915 29.1993 24.431V16.9552C29.1993 15.431 28.6913 14.1246 27.7477 13.181ZM27.6026 24.431C27.6026 25.556 27.2034 26.4633 26.5501 27.0802C25.8969 27.6971 24.9897 28.0238 23.901 28.0238H16.4977C15.409 28.0238 14.5018 27.6971 13.8485 27.0802C13.1953 26.427 12.8687 25.5197 12.8687 24.3947V16.9552C12.8687 15.8665 13.1953 14.9592 13.8485 14.306C14.4655 13.6891 15.409 13.3625 16.4977 13.3625H23.9735C25.0622 13.3625 25.9695 13.6891 26.6227 14.3423C27.2397 14.9955 27.6026 15.9028 27.6026 16.9552V24.431Z" fill="#808080" />
                <circle cx="20" cy="20" r="19.5" stroke="#808080" /></svg></a><a class="youtube-footer-link" href="<?php echo carbon_get_theme_option('link_youtube'); ?>" title="youtube"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M29.9376 16.0202C29.9376 16.0202 29.7407 14.6486 29.1368 14.0443C28.3713 13.2517 27.5127 13.2479 27.1191 13.2015C24.3011 13 20.0738 13 20.0738 13H20.0648C20.0648 13 15.8377 13 13.0194 13.2015C12.6258 13.2479 11.7677 13.2517 11.0018 14.0443C10.3978 14.6486 10.2014 16.0202 10.2014 16.0202C10.2014 16.0202 10 17.631 10 19.2417V20.7521C10 22.3626 10.2014 23.9733 10.2014 23.9733C10.2014 23.9733 10.3978 25.345 11.0018 25.9492C11.7677 26.7421 12.774 26.7167 13.2222 26.7998C14.8335 26.9527 20.0693 27 20.0693 27C20.0693 27 24.3011 26.9936 27.1191 26.7923C27.5127 26.7459 28.3713 26.7421 29.1368 25.9492C29.7407 25.345 29.9376 23.9733 29.9376 23.9733C29.9376 23.9733 30.1386 22.3626 30.1386 20.7521V19.2417C30.1386 17.631 29.9376 16.0202 29.9376 16.0202ZM17.9903 22.5818L17.9894 16.9892L23.4309 19.7951L17.9903 22.5818Z" fill="#808080" />
                <circle cx="20" cy="20" r="19.5" stroke="#808080" /></svg></a></div><a href="/terms" title="Пользовательское соглашение">Пользовательское соглашение</a>
        </div>
      </div>
    </footer>
    <section class="popup-wrapper dnone">
      <div class="container">
        <div class="content-wrapper clearfix"><img class="close" src="<?PHP bloginfo('template_url');?>/img/closesort.svg" alt="close"><img class="mail" src="<?PHP bloginfo('template_url');?>/img/advantages/customerservice.svg" alt="thanks">
          <h4>Отлично, ваша заявка принята!</h4>
          <p>Мы успешно записали ваш номер телефона. В течении 30 минут наши менеджеры свяжутся с вами для обсуждения всех интересующих вас вопросов. Хорошего вам дня!</p>
        </div>
      </div>
    </section>
    <section class="popup-wrapper contact-page-popup-wrapper dnone">
        <div class="container">
          <div class="content-wrapper clearfix"><img class="close" src="<?PHP bloginfo('template_url');?>/img/closesort.svg" alt="close"><img class="mail" src="<?PHP bloginfo('template_url');?>/img/advantages/mail.svg" alt="mail">
            <h4>Спасибо большое!</h4>
            <p>Ваше сообщение успешно отправлено. В скором времени наши менеджеры свяжутся с вами для обсуждения всех дополнительных вопросов. Хорошего вам дня!</p>
          </div>
        </div>
      </section>
    <script type="text/javascript" src="<?PHP bloginfo('template_url');?>/js/app.js"></script>
    <script type="text/javascript" src="<?PHP bloginfo('template_url');?>/js/wp.js"></script>
  </body>
</html>
