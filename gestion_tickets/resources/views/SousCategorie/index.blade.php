@extends('layouts.template')
@section('title','Liste des sous catégories')
@section('content')
    <div class="container text-center mt-3">
        <div class="row">
            @error('neveauDtail')
            <div class="alert alert-danger ">
                {{$message}}
            </div>
            @enderror
            <div class="col-12 bg-success border border-dark rounded-1 text-white h3">
               liste des  sous catégories
            </div>
        </div>
    </div>
    

   <div class="container  mt-4">
        <table class="table table-dark table-striped">
            <tr class="table-light">
                <td colspan="3" class="justify-item-end">
                   <a href="{{route('sousCategories.create')}}">
                    <button class="btn btn-success ms-0">AJouter Sous Categorie</button>
                </a>
                </td>
            </tr>
            <tr class="table-primary text-center">
                <th>ID</th>
                <th>sous catégorie</th>
                <th>catégorie</th>
                
                <th>Action</th>
            </tr>
       
            <tbody>
                @for ($i=0;$i<count($sousCategories);$i++ )
                    <tr class="text-center" >
                        <td>{{$sousCategories[$i]->id}} </td>
                      <td>{{$sousCategories[$i]->intitule}} </td>
                      <td>{{$categories[$i]}} </td>
                
                   
                      <td class="text-end">
                          <a href="{{route('sousCategories.edit',['sousCategory'=>$sousCategories[$i]->id])}}">
                            <button class="btn btn-success">Modifier</button>
                          </a>
                     </td>

                    </tr>
  
                @endfor
                @empty($sousCategories)
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
            {{$sousCategories->links() }}
        </div>
        
    </div>
   
@endsection