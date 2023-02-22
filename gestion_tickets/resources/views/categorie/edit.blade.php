@extends('layouts.template')
@section('title','edit categorie')
@section('content')

<div class="container text-center ">
    <div class="row justify-content-md-center ">
      <div class="col-6  bg-success border border-dark mt-3 rounded-1 text-white h3">
       modifier une catégorie
      </div>
    </div>
     </div>
<div class="container">
    <div class="row justify-content-center">
        <form action="{{route('categories.update',['category'=>$categorie[0]->id])}}" method="POST">
            @csrf
            @method('PUT')
            <div class="col-6">
                <label  class="form-label">Catégorie</label>
                <input type="text" class="form-control" value="{{$categorie[0]->intitule}}" name="categorie">
            </div>
            <div class="col-6">
                <button type="submit" class="btn btn-success mt-2">Modifer</button>
            </div>
        </form>
    </div>

</div>
@endsection