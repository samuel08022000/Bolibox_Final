<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOLIBOX - Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= asset('css/style.css') ?>">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        /* Quitamos el padding top global solo para esta vista porque ya no hay navbar fijo */
        body { padding-top: 0; }
    </style>
</head>
<body>

<div class="admin-layout">
    <div class="sidebar">
        <div class="sidebar-header">
            <i class="bi bi-person-circle display-4 text-naranja"></i>
            <h5 class="mt-3 fw-bold mb-0">Admin Bolibox</h5>
            <small class="text-muted">Panel de Control</small>
        </div>
        <div class="nav flex-column">
            <a class="sidebar-link active" href="<?= url('admin') ?>"><i class="bi bi-grid-1x2-fill"></i> Dashboard</a>
            <a class="sidebar-link" href="<?= url('admin/pedidos') ?>"><i class="bi bi-box-seam"></i> Pedidos</a>
            <a class="sidebar-link" href="<?= url('admin/productos') ?>"><i class="bi bi-tag-fill"></i> Productos</a>
            <a class="sidebar-link" href="<?= url('admin/clientes') ?>"><i class="bi bi-people-fill"></i> Clientes</a>
            <a class="sidebar-link" href="<?= url('admin/proveedores') ?>"><i class="bi bi-truck"></i> Proveedores</a>
            <a class="sidebar-link" href="<?= url('admin/stock') ?>"><i class="bi bi-boxes"></i> Stock</a>
            <a class="sidebar-link" href="<?= url('admin/empleados') ?>"><i class="bi bi-person-badge-fill"></i> Empleados</a>
            <a class="sidebar-link" href="<?= url('admin/bitacoras') ?>"><i class="bi bi-journal-text"></i> Bitácora</a>
        </div>
    </div>

    <div class="main-content">
        
        <div class="admin-topbar">
            <div>
                <h3 class="fw-bold m-0" style="color: #1a1a2e;">Dashboard Overview</h3>
                <p class="text-muted small m-0">Resumen logístico y financiero</p>
            </div>
            <div class="d-flex align-items-center gap-3">
                <button class="btn btn-light rounded-circle shadow-sm"><i class="bi bi-bell"></i></button>
                <a href="<?= url('/') ?>" class="btn btn-outline-danger fw-bold"><i class="bi bi-box-arrow-right"></i> Salir</a>
            </div>
        </div>

        <div class="row g-4 mb-4">
            <div class="col-md-3">
                <div class="widget-card widget-dark">
                    <span class="label">Ingresos Totales</span>
                    <i class="bi bi-currency-dollar widget-icon"></i>
                    <span class="value">$ 12,628</span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="widget-card">
                    <span class="label">Pedidos Activos</span>
                    <i class="bi bi-share widget-icon" style="color: var(--naranja);"></i>
                    <span class="value">2,434</span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="widget-card">
                    <span class="label">Clientes Nuevos</span>
                    <i class="bi bi-hand-thumbs-up widget-icon" style="color: var(--naranja);"></i>
                    <span class="value">1,259</span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="widget-card">
                    <span class="label">Calificación</span>
                    <i class="bi bi-star-fill widget-icon" style="color: var(--naranja);"></i>
                    <span class="value">4.8</span>
                </div>
            </div>
        </div>

        <div class="row g-4 mb-4">
            <div class="col-lg-8">
                <div class="chart-container h-100">
                    <div class="d-flex justify-content-between mb-3">
                        <h6 class="fw-bold">Rendimiento Mensual</h6>
                        <span class="badge bg-naranja">2026</span>
                    </div>
                    <canvas id="barChart" height="100"></canvas>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="chart-container h-100 d-flex flex-column">
                    <h6 class="fw-bold mb-4">Ocupación de Almacenes</h6>
                    <div class="flex-grow-1 d-flex align-items-center justify-content-center position-relative">
                        <canvas id="donutChart"></canvas>
                        <div class="position-absolute text-center" style="top: 50%; left: 50%; transform: translate(-50%, -50%);">
                            <h3 class="fw-bold m-0" style="color: #1a1a2e;">75%</h3>
                            <small class="text-muted">Ocupado</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-12">
                <div class="chart-container">
                    <h6 class="fw-bold mb-3">Flujo de Entregas (Últimos 7 días)</h6>
                    <canvas id="lineChart" height="60"></canvas>
                </div>
            </div>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Colores corporativos Bolibox
    const colorNaranja = '#FF8C00';
    const colorOscuro = '#1a1a2e';
    const colorGris = '#e9ecef';

    // 1. Gráfico de Barras (Rendimiento)
    const ctxBar = document.getElementById('barChart').getContext('2d');
    new Chart(ctxBar, {
        type: 'bar',
        data: {
            labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep'],
            datasets: [
                {
                    label: 'Ingresos',
                    data: [35, 45, 30, 50, 40, 60, 45, 35, 55],
                    backgroundColor: colorOscuro,
                    borderRadius: 4
                },
                {
                    label: 'Gastos',
                    data: [20, 25, 15, 30, 20, 35, 25, 20, 30],
                    backgroundColor: colorNaranja,
                    borderRadius: 4
                }
            ]
        },
        options: {
            responsive: true,
            plugins: { legend: { display: false } },
            scales: {
                y: { beginAtZero: true, grid: { color: colorGris } },
                x: { grid: { display: false } }
            }
        }
    });

    // 2. Gráfico Donut (Ocupación)
    const ctxDonut = document.getElementById('donutChart').getContext('2d');
    new Chart(ctxDonut, {
        type: 'doughnut',
        data: {
            labels: ['Ocupado', 'Libre'],
            datasets: [{
                data: [75, 25],
                backgroundColor: [colorOscuro, colorNaranja],
                borderWidth: 0,
                cutout: '75%' // Hace el hueco grande para poner el texto
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { position: 'bottom' } }
        }
    });

    // 3. Gráfico de Línea con Área (Flujo)
    const ctxLine = document.getElementById('lineChart').getContext('2d');
    new Chart(ctxLine, {
        type: 'line',
        data: {
            labels: ['Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb', 'Dom'],
            datasets: [
                {
                    label: 'Entregas',
                    data: [10, 25, 15, 40, 20, 35, 25],
                    borderColor: colorNaranja,
                    backgroundColor: 'rgba(255, 140, 0, 0.2)', // Naranja transparente
                    fill: true,
                    tension: 0.4 // Hace las curvas suaves
                },
                {
                    label: 'En Tránsito',
                    data: [5, 15, 10, 20, 10, 25, 15],
                    borderColor: colorOscuro,
                    backgroundColor: 'rgba(26, 26, 46, 0.1)',
                    fill: true,
                    tension: 0.4
                }
            ]
        },
        options: {
            responsive: true,
            plugins: { legend: { display: false } },
            scales: {
                y: { display: false }, // Oculta los números del eje Y como en la imagen
                x: { grid: { display: false } }
            }
        }
    });
</script>
</body>
</html>
