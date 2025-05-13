<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #fff;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .navbar {
            background: rgba(0,0,0,0.3);
        }
        .hero {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 4rem 1rem;
            text-align: center;
        }
        .hero h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1rem;
            animation: fadeInDown 1s ease-out;
        }
        .hero p {
            font-size: 1.25rem;
            margin-bottom: 2rem;
            animation: fadeInUp 1s ease-out;
        }
        .btn-login {
            padding: 0.75rem 2rem;
            font-size: 1.1rem;
            border-radius: 50px;
            transition: transform .2s;
        }
        .btn-login:hover {
            transform: scale(1.05);
        }
        .features {
            padding: 4rem 1rem;
            background: rgba(255,255,255,0.1);
        }
        .feature-card {
            background: rgba(0,0,0,0.4);
            border: none;
            border-radius: .75rem;
            transition: transform .2s;
        }
        .feature-card:hover {
            transform: translateY(-5px);
        }
        footer {
            padding: 1rem;
            text-align: center;
            font-size: .9rem;
            background: rgba(0,0,0,0.2);
        }
        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-20px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to   { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Proyecto - Grupo 7</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navMenu">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="">Características</a></li>
            <li class="nav-item"><a class="nav-link" href="">Contacto</a></li>
              <li class="nav-item">
                <a class="btn btn-outline-light btn-login" href="{{ url('/login') }}">
                  <i class="bi bi-box-arrow-in-right me-2"></i>Login
                </a>
              </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Hero -->
    <section class="hero">
      <div class="container">
        <h1>Construye aplicaciones increíbles con nosotros</h1>
        <p>Rápido, seguro y elegante. Descubre lo fácil que es empezar tu próximo proyecto.</p>
          <a class="btn btn-primary btn-login" href="{{ url('/login') }}">
            <i class="bi bi-door-open-fill me-2"></i>Acceder al Login
          </a>
      </div>
    </section>

    <!-- Características -->
    <section id="features" class="features">
      <div class="container">
        <div class="row g-4">
          <div class="col-md-4">
            <div class="card feature-card p-4 h-100 text-white">
              <div class="card-body text-center">
                <i class="bi bi-speedometer2 display-4 mb-3"></i>
                <h5 class="card-title">Rendimiento Óptimo</h5>
                <p class="card-text">Con Eloquent y caché integrado, tu aplicación vuela.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card feature-card p-4 h-100 text-white">
              <div class="card-body text-center">
                <i class="bi bi-shield-lock-fill display-4 mb-3"></i>
                <h5 class="card-title">Seguridad</h5>
                <p class="card-text">Protege tus rutas, datos y usuarios con middleware y políticas.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card feature-card p-4 h-100 text-white">
              <div class="card-body text-center">
                <i class="bi bi-tools display-4 mb-3"></i>
                <h5 class="card-title">Ecosistema Completo</h5>
                <p class="card-text">Desde Mix hasta Horizon, todo integrado para tu flujo de trabajo.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer id="contact">
      <div class="container">
        © {{ date('Y') }} Grupo 7 - Aviles, Oña y Reyes  
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
