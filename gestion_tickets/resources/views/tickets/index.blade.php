@extends('layouts.template')
@section('title','Liste des Tickets')
@section('content')
<div class=" container mt-2" >
    <div class="row justify-content-center">
      <div class="col-6">
        <form class="d-flex" role="search" method="POST" action="{{route('serache.etat')}}">
          @csrf
            {{-- <input class="form-control " type="search" placeholder="recherche par etat" aria-label="search"> --}}
            
            <select class="form-select form-select-sm me-2 bg-dark text-white" aria-label=".form-select-sm example" name="etat">
              @foreach ($etat_data as $etat)
              <option class="fs-5" value="{{$etat->intitule_etat}}">{{$etat->intitule_etat}}</option>
              @endforeach

            </select>
            <button class="btn btn-success text-white" type="submit">Recherche </button>
          </form>
      </div>
    </div>
  </div>


  <div class="container mt-1 search">
    <div class="row justify-content-center">
      <div class="col-6">
        <form class="d-flex" role="search" method="POST" action="{{route('serache.csc')}}">
          @csrf
            <select class="form-select form-select-sm me-2 bg-dark text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" name="csc">
              @foreach ($csc_data as $csc)
              <option class="fs-5" value="{{$csc->libelle_csc}}">{{$csc->libelle_csc}}</option> 
              @endforeach
              
             
            </select>
            <button class="btn btn-success text-white" type="submit">Recherche </button>
          </form>
      </div>
    </div>
  </div>
  <div class="container mt-1" >
    <div class="row justify-content-center">
      <div class="col-6">
        <form class="d-flex" role="search" method="POST" action="{{route('serache.categorie')}}">
          @csrf
            {{-- <input class="form-control " type="search" placeholder="recherche par etat" aria-label="search"> --}}
            
            <select class="form-select form-select-sm me-2 bg-dark text-white" aria-label=".form-select-sm example" name="categorie">
              @foreach ($categorie_data as $categorie)
              <option class="fs-5" value="{{$categorie->intitule}}">{{$categorie->intitule}}</option>
              @endforeach

            </select>
            <button class="btn btn-success text-white" type="submit">Recherche </button>
          </form>
      </div>
    </div>
  </div>

    
<div class="container text-center mt-3">
  <div class="row justify-content-center">
      
      <div class="col-12 bg-success border border-dark rounded-1 text-white h3 ">
        Liste des tickets 
      </div>
  </div>
</div>

    
    </div>
   <div class="container text-center mt-4">
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