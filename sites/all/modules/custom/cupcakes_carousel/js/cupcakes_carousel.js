(function ($, Drupal) {
    Drupal.behaviors.images_carousel = {
        attach: function (context, settings) {
            $('.carousel-field').slick({autoplay: true, centerMode: true, dots: true, fade: true, speed: 120})
        }
    };
})(jQuery, Drupal);