<!DOCTYPE html>
<html lang="en">
@include('front.partial.head')

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
@include('front.partial.spinner')
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
           @include('front.partial.navbar')

@yield('hero')
        </div>
        <!-- Navbar & Hero End -->

@yield('content')

        <!-- Footer Start -->
@include('front.partial.footer')
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
 @include('front.partial.scripts')
</body>

</html>