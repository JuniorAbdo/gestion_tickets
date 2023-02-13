

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
          {{-- <a class="navbar-brand" href="{{route('tickets.index')}}">Liste Tickets</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">dqfQ</span>
          </button> --}}
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item me-3">
                <a class="nav-link active" aria-current="page" href="{{route('tickets.index')}}">
                  <button type="button" class="btn btn-outline-dark border border-0">Liste tickets</button> </a>
              </li>
              <li class="nav-item me-3">
                <a class="nav-link active" aria-current="page" href="{{route('tickets.create')}}">
                  <button type="button" class="btn btn-outline-dark border border-0">Créer ticket</button>
                </a>
              </li>
              <li class="nav-item me-3">
                <div class="dropdown">
                  <a class="btn btn-secondary dropdown-toggle text-dark mt-1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                   Statisatiques
                  </a>
                
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </div>
              </li>
              
              <li class="nav-item me-5 ms-4">
                <form class="d-flex" role="search" method="POST" action="{{route('serache.csc')}}">
                  @csrf
                    <select class="form-select form-select-sm me-2 bg-secondary" aria-label=".form-select-sm example" name="csc">
                      @foreach ($csc_data as $csc)
                      <option value="{{$csc->libelle_csc}}">{{$csc->libelle_csc}}</option> 
                      @endforeach
                      
                     
                    </select>
                    <button class="btn btn-outline-dark" type="submit">Recherche</button>
                  </form>
              </li>
              <li class="nav-item">
                <form class="d-flex" role="search" method="POST" action="{{route('serache.etat')}}">
                  @csrf
                    {{-- <input class="form-control " type="search" placeholder="recherche par etat" aria-label="search"> --}}
                    
                    <select class="form-select form-select-sm me-2 bg-secondary" aria-label=".form-select-sm example" name="etat">
                      @foreach ($etat_data as $etat)
                      <option value="{{$etat->intitule_etat}}">{{$etat->intitule_etat}}</option> 
                      @endforeach
                      
                     
                    </select>
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