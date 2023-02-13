@extends('layouts.template')
@section('title','resultat de rechercher')
@section('content')

<div class="container text-center mt-3">
    <div class="row">
        
        <div class="col-12 bg-info border border-dark rounded-3 ">
          resultat de recherche
        </div>
    </div>
</div>


  
    <table class="table table-striped  table-bordered mt-5 text-center">
        <thead>
          <tr>
            <th scope="col">Title</th>
            <th scope="col">Date de ticket</th>
            <th scope="col">Etat</th>
            <th scope="col">CSC</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>


          @for($i=0;$i<count($tickets);$i++ )
              <tr>
                <td>{{$tickets[$i]->title}} </td>
                <td>{{$tickets[$i]->created_at}} </td>
                <td>{{$csc}} </td>
                <td>{{$dataExstern[$i]}} </td>
                <td>
                    <a href="{{route('tickets.show',['ticket'=>$tickets[$i]->id])}}">
                        <img src="{{URL::asset("./image/icons/voir.png")}}" class="img-thumbnail" width="40" alt="icone pour voir les détail"/>
                    </a>
                    <a href="{{route('tickets.edit',['ticket'=>$tickets[$i]->id])}}">
                        {{-- <img src="./image/icons/modif.png" class="img-thumbnail" width="40" alt="icone pour voir les détail"/> --}}
                       <img src="{{URL::asset("./image/icons/modif.png")}}" class="img-thumbnail" width="40" alt="icone pour voir les détail"/>

                    </a>
                    </td>
                </tr>
                
          @endfor
        </tbody>
    </table>
</div>
<div>
    
</div>
@endsection