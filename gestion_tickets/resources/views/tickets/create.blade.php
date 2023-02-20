@extends('layouts.template')

<!doctype html>
{{-- <html>
<head>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
   
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>  --}}
    @section('title','Créer un nouveau ticket')
    @section('content')
   <div class="container text-center ">
  <div class="row justify-content-md-center ">
    <div class="col-6  bg-info border border-secondary mt-3 rounded-3 h3">
     Créer un nouveau ticket
    </div>
  </div>
   </div>
   @if(!empty(Session::get('message_succusse')))
   <div class="container">
    <div class="row justify-content-md-center">
  <div class="alert alert-success col-6" role="alert">
    {{Session::get('message_succusse')}}
  </div>
</div>
@endif

   </div>
   <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-6">
        <form method='POST' action={{route('tickets.store')}} enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label  class="form-label">Titre</label>
                <input type="text" class="form-control" name="title" >
            </div>
            
                @error('title')
                <div class="alert alert-danger ">{{ $message }}</div>
                @enderror
            
            <div class="mb-3" >
                <label  class="form-label">Détail</label>
                <textarea class="form-control" rows="3" name="detail"></textarea>
            </div>
            @error('detail')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            <div class="mb-3">
                <label  class="form-label">catégorié ticket</label>
                    <select class="form-select" name="categorie" >
                       
                         @for ($i = 0; $i < count($categories); $i++)
                         <option value="{{$categories[$i]->intitule}}">{{$categories[$i]->intitule}} </option>
                         @endfor
                         

                    </select >
            </div>
            @error('categorie')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            <div class="mb-3">
                <label  class="form-label">Sous catégorié ticket</label>
                    <select class="form-select" name="sous_categorie">
                        @for ($i = 0; $i < count($typeCategories); $i++)
                        <option value="{{$typeCategories[$i]->intitule}}">{{$typeCategories[$i]->intitule }} </option>
                        @endfor
                    </select>
            </div>
            @error('sous_categorie')
                <div class="alert alert-danger mb-3">{{ $message }}</div>
                @enderror
            <div class="mb-3">
                <label  class="form-label">Pices jointe</label>
                <input class="form-control" type="file" name="pice">
            </div>
            <div class="mb-3">
                <label  class="form-label">CSC</label>
            <select class="form-select" name="csc">
               
               @for ($i = 0; $i < count($cscs); $i++)
                  <option value="{{$cscs[$i]->libelle_csc}}">{{$cscs[$i]->libelle_csc}} </option>
               @endfor
                  
              
            </select>
            </div>
                @error('csc')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label class="form-check-label" >
                        Type ticket
                      </label>
                </div>
                
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="key_ticket" value="RSU" >RSU

              </div>
              <div class="form-check form-check-inline">
                
                <input class="form-check-input" type="radio" name="key_ticket" value="IDP" >RNP
                
              </div>
              @error('key_ticket')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            <div class="mb-3 justify-content-center mt-3  ">
                <button type="submit" class="btn btn-primary me-5" >Créer Tichet</button>
            </div>

            
        </form>
      </div>
    </div>
   </div>
   
  
  @endsection