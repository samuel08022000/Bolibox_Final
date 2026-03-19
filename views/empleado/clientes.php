<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOLIBOX - Clientes Empleado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= asset('css/style.css') ?>">
</head>
<body>

    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid px-4">
            <a class="navbar-brand" href="<?= url('empleado') ?>"><i class="bi bi-box-seam text-naranja"></i> BOLI<span class="text-naranja">BOX</span> | Empleado</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuEmpleado">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menuEmpleado">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link" href="<?= url('empleado') ?>"><i class="bi bi-house-door"></i> Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= url('empleado/pedidos') ?>"><i class="bi bi-clipboard-data"></i> Pedidos</a></li>
                    <li class="nav-item"><a class="nav-link active" href="<?= url('empleado/clientes') ?>"><i class="bi bi-people"></i> Clientes</a></li>
                </ul>
                <div class="d-flex">
                    <a href="<?= url('/') ?>" class="btn btn-outline-dark btn-sm fw-bold"><i class="bi bi-box-arrow-right"></i> Salir</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container py-4 mt-3">
        <div class="mb-4">
            <h3 class="fw-bold text-naranja m-0"><i class="bi bi-people"></i> Directorio de Clientes</h3>
        </div>
        
        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre Completo</th>
                                <th>Teléfono</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="4" class="text-center text-muted py-4">No hay clientes registrados por el momento.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>