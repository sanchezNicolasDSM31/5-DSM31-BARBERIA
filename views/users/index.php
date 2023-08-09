     <!-- Incluimos un codigo php  -->
     <?php
    include __DIR__ . '/../../layout/menu.php';
    include __DIR__ . '/../../layout/header.php';
    ?>
      
      
        <!-- Begin Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">VISTAS DE USUARIOS</h1>
        </div>

    </div>

      <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tabla de datos</h1>
                    <p class="mb-4">Tabla de datos que muestra los registros de todos los usuarios.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabla de datos de Usuarios</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id Usuario</th>
                                            <th>Nombre</th>
                                            <th>Apellido Paterno</th>
                                            <th>Apellido Materno</th>
                                            <th>Correo</th>
                                            <th>Contraseña</th>
                                            <th>Id Municipio</th>
                                            <th>Id Tipo de usuario</th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id Usuario</th>
                                            <th>Nombre</th>
                                            <th>Apellido Paterno</th>
                                            <th>Apellido Materno</th>
                                            <th>Correo</th>
                                            <th>Contraseña</th>
                                            <th>Id Municipio</th>
                                            <th>Id Tipo de usuario</th>
                                            <th>Acción</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                    <?php
                                        include __DIR__ . '/../../database/conexion.php';

                                        $sql = ("SELECT * FROM usuario");

                                        
                                    ?>

                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>Siguiente</td>
                                            <td>Siguiente 1</td>
                                            <td>Dato</td>
                                            <td>
                                            <a href="#" class="btn btn-info btn-circle">
                                                    <i class="fas fa-info-circle"></i>
                                                </a>
                                                <a href="http://localhost/BRANDONRIVERA-DSM31/dsm-31-brandonriverahernandez-equipo5/views/users/edit.php" class="btn btn-warning btn-circle">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="#" class="btn btn-danger btn-circle">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tiger Nixo</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>Siguiente</td>
                                            <td>Siguiente 1</td>
                                            <td>Dato</td>
                                            <td>
                                            <a href="#" class="btn btn-info btn-circle">
                                                    <i class="fas fa-info-circle"></i>
                                                </a>
                                                <a href="http://localhost/BRANDONRIVERA-DSM31/dsm-31-brandonriverahernandez-equipo5/views/users/edit.php" class="btn btn-warning btn-circle">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="#" class="btn btn-danger btn-circle">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
                <?php
include __DIR__ . '/../../layout/footer.php';
?>

