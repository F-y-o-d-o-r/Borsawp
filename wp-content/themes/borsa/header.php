<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package borsa
 */

?>
<!doctype html>
<html <?php language_attributes();?>>
<head>
  <meta charset="<?php bloginfo('charset');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <meta name="theme-color" content="#fff">
  <meta name="format-detection" content="telephone=no">
  <meta name="description" content="Borsa landing page">
  <meta name="keywords" content="borsa, landing, bigbag">
  <meta name="theme-color" content="#3ECC29">
  <meta name="msapplication-navbutton-color" content="#3ECC29">
  <meta name="apple-mobile-web-app-status-bar-style" content="#3ECC29">
  <link rel="apple-touch-icon" sizes="180x180" href="<?PHP bloginfo('template_url');?> /img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?PHP bloginfo('template_url');?> /img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?PHP bloginfo('template_url');?> /img/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?PHP bloginfo('template_url');?> /img/favicon/site.webmanifest">
  <link rel="mask-icon" href="<?PHP bloginfo('template_url');?> /img/favicon/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="<?PHP bloginfo('template_url');?> /img/favicon/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content="<?PHP bloginfo('template_url');?> /img/favicon/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <?php wp_head();?>
</head>

<body class="bodyClass">
    <!--BEGIN out-->
    <!--BEGIN header-->
    <header class="header">
      <div class="header-wrapper flex">
        <div class="nav-icon-wrapper dnone">
          <div id="nav-icon"><span></span><span></span><span></span></div>
          <div class="menu-name">Меню</div>
        </div><a class="logo-wrapper flex" href="/" title="main page"><img src="<?PHP bloginfo('template_url');?> /img/header-logo.png" alt="header logo">
          <p>Производство мягких контейнеров / биг бэг</p>
        </a>
        <nav>
          <!-- <ul class="flex">
            <li><a href="#" title="menu">О компании</a></li>
            <li><a href="#" title="menu">Продукция</a></li>
            <li><a href="#" title="menu">Производство</a></li>
            <li><a href="#" title="menu">Новости</a></li>
            <li><a href="#" title="menu">Контакты</a></li>
          </ul> -->
          <?php
            wp_nav_menu([
                'theme_location' => '',
                'menu' => 'Header-menu',
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
        <a class="tel header-tel" href="tel:<?php echo carbon_get_theme_option('phone_one'); ?>" title="phone number"><?php echo carbon_get_theme_option('phone_one'); ?></a><button class="btn-main" id="leftOrder">Оставить заявку</button>
      </div>

    </header>
    <!--BEGIN Header burger menu-->
    <div class="burger-menu-wrapper">
      <div class="burger-content">
        <div class="nav-wrapper">
          <nav>
            <ul class="flex left-part">
              <li><a class="true" href="#" title="menu">О компании</a></li>
              <li><a class="true" href="#" title="menu">Продукция</a></li>
              <li><a class="true" href="#" title="menu">Производство</a></li>
              <li><a class="true" href="#" title="menu">Доставка</a></li>
              <li><a class="true" href="#" title="menu">Контроль качества</a></li>
            </ul>
            <div class="line"></div>
            <ul class="flex right-part">
              <li><a href="#" title="menu">Новости</a></li>
              <li><a href="#" title="menu">Карьера</a></li>
              <li><a href="#" title="menu">Контакты</a></li>
              <li><a class="price-list" href="#" title="menu">Прайс-лист</a></li>
              <li><a href="#" title="menu">Карта сайта</a></li>
            </ul>
          </nav>
        </div><button class="btn-left-order-mobile" id="leftOrderMobile">Оставить заявку</button><a class="tel" href="tel:<?php echo carbon_get_theme_option('phone_one'); ?>" title="phone number"><?php echo carbon_get_theme_option('phone_one'); ?></a>
        <div class="social-wrapper"><a href="<?php echo carbon_get_theme_option('link_fb'); ?>" title="facebook"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M24.2629 17.6691H21.5659V15.9002C21.5659 15.236 22.0062 15.0811 22.3163 15.0811C22.6257 15.0811 24.2195 15.0811 24.2195 15.0811V12.1608L21.5984 12.1506C18.6887 12.1506 18.0265 14.3286 18.0265 15.7224V17.6691H16.3438V20.6783H18.0265C18.0265 24.5401 18.0265 29.1932 18.0265 29.1932H21.5659C21.5659 29.1932 21.5659 24.4943 21.5659 20.6783H23.9542L24.2629 17.6691Z" fill="#3ECC29" />
              <circle cx="20" cy="20" r="19.5" stroke="#3ECC29" /></svg></a><a href="<?php echo carbon_get_theme_option('link_insta'); ?>" title="instagram"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M20.1991 16.0116C17.6588 16.0116 15.554 18.0801 15.554 20.6568C15.554 23.2334 17.6225 25.3019 20.1991 25.3019C22.7757 25.3019 24.8443 23.1971 24.8443 20.6568C24.8443 18.1164 22.7394 16.0116 20.1991 16.0116ZM20.1991 23.6326C18.5661 23.6326 17.2233 22.2898 17.2233 20.6568C17.2233 19.0237 18.5661 17.681 20.1991 17.681C21.8322 17.681 23.1749 19.0237 23.1749 20.6568C23.1749 22.2898 21.8322 23.6326 20.1991 23.6326Z" fill="#3ECC29" />
              <path d="M25.0258 16.9552C25.607 16.9552 26.0782 16.4841 26.0782 15.9028C26.0782 15.3216 25.607 14.8504 25.0258 14.8504C24.4446 14.8504 23.9734 15.3216 23.9734 15.9028C23.9734 16.4841 24.4446 16.9552 25.0258 16.9552Z" fill="#3ECC29" />
              <path d="M27.7476 13.181C26.8041 12.2011 25.4613 11.6931 23.9371 11.6931H16.4613C13.3041 11.6931 11.1992 13.7979 11.1992 16.9552V24.3947C11.1992 25.9552 11.7073 27.2979 12.7234 28.2778C13.7033 29.2213 15.0097 29.6931 16.4976 29.6931H23.9008C25.4613 29.6931 26.7678 29.185 27.7113 28.2778C28.6912 27.3342 29.1992 25.9915 29.1992 24.431V16.9552C29.1992 15.431 28.6912 14.1245 27.7476 13.181ZM27.6024 24.431C27.6024 25.556 27.2032 26.4632 26.55 27.0802C25.8968 27.6971 24.9895 28.0237 23.9008 28.0237H16.4976C15.4089 28.0237 14.5016 27.6971 13.8484 27.0802C13.1952 26.427 12.8686 25.5197 12.8686 24.3947V16.9552C12.8686 15.8665 13.1952 14.9592 13.8484 14.306C14.4653 13.6891 15.4089 13.3624 16.4976 13.3624H23.9734C25.0621 13.3624 25.9694 13.6891 26.6226 14.3423C27.2395 14.9955 27.6024 15.9028 27.6024 16.9552V24.431Z" fill="#3ECC29" />
              <circle cx="20" cy="20" r="19.5" stroke="#3ECC29" /></svg></a><a href="<?php echo carbon_get_theme_option('link_youtube'); ?>" title="youtube"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M29.9376 16.0202C29.9376 16.0202 29.7407 14.6486 29.1368 14.0443C28.3713 13.2517 27.5127 13.2479 27.1191 13.2015C24.3011 13 20.0738 13 20.0738 13H20.0648C20.0648 13 15.8377 13 13.0194 13.2015C12.6258 13.2479 11.7677 13.2517 11.0018 14.0443C10.3978 14.6486 10.2014 16.0202 10.2014 16.0202C10.2014 16.0202 10 17.631 10 19.2417V20.7521C10 22.3626 10.2014 23.9733 10.2014 23.9733C10.2014 23.9733 10.3978 25.345 11.0018 25.9492C11.7677 26.7421 12.774 26.7167 13.2222 26.7998C14.8335 26.9527 20.0693 27 20.0693 27C20.0693 27 24.3011 26.9936 27.1191 26.7923C27.5127 26.7459 28.3713 26.7421 29.1368 25.9492C29.7407 25.345 29.9376 23.9733 29.9376 23.9733C29.9376 23.9733 30.1386 22.3626 30.1386 20.7521V19.2417C30.1386 17.631 29.9376 16.0202 29.9376 16.0202ZM17.9903 22.5818L17.9894 16.9892L23.4309 19.7951L17.9903 22.5818Z" fill="#3ECC29" />
              <circle cx="20" cy="20" r="19.5" stroke="#3ECC29" /></svg></a></div><a class="terms" href="#" title="Пользовательское соглашение">Пользовательское соглашение</a>
        <p class="rights">© 2019 Борса. Все права защищены.</p>
      </div>
    </div>
    <!--END Header burger menu-->
    <!--START Header sub menu-->
    <div class="header-submenu-wrapper dnone">
      <div class="submenu-wrapper">
        <ul class="flex left-part">
          <li><a href="#" title="menu">Строповые мягкие контейнеры</a></li>
          <li><a href="#" title="menu">Ленточные мягкие контейнеры</a></li>
          <li><a href="#" title="menu">Вентиляционные мягкие контейнеры (Овощные)</a></li>
          <li><a href="#" title="menu">Вагонный вкладыш</a></li>
          <li><a href="#" title="menu">Лайнер-Бэги</a></li>
        </ul>
        <div class="line"></div>
        <ul class="flex right-part">
          <li><a href="#" title="menu">Полиэтиленовые вкладыши в мягкие контейнеры</a></li>
          <li><a href="#" title="menu">Полипропиленовая ткань</a></li>
          <li><a href="#" title="menu">Швейная нить</a></li>
          <li><a href="#" title="menu">Ленты, стропы</a></li>
          <li><a href="#" title="menu">Полипропиленовый шпагат</a></li>
        </ul>
      </div>
    </div>
    <!--END Header sub menu-->
    <!--END header-->
    <!--START Request menu-->
    <div class="request-menu-wrapper hidden visuallyhidden">
      <div class="content-wrapper content-wrapper-hidden"><img class="close" src="<?PHP bloginfo('template_url');?>/img/closesort.svg" alt="close">
        <h6>Свяжитесь с нами или оставьте заявку</h6>
        <div class="contacts-wrapper"><a href="tel<?php echo carbon_get_theme_option('phone_one'); ?>"><?php echo carbon_get_theme_option('phone_one'); ?></a><a href="mailto:<?php echo carbon_get_theme_option('email'); ?>u"><?php echo carbon_get_theme_option('email'); ?></a></div>
        <div class="form-wrapper">
          <form>
            <div class="inputs-wrapper"><input type="text" name="name" placeholder="Ваше имя" required="true"><input type="email" name="name" placeholder="Ваш E-mail" required="true"><input type="number" name="name" placeholder="Ваш телефон" required="true"></div><textarea name="message" placeholder="Сообщение" required="true"></textarea>
            <footer class="form-footer">
              <div class="checkbox-wrapper"><label><input class="checkbox" type="checkbox"><span class="checkbox-custom"></span><span class="label">Я принимаю <a href="#" title="title" target="_blank">условия передачи информации</a></span></label></div><button class="btn-more" type="submit">Отправить сообщение</button>
            </footer>
          </form>
        </div>
      </div>
    </div>
    <!--END Request menu-->
