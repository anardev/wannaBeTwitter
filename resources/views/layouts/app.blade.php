<!DOCTYPE html>
<html lang="hr">
<head>
    @include('pages.partials.head')
</head>
<body id="app-layout">

@include('pages.partials.menu')
@yield('content')
@include('pages.partials.footer')

</body>
</html>
