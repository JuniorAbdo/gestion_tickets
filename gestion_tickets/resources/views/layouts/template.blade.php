

<!doctype html>
<html>
<head>
    <!-- Scripts -->
    <title>@yield('title') </title>
    <script src="{{ asset('js/app.js') }}" defer></script>
   
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-secondary">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('tickets.index')}}">Accueil</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('tickets.create')}}">Creer un Ticket</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Statistiques</a>
              </li>
              
              <li class="nav-item me-5 ms-4">
                <form class="d-flex" role="search" method="POST" action="#">
                    <input class="form-control me-2" type="search" placeholder="Recherche par csc" aria-label="search">
                    <button class="btn btn-outline-dark" type="submit">Recherche</button>
                  </form>
              </li>
              <li class="nav-item">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="recherche par etat" aria-label="search">
                    <button class="btn btn-outline-dark" type="submit">Recherche</button>
                  </form>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div>
        @yield('content')
      </div>
</body>
</html>