$(document).ready(function(){

    $('.deal-slick').slick({
        autoplay:true,
        autoplaySpeed: 2000,

        slidesToShow: 3,
        slidesToScroll:1,
        arrows:true,
        nextArrow: $('#custom-next-slick'),
        prevArrow: $('#custom-prev-slick'),
        dots: false,

        responsive: [{
            breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                     infinite: true
                     }
                    },{
            breakpoint: 600,
                settings: {
                slidesToShow: 2,
                dots: false
                }
                },{ breakpoint: 400,
                settings: {
                slidesToShow: 1,
                dots: false
                }
                },
            ]
    });
    $('.deal-slick').on('afterChange', function(event, slick, currentSlide, nextSlide){
        var start=currentSlide+1;
        var end=start+2;
        end=end>slick.slideCount?(end-slick.slideCount):end;
        $('#deail-slider-count').html(start+"-"+end +" rooms / "+slick.slideCount+" rooms");
    });
    $('#custom-next-slick').click(function(){
        $('.deal-slick').prev().slick('slickNext');
        });
    $('#custom-prev-slick').click(function(){
        $('.deal-slick').prev().slick('slickPrev');
        });
    $('#custom-prev-slick-slide').click(function(){

    });
    $('#custom-next-slick-slide').click(function(){
       
    });
})