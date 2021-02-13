$(document).ready(function(){
  $(this).scrollTop(0);
});


$(document).ready(function(){       
  var scroll_pos = 0;
  $(document).scroll(function() { 
      scroll_pos = $(this).scrollTop();
      if(scroll_pos > 90) {
          $("#main-nav-wrap").css('background-color', '#9FECFF');
      } else {
          $("#main-nav-wrap").css('background-color', 'inherit');
      }
  });
});

$(".scrolltotop").click(function(e) {
  e.preventDefault();
  $("html").animate({ scrollTop: 0 }, "slow");
});

$("#hamburger-wrap").click( function() {
    $(".burger-open").toggleClass("burger-close");
$(".responsive-nav").toggleClass("mobile-nav");    
$(".navagation-wrap").toggleClass("mobile-wrap");          

}); 


$(".hack").click( function() {
$(".responsive-nav").toggleClass("mobile-nav");
});   






