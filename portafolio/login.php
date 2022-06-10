<?php

session_start();
if ($_POST) {
    if (($_POST['user'] == "michael") && ($_POST['password'] == "12345")) {

        $_SESSION['usuario']="michael";

        header("location:index.php");

    } else {
        echo "<script> alert('Usuario incorrecto'); </script>";
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>
</head>

<body>

    <!-- <form action="login.php" method="post">
        Usuario: <input type="text" name="usuario" id="">
    <br>
        Contraseña: <input type="text" name="contraseña" id="">
    <br>

        <button type="submit">Entrar</button>
    </form> -->

    <style>
        .gradient-custom-2 {
            /* fallback for old browsers */
            background: #fccb90;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
        }

        @media (min-width: 768px) {
            .gradient-form {
                height: 100vh !important;
            }
        }

        @media (min-width: 769px) {
            .gradient-custom-2 {
                border-top-right-radius: .3rem;
                border-bottom-right-radius: .3rem;
            }
        }
    </style>

    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/a/ab/Logo_TV_2015.png" style="width: 185px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1">Somos el mejor equipo</h4>
                                    </div>

                                    <form action="login.php" method="post">
                                        <p>Por favor ingrese sus datos de usuario</p>

                                        <!-- USUARIO -->
                                        <div class="form-outline mb-4">
                                            <input type="text" id="user" name="user" class="form-control" placeholder="Dirección de Correo" />
                                        </div>

                                        <!-- CONTRASEÑA -->
                                        <div class="form-outline mb-4">
                                            <input type="password" id="password" name="password" class="form-control" placeholder="Contraseña" />
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Login</button>
                                            <a class="text-muted" href="#!">¿Olvido su contraseña?</a>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">¿No tienes cuenta?</p>
                                            <button type="button" class="btn btn-outline-danger">Crear cuenta</button>
                                        </div>

                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">Somos más que una empresa</h4>
                                    <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>