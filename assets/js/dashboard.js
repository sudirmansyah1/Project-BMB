$(function () {
    $(window).on('scroll', function () {
        if ( $(window).scrollTop() > 10 ) {
            $('.navbar').addClass('active');
        } else {
            $('.navbar').removeClass('active');
        }
    });
});
function custom_template(obj){
    var data = $(obj.element).data();
    var text = $(obj.element).text();
    if(data && data['img_src']){
        img_src = data['img_src'];
        template = $("<span style='color:#55ddfc;'><img src=\"" + img_src + "\"/ class='roundselect-language'>" + text + "</span>");
        return template;
    }
}
var options = {
    'templateSelection': custom_template,
    'templateResult': custom_template,
    minimumResultsForSearch: -1
}
$('#id_select2_example').select2(options);

$(document).ready(function($) {
    $('.card-slider').slick({
        dots: false,
        infinite: true,
        speed: 500,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
        arrows: true,
        responsive: [{
        breakpoint: 600,
        responsive: [
          {
            breakpoint: 768,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 1
               }
              },
              {
                breakpoint: 360,
                settings: {
                  arrows: false,
                  centerMode: true,
                  centerPadding: '40px',
                  slidesToShow: 1
                   }
                  }
            ]
        }]
    });
});

function Dropdownlay() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("btn");
  
    if (dots.style.display === "inline") {
        dots.style.display = "none";
        btnText.innerHTML = "Sembunyikan <i class='fa fa-chevron-circle-up' aria-hidden='true'></i>";
        moreText.style.display = "inline";
    } else {
      dots.style.display = "inline";
      btnText.innerHTML = "Tampilkan <i class='fa fa-chevron-circle-down' aria-hidden='true'></i>";
      moreText.style.display = "none";
    }
  }

  function Dropdownlay2() {
    var dots = document.getElementById("dots2");
    var moreText = document.getElementById("more2");
    var btnText = document.getElementById("btn2");
  
    if (dots.style.display === "inline") {
        dots.style.display = "none";
        btnText.innerHTML = "Sembunyikan <i class='fa fa-chevron-circle-up' aria-hidden='true'></i>";
        moreText.style.display = "inline";
    } else {
      dots.style.display = "inline";
      btnText.innerHTML = "Tampilkan <i class='fa fa-chevron-circle-down' aria-hidden='true'></i>";
      moreText.style.display = "none";
    }
  }

  function Dropdownlay3() {
    var dots = document.getElementById("dots3");
    var moreText = document.getElementById("more3");
    var btnText = document.getElementById("btn3");
  
    if (dots.style.display === "inline") {
        dots.style.display = "none";
        btnText.innerHTML = "Sembunyikan <i class='fa fa-chevron-circle-up' aria-hidden='true'></i>";
        moreText.style.display = "inline";
    } else {
      dots.style.display = "inline";
      btnText.innerHTML = "Tampilkan <i class='fa fa-chevron-circle-down' aria-hidden='true'></i>";
      moreText.style.display = "none";
    }
  }
