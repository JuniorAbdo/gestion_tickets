@extends('layouts.template')
@section('title','Liste des utilisateus')
@section('content')
    <div class="container text-center mt-3">
        <div class="row">
            @error('neveauDtail')
            <div class="alert alert-danger ">
                {{$message}}
            </div>
            @enderror
            <div class="col-12 bg-success border border-dark rounded-1 text-white h3">
               liste des etats
            </div>
        </div>
    </div>
    

   <div class="container text-center mt-4">
        <table class="table table-dark table-striped table-bordered">
            <tr class=" table-light text-start">
                <th colspan="4">
                    <a href="{{route('etats.create')}}">
                        <button class="btn btn-success" >Ajouter un état </button>
                    </a>
                </th>
            </tr>
            <tr class="table-primary text-center">
                <th>ID</th>
                <th>libellé</th>
                <th>Place de modification</th>
                <th>Action</th>
               
            </tr>
       
            <tbody>
                @for ($i=0;$i<count($etats);$i++ )
                    <tr>
                      <td>{{$etats[$i]->id}} </td>
                      <td>{{$etats[$i]->intitule_etat}} </td>
                    <form action="{{route('etats.update',['etat'=>$etats[$i]->id])}}" method="POST">
                        @csrf
                        @method('PUT')
                        <td>
                            <input type="text" name="etat" value="{{$etats[$i]->intitule_etat}}">
                        </td>
         
                        
                   
                      <td class="d-flex justify-content-end">
                          
                          <input type="submit" class="btn btn-success p-2 me-1" value="Modifier"/>
                          
                        </form>
                        
                        <form action="{{route('etats.destroy',['etat'=>$etats[$i]->id])}}" method="POST">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-success p-2 ms-4 " value="Supprimer"/>
                        </form>
                        
                        
                     </td>
                  
                    </tr>
  
                @endfor
                @empty($etats)
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
            {{$etats->links() }}
        </div>
        
    </div>
   
@endsection