/*!
Julia Lieberman website
    * Start Bootstrap - Creative v6.0.1 (https://startbootstrap.com/themes/creative)
    * Copyright 2013-2020 Start Bootstrap
    * Licensed under MIT (https://github.com/BlackrockDigital/startbootstrap-creative/blob/master/LICENSE)
    */


const BASEIMAGEPATH = "../dist/assets/img/";

(function($) {
  "use strict";
  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top - 72)
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

  // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });

  // Activate scrollspy to add active class to navbar items on scroll
  $('body').scrollspy({
    target: '#mainNav',
    offset: 75
  });

  // Collapse Navbar
  var navbarCollapse = function() {
    if ($("#mainNav").offset().top > 100) {
      $("#mainNav").addClass("navbar-scrolled");
    } else {
      $("#mainNav").removeClass("navbar-scrolled");
    }
  };
  // Collapse now if page is not at top
  navbarCollapse();
  // Collapse the navbar when page is scrolled
  $(window).scroll(navbarCollapse);

})(jQuery); // End of use strict

function populateModal(modalID)
{
  let filePath=BASEIMAGEPATH;
  let totalImages=0;
  let fileName="";
  switch(modalID){
    case "futaleufu":
      filePath+="patagucciWatermark/";
      totalImages=25;
      fileName="finalpatagucci";
      break;
    case "astro":
      filePath+="stars/";
      totalImages=24;
      fileName="stars";
      break;
    case "lucy":
      filePath+="portraitsWatermark/lucy/";
      totalImages=14;
      fileName="lucy";
      break;
    case "maria":
      filePath+="portraitsWatermark/maria/";
      totalImages=7;
      fileName="maria";
      break;
    case "sadie":
        filePath+="portraitsWatermark/sadie/";
        totalImages=20;
        fileName="sadie";
        break;
    case "landscape":
      filePath+="landscape/";
      totalImages=25;
      fileName="landscape";
      break;
    case "random":
      filePath+="random/";
      totalImages=15;
      fileName="random";
      break;
    default:
      break;
  }

  populateModalHelper(filePath, fileName, totalImages);
}

function populateModalHelper(filePath, fileName, totalImages)
{
  if(totalImages<=1) return;
  var list=document.getElementById("myGalleryContent");
  list.innerHTML="";
  list.innerHTML+="<div class=\"carousel-item active\"> <img class = \"d-block w-100\" src=\""+filePath+fileName+"-1.jpg\" alt=\"item0\"></div>";
  for(i=2; i<=totalImages; i++)
  {
    list.innerHTML+="<div class=\"carousel-item\"> <img class = \"d-block w-100\" src=\""+filePath+fileName+"-"+i+".jpg\" alt=\"item"+(i-1)+"\"></div>"
  }
}