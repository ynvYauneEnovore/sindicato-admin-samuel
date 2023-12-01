<!DOCTYPE html>
<html lang="en" class="scroll-smooth group" data-sidebar="brand" dir="ltr">
    <head>
    @include('backend.layouts.meta')
    @include('backend.layouts.auth.styles')
    </head>
    
    <body data-layout-mode="light"  data-sidebar-size="default" data-theme-layout="vertical" class="bg-[#EEF0FC] dark:bg-gray-900">
    
    <div class="relative flex flex-col justify-center min-h-screen overflow-hidden">
        @yield('content')
    </div>

    @yield('script')
    @include('backend.layouts.auth.scripts')
    <script src="assets-admin/js/lordico.js"></script>
    </body>
</html>

     
