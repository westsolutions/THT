import $ from 'jquery';
window.$ = window.jQuery = $;
import 'bootstrap/dist/js/bootstrap';


$(document).ready(function(){
  var title = $("title").text();
  console.log(title + " is ready.");

  $(function() {
    var navbar = $(".navbar");
    var subNavbar = $(".sub-navbar");
    $(window).scroll(function() {    
      var scroll = $(window).scrollTop();
  
      if (scroll >= 44) {
          navbar.addClass("header-scroll");
          subNavbar.hide();
      } else {
          navbar.removeClass("header-scroll");
          subNavbar.show();
      }
    });
  });
});
