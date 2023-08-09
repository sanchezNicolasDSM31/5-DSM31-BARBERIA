     <!-- Incluimos un codigo php  -->
    <?php
    include __DIR__ . '/../../layout/menu.php';
    include __DIR__ . '/../../layout/header.php';
    ?>
      
      
        <!-- Begin Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">VISTA DE CATEGORIAS</h1>
            <a href="http://localhost/BRANDONRIVERA-DSM31/dsm-31-brandonriverahernandez-equipo5/views/categories/add.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-plus fa-sm text-white-50"></i> Agregar Categoria</a>
        </div>

    </div>

      <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tabla de datos</h1>
                    <p class="mb-4">Tabla de datos que muestra los registros de todas las categorias.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabla de datos de las categorias</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id categoria</th>
                                            <th>Categoria</th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id categoria</th>
                                            <th>Categoria</th>
                                            <th>Acción</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>
                                                <a href="#" class="btn btn-info btn-circle">
                                                    <i class="fas fa-info-circle"></i>
                                                </a>
                                                <a href="http://localhost/BRANDONRIVERA-DSM31/dsm-31-brandonriverahernandez-equipo5/views/categories/edit.php" class="btn btn-warning btn-circle">
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

