/* eslint-disable prefer-arrow-callback, no-mutable-exports */
/* eslint func-names: ["error", "never"] */
(function ($, Drupal) {
  /**
   * Example behavior.
   */
  Drupal.behaviors.global_example_theme = {
    attach: function (context, settings) { // eslint-disable-line no-unused-vars, object-shorthand
      $('h1').slideUp('slow');
    },
  };
}(jQuery, Drupal));
