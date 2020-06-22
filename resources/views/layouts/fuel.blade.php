<!DOCTYPE html>
<html lang="en">
<head>
    <title>Composition</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/5b60663aaf.js" crossorigin="anonymous"></script>
   {{-- <script src="js/vue.js" ></script>
    <script src="js/script.js" ></script>--}}
    <script src="{!! asset('js/app.js') !!}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('css/navbar-top-fixed.css') }}"rel="stylesheet" type="text/css" >

</head>
<body>
<!--Navbar-->
<nav class=" navbar-expand-md  navbar navbar-dark bg-primary">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="#">Navbar</a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
            aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home

                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>

            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>

        </ul>
        <!-- Links -->

        <form class="form-inline">
            <div class="md-form my-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            </div>
        </form>
    </div>
    <!-- Collapsible content -->

</nav>
<!--/.Navbar-->
<div class="container" >
    <div class="row">
        <div class="col-sm-3">
            <p>menu</p>

            <div class="dump  border  rounded  shadow ">

                <ul class="list-group">
                    <li class="list-group-item"><a href="/notes">Главная страница</a></li>
                    <li class="list-group-item"><a href="notes/create">Новая запись</a></li>

                </ul>
            </div>


        </div>
        <div class="col-sm-9">
            <p>adminpanel</p>

@yield('content')
