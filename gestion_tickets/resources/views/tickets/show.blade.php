
@section('name')

    
@endsection
<!doctype html>
<html>
<head>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
   
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    
    <div class="container">
        <div class="row  justify-content-center mt-3">
            <div class="col-9 bg-primary text-center"> 
                liste des 8 dernier tickets
            </div>
        </div>
    </div>
  
    <div class=" container mt-3">
        <div class="row justify-content-center">
            <div class="col-3 bg-secondary border border-1 border-dark text-white">
                Code Ticket  :
            </div>
            <div class="col-6 border border-1 border-dark">
                {{$ticket[0]->number_ticket}}
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-3 bg-secondary border border-1 border-dark text-white">
                Titre :
            </div>
            <div class="col-6 border border-1 border-dark">
                {{$ticket[0]->title}}
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-3 bg-secondary border border-1 border-dark text-white">
                Détail :
            </div>
            <div class="col-6 border border-1 border-dark">
                {{$ticket[0]->description}}
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-3 bg-secondary border border-1 border-dark text-white">
                Date de creation :
            </div>
            <div class="col-6 border border-1 border-dark">
                {{$ticket[0]->created_at}}
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-3 bg-secondary border border-1 border-dark text-white">
                CSC :
            </div>
            <div class="col-6 border border-1 border-dark">
                {{$externData['csc']}}
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-3 bg-secondary border border-1 border-dark text-white">
                Catégorié :
            </div>
            <div class="col-6 border border-1 border-dark">
                {{$externData['categorie']}}
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-3 bg-secondary border border-1 border-dark text-white">
                Sous catégorié :
            </div>
            <div class="col-6 border border-1 border-dark">
                {{$externData['sous_categorie']}}
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-3 bg-secondary border border-1 border-dark text-white">
                Etat de ticket :
            </div>
            <div class="col-6 border border-1 border-dark">
                {{$externData['etat']}}
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-3 bg-secondary border border-1 border-dark text-white">
                Pice Jointe :
            </div>
            <div class="col-6 border border-1 border-dark">
              @if ($ticket[0]->pice)
                  <div>
                    <img src="{{asset('tick/'.$ticket[0]->pice)}}" width="300"/>
                  </div>
              @else
                  <div text-danger>
                    n'est pas de pice
                  </div>
              @endif
               
            </div>
        </div>
    
</div>
        






    
   
</body>
</html>