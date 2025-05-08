<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario con Bootstrap</title>
    <!-- Enlace a Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container mt-5">
      <h1 class="mb-4">Formulario de Inicio de Sesión</h1>
      
      <form action="{{ route('login.procesar') }}" method="POST">
      @csrf
        <div class="mb-3">
          <label for="email" class="form-label">Correo electrónico</label>
          <input type="email" class="form-control" id="email" name = "email"placeholder="tucorreo@ejemplo.com">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Contraseña</label>
          <input type="password" class="form-control" name="contraseña" id="contraseña" placeholder="Ingresa tu contraseña">
        </div>
        <div class="mb-3">
          <label for="opciones" class="form-label">Selecciona una opción</label>
          <select class="form-select" id="opciones" name='opciones'>
            <option selected disabled>Elige una opción</option>
            <option value="opcion1">Seguro</option>
            <option value="opcion2">Inseguro</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>

    <!-- Scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
