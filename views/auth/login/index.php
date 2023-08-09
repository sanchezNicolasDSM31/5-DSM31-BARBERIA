<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-18mE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqy12QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Inicio de Sesion</title>
</head>
<body>
    <from action="IniciarSesion.php" method="POST">
        <h1>INICIAR SESION</h1>
        <hr>
        <?php
        if (isset($_GET['error'])) {
            ?>
            <p class="error">
                <?php
                echo $_GET['error']
                ?>


            </p>
        <?php
        }
        
        ?>

        <hr>
        <i class="fa-solid fa-user"></i>
        <label>Usuario</label>
        <input type="text" name="Usuario" placeholder="Nombre de usuario">

        <i class="fa-solid fa-unlock"></i>
        <label>Clave</label>
        <input type="text" name="Clave" placeholder="Clave">
        <hr>

       <button type="submit">INICIAR SESION</button>
       <a href="CrearCuenta.php">CREAR CUENTA</a>
</from>
    
</body>
</html>
