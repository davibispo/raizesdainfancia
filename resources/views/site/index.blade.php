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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>
<body>

<div class="jumbotron">
    <div class="row logo">
        <div class="col-sm-3">Karla Bispo</div>
        <div class="col-sm-3">Endereço</div>
        <div class="col-sm-3">
            <a class="link-redes" href="" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
            <a class="link-redes" href="" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
        </div>
        <div class="col-sm-3">
            <a class="link-telefone" href="https://web.whatsapp.com/send?phone=5582993487949" target="_blank">
                <i class="fab fa-whatsapp fa-lg"></i> (82) 99348-7949
            </a>
        </div>
    </div>
</div>

<div class="container content">
    <div class="row">
        <div class="col-sm-3 menu-lateral">
            <div class="sub-menu-lateral">
                <p style="text-align: center;">NAVEGAÇÃO</p>
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
                <h5>Conteúdo 1</h5>
                <p>Psicologia para Crianças e adolescentes.</p>
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
                    <div class="container">
                        <h3>Sobre min</h3>
                        <hr>
                        <p>
                            Passagem padrão original de Lorem Ipsum, usada desde o século XVI.
                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."

                            Seção 1.10.32 de "de Finibus Bonorum et Malorum", escrita por Cícero em 45 AC
                            "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"

                            Tradução para o inglês por H. Rackha, feita em 1914
                            "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"
                        </p>
                        <hr>
                    </div>
                </div>
                <!-- main content 2 -->
                <div id="menu2" class="container tab-pane fade"><br>
                    <div class="container">
                        <h3>Serviços</h3>
                        <hr>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                    </div>
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
