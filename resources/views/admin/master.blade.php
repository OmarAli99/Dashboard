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

  <script>
            function confirmDelete(id)
            {
                if(confirm('Are you sure want to delete this record ?'))
            {
                document.getElementById('deleteForm-'+id).submit();
               
            }
            }

        </script>
  </body>
</html>