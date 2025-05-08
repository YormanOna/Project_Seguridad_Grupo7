<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ataque XSS</title>
    <link 
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" 
      rel="stylesheet">
  </head>
  <body>
    <div class="container py-5">
      <h1 class="mb-4">Ataque XSS</h1>

      <form action="{{ route('n.guardar') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="contenido" class="form-label">Ingrese el comentario</label>
          <textarea class="form-control" id="contenido" rows="3" name="contenido"></textarea>
        </div>

        <div class="mb-3">
          <label for="modo" class="form-label">Modo de visualización</label>
          <select class="form-select" name="modo" id="modo">
            <option value="seguro" selected>Seguro </option>
            <option value="inseguro">Inseguro </option>
          </select>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>

      <hr>

      <ul>
        @foreach($comentarios as $c)
          <li>
            @if(session('modo') === 'inseguro')
              {!! $c->comentario !!}
            @else
              {{ $c->comentario }}
            @endif
          </li>
        @endforeach
      </ul>
    </div>

    <script 
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js">
    </script>
  </body>
</html>
