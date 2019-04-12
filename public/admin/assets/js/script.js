$(document).ready(function() {
	$('.fancy').fancybox();
});

// function reponsive_filemanager_callback(field_id){
// 	var image = $('#' + field_id).val();
// 	// $('#prev_img').attr('src', image);
// 	alert('update'+ field_id + 'with' + image);
// }

// function responsive_filemanager_callback(field_id){
// 	console.log(field_id);
// 	var url=jQuery('#'+field_id).val();
// 	alert('update '+field_id+" with "+url);
// 	//your code
// }
// jquery.observe_field.js


(function($) {
  'use strict';

  $.fn.observe_field = function(frequency, callback) {

    frequency = frequency * 1000; // translate to milliseconds

    return this.each(function() {
      var $this = $(this);
      var prev = $this.val();
      var prevChecked = $this.prop('checked');

      var check = function() {
        if (removed()) {
          // if removed clear the interval and don't fire the callback
          if (ti)
            clearInterval(ti);
          return;
        }

        var val = $this.val();
        var checked = $this.prop('checked');
        if (prev != val || checked != prevChecked) {
          prev = val;
          prevChecked = checked;
          $this.map(callback); // invokes the callback on $this
        }
      };

      var removed = function() {
        return $this.closest('html').length == 0;
      };

      var reset = function() {
        if (ti) {
          clearInterval(ti);
          ti = setInterval(check, frequency);
        }
      };

      check();
      var ti = setInterval(check, frequency); // invoke check periodically

      // reset counter after user interaction
      $this.bind('keyup click mousemove', reset); // mousemove is for selects
    });

  };

})(jQuery);

$(function() {
    // Executes a callback detecting changes with a frequency of 1 second
    $("#none_img").observe_field(1, function( ) {
        // alert('Change observed! new value: ' + this.value );
        $('#prev_img').attr('src',this.value).show();

    });
});

