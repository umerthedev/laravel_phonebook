<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.css')

</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

    <!-- PRE LOADER -->
    <section class="preloader">
        <div class="spinner">

            <span class="spinner-rotate"></span>

        </div>
    </section>


    <!-- MENU -->
    @include('home.header')


    <!-- HOME -->
    @include('home.slider')




    <!-- contact -->
    @include('home.yourcon')


    <!-- TESTIMONIAL -->

    @include('home.review')


    <!-- FOOTER -->
    @include('home.footer')


    <!-- SCRIPTS -->
    @include('home.script')

</body>

</html>
