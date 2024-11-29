<!doctype html>
<html class="no-js" lang="en">
@include('layouts.head')

<body>
    <!-- page wrapper -->
    <div class="page-wrapper">
        <!-- Header Main Area -->
        @include('layouts.header')
        <!-- Header Main Area End Here -->
        <!-- page content -->
        @yield('content')
        <!-- page content End -->
        <!-- footer -->
        @include('layouts.footer')
        <!-- footer End -->
    </div>
    <!-- page wrapper End -->
    <!-- Scroll To Top -->
    <div class="pbmit-progress-wrap">
        <svg class="pbmit-progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>
    <!-- Scroll To Top End -->
    @include('layouts.scripts')
</body>

</html>
