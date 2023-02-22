@extends('layouts.template')
@section('title','modifier sous  categorie')
@section('content')

<div class="container text-center ">
    <div class="row justify-content-md-center ">
      <div class="col-6  bg-success border border-dark mt-3 rounded-1 text-white h3">
       modifier un sous catégorie
      </div>
    </div>
     </div>

<div class="container">
    <div class="row justify-content-center">
        <form action="{{route('sousCategories.update',['sousCategory'=>$sousCategorie[0]->id])}}" method="POST">
            @csrf
            @method('PUT')
            <div class="col-8">
                <label  class="form-label"> Sous Catégorie</label>
                <input type="text" class="form-control"  name="sousCategorie" value="{{$sousCategorie[0]->intitule}}">
            </div>
            <div class="col-8">
                <div>
                    Catégorie
                </div>
                @for ($i = 0; $i < count($categories); $i++)
                    
               
                <input class="form-check-input" type="checkbox" value="{{$categories[$i]->id}}" name="categorie"
                @if($categories[$i]->id==$sousCategorie[0]->categorie_id)
                @checked(true)
                @endif
                 >
                <label class="form-check-label" for="flexCheckChecked">
                   {{$categories[$i]->intitule}}
                </label>
                @endfor

            </div>
            <div class="col-6">
                <button type="submit" class="btn btn-success mt-2">Modifier</button>
            </div>
        </form>
    </div>

</div>
@endsection