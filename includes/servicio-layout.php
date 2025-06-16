<?php include("header.php"); ?>

<section class="servicio-detalle text-light py-5 bg-dark">
    <div class="container">

        <!-- Encabezado -->
        <div class="text-center mb-5">
            <i class="bi <?= $icono ?> fs-1 <?= $icon_color ?>"></i>
            <h1 class="fw-bold mt-2"><?= $titulo ?></h1>
            <p class="lead"><?= $descripcion ?></p>
        </div>

        <!-- Contenido principal -->
        <div class="row gx-5 gy-4 align-items-center bg-light text-dark rounded shadow-sm py-4 px-3">
            <div class="col-md-6">
                <img src="<?= $imagen ?>" alt="<?= $titulo ?>" class="img-fluid rounded shadow-sm w-100">
            </div>
            <div class="col-md-6">
                <div class="box-texto bg-white p-4 rounded shadow-sm h-100 d-flex flex-column justify-content-between">
                    <div>
                        <h3 class="fw-semibold mb-3"><?= $articulo_titulo ?></h3>
                        <p class="text-muted"><?= $articulo_desc ?></p>
                    </div>
                    <a href="<?= $articulo_url ?>" target="_blank" class="btn btn-outline-danger mt-4">
                        <i class="bi bi-book me-1"></i> Leer artículo completo
                    </a>
                </div>
            </div>
        </div>

        <!-- Beneficios -->
        <div class="mt-5">
            <h4 class="text-white fw-bold mb-4">
                <i class="bi bi-award-fill me-2 text-success"></i>Beneficios de este servicio
            </h4>
            <div class="row gy-3">
                <?php foreach ($beneficios as $b): ?>
                    <div class="col-md-6">
                        <div class="beneficio-card d-flex align-items-start bg-dark border border-secondary rounded p-3 h-100">
                            <i class="bi bi-check-circle-fill text-success me-3 fs-4 mt-1"></i>
                            <span class="text-white"><?= $b ?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- CTA -->
        <?php if (isset($cta) && isset($cta_url)): ?>
            <div class="text-center mt-5">
                <a href="<?= $cta_url ?>" class="btn btn-warning btn-lg px-5 shadow-sm">
                    <i class="bi bi-chat-dots-fill me-2"></i> <?= $cta ?>
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php include("footer.php"); ?>