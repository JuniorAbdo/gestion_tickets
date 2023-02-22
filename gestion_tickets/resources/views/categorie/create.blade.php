@extends('layouts.template')
@section('title','cree une catégorie')
@section('content')
<div class="container text-center ">
    <div class="row justify-content-md-center ">
      <div class="col-6  bg-success border border-dark mt-3 rounded-1 text-white h3">
       Créer un nouveau catégorie
      </div>
    </div>
     </div>

<div class="container">
    <div class="row justify-content-center">
        <form action="{{route('categories.store',)}}" method="POST">
            @csrf
         
            <div class="col-6">
                <label  class="form-label">Catégorie</label>
                <input type="text" class="form-control"  name="categorie">
            </div>
            <div class="col-6">
                <button type="submit" class="btn btn-success mt-2">Ajouter</button>
            </div>
        </form>
    </div>

</div>
@endsection