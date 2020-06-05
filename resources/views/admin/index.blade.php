
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Main Composition</title>



    <!-- Bootstrap core CSS   <link href="{{ asset('css/.css') }}" rel="stylesheet"> -->
    <link href="{{asset('css/bootstrap.css') }}"rel="stylesheet" >

    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>

    <!-- Favicons -->

    <!-- Custom styles for this template -->
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <link href="{{asset('css/navbar-top-fixed.css') }}"rel="stylesheet" >
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Fixed navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<main role="main" class="container-fluid">
    
<div class="row mt-3">
        <div class="col-lg-8 rounded bg-info ">
            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error autem obcaecati culpa et temporibus magnam suscipit vel ratione eligendi! Esse quo, ab nemo optio minima laborum molestiae iusto similique! Nihil.</h3>
        </div>
        <br>
        <div class="col-lg-3  rounded bg-info ">
            <h3><div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam alias, iusto architecto ab. At quae commodi, consequuntur sed ab laborum aspernatur laudantium praesentium quia totam in velit fugiat, magni cumque.</div>
            <div>Quae dolores ex obcaecati assumenda, eaque ad laboriosam consectetur minus quis hic numquam a vero quidem nesciunt, necessitatibus, incidunt, voluptate soluta neque! Deleniti, ad ipsam eum optio quisquam, aut dolores?</div>
            <div>Possimus amet voluptate ea cumque id culpa laboriosam, numquam debitis, harum asperiores facilis consequatur, perferendis. Possimus ipsam ab quos eaque, sapiente quo id cumque mollitia provident. Minus, veritatis nulla. Aspernatur.</div></h3>
            
        </div>
    </div>

   
</main>
</body>
</html>
