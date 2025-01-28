<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.components.head')
</head>
<body>
   @include('layouts.components.header')

    @include('layouts.components.sidebar')

<main id="main" class="main">
@yield('content')
</main><!-- End #main -->
    @include('layouts.components.scripts')
</body>
</html>