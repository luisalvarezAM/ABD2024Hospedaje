<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ABD2024A/css/bootstrap.min.css">
    <link rel="stylesheet" href="/ABD2024A/css/register.css">
    <title>Registrar usuarios</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-9 mx-auto">
                <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
                    <div class="card-img-left d-none d-md-flex">
                        <!-- Background image for card set in CSS! -->
                    </div>
                    <div class="card-body p-4 p-sm-5">
                        <h5 class="card-title text-center mb-5 fw-light fs-5">Registrar</h5>
                        <form action="registro_procesar.php" method="post">

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="username" name="username" placeholder="username" required autofocus>
                                <label for="username">Usuario</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="email" name="email" placeholder="name@example.com">
                                <label for="email">Correo electronico</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-control" id="usertype" name="usertype" required>
                                    <option value="normal">Normal</option>
                                    <option value="admin">Admin</option>
                                </select>
                                <label for="usertype"> Tipo de usuario</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="password" name="password" placeholder="Contraseña">
                                <label for="password">Contraseña</label>
                            </div>
                            <div class="form-group">
                                <label for="regis_date">Fecha de registro:</label>
                                <input type="date" class="form-control" id="registration_date" name="registration_date" required>
                            </div>
                            <div class="form-floating mb-3">

                            </div>
                            <div class="d-grid mb-2">
                                <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">Registrarse</button>
                            </div>
                            <a class="d-block text-center mt-2 small" href="/ABD2024A/index.php">¿Tienes una cuenta? Inicia Sesión</a>
                            <hr class="my-4">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascrip" src="js/jquery-3.7.1.min.js"></script>
    <script type="text/javascrip" src="js/bootstrap.js.map"></script>
</body>

</html>