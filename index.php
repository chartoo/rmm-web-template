<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find your rooms | Make your properties</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/first-section.css">
    <link rel="stylesheet" href="/css/rmm.css">
    <link rel="stylesheet" href="/css/slick.css">
    <!-- <link rel="stylesheet" href="/css/slick-theme.css"> -->

<link rel="stylesheet" type="text/css" href="/css/daterangepicker.css" />
    <style>
    @font-face {
        font-family: 'Playfair Display', serif;
        font-family: 'Roboto', sans-serif;
        src: url('/fonts/Rototo/*') format('embedded-opentype');
        src: url('/fonts/Playfair/*');
    }
    .roboto{
        font-family: 'Roboto', sans-serif;
    }
    .playfair{
        font-family: 'Playfair Display', serif;
    }
    </style>
</head>
<body>
<section class="bg-light">
<?php include('components/navbar.php');?>
<?php include('components/section-first.php'); ?>
<?php include('components/section-second.php');?>
<div class="container">
    <div class="row py-4">
        <div class="col-3 px-0">
            <div class="bg-white border rounded p-3  text-center  pb-5 shadow">
                <h3 class="text-center append-border">
                    <b class="roboto ">Today's detals</b>
                    <hr class="border-half">
                    <br>
                </h3>
              
                <p class="text-justify py-4 playfair">
                   <i> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat culpa in dolorum aut labore dolore expedita.</i>
                </p>
                <a href="#" class="text-decoration-none"><h3><b class="text-primary" style="color:#6177EB;">See All </b><img src="/images/icons/right-arrow-blue.png" alt=""></h3></a>
            </div>
        </div>
        <div class="col-md-9">
            <?php include('components/section-deals.php') ?>
        </div>
    </div>
</div>
</section>
   
</body>
<script src="/js/jquery-3.5.1.slim.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/fontawesome.js"></script>
<script src="/js/slick.js"></script>

<script type="text/javascript" src="/js/moment.min.js"></script>
<script type="text/javascript" src="/js/daterangepicker.min.js"></script>
<script>
    $(document).ready(function(){
        var date = new Date();
        $('#daterange').daterangepicker({
            autoUpdateInput: false,
            minDate:moment(date).add(0,'days'),
            locale: {
                    cancelLabel: 'Clear'
                    }
        })
        .on('apply.daterangepicker hide.daterangepicker', function(ev, picker) {
                var start = moment(picker.startDate);
                var end   = moment(picker.endDate);
                var diff =end.diff(start, 'days'); 
                $(this).val(picker.startDate.format('ddd, DD MMM') + '  |  ' + picker.endDate.format('ddd, DD MMM')+'   ('+(diff+1)+'-days,'+(diff)+'-nights)');
               
                
        }).on('cancel.daterangepicker', function(ev, picker) {
                $(this).val('');
            });

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
    });
</script>
</html>