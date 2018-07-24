import $ from 'jquery';
window.$ = window.jQuery = $;
import 'bootstrap/dist/js/bootstrap';


$(document).ready(function(){
  var title = $("title").text();
  console.log(title + " is ready.");

  $(function() {
    var mainNavbar = $(".main-navbar");
    var subNavbar = $(".sub-navbar");
    $(window).scroll(function() {    
      var scroll = $(window).scrollTop();
  
      if (scroll >= 44) {
          mainNavbar.addClass("header-scroll");
          subNavbar.hide();
      } else {
          mainNavbar.removeClass("header-scroll");
          subNavbar.show();
      }
    });
  });
});
