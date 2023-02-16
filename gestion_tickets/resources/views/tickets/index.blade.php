@extends('layouts.template')
@section('title','Liste des Tickets')
@section('content')
    <div class="container text-center mt-3">
        <div class="row">
            @error('neveauDtail')
            <div class="alert alert-danger ">
                {{$message}}
            </div>
            @enderror
            <div class="col-12 bg-info border border-dark rounded-3 ">
               liste des tickets
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
              @forelse ($tickets as $ticket )
                  <tr>
                    <td>{{$ticket['title']}} </td>
                    <td>{{$ticket['created_at']}} </td>
                    <td>{{$ticket['etat']}} </td>
                    <td>{{$ticket['csc']}} </td>
                    <td>
                        <a href="{{route('tickets.show',['ticket'=>$ticket['id']])}}">
                        <img src="./image/icons/voir.png" class="img-thumbnail" width="40" alt="icone pour voir les détail">
                        </a>
                        <a href="{{route('tickets.edit',['ticket'=>$ticket['id']])}}">
                            <img src="./image/icons/modif.png" class="img-thumbnail" width="40" alt="icone pour voir les détail">
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