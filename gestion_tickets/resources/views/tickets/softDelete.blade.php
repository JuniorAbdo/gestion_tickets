@extends('layouts.template')
@section('title','Liste des Tickets cloturer')
@section('content')
<div class="container text-center mt-3">
    <div class="row">
        
        <div class="col-12 bg-success border border-dark rounded-1 text-white h3">
          Liste des Tickets cloturer
        </div>
    </div>
</div>

 <div class="container mt-3">
        <table class="table table-dark table-striped">
            <tr class="table-primary">
                <th>Titre</th>
                <th>Date Ticket</th>
                <th>Etat</th>
                <th>csc</th>
                <th>Actions</th>
            </tr>
            <tbody>
                @forelse ($tickets as $ticket )
                    <tr>
                      <td>{{$ticket['title']}} </td>
                      <td>{{$ticket['created_at']}} </td>
                      <td>{{$ticket['etat']}} </td>
                      <td>{{$ticket['csc']}} </td>
                      <td>
                          <a href="{{route('tickets.show',['ticket'=>$ticket['id']])}}">
                          <img src="{{URL::asset("./image/icons/voir.png")}}" class="img-thumbnail" width="40" alt="icone pour voir les détail">
                          </a>
                          <a href="{{route('tickets.edit',['ticket'=>$ticket['id']])}}">
                              <img src="{{URL::asset("./image/icons/modif.png")}}" class="img-thumbnail" width="40" alt="icone pour voir les détail">
                          </a>
                          </td>
                      
                @empty
                    <tr>
                      <td colspan="4">
                          <div class="text-danger">
                              aucun Ticket trouvé
                          </div>
                      </td>
                    </tr>
  
                @endforelse
              </tbody>
            
          </table>
    </div>

    <div class="container">
       
        <div class="row justify-content-center">
            {{$data->links() }}
        </div>
        
    </div>
   
@endsection