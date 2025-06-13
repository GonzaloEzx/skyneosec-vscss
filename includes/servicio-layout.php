<?php include("header.php"); ?>

<section class="py-5 bg-dark text-light">
    <div class="container">
        <div class="text-center mb-4">
            <i class="bi <?= $icono ?> fs-1 <?= $icon_color ?? 'text-warning' ?>"></i>
            <h1 class="fw-bold"><?= $titulo ?></h1>
            <p class="lead"><?= $descripcion ?></p>
        </div>

        <main class="flex-grow-1 py-4" style="background-color: #D4C9BE;">
            <div class="container">
                <div class="row align-items-center gx-4 gy-4">
                    <div class="col-12 col-md-6">
                        <!-- Aquí ibas mostrando la imagen -->
                        <img src="<?= $imagen ?>" alt="<?= $titulo ?>" class="w-100 h-100 img-fluid rounded shadow-sm">
                    </div>
                    <div class="col-12 col-md-6">
                        <!-- Aquí estaba la caja blanca grande -->
                        <div class="p-4 bg-light rounded shadow-sm">
                            <h3 class="fw-semibold text-dark"><?= $articulo_titulo ?></h3>
                            <p class="text-muted"><?= $articulo_desc ?></p>
                            <a href="<?= $articulo_url ?>" target="_blank" class="btn btn-outline-danger w-100">
                                <i class="bi bi-book me-1"></i> Leer artículo completo
                            </a>
                        </div>
                    </div>
                </div> <!-- /.row -->
                <!-- Luego venían los beneficios, etc. -->
                <!-- Caja para los beneficios -->
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <br>
                        <h5 class="text-dark fw-bold mb-3">
                            <i class="bi bi-award-fill me-2 text-success"></i>Beneficios de este servicio
                        </h5>

                        <ul class="list-group list-group-flush mb-4">

                            <?php foreach ($beneficios as $b): ?>
                                <li class="list-group-item bg-dark text-light fw-bold border-0.5 d-flex justify-content-left">
                                    <div class="d-flex align-items-start" style="max-width: 600px;">
                                        <i class="bi bi-check-circle-fill text-success me-2 mt-1"></i>
                                        <span><?= $b ?></span>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <?php if (isset($cta) && isset($cta_url)): ?>
                            <div class="text-center">
                                <a href="<?= $cta_url ?>" class="btn btn-warning btn-lg shadow-sm">
                                    <i class="bi bi-chat-dots-fill me-2"></i> <?= $cta ?>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- -->
            </div> <!-- /.container -->
        </main>



    </div>
</section>

<?php include("footer.php"); ?>