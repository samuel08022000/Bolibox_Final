<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOLIBOX - Panel Empleado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid px-4">
            <a class="navbar-brand" href="empleado.php"><i class="bi bi-box-seam text-naranja"></i> BOLI<span class="text-naranja">BOX</span> | Empleado</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuEmpleado">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menuEmpleado">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" href="empleado.php"><i class="bi bi-house-door"></i> Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="pedidos.php"><i class="bi bi-clipboard-data"></i> Pedidos</a></li>
                    <li class="nav-item"><a class="nav-link" href="clientes.php"><i class="bi bi-people"></i> Clientes</a></li>
                </ul>
                <div class="d-flex">
                    <a href="../logout.php" class="btn btn-outline-dark btn-sm fw-bold"><i class="bi bi-box-arrow-right"></i> Salir</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container py-5 mt-3">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-naranja h-100">
                    <div class="card-header bg-naranja text-white fw-bold py-3">
                        <i class="bi bi-file-earmark-plus"></i> Generar Nuevo Pedido
                    </div>
                    <div class="card-body p-4">
                        <form action="#" method="POST">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label class="form-label fw-bold small">Nombre del Cliente</label>
                                    <input type="text" name="nombre_cliente" class="form-control" placeholder="Ingrese el nombre completo" required>
                                </div>
                                
                                <div class="col-md-6 mb-4">
                                    <label class="form-label fw-bold small">Producto a Importar</label>
                                    <input type="text" name="nombre_producto" class="form-control" placeholder="Ej: Laptop Dell Alienware" required>
                                </div>
                                
                                <div class="col-md-6 mb-4">
                                    <label class="form-label fw-bold small">Almacén Destino</label>
                                    <select name="id_almacen" class="form-select" required>
                                        <option value="" selected disabled>-- Elegir Almacén --</option>
                                        <option value="La Paz">La Paz</option>
                                        <option value="Cochabamba">Cochabamba</option>
                                        <option value="Santa Cruz">Santa Cruz</option>
                                    </select>
                                </div>
                                
                                <div class="col-md-6 mb-4">
                                    <label class="form-label fw-bold small text-naranja">Adelanto Cobrado ($us)</label>
                                    <input type="number" name="monto_adelanto" class="form-control border-naranja" placeholder="Ej: 500.00" step="0.01" required>
                                </div>
                            </div>
                            
                            <hr class="mt-2 mb-4">
                            
                            <div class="text-end">
                                <button type="reset" class="btn btn-light me-2 fw-bold">Limpiar Campos</button>
                                <button type="submit" class="btn bg-naranja text-white px-4 fw-bold">Confirmar y Guardar Pedido</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>