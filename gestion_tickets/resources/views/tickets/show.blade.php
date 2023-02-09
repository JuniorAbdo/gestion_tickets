
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
        <div class="row bg-primary justify-content-center">
            <div class="col-4 ">
                
                liste des 8 dernier tickets
            </div>
        </div>
    </div>
    <div class="d-flex flex-row  border border-3 ">
    <div class="container text-startp-2">
        <div class="row judtify-content-center">
            <div class="col-3 bg-secondary border border-1">
                code Ticket:
            </div>
            <div class="col-5 justifay-content-center bg-info">
                {{$ticket[0]->number_ticket}}
            </div>
            
        </div>
        <div class="row judtify-content-center">
            <div class="col-3 bg-secondary border border-1">
                Titre :
            </div>
            <div class="col-6">
                {{$ticket[0]->title}}
            </div>
        </div>
        <div class="row judtify-content-center">
            <div class="col-3 bg-secondary border border-1">
                Description :
            </div>
            <div class="col-6">
                {{$ticket[0]->description}}
            </div>
        </div>
        {{-- <div class="row judtify-content-start">
            <div class="col-3 bg-secondary border border-1">
                pice jointe:
            </div>
            <div class="col-6">
                <img src="{{asset('tick/'.$ticket[0]->pice)}}" width="100"/>
            </div>
        </div> --}}
        <div class="row judtify-content-start">
            <div class="col-3 bg-secondary border border-1">
                date de creation :
            </div>
            <div class="col-6">
                {{$ticket[0]->created_at}}
            </div>
        </div>
        <div class="row judtify-content-center">
            <div class="col-3 bg-secondary border border-1">
                CSC :
            </div>
            <div class="col-6">
                {{$externData['csc']}}
            </div>
        </div>
        <div class="row judtify-content-center">
            <div class="col-3 bg-secondary border border-1">
                Categorie :
            </div>
            <div class="col-6">
                {{$externData['categorie']}}
            </div>
        </div>
        <div class="row judtify-content-center">
            <div class="col-3 bg-secondary border border-1">
                Sous Categorie:
            </div>
            <div class="col-6">
                {{$externData['sous_categorie']}}
            </div>
            <div class="row judtify-content-center">
                <div class="col-3 bg-secondary border border-1">
                    Etat :
                </div>
                <div class="col-6">
                    {{$externData['etat']}}
                </div>
            </div>
        </div>
      </div>
      <div class="container p-2">
        <div class="row">
            <div class="col-5 bg-secondary border border-1">
                pice jointe:
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <img src="{{asset('tick/'.$ticket[0]->pice)}}" width="100"/>
            </div>
        </div>
      </div>
    </div>
</body>
</html>