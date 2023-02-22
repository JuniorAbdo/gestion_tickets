

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
        background-color: rgb(255, 255, 255);
      }
      .search{
        font-size: 20px;
      }
      #log{
        position: absolute;
        margin-right: 0px;
        right: 0px;
      }
    </style>
</head>
<body>
  
    <nav class="navbar navbar-expand-lg bg-dark ">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav   ">
              <li class="nav-item ms-1 ms-auto">
                <a class="nav-link active" aria-current="page" href="{{route('tickets.index')}}">
                  <button type="button" class="btn btn-outline-secondary border border-0 text-white">Liste tickets</button>
                 </a>
              </li>
              <li class="nav-item me-3">
                <a class="nav-link active" aria-current="page" href="{{route('tickets.create')}}">
                  <button type="button" class="btn btn-outline-secondary border border-0 text-white">Créer ticket</button>
                </a>
              </li>
              {{-- <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('users.index')}}">
                  <button type="button" class="btn btn-outline-secondary border border-0 text-white">Zone Admin</button>
                 </a>
              </li> --}}
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('tickets.cloture')}}">
                  <button type="button" class="btn btn-outline-secondary border border-0 text-white">Tickets cloturer</button>
                 </a>
              </li>
              <li class="nav-item me-3 mt-1">
                <div class="dropdown">
                  <a class="btn btn-dark dropdown-toggle text-white mt-1" href="#"  data-bs-toggle="dropdown" aria-expanded="false">
                   Statisatiques
                  </a>
                
                  <ul class="dropdown-menu  ">
                    <li><a class="dropdown-item" href="{{route('chart.semaine')}}">Diagramme Tickets/csc de ce semaine</a></li>
                    <li><a class="dropdown-item" href="{{route('chart.mois')}}">Diagramme Tickets/csc de ce mois</a></li>
                    <li><a class="dropdown-item" href="{{route('chart.ticket.semaine')}}">Diagramme Tickets/type de ce semaine</a></li>
                    <li><a class="dropdown-item" href="{{route('chart.ticket.mois')}}">Diagramme Tickets/type de ce mois</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item me-3 mt-1">
                <div class="dropdown">
                  <a class="btn btn-dark dropdown-toggle text-white mt-1" href="#"  data-bs-toggle="dropdown" aria-expanded="false">
                   zone Admin
                  </a>
                
                  <ul class="dropdown-menu  ">
                    <li><a class="dropdown-item" href="{{route('users.index')}}"> utilisateurs</a></li>
                    <li><a class="dropdown-item" href="{{route('categories.index')}}">catégories</a></li>
                    <li><a class="dropdown-item" href="{{route('sousCategories.index')}}">sous catégories</a></li>
                    
                  </ul>
                </div>
              </li>

              <li class="nav-item dropdown d-flex flex-row" id="log">
                <img src="{{URL::asset("./image/icons/logi.png")}}" alt="icone" width="40" class="p-2 ">
                <a  class="nav-link dropdown-toggle text-white fs-6 mt-2 me-0 p-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
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