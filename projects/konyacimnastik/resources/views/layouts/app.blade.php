<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->

<head>
@include('partials.head')
</head>

<body class="body-bg blackbg">

@include('partials.header')
@include('partials.navbar')

@yield('content')

@include('partials.footer')
@include('partials.scripts')

</body>

</html>
