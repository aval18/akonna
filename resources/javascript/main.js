// Mobile Nav
function openNav() {
  document.getElementById("mobile").style.width = "100%";
}

function closeNav() {
  document.getElementById("mobile").style.width = "0%";
  document.getElementById("mobileShop").style.width = "0%";
}

// Shop nav

function openShop() {
  document.getElementById("mobileShop").style.width = "87%";
}

function closeShop() {
  document.getElementById("mobileShop").style.width = "0%";
}

// Activate Carousel
$(document).ready(function() {
  jQuery.fn.carousel.Constructor.TRANSITION_DURATION = 2000  // 2 seconds
});

$(document).ready(function(){
  // Activate Carousel
  $("#myCarousel1").carousel({interval: 7000});

  // Enable Carousel Indicators
  $(".item1").click(function(){
    $("#myCarousel1").carousel(0);
  });
  $(".item2").click(function(){
    $("#myCarousel1").carousel(1);
  });
  $(".item3").click(function(){
    $("#myCarousel1").carousel(2);
  });
  $(".item4").click(function(){
    $("#myCarousel1").carousel(3);
  });
  $(".item5").click(function(){
    $("#myCarousel1").carousel(4);
  });

  // Enable Carousel Controls
  $(".left").click(function(){
    $("#myCarousel1").carousel("prev");
  });
  $(".right").click(function(){
    $("#myCarousel1").carousel("next");
  });
});

// Activate Carousel
$(document).ready(function(){
  // Activate Carousel
  $("#myCarousel2").carousel({interval: 7000});

  // Enable Carousel Indicators
  $(".item1").click(function(){
    $("#myCarousel2").carousel(0);
  });
  $(".item2").click(function(){
    $("#myCarousel2").carousel(1);
  });
  $(".item3").click(function(){
    $("#myCarousel2").carousel(2);
  });

  // Enable Carousel Controls
  $(".left").click(function(){
    $("#myCarousel2").carousel("prev");
  });
  $(".right").click(function(){
    $("#myCarousel2").carousel("next");
  });
});
