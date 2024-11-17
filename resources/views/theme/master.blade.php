<!DOCTYPE html>
<html lang="en">

    <!--================Head Menu Area =================-->
    @include('theme.partials.head')
<body>
    <!--================Header Menu Area =================-->
    @include('theme.partials.header')
    <!--================Header Menu Area =================-->

  
      @yield('content')
 
    <!--================ Start Footer Area =================-->
    @include('theme.partials.footer')
    <!--================ End Footer Area =================-->


    <!--================ scripts links =================-->
    @include('theme.partials.scripts')
</body>

</html>
