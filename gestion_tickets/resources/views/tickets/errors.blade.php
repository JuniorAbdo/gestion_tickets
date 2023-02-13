@extends('layouts.template')
@section('title','erreurs')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            @error('neveauDtail')
            <div class="alert alert-danger">{{$message}} </div>
            @enderror
        
        </div>
    </div>
</div>


@endsection