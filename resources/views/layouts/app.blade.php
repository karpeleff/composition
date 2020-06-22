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
{{--    <script src="js/vue.js" ></script>
    <script src="js/script.js" ></script>--}}
    <script src="{!! asset('js/app.js') !!}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('css/navbar-top-fixed.css') }}"rel="stylesheet" type="text/css" >

</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Composition</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/notes">Notes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>

        </ul>
        <form class="form-inline mt-2 mt-md-0" method="post" action="/notes/search" >
            {{ csrf_field() }}
            <input class="form-control mr-sm-2" type="text"  name="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
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
