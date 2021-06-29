<!DOCTYPE html>
<html lang="en">
<head>
    <title>Raízes da Infância</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
</head>
<body>

<div class="jumbotron">
    <div class="container logo">
        <p>Raízes da Infância</p>
    </div>
</div>

<div class="container content">
    <div class="row">
        <div class="col-sm-3">
            <div class="menu-lateral">
                <p>NAVEGAÇÃO</p>
                <ul class="nav navbar-expand-sm nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="pill" href="#home"><b>HOME</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#menu1"><b>SOBRE MIM</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#menu2"><b>SERVIÇOS</b></a>
                    </li>
                </ul>
            </div>
            <div class="sub-menu-lateral">
                <h4>Conteúdo 1</h4>
                <p>Psicologia para Crianças e adolescentes.</p>
            </div>
            <div class="sub-menu-lateral">
                <h4>Conteúdo 2</h4>
            </div>
        </div>
        <!-- main content -->
        <div class="col-sm-9 main-content">
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- main content home -->
                <div id="home" class="container tab-pane active"><br>
                    <!-- carousel -->
                    <div id="demo" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                        </ul>

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="imgs/carousel/img1.jpg" alt="Los Angeles" width="1100" height="500">
                        </div>
                        <div class="carousel-item">
                            <img src="imgs/carousel/img2.jpg" alt="Chicago" width="1100" height="500">
                        </div>
                        <div class="carousel-item">
                            <img src="imgs/carousel/img3.jpg" alt="New York" width="1100" height="500">
                        </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
                <!-- main content 1 -->
                <div id="menu1" class="container tab-pane fade"><br>
                    <h3>Menu 1</h3>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <!-- main content 2 -->
                <div id="menu2" class="container tab-pane fade"><br>
                    <h3>Menu 2</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="jumbotron-footer">
    <div class="row">
        <div class="col-sm-3">
            <b>UM POUCO SOBRE NÓS</b>
        </div>
        <div class="col-sm-3">
            <b>NAVEGAÇÃO</b>
        </div>
        <div class="col-sm-3">
            <b>NOSSOS SERVIÇOS</b>
        </div>
        <div class="col-sm-3">
            <b>COMPRE AGORA</b>
        </div>
    </div>
</div>

</body>
</html>
