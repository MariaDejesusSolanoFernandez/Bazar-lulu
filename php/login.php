

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/sesion.css">
    <link rel="stylesheet" href="../css/menu.css">
    
</head>
<body>
     <header>
        <a href="#" class="logo">Bazar Lulu</a>
        <div class="menu-toggle"></div>
        <nav>
            <ul>
                <li><a href="../index2.html" >Inicio</a></li>
                <li><a href="../acerca.html">Acerca de</a></li>
                <li><a href="../carritot/index.php">Porductos</a></li>
                <li><a href="#" >Ingresar</a></li>
                <li><a href="#">Contacto</a></li>
                <li><a href="carritot/mostrarCarrito.php">Carrito</a></li>

            </ul>
        </nav>
        <div class="clearfix"></div>
    </header>
    <p class="tip"></p>
<div class="cont">
  <div class="form sign-in">
      <br>
      <br>
    <h2>Bienvenid@</h2>
    <label>
      <span>Usuario</span>
      <input type="text" />
    </label>
    <label>
      <span>Contraseña</span>
      <input type="text" />
    </label>
  
    <button type="button" class="submit">Acceder</button>
    <button type="button" class="fb-btn">Visitanos en <span>facebook</span></button>
  </div>
  <div class="sub-cont">
    <div class="img">
      <div class="img__text m--up">
        <h2>¿Eres nuevo?</h2>
        <p>Registrate para poder comprar sin limites!</p>
      </div>
      <div class="img__text m--in">
        <h2>¿Ya tienes cuenta?</h2>
        <p>Accede a tu cuenta para mejores promociones!</p>
      </div>
      <div class="img__btn">
        <span class="m--up">Registro</span>
        <span class="m--in">Acceder</span>
      </div>
    </div>
    <div class="form sign-up">
      <h2>Se parte de nosotros</h2>
      <label>
        <span>Nombre</span>
        <input type="text" />
      </label>
      <label>
        <span>Email</span>
        <input type="text" />
      </label>
      <label>
        <span>Contraseña</span>
        <input type="password" />
      </label>
      <button type="button" class="submit">Ingresar</button>
      <button type="button" class="fb-btn">Visitanos en <span>facebook</span></button>
    </div>
  </div>
</div>
<script src="../js/sesion.js"></script>

</body>
</html>