<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('img/icon.png') }}" type="image/gif" sizes="16x16">
    <title>Yamaha Bisma Mandiri</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="https://kit.fontawesome.com/78adb693c3.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('owl/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('owl/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>

<body>
    @include('section.header')
    @include('section.banner')
    @include('section.product-list')
    @include('section.featured')
    @include('section.sales')
    @include('section.footer')
    @include('section.contact-widget')
    @include('section.marketplace')
    
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('owl/owl.carousel.min.js') }}"></script>

    <script>
        $(document).ready(function () {
            $('.owl-carousel').owlCarousel({
                loop:true,
                responsiveClass:true,
                autoplay:true,
                autoplayTimeout:2000,
                autoplayHoverPause:true,
                responsive:{
                    0:{
                        items:2,
                        margin:25,
                        nav:true
                    },
                    600:{
                        items:3,
                        margin:10,
                        nav:false
                    }
                }
            })
        });

    </script>
</body>

</html>
