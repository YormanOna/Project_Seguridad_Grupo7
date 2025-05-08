<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ataque XSS</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Iconos de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
      body {
        background-color: #f8f9fa;
      }
      .navbar-brand {
        font-weight: bold;
      }
      .card-custom {
        border-radius: 1rem;
        box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.15);
      }
      .toggle-advanced, .toggle-comments {
        font-size: 0.875rem;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
        <a class="navbar-brand" href="#"><i class="bi bi-shield-lock-fill"></i> XSS Demo</a>
      </div>
    </nav>
    
    <div class="container py-5">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <!-- Tarjeta del formulario -->
          <div class="card card-custom mb-4">
            <div class="card-header bg-white">
              <h2 class="h5 mb-0"><i class="bi bi-chat-left-text"></i> Deja tu comentario</h2>
            </div>
            <div class="card-body">
              <form action="{{ route('n.guardar') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="contenido" class="form-label">Comentario</label>
                  <textarea class="form-control" id="contenido" rows="4" name="contenido" placeholder="Escribe algo..." required></textarea>
                </div>
                <!-- Enlace para mostrar opciones avanzadas -->
                <div class="mb-2">
                  <span class="text-primary toggle-advanced" data-bs-toggle="collapse" href="#modoCollapse" role="button" aria-expanded="false" aria-controls="modoCollapse">
                    <i class="bi bi-gear-fill"></i> Opciones avanzadas
                  </span>
                </div>
                <!-- Sección colapsable para el modo de visualización -->
                <div class="collapse" id="modoCollapse">
                  <div class="card card-body mb-3">
                    <label for="modo" class="form-label">Modo de visualización</label>
                    <select class="form-select" name="modo" id="modo">
                      <option value="seguro" selected>Seguro</option>
                      <option value="inseguro">Inseguro</option>
                    </select>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary w-100"><i class="bi bi-save-fill"></i> Guardar</button>
              </form>
            </div>
          </div>

          <!-- Tarjeta de comentarios con colapso -->
          <div class="card card-custom">
            <div class="card-header bg-white d-flex justify-content-between align-items-center">
              <h2 class="h5 mb-0"><i class="bi bi-list-ul"></i> Comentarios</h2>
              <button class="btn btn-sm btn-outline-secondary toggle-comments" type="button" data-bs-toggle="collapse" data-bs-target="#commentsCollapse" aria-expanded="false" aria-controls="commentsCollapse">
                <i class="bi bi-chevron-down"></i> Ver/Ocultar
              </button>
            </div>
            <div class="collapse show" id="commentsCollapse">
              <div class="card-body p-0">
                <ul class="list-group list-group-flush">
                  @foreach($comentarios as $c)
                    <li class="list-group-item">
                      @if(session('modo') === 'inseguro')
                        {!! $c->comentario !!}
                      @else
                        {{ $c->comentario }}
                      @endif
                    </li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
