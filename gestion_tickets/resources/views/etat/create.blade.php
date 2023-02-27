@extends('layouts.template')
@section('title','créer une nouveau état')
@section('content')
<div class="container text-center ">
    <div class="row justify-content-md-center ">
      <div class="col-6  bg-success border border-dark mt-3 rounded-1 text-white h3">
       Créer un nouveau état
      </div>
    </div>
     </div>

<div class="container border border-2 border-dark rounded">
    <div class="row justify-content-center">
        <form action="{{route('etats.store',)}}" method="POST">
            @csrf
         
            <div class="col-6">
                <label  class="form-label">état</label>
                <input type="text" class="form-control"  name="etat">
            </div>
            <div class="col-6">
                <button type="submit" class="btn btn-success mt-2">Ajouter</button>
            </div>
        </form>
    </div>

</div>
@endsection