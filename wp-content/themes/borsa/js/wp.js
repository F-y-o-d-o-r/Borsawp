jQuery(document).ready(function($) {
  setTimeout(sent, 1000);
  function sent(params) {
    if ($('.questions .wpcf7-form').hasClass('sent')) {
      $('.popup-wrapper').removeClass('dnone');
    }
    if ($('main .wpcf7-form').hasClass('sent')) {
      $('.contact-page-popup-wrapper').removeClass('dnone');
    }
    if ($('.request-menu-wrapper .content-wrapper .wpcf7-form').hasClass('sent')) {
      $('.contact-page-popup-wrapper').removeClass('dnone');
    }
  }
});
