<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Store</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js"
        integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Prompt:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body class="font-poppins">
    <div id="app">
        
        <router-view></router-view>
        <section >
           
           
           
        </section>
        <section class="mt-20">
            <footer-component></footer-component>
        </section>
    </div>
</body>
<script>
    $(document).ready(function() {
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items: 1,
            loop: true,
            nav: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            navText: [
                "<ion-icon name='chevron-back-outline' class='text-grey-main hover:text-sec-primary' size='large'></ion-icon>",
                "<ion-icon name='chevron-forward-outline' class='text-grey-main hover:text-sec-primary' size='large'></ion-icon>"
            ],
            // navText:["<div class='nav-btn prev-slide'></div>","<div class='nav-btn next-slide'></div>"],
        });
        $('.owl-nav').addClass("container mx-auto");
    });
</script>
<script type="text/javascript" src="{{ asset('css/OwlCarousel2-2.3.4/dist/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
<script>

</script>

</html>
