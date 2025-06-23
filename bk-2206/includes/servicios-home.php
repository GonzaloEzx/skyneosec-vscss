<section class="servicios py-4" style="background-color: #0d1b2a;">
    <div class="container">
        <h2 class="text-center text-light fw-bold mb-4">Nuestros Servicios</h2>
        <div class="row g-4">
            <?php
            $servicios = [
                ["icon" => "person-fill-gear", "titulo" => "Red Team", "desc" => "Simulamos ataques reales para fortalecer tu seguridad."],
                ["icon" => "shield-shaded", "titulo" => "Seguridad Ofensiva", "desc" => "Auditorías y pruebas de intrusión para identificar vulnerabilidades."],
                ["icon" => "clipboard-data", "titulo" => "Auditorías de Seguridad", "desc" => "Evaluaciones completas para garantizar tu protección."],
                ["icon" => "diagram-3-fill", "titulo" => "Seguridad en Redes", "desc" => "Protección integral para redes corporativas y personales."],
                ["icon" => "cloud", "titulo" => "Seguridad en la Nube", "desc" => "Protege tus datos y servicios en entornos cloud."],
                ["icon" => "file-lock-fill", "titulo" => "Cifrado Avanzado", "desc" => "Implementación de soluciones de cifrado para datos sensibles."]
            ];

            foreach ($servicios as $servicio): ?>
                <div class="col-md-4">
                    <div class="card bg-dark h-100">
                        <div class="card-body">
                            <h5 class="card-title text-warning">
                                <i class="bi bi-<?= $servicio['icon'] ?> me-2"></i> <?= $servicio['titulo'] ?>
                            </h5>
                            <p class="text-light"><?= $servicio['desc'] ?></p>
                            <a href="servicios.php" class="text-warning text-decoration-none">Seguir leyendo</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>