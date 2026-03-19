<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOLIBOX - Stock</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= asset('css/style.css') ?>">
</head>
<body>

    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid px-4">
            <a class="navbar-brand" href="<?= url('admin') ?>"><i class="bi bi-box-seam text-naranja"></i> BOLI<span class="text-naranja">BOX</span> | Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuAdmin">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menuAdmin">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link" href="<?= url('admin') ?>"><i class="bi bi-house-door"></i> Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= url('admin/productos') ?>"><i class="bi bi-box"></i> Productos</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= url('admin/proveedores') ?>"><i class="bi bi-truck"></i> Proveedores</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= url('admin/clientes') ?>"><i class="bi bi-people"></i> Clientes</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= url('admin/empleados') ?>"><i class="bi bi-person-badge"></i> Empleados</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= url('admin/pedidos') ?>"><i class="bi bi-clipboard-data"></i> Pedidos</a></li>
                    <li class="nav-item"><a class="nav-link active" href="<?= url('admin/stock') ?>"><i class="bi bi-boxes"></i> Stock</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= url('admin/bitacoras') ?>"><i class="bi bi-journal-text"></i> Bitácora</a></li>
                </ul>
                <div class="d-flex">
                    <a href="<?= url('/') ?>" class="btn btn-danger btn-sm px-3 fw-bold"><i class="bi bi-box-arrow-right"></i> Cerrar Sesión</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container py-4 mt-3">
        <div class="mb-4">
            <h3 class="fw-bold text-naranja m-0"><i class="bi bi-boxes"></i> Control de Stock</h3>
            <p class="text-muted">Inventario disponible en los almacenes.</p>
        </div>
        
        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead>
                            <tr>
                                <th>Producto</th>
                                <th>Cantidad Disponible</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fw-bold">Audífonos Bluetooth</td>
                                <td>25 unidades</td>
                                <td><span class="badge bg-success">Óptimo</span></td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Smartwatch</td>
                                <td>10 unidades</td>
                                <td><span class="badge bg-warning text-dark">Bajo Stock</span></td>
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