<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!--   Head   -->
@include('layouts.frontend.head')
<!--   End Head   -->

<body>

 <!--   Header   -->
 @include('layouts.frontend.header')
 <!--   End Header   -->

  <main id="main">
    @yield('content')


  </main><!-- End #main -->

<!--   Footer   -->
@include('layouts.frontend.footer')
<!--   End Footer   -->

<!--   JS   -->
@include('layouts.frontend.js')
<!--   End JS  -->
</body>

</html>