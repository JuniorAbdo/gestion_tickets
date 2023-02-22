@extends('layouts.template')
@section('title','create sous categorie')
@section('content')

<div class="container text-center ">
    <div class="row justify-content-md-center ">
      <div class="col-6  bg-success border border-dark mt-3 rounded-1 text-white h3">
       Créer un sous catégorie
      </div>
    </div>
     </div>
<div class="container">
    <div class="row justify-content-center">
        <form action="{{route('sousCategories.store')}}" method="POST">
            @csrf
         
            <div class="col-8">
                <label  class="form-label"> Sous Catégorie</label>
                <input type="text" class="form-control"  name="sousCategorie">
            </div>
            <div class="col-8">
                <div>
                    Catégorie
                </div>
                @for ($i = 0; $i < count($categories); $i++)
                    
               
                <input class="form-check-input" type="checkbox" value="{{$categories[$i]->id}}" name="categorie" >
                <label class="form-check-label" for="flexCheckChecked">
                   {{$categories[$i]->intitule}}
                </label>
                @endfor

            </div>
            <div class="col-6">
                <button type="submit" class="btn btn-success mt-2">Ajouter</button>
            </div>
        </form>
    </div>

</div>
@endsection