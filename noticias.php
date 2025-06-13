<?php include 'includes/header.php'; ?>

<main style="background-color: #123458; color: white;">
  <div class="container py-5">
    <!-- Noticias -->
    <section class="mb-5">
      <h2 class="text-center text-warning fw-bold mb-4">
        📰 Últimas Noticias sobre Hacking
      </h2>
      <div class="row justify-content-center">
        <div class="col-md-8 text-center">
          <p class="text-danger">No se pudieron cargar noticias desde NewsAPI.</p>
        </div>
      </div>
      <hr class="border-secondary my-5" />
    </section>

    <!-- Mapa de Ataques -->
    <section>
      <h2 class="text-center text-info fw-bold mb-4">
        🌍 Mapa de Ataques en Tiempo Real
      </h2>
      <div class="ratio ratio-16x9 rounded shadow">
        <iframe src="https://threatmap.fortiguard.com/" title="FortiGuard Attack Map" frameborder="0" allowfullscreen></iframe>
      </div>
    </section>
  </div>
</main>

<?php include 'includes/footer.php'; ?>
