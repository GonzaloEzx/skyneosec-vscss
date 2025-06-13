<?php include("header.php"); ?>

<section class="py-5 bg-dark text-light">
    <div class="container">
        <div class="text-center mb-4">
            <i class="bi <?= $icono ?> fs-1 <?= $icon_color ?? 'text-warning' ?>"></i>
            <h1 class="fw-bold"><?= $titulo ?></h1>
            <p class="lead"><?= $descripcion ?></p>
        </div>

        <div class="row mb-4">
            <?php if (isset($imagen)): ?>
                <div class="col-md-6 mb-3">
                    <img src="<?= $imagen ?>" alt="<?= $titulo ?>" class="img-fluid rounded shadow w-100 h-100 object-fit-cover">
                </div>
            <?php endif; ?>

            <!-- Caja para los videos & articulos -->
            <div class="col-md-6 mb-3">
                <?php if (isset($video_url)): ?>
                    <div class="ratio ratio-16x9 h-100">
                        <iframe src="<?= $video_url ?>" title="Video de <?= $titulo ?>" allowfullscreen></iframe>
                    </div>
                <?php elseif (isset($articulo_url)): ?>
                    <div class="card h-100 shadow bg-secondary-subtle text-dark">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <h5 class="card-title"><?= $articulo_titulo ?? "Artículo recomendado" ?></h5>
                                <p class="card-text"><?= $articulo_desc ?? "Explorá más sobre este servicio en este artículo." ?></p>
                            </div>
                            <a href="<?= $articulo_url ?>" target="_blank" class="btn btn-outline-danger mt-3">
                                <i class="bi bi-book me-2"></i> Leer artículo completo
                            </a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <!-- Caja para los beneficios -->
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h5 class="text-light fw-bold mb-3">
                    <i class="bi bi-award-fill me-2 text-success"></i>Beneficios de este servicio
                </h5>
                <ul class="list-group list-group-flush mb-4">
                    <?php foreach ($beneficios as $b): ?>
                        <li class="list-group-item bg-dark text-light fw-bold border-1 d-flex justify-content-center">
                            <div class="d-flex align-items-start" style="max-width: 600px;">
                                <i class="bi bi-check-circle-fill text-success me-2 mt-1"></i>
                                <span><?= $b ?></span>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <?php if (isset($cta) && isset($cta_url)): ?>
                    <div class="text-center">
                        <a href="<?= $cta_url ?>" class="btn btn-danger btn-lg shadow-sm">
                            <i class="bi bi-chat-dots-fill me-2"></i> <?= $cta ?>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <br>
        <!-- -->
    </div>
</section>

<?php include("footer.php"); ?>