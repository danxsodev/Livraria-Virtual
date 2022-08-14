<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery livraria -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <!-- JavaScript compilado-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style type="text/css">
        :root {
            font-size: 62.5%; /* 1rem = 10 px */
        }

        body {
            background: #e3f2fd;
            font-size: 1.6rem;
        }

        .navbar {
            margin-bottom: 0;
            background: #e3f2fd;
        }

        .jumbotron {
            background: #fffaf0;
        }

        .container-fluid {
            margin-bottom: 5rem;
            background: #e3f2fd;

        } 

        .img-responsive {
            width:100%;
        }

    </style>

    <title>Loja Virtual</title>
</head>

<body>
    <?php include'nav.php'?>

    <?php include'cabecalho.html'?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                <img src="https://via.placeholder.com/150" class="img-responsive"  alt="">
                <div class="product">
                    <h3>Nome do Produto</h3>
                </div>
                <div class="price">
                    <h4>R$ 100,00</h4> 
                </div>
            </div>

            <div class="col-sm-3">
                <img src="https://via.placeholder.com/150" class="img-responsive"  alt="">
                <div class="product">
                    <h3>Nome do Produto</h3>
                </div>
                <div class="price">
                    <h4>R$ 150,00</h4> 
                </div>
            </div>

            <div class="col-sm-3">
                <img src="https://via.placeholder.com/150" class="img-responsive"  alt="">
                <div class="product">
                    <h3>Nome do Produto</h3>
                </div>
                <div class="price">
                    <h4>R$ 200,00</h4> 
                </div>
            </div>

            <div class="col-sm-3">
                <img src="https://via.placeholder.com/150" class="img-responsive"  alt="">
                <div class="product">
                    <h3>Nome do Produto</h3>
                </div>
                <div class="price">
                    <h4>R$ 250,00</h4> 
                </div>
            </div>

            <div class="col-sm-3">
                <img src="https://via.placeholder.com/150" class="img-responsive"  alt="">
                <div class="product">
                    <h3>Nome do Produto</h3>
                </div>
                <div class="price">
                    <h4>R$ 250,00</h4> 
                </div>
            </div>

            <div class="col-sm-3">
                <img src="https://via.placeholder.com/150" class="img-responsive"  alt="">
                <div class="product">
                    <h3>Nome do Produto</h3>
                </div>
                <div class="price">
                    <h4>R$ 200,00</h4> 
                </div>
            </div>

            <div class="col-sm-3">
                <img src="https://via.placeholder.com/150" class="img-responsive"  alt="">
                <div class="product">
                    <h3>Nome do Produto</h3>
                </div>
                <div class="price">
                    <h4>R$ 150,00</h4> 
                </div>
            </div>

            <div class="col-sm-3">
                <img src="https://via.placeholder.com/150" class="img-responsive"  alt="">
                <div class="product">
                    <h3>Nome do Produto</h3>
                </div>
                <div class="price">
                    <h4>R$ 100,00</h4> 
                </div>
            </div>

        </div>

    </div>

    <?php include'rodape.html'?>

</body>
</html>
