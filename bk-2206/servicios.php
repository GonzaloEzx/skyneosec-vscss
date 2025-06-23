<?php include 'includes/header.php'; ?>

<main class="servicios-listado flex-grow-1 py-4">
  <div class="container">
    <h1 class="titulo-seccion text-center">
      Descubrí <span class="text-info">todo lo que podemos proteger</span>
    </h1>

    <div class="row gx-4 gy-4">

      <?php
      $servicios = [
        [
          "titulo" => "Red Team",
          "desc"   => "Simulaciones de ataques, para probar la resistencia de tu sistema de seguridad.",
          "color"  => "text-danger",
          "icon"   => "people-fill",
          "url"    => "servicio/red-team.php"
        ],
        [
          "titulo" => "Seguridad Ofensiva",
          "desc"   => "Auditorías, pruebas de intrusión y detección proactiva de vulnerabilidades.",
          "color"  => "text-primary",
          "icon"   => "shield-shaded",
          "url"    => "servicio/seguridad-ofensiva.php"
        ],
        [
          "titulo" => "Auditorías de Seguridad",
          "desc"   => "Evaluaciones completas para garantizar cumplimiento y protección.",
          "color"  => "text-warning",
          "icon"   => "clipboard-data-fill",
          "url"    => "servicio/auditorias.php"
        ],
        [
          "titulo" => "Threat Hunting",
          "desc"   => "Búsqueda activa de amenazas avanzadas y análisis de comportamiento anómalo.",
          "color"  => "text-success",
          "icon"   => "binoculars-fill",
          "url"    => "servicio/threat-hunting.php"
        ],
        [
          "titulo" => "Respuesta a Incidentes",
          "desc"   => "Mitigación rápida de incidentes y restauración de sistemas.",
          "color"  => "text-secondary",
          "icon"   => "arrow-repeat",
          "url"    => "servicio/respuesta.php"
        ],
        [
          "titulo" => "Gestión de Vulnerabilidades",
          "desc"   => "Identificación, clasificación y solución de riesgos en tiempo real.",
          "color"  => "text-info",
          "icon"   => "bug-fill",
          "url"    => "servicio/vulnerabilidades.php"
        ]
      ];

      foreach ($servicios as $s): ?>
        <div class="col-12 col-md-6 col-lg-4">
          <a href="<?= $s['url'] ?>" class="text-decoration-none card-click">
            <div class="card h-100 shadow-sm border-0 py-4 px-3">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title fw-semibold <?= $s['color'] ?>">
                  <i class="bi bi-<?= $s['icon'] ?> me-2"></i><?= $s['titulo'] ?>
                </h5>
                <p class="card-text text-muted flex-grow-1"><?= $s['desc'] ?></p>
                <div class="mt-3">
                  <span class="text-<?= $s['color'] ?> fw-semibold">Ver más &rarr;</span>
                </div>
              </div>
            </div>
          </a>
        </div>
      <?php endforeach; ?>

    </div>
  </div>
</main>

<?php include 'includes/footer.php'; ?>