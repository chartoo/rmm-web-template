<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find your rooms | Make your properties</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/slick.css">
    <link rel="stylesheet" href="/css/first-section.css">
    <link rel="stylesheet" href="/css/rmm.css">
    <link rel="stylesheet" href="/css/circle-connect.css">
    <link rel="stylesheet" href="/css/show-by-city.css">
    <link rel="stylesheet" href="/css/fontawesome.css">
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
    @stack('styles')
</head>
<body>
    @include('web.partials.navbar')
<section class="bg-light">
    
    @yield('content')

</section>
   
@include('web.partials.footer');
</body>
<script>
    var googleClientID = "{{ env("GOOGLE_CLIENT_ID") }}";
    var facebookClientID = "{{ env("FACEBOOK_CLIENT_ID") }}";
    var linedinClientID = "{{ env("LINKEDIN_CLIENT_ID") }}";
</script>
<script src="/js/jquery-3.5.1.slim.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/popper.min.js"></script>
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

    });
   
</script>
@stack('scripts')
</html>