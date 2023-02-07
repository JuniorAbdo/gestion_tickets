
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
    
    <div class="row justifay-content-center">
      <div class="col-6">
        <form method='POST' action={{route('tickets.store')}}>
            @csrf
            <div class="mb-3">
                <label  class="form-label">Titre</label>
                <input type="text" class="form-control" name="titre" >
            </div>
            <div class="mb-3" >
                <label  class="form-label">Détail</label>
                <textarea class="form-control" rows="3" name="detail"></textarea>
            </div>
            <div class="mb-3">
                <label  class="form-label">date</label>
                <input type="date" class="form-control"  name="date">
              </div>
            <div class="mb-3">
                <label  class="form-label">Type</label>
                    <select class="form-select" name="type" >
                       
                         @for ($i = 0; $i < count($categories); $i++)
                         <option value={{$categories[$i]->intitule}}>{{$categories[$i]->intitule}} </option>
                         @endfor
                         

                    </select >
            </div>
            <div class="mb-3">
                <label  class="form-label">Categories</label>
                    <select class="form-select" name="categorie">
                        @for ($i = 0; $i < count($typeCategories); $i++)
                        <option value={{$typeCategories[$i]->intitule_type }}>{{$typeCategories[$i]->intitule_type }} </option>
                        @endfor
                    </select>
            </div>
            <div class="mb-3">
                <label  class="form-label">Pices jointe</label>
                <input class="form-control" type="file" name="pice">
            </div>
            <div class="mb-3">
                <label  class="form-label">CSC</label>
            <select class="form-select" name="csc">
               
               @for ($i = 0; $i < count($cscs); $i++)
                  <option value={{$cscs[$i]->libelle_csc}}>{{$cscs[$i]->libelle_csc}} </option>
               @endfor
                  
              
            </select>
            </div>
            <div class="mb-3">
                <button type="button" class="btn btn-outline-primary">Cree</button>
            </div>
           

    
            
        </form>
      </div>
    </div>
   </div>
</body>
</html>