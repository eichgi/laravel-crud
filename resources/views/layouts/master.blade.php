<!doctype html>
<html lang="es">
@include('includes.head')
<body>
@include('includes.navbar')

@yield('content')

<footer></footer>
<script src="{{url('js/app.js')}}"></script>
</body>
</html>