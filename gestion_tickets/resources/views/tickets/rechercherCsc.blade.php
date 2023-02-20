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


<div class="container text-center mt-4">
  <table class="table table-dark table-striped">
      <tr class="table-primary">
          <th>Titre</th>
          <th>Date Ticket</th>
          <th>csc</th>
          <th>Etat</th>
          <th>Actions</th>
      </tr>
      <tbody>
          @for ($i=0;$i<count($tickets);$i++)
              <tr>
                <td>{{$tickets[$i]->title}} </td>
                <td>{{$tickets[$i]->created_at}} </td>
                <td>{{$csc}} </td>
                <td>{{$dataExstern[$i]}} </td>
                <td>
                    <a href="{{route('tickets.show',['ticket'=>$tickets[$i]->id])}}">
                    <img src="{{URL::asset("./image/icons/voir.png")}}" class="img-thumbnail" width="40" alt="icone pour voir les détail">
                    </a>
                    <a href="{{route('tickets.edit',['ticket'=>$tickets[$i]->id])}}">
                        <img src="{{URL::asset("./image/icons/modif.png")}}" class="img-thumbnail" width="40" alt="icone pour voir les détail">
                    </a>
                    </td>
                  </tr>
                @endfor
          @empty($tickets)
              <tr>
                <td colspan="4">
                    <div class="text-danger">
                        aucun Ticket trouvé
                    </div>
                </td>
              </tr>
            @endempty

          
        </tbody>
      
    </table>
</div>

<div class="container">
 
  <div class="row justify-content-center">
      {{$tickets->links() }}
  </div>
  
</div>

@endsection