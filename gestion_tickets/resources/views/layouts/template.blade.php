

<!doctype html>
<html>
<head>
    <!-- Scripts -->
    <title>@yield('title') </title>
  
    <script src="{{ asset('js/app.js') }}" defer></script>
   
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
      body{
        font-size: 20px;
      }
    </style>
</head>
<body>
  
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
          {{-- <a class="navbar-brand" href="{{route('tickets.index')}}">Liste Tickets</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">dqfQ</span>
          </button> --}}
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item me-3">
                <a class="nav-link active" aria-current="page" href="{{route('tickets.index')}}">
                  <button type="button" class="btn btn-outline-secondary border border-0 text-white">Liste tickets</button> </a>
              </li>
              <li class="nav-item me-3">
                <a class="nav-link active" aria-current="page" href="{{route('tickets.create')}}">
                  <button type="button" class="btn btn-outline-secondary border border-0 text-white">Créer ticket</button>
                </a>
              </li>
              <li class="nav-item me-3">
                <div class="dropdown">
                  <a class="btn btn-dark dropdown-toggle text-white mt-1" href="#"  data-bs-toggle="dropdown" aria-expanded="false">
                   Statisatiques
                  </a>
                
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('chart.semaine')}}">Diagramme Tickets/csc de ce semaine</a></li>
                    <li><a class="dropdown-item" href="{{route('chart.mois')}}">Diagramme Tickets/csc de ce mois</a></li>
                    <li><a class="dropdown-item" href="{{route('chart.ticket.semaine')}}">Diagramme Tickets/type de ce semaine</a></li>
                    <li><a class="dropdown-item" href="{{route('chart.ticket.mois')}}">Diagramme Tickets/type de ce mois</a></li>
                  </ul>
                </div>
              </li>
              
              <li class="nav-item me-5 ms-4">
                <form class="d-flex" role="search" method="POST" action="{{route('serache.csc')}}">
                  @csrf
                    <select class="form-select form-select-sm me-2 bg-dark text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" name="csc">
                      @foreach ($csc_data as $csc)
                      <option value="{{$csc->libelle_csc}}">{{$csc->libelle_csc}}</option> 
                      @endforeach
                      
                     
                    </select>
                    <button class="btn btn-outline-secondary text-white" type="submit">Recherche</button>
                  </form>
              </li>
              <li class="nav-item">
                <form class="d-flex" role="search" method="POST" action="{{route('serache.etat')}}">
                  @csrf
                    {{-- <input class="form-control " type="search" placeholder="recherche par etat" aria-label="search"> --}}
                    
                    <select class="form-select form-select-sm me-2 bg-dark text-white" aria-label=".form-select-sm example" name="etat">
                      @foreach ($etat_data as $etat)
                      <option value="{{$etat->intitule_etat}}">{{$etat->intitule_etat}}</option> 
                      @endforeach
                      
                     
                    </select>
                    <button class="btn btn-outline-secondary text-white" type="submit">Recherche</button>
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