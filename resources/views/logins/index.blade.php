<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iniciar Sesión</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Iconos de Bootstrap (opcional) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
      body {
        background: #f8f9fa;
      }
      .form-container {
        max-width: 450px;
        margin: auto;
        margin-top: 80px;
      }
    </style>
  </head>
  <body>
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
        <a class="navbar-brand" href="#"><i class="bi bi-shield-lock-fill"></i> Sql Inyection Demo</a>
      </div>
    </nav>
    @if (session('error'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
      </div>
    @endif

    <div class="container form-container">
      <div class="card shadow rounded-4">
        <div class="card-body p-4">
          <h2 class="card-title text-center mb-4">Iniciar Sesión</h2>
          <form action="{{ route('login.procesar') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="email" class="form-label">Correo electrónico</label>
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                <input type="email" class="form-control" id="email" name="email" placeholder="user1@example.com" required>
              </div>
            </div>
            <div class="mb-3">
              <label for="contraseña" class="form-label">Contraseña</label>
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="contraseña" required>
              </div>
            </div>
            <div class="mb-4">
              <label for="opciones" class="form-label">Selecciona una opción</label>
              <select class="form-select" id="opciones" name="opciones" required>
                <option value="opcion1">Seguro</option>
                <option value="opcion2">Inseguro</option>
              </select>
            </div>
            <div class="d-grid">
              <button type="submit" class="btn btn-primary rounded-pill">Enviar</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
