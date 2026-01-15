<!doctype html>
<html lang="en">
@include('admin.partial.head')
  <body class="vertical  light {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'rtl' : '' }}">
    <div class="wrapper">
@include('admin.partial.navbar')
@include('admin.partial.sidebar')

      <main role="main" class="main-content">
        @yield('content')

      </main> <!-- main -->
    </div> <!-- .wrapper -->
 @include('admin.partial.scripts')
  </body>
</html>