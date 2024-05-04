<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/sytle.css">
  <title>Iniciar Sesion</title>
</head>

<body>
  <div class="container-fluid ps-md-0">
    <div class="row g-0">
      <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
      <div class="col-md-8 col-lg-6">
        <div class="login d-flex align-items-center py-5">
          <div class="container">
            <div class="row">
              <div class="col-md-9 col-lg-8 mx-auto">
                <h2 class="login-heading mb-4">Bienvenido!</h2>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  $username = $_POST["username"];
                  $password=md5($_POST['password']);

                  //Conectar a la base de datos
                  $connect = new mysqli("localhost", "root", "", "abd2024hospedaje");

                  //Verificar la conexión
                  if ($connect->connect_errno) {
                    die("Conexión incorrecta: " . $connect->connect_errno);
                  }
                  //consultar username y password
                  $sql = "SELECT * FROM usuarios WHERE username='$username' AND password='$password'";
                  $result = $connect->query($sql);

                  if ($result->num_rows == 1) {
                    echo '<div class="alert alert-success" role="alert">¡Inicio de sesión exitoso!</div>';
                    echo 'aqui estoy';
                    echo '<?= $producto ?>';
                  } else {
                    echo "La contraseña es: $password";
                    //echo '<div class="alert alert-danger" role="alert">Usuario o contraseña incorrectos g</div>';

                  }
                  $connect->close();
                }
                ?>
                 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                <!-- Sign In Form -->
                <form>
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="username" name="username" placeholder="name@example.com" required>
                    <label for="floatingInput">Usuario</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    <label for="floatingPassword">Contraseña</label>
                  </div>
                  <div class="d-grid">
                    <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit">Iniciar Sesión</button>
                    <div class="text-center">
                      <p> ¿No tienes una cuenta? <a href="pages/registrar.php">Regístrate aquí</a></p>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascrip" src="js/jquery-3.7.1.min.js"></script>
  <script type="text/javascrip" src="js/bootstrap.js.map"></script>
</body>

</html>