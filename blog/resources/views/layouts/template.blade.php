<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    
    <!--style-->
    <!--<link href="http://localhost/Proy-Laravel/blog/resources/css/style.css" rel="stylesheet">-->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>My Blogs</title>
    
</head>
<body>
<!--para crear el nav mostrable y escondible-->
<header id="header" class="header">
    <div class="menu">
        <div class="logo">
            <span>LOGO</span>
        </div>
        <nav class="links-menu">       
            <a href="{{route('departamentos')}}">Crear Departamento</a>
            <a href="{{route('crearEmpleado')}}">Ingresar Trabajador</a>
            <a href="{{route('listadoDepartamentos')}}">Mostrar Departamentos</a>
            <a href="{{route('listadoEmpleados')}}">Mostrar Trabajadores</a>
        </nav>
    </div>       
</header>
<!--para crear el nav mostrable y escondible-->
    <div class="container mt-5 pt-5">
    @yield('seccion')
    </div>

<footer class="footer text-center" id="footer">
    <p>mi footer</p>
</footer>

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<!--jquery-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>