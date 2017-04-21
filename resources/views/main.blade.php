<!DOCTYPE html>
<html lang="en">
<head>
	@include('partials._head')
</head>
<body>

@include('partials._header')

<div class="container">

    @yield('content')

    @include('partials._footer')

</div>

@include('partials._javascripts')

@yield('javascripts')

</body>
</html>
