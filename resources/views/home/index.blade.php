<!DOCTYPE html>
<html lang="en">

<head>
    @include('Home.css')

</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

    <!-- PRE LOADER -->
    <section class="preloader">
        <div class="spinner">

            <span class="spinner-rotate"></span>

        </div>
    </section>


    <!-- MENU -->
    @include('Home.header')


    <!-- HOME -->
    @include('Home.slider')




    <!-- contact -->
    @include('Home.yourcon')


    <!-- TESTIMONIAL -->

    @include('Home.review')


    <!-- FOOTER -->
    @include('Home.footer')


    <!-- SCRIPTS -->
    @include('Home.script')

</body>

</html>
