    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Previsualizador - Dashboard</title>

        <!-- Custom styles for this template -->
        <link href="http://localhost/BRANDONRIVERA-DSM31/dsm-31-brandonriverahernandez-equipo5/resource/css/sb-admin-2.min.css" rel="stylesheet">

        <!-- Custom styles for this page -->
        <link href="http://localhost/BRANDONRIVERA-DSM31/dsm-31-brandonriverahernandez-equipo5/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

        <!-- Custom fonts for this template-->
        <link href="http://localhost/BRANDONRIVERA-DSM31/dsm-31-brandonriverahernandez-equipo5/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">


        <script src="https://kit.fontawesome.com/07bf2ec53c.js" crossorigin="anonymous"></script>
    </head>

    <body>
        
        <div class="container-fluid">
                <div class="container">
                    <h1>Formulario para crear una nueva cuenta</h1>
                    <!--<form action="http://example2.com/crearproducto.php" method="post">-->
                    <form action="" method="post">
                        <div class="mb-3">
                            <label class="form-label">Nombre de Usuario</label>
                            <input type="text" class="form-control" name="nombre" placeholder="escribe el nombre del usuario">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Apellido Paterno</label>
                            <input type="text" class="form-control" name="app" placeholder="escribe el apellido paterno">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Apellido Materno </label>
                            <input type="text" class="form-control" name="apm" placeholder="escribe el apellido materno">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Correo</label>
                            <input type="email" class="form-control" name="correo" placeholder="escribe el correo">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Contraseña </label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Estado</label>
                            <input type="email" class="form-control" name="correo" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Municipio</label>
                            <input type="email" class="form-control" name="correo" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tipo de usuario</label>
                            <input type="email" class="form-control" name="correo" placeholder="">
                        </div>

                        <br>
                        <button type="submit" class="btn btn-primary">Crear cuenta</button>
                        <br>
                    </form>
                </div>
            </div>
      
<?php
    include __DIR__ . '/../../layout/footer.php';
?>