(function ($, Drupal, window, document) {

  'use strict';

  // Attaching the Sharethis icons to Slideshows as well.
  Drupal.behaviors.studyAlert = {
    attach: function (context, settings) {
      $(window, context).load(function () {
        alert('I am here');
      });
    }
  };

})(jQuery, Drupal, this);