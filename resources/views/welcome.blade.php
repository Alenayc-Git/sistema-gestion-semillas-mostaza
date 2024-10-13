<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Sistema de gestión para la tienda naturista semillas de mostaza" />
    <meta name="author" content="Jonatan Carrillo Jhon Murcía" />
    <title>Sistema de venta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body class="vh-100 z-1 bg-light">

    <!--Barra de navegación--->
    <nav class="navbar navbar-expand-lg navbar-light bg-light  z-1 ">
        <div class="container-fluid">
            <!---Marca navegación-->
            <a class="navbar-brand text-dark" href="{{route('panel')}}">
                <img src="{{ asset('assets/img/leaf-outline.svg') }}" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
                Sistema de gestión
            </a>
            <!----Lista de opciones del menú-->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-dark" aria-current="page" href="{{route('panel')}}">Inicio</a>
                    </li>
                </ul>

                <form class="d-flex" action="{{route('login')}}" method="get">
                    <button class="btn btn-success" type="submit">Iniciar sesión</button>
                </form>

            </div>
        </div>
    </nav>

    <img src="{{asset('assets/img/Fondo.jpg')}}" class="d-block vh-100 z-0 fixed-top position-absolute top-50 start-50 translate-middle" alt="banner de invitacion">


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>