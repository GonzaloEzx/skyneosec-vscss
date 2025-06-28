<?php include 'includes/header.php'; ?>

<main class="flex-grow-1 py-4" style="background-color: #D4C9BE;">
  <div class="container">
    <h2 class="text-center fw-bold mb-4 text-dark">Estos son los servicios que ofrecemos</h2>
    <div class="row gx-4 gy-4">

      <?php
      $servicios = [
        [
          "titulo" => "Red Team",
          "desc"   => "Simulaciones de ataques...",
          "color"  => "text-dark",
          "icon"   => "people-fill",
          "id"     => "modalRedTeam",
          "include" => "includes/contenido-red-team.php"
        ],
        [
          "titulo" => "Seguridad Ofensiva",
          "desc"   => "Auditorías, pruebas de intrusión...",
          "color"  => "text-dark",
          "icon"   => "shield-shaded",
          "id"     => "modalSeguridadOfensiva",
          "include" => "includes/contenido-seguridad-ofensiva.php"
        ],
        [
          "titulo" => "Auditorías de Seguridad",
          "desc"   => "Evaluaciones completas...",
          "color"  => "text-dark",
          "icon"   => "clipboard-data-fill",
          "id"     => "modalAuditorias",
          "include" => "includes/contenido-auditorias.php"
        ],
        [
          "titulo" => "Threat Hunting",
          "desc"   => "Búsqueda activa de amenazas...",
          "color"  => "text-dark",
          "icon"   => "binoculars-fill",
          "id"     => "modalThreatHunting",
          "include" => "includes/contenido-threat-hunting.php"
        ],
        [
          "titulo" => "Respuesta a Incidentes",
          "desc"   => "Mitigación rápida de incidentes...",
          "color"  => "text-dark",
          "icon"   => "arrow-repeat",
          "id"     => "modalRespuesta",
          "include" => "includes/contenido-respuesta.php"
        ],
        [
          "titulo" => "Gestión de Vulnerabilidades",
          "desc"   => "Identificación, clasificación...",
          "color"  => "text-dark",
          "icon"   => "bug-fill",
          "id"     => "modalVulnerabilidades",
          "include" => "includes/contenido-vulnerabilidades.php"
        ],
      ];

      foreach ($servicios as $s): ?>
        <div class="col-12 col-md-6 col-lg-4">
          <a type="button" class="card-click text-start text-decoration-none w-100 border-0 bg-transparent" data-bs-toggle="modal" data-bs-target="#<?= $s['id'] ?>">
            <div class="card h-100">
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
<?php foreach ($servicios as $s): ?>
  <div class="modal fade" id="<?= $s['id'] ?>" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fw-bold"><?= $s['titulo'] ?></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">
          <?php include $s['include']; ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>

<?php include 'includes/footer.php'; ?>