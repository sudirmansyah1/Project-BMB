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
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: false,
                autoplaySpeed: 2000,
                arrows: true,
                centerMode: true,

                prevArrow:"<img src='assets/img/program/button/prev.png' class='slick-prev pull-left' style='width: 70px !important; height: 70px !important; z-index: 1 !important;'>",
                nextArrow:"<img src='assets/img/program/button/next.png' class='slick-next pull-left' style='width: 70px !important; height: 70px !important;'>",
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
        $(document).ready(function() {
            // executes when HTML-Document is loaded and DOM is ready
            

            $( ".card" ).hover(
            function() {
                $(this).removeClass('card-hover').css('cursor', 'pointer'); 
            }, function() {
                $(this).addClass('card-hover');
            }
            );
            
            // document ready  
        });

        function Dropdownlay() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("Dropdownlay");
          
            if (dots.style.display === "none") {
              dots.style.display = "inline";
              
              moreText.style.display = "none";
            } else {
              dots.style.display = "none";
              
              moreText.style.display = "inline";
            }
          }

          function Dropdownlay2() {
            var dots2 = document.getElementById("dots2");
            var moreText2 = document.getElementById("more2");
            var btnText2 = document.getElementById("Dropdownlay2");
          
            if (dots2.style.display === "none") {
              dots2.style.display = "inline";
              
              moreText2.style.display = "none";
            } else {
              dots2.style.display = "none";
              
              moreText2.style.display = "inline";
            }
          }

          function Dropdownlay3() {
            var dots3 = document.getElementById("dots3");
            var moreText3 = document.getElementById("more3");
            var btnText3 = document.getElementById("Dropdownlay3");
          
            if (dots3.style.display === "none") {
              dots3.style.display = "inline";
              
              moreText3.style.display = "none";
            } else {
              dots3.style.display = "none";
              
              moreText3.style.display = "inline";
            }
          }

          function Dropdownlay4() {
            var dots4 = document.getElementById("dots4");
            var moreText4 = document.getElementById("more4");
            var btnText4 = document.getElementById("Dropdownlay4");
          
            if (dots4.style.display === "none") {
              dots4.style.display = "inline";
              
              moreText4.style.display = "none";
            } else {
              dots4.style.display = "none";
              
              moreText4.style.display = "inline";
            }
          }

          