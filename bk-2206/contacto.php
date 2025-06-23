<?php include 'includes/header.php'; ?>
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // ← Carga automática de PHPMailer

$enviado = false;
$mensajeError = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);
  $user_ip = $_SERVER['REMOTE_ADDR'];

  $mail = new PHPMailer(true);

  try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'neotelcom7@gmail.com';  // Correo real de Seba
    $mail->Password = 'mipichotevoyapasar';    // ¡Usar clave de app!
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom('info@neoseguinfo.com', 'Neo Seguridad Informática');
    $mail->addAddress('neotelcom7@gmail.com', 'Seba');

    $mail->isHTML(true);
    $mail->Subject = 'Nuevo mensaje de contacto';
    $mail->Body = "<p><strong>Nombre:</strong> $name</p>
                   <p><strong>Email:</strong> $email</p>
                   <p><strong>Mensaje:</strong> $message</p>
                   <p><strong>IP:</strong> $user_ip</p>";
    $mail->AltBody = "Nombre: $name\nEmail: $email\nMensaje:\n$message\nIP: $user_ip";

    $mail->send();
    $enviado = true;
  } catch (Exception $e) {
    $mensajeError = "Error al enviar: {$mail->ErrorInfo}";
  }
}
?>

<main class="py-5" style="background-color: #F1EFEC;">
  <div class="container">
    <h1 class="text-center text-dark fw-bold mb-4">Contacto</h1>
    <p class="text-center text-muted mb-5">Si quieres hacernos una consulta, completa el formulario a continuación.</p>

    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6">
        <form method="post" action="">

          <!-- Nombre -->
          <div class="mb-3">
            <label for="name" class="form-label">
              <i class="bi bi-person-fill me-2"></i>Nombre
            </label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>

          <!-- Email -->
          <div class="mb-3">
            <label for="email" class="form-label">
              <i class="bi bi-envelope-fill me-2"></i>Correo Electrónico
            </label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>

          <!-- Mensaje -->
          <div class="mb-4">
            <label for="message" class="form-label">
              <i class="bi bi-chat-left-text-fill me-2"></i>Mensaje
            </label>
            <textarea class="form-control" id="message" name="message" rows="4" maxlength="500" required></textarea>
          </div>

          <!-- Cloudflare Turnstile (placeholder) -->
          <div class="mb-4">
            <div class="cf-turnstile" data-sitekey="0x4AAAAAAA4jWahACwy5PZ4r"></div>
          </div>

          <!-- Enviar -->
          <div class="d-grid">
            <button type="submit" class="btn btn-dark btn-lg">
              <i class="bi bi-send-fill me-2"></i>Enviar
            </button>
          </div>
        </form>
        <?php if ($enviado): ?>
          <div class="alert alert-success mt-4">✅ ¡Mensaje enviado correctamente!</div>
        <?php elseif ($mensajeError): ?>
          <div class="alert alert-danger mt-4">❌ <?= $mensajeError ?></div>
        <?php endif; ?>


        <!-- WhatsApp -->
        <div class="text-center mt-5">
          <p class="text-muted">Si prefieres, también puedes contactarnos directamente por WhatsApp haciendo click en el icono.</p>
          <a href="https://api.whatsapp.com/send/?phone=1120202020&text&type=phone_number&app_absent=0" target="_blank">
            <i class="bi bi-whatsapp" style="font-size: 2rem; color: green;"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</main>

<?php include 'includes/footer.php'; ?>