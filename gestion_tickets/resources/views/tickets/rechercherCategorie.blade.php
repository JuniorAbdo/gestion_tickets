@extends('layouts.template')
@section('title','resultat de rechercher')
@section('content')

<div class="container text-center mt-3">
    <div class="row justify-content-center">
        
        <div class="col-12 bg-success border border-dark rounded-1 text-white h3 ">
          Resultat de recherche Par catégorie
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
                <td>{{$cscs[$i]}} </td>
                <td>{{$etats[$i]}} </td>
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
               
          @if(count($tickets)==0)
              <tr>
                <td colspan="5"class="text-danger">
                    
                        aucun Ticket trouvé
                    
                </td>
              </tr>
            @endif

          
        </tbody>
      
    </table>
</div>

<div class="container">
 
  <div class="row justify-content-center">
      {{$tickets->links() }}
  </div>
  
</div>

@endsection