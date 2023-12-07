<!DOCTYPE html>
<html lang="es-BO" dir="ltr" class="light">

<head>
    @include('backend.layouts.meta')
    @include('backend.layouts.styles')
</head>

<body class=" font-inter dashcode-app" id="body_class">
    <main class="app-wrapper">
        @yield('content')
        @include('backend.layouts.scripts')
    </main>
</body>

</html>