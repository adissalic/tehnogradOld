/* ===================================
--------------------------------------
--------------------------------------
======================================*/

"use strict";

$(window).on("load", function() {
  /*------------------
		Preloder
	--------------------*/
  $(".loader").fadeOut();
  $("#preloder")
    .delay(400)
    .fadeOut("slow");
});

(function($) {
  /*------------------
		Navigation
	--------------------*/
  $(".main-menu").slicknav({
    appendTo: ".header-section",
    allowParentLinks: true
  });

  /*------------------
		Background Set
	--------------------*/
  $(".set-bg").each(function() {
    var bg = $(this).data("setbg");
    $(this).css("background-image", "url(" + bg + ")");
  });

  /*------------------
		BMI calculator
	--------------------*/
  function computeBMI() {
    // user inputs
    var height = Number(document.getElementById("bmi-hight").value);
    var weight = Number(document.getElementById("bmi-weight").value);
    var result = weight / (height * height);

    //Display result of calculation
    var output = Math.round(result * 100) / 100;
    if (output < 18.5) {
      document.getElementById("bmi-result").value = output + " (Underweight)";
    } else if (output >= 18.5 && output <= 25) {
      document.getElementById("bmi-result").value = output + " (Normal)";
    } else if (output >= 25 && output <= 30) {
      document.getElementById("bmi-result").value = output + " (Obese)";
    } else if (output > 30) {
      document.getElementById("bmi-result").value = output + " (Overweight)";
    } else {
      document.getElementById("bmi-result").value = output;
    }
  }

  $("#bmi-submit").on("click", function() {
    computeBMI();
  });

  /*------------------
		Accordions
	--------------------*/
  $(".panel-link").on("click", function(e) {
    $(".panel-link").removeClass("active");
    var $this = $(this);
    if (!$this.hasClass("active")) {
      $this.addClass("active");
    }
    e.preventDefault();
  });

  /*------------------
		Circle progress
	--------------------*/
  $(".circle-progress").each(function() {
    var cpvalue = $(this).data("cpvalue");
    var cpcolor = $(this).data("cpcolor");
    var cptitle = $(this).data("cptitle");
    var cpid = $(this).data("cpid");

    $(this).append(
      '<div class="' +
        cpid +
        '"></div><div class="progress-info"><h2>' +
        cpvalue +
        "%</h2><p>" +
        cptitle +
        "</p></div>"
    );

    if (cpvalue < 100) {
      $("." + cpid).circleProgress({
        value: "0." + cpvalue,
        size: 211,
        thickness: 5,
        fill: cpcolor,
        emptyFill: "rgba(0, 0, 0, 0)"
      });
    } else {
      $("." + cpid).circleProgress({
        value: 1,
        size: 211,
        thickness: 5,
        fill: cpcolor,
        emptyFill: "rgba(0, 0, 0, 0)"
      });
    }
  });
})(jQuery);

$(document).ready(function() {
  $(".customer-logos").slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1500,
    arrows: false,
    dots: false,
    pauseOnHover: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 4
        }
      },
      {
        breakpoint: 520,
        settings: {
          slidesToShow: 3
        }
      }
    ]
  });
});

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides((slideIndex += n));
}

function currentSlide(n) {
  showSlides((slideIndex = n));
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
}
