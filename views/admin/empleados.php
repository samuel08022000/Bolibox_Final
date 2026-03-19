<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOLIBOX - Empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid px-4">
            <a class="navbar-brand" href="admin.php"><i class="bi bi-box-seam text-naranja"></i> BOLI<span class="text-naranja">BOX</span> | Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuAdmin">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menuAdmin">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link" href="admin.php"><i class="bi bi-house-door"></i> Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="productos.php"><i class="bi bi-box"></i> Productos</a></li>
                    <li class="nav-item"><a class="nav-link" href="proveedores.php"><i class="bi bi-truck"></i> Proveedores</a></li>
                    <li class="nav-item"><a class="nav-link" href="clientes.php"><i class="bi bi-people"></i> Clientes</a></li>
                    <li class="nav-item"><a class="nav-link active" href="empleados.php"><i class="bi bi-person-badge"></i> Empleados</a></li>
                    <li class="nav-item"><a class="nav-link" href="pedidos.php"><i class="bi bi-clipboard-data"></i> Pedidos</a></li>
                    <li class="nav-item"><a class="nav-link" href="stock.php"><i class="bi bi-boxes"></i> Stock</a></li>
                    <li class="nav-item"><a class="nav-link" href="bitacoras.php"><i class="bi bi-journal-text"></i> Bitácora</a></li>
                </ul>
                <div class="d-flex">
                    <a href="../logout.php" class="btn btn-danger btn-sm px-3 fw-bold"><i class="bi bi-box-arrow-right"></i> Cerrar Sesión</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container py-4 mt-3">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold text-naranja m-0"><i class="bi bi-person-badge"></i> Gestión de Empleados</h3>
            <button class="btn bg-naranja text-white fw-bold"><i class="bi bi-person-add"></i> Nuevo Empleado</button>
        </div>
        
        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre Completo</th>
                                <th>Cargo</th>
                                <th>Teléfono</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fw-bold">1</td>
                                <td>Carlos Rojas</td>
                                <td><span class="badge bg-secondary">Almacenero</span></td>
                                <td><i class="bi bi-telephone text-muted"></i> 78541236</td>
                                <td>
                                    <button class="btn btn-sm btn-outline-dark"><i class="bi bi-pencil"></i></button>
                                    <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold">2</td>
                                <td>Ana Silva</td>
                                <td><span class="badge bg-info text-dark">Atención al Cliente</span></td>
                                <td><i class="bi bi-telephone text-muted"></i> 74125896</td>
                                <td>
                                    <button class="btn btn-sm btn-outline-dark"><i class="bi bi-pencil"></i></button>
                                    <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                                </td>
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