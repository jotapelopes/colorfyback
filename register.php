<?php

    if(isset($_POST['submit'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
    }

    include_once('config.php');

    $result = mysqli_query($conexao, "INSERT INTO clientes(nome, email, telefone) VALUES ('$nome', '$email', '$telefone')");
?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Colorfy - registro</title>

    <link href="//fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
</head>

<body>
    <div class="container-fluid">
        <div class="row min-vh-100">
            <div class="col-12">
                <header class="row">

                    <!-- Header -->
                    <div class=" bg-white pt-4">
                        <div class="row">
                            <div class="">
                                <div class="site-logo text-center text-lg-left "> <a href="./index.html">
                                    <img src="./images/colorfyPreto.png" width="150" alt=""></a>
                                </div>
                            </div>


                        </div>

                        <!-- Nav -->
                        <div class="row">
                            <nav class="navbar navbar-expand-lg navbar-light bg-white ">
                                <button class="navbar-toggler d-lg-none border-0" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#mainNav">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="mainNav">
                                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="index.html">Home <span class="sr-only"></span></a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="category.html" id="electronics">Produtos</a>

                                        </li>

                                        
                                        <li class="nav-item active">
                                            <a class="nav-link" href="aboutUs.html">Sobre nós <span
                                                    class="sr-only"></span></a>
                                        </li>

                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <!-- Nav -->

                    </div>
                    <!-- Header -->

                </header>
            </div>

            <div class="col-12">
                <!-- Main Content -->
                <div class="row">
                    <div class="col-12 mt-3 mb-3  text-center text-uppercase">
                        <h2>Cadastro</h2>
                    </div>
                </div>

                <main class="row">
                    <div class="col-lg-4 col-md-6 col-sm-8 mx-auto bg-white py-3 mb-5 ">
                        <div class="row">
                            <div class="col-12">
                                <form action="register.php" method="post">
                                    <div class="mb-3">
                                        <label for="nome" class="form-label">Nome Completo</label>
                                        <input type="nome" id="nome" name="nome" class="form-control"
                                            placeholder="Insira seu nome" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" id="email" name="email" class="form-control"
                                            placeholder="Insira seu e-mail" required>
                                    </div> 
                                    <div class="mb-3">
                                        <label for="telefone" class="form-label">Telefone</label>
                                        <input type="telefone" id="telefone" name="telefone" class="form-control"
                                            placeholder="Insira seu telefone" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Senha</label>
                                        <input type="password" id="password" class="form-control"
                                            placeholder="Insira sua senha" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Repetir senha</label>
                                        <input type="password" id="password" class="form-control"
                                            placeholder="Repetir senha" required>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" id="remember" class="form-check-input">
                                            <label for="remember" class="form-check-label ml-2">Salvar dados</label>
                                        </div>
                                    </div>
                                    <!-- <div class="d-grid gap-2"> <a href="./index.html">
                                        <button class="botaoLogin " type="button">Cadastrar</button></a>
                                    </div> -->
                                    <input type="submit" name="submit" id="botaoLogin">
                                    <div class="mt-4 d-flex justify-content-center">
                                        <a href="login.html">Já tem um login</a>?
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

                </main>
                <!-- Main Content -->
            </div>

            <div class=" align-self-end ">
                <!-- Footer -->
                <footer class="row">
                    <div class="holo text-white pb-3 pt-5">
                        <div class="row">
                            <div class="text-center text-sm-left mb-sm-0 mb-3">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="footer-logo">
                                            <img src="./images/colorfy branco.png" width="150" alt="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                    </div>
                                    <div class="col-12">
                                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                                        <a href="#" class="social-icon"><i class="fab fa-pinterest-p"></i></a>
                                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                                        <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                            </div>




                        </div>
                    </div>
                </footer>
                <!-- Footer -->
            </div>

        </div>

        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
</body>

</html>

<style>
     a {
        font-weight: 700;
    }

    .holo {
        background: linear-gradient(45deg, #f59797, #99b1ff, #aff7af);
        background-size: 200% 200%;
        height: 100%;
        animation: gradientAnimation 5s infinite;
    }

    .botaoLogin {
        border: 1px solid;
        color: #141414;
        width: auto;
        height: 2.5rem;
        border-radius: 5px;
        font-family: 'Montserrat', sans-serif;
        margin-top: 25px;
    }

    .botaoLogin:hover {
        background-color: #cc99ff;
        color: aliceblue;
        border-color: #141414;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
    }

</style>