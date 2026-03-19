<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOLIBOX - Panel Cliente</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= asset('css/style.css') ?>">
</head>
<body>

    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid px-4">
            <a class="navbar-brand" href="<?= url('cliente') ?>"><i class="bi bi-box-seam text-naranja"></i> BOLI<span class="text-naranja">BOX</span> | Cliente</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuCliente">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menuCliente">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" href="<?= url('cliente') ?>"><i class="bi bi-house-door"></i> Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= url('productos') ?>"><i class="bi bi-shop"></i> Catálogo</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= url('mis_pedidos') ?>"><i class="bi bi-box2"></i> Mis Pedidos</a></li>
                </ul>
                <div class="d-flex align-items-center gap-3">
                    <span class="fw-bold text-muted"><i class="bi bi-person-circle"></i> Hola, Samuel</span>
                    <a href="<?= url('/') ?>" class="btn btn-outline-danger btn-sm fw-bold"><i class="bi bi-box-arrow-right"></i> Salir</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container py-5 mt-4">
        <div class="row g-4">
            
            <div class="col-lg-6">
                <div class="card h-100">
                    <div class="card-header bg-negro text-white py-3">
                        <h5 class="m-0 fw-bold"><i class="bi bi-box-seam"></i> Estado de tu Pedido</h5>
                    </div>
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-1 text-naranja">Laptop Dell Alienware M15</h4>
                        <p class="text-muted small mb-4">Tracking ID: #BX-98234-USA</p>

                        <div class="mt-4 ms-2">
                            <div class="timeline-estado estado-completado">
                                <div class="timeline-icono"><i class="bi bi-check-lg"></i></div>
                                <h6 class="fw-bold mb-0">Compra Solicitada</h6>
                                <p class="small text-muted mb-0">12 de Marzo, 2026</p>
                            </div>

                            <div class="timeline-estado estado-actual">
                                <div class="timeline-icono"><i class="bi bi-airplane-fill"></i></div>
                                <h6 class="fw-bold mb-0 text-naranja">En Vuelo Internacional</h6>
                                <p class="small text-muted mb-0">En tránsito hacia aduana nacional.</p>
                            </div>

                            <div class="timeline-estado estado-pendiente">
                                <div class="timeline-icono"><i class="bi bi-building-fill-exclamation"></i></div>
                                <h6 class="fw-bold mb-0 text-muted">Aduana Nacional</h6>
                                <p class="small text-muted mb-0">Pendiente de liberación</p>
                            </div>

                            <div class="timeline-estado estado-pendiente">
                                <div class="timeline-icono"><i class="bi bi-bag-check-fill"></i></div>
                                <h6 class="fw-bold mb-0 text-muted">Listo para Recoger</h6>
                                <p class="small text-muted mb-0">Sucursal Central</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card h-100 d-flex flex-column border-naranja">
                    <div class="card-header bg-naranja text-white py-3">
                        <h5 class="m-0 fw-bold"><i class="bi bi-robot"></i> BoliBot Cotizador</h5>
                    </div>
                    
                    <div class="card-body bolibot-chat p-4 flex-grow-1">
                        <div class="d-flex mb-4">
                            <div class="bolibot-mensaje bot-msg border">
                                ¡Hola, Samuel! Soy <strong>BoliBot</strong> 🤖.<br> 
                                Pega aquí el enlace de Amazon o eBay del producto que deseas importar para darte un costo estimado incluyendo flete e impuestos.
                            </div>
                        </div>
                        
                        <div class="d-flex mb-4 justify-content-end">
                            <div class="bolibot-mensaje user-msg">
                                https://www.amazon.com/dp/B09DFK9Z7N/
                            </div>
                        </div>
                        
                        <div class="d-flex mb-4">
                            <div class="bolibot-mensaje bot-msg border">
                                ¡Excelente! He analizado tu producto:<br>
                                <strong>Costo estimado total:</strong> $us 1,450.00<br>
                                <strong>Adelanto requerido:</strong> $us 500.00<br><br>
                                ¿Deseas confirmar este pedido y proceder con el pago del adelanto?
                            </div>
                        </div>
                    </div>
                    
                    <div class="card-footer bg-white p-3">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Pega el link de tu producto aquí...">
                            <button class="btn btn-naranja" type="button"><i class="bi bi-send-fill"></i></button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= asset('js/script.js') ?>"></script>
</body>
</html>