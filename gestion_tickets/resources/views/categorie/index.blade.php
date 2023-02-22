@extends('layouts.template')
@section('title','Liste des catégories')
@section('content')
    <div class="container text-center mt-3">
        <div class="row">
            @error('neveauDtail')
            <div class="alert alert-danger ">
                {{$message}}
            </div>
            @enderror
            <div class="col-12 bg-success border border-dark rounded-1 text-white h3">
               liste des catgories
            </div>
        </div>
    </div>
    

   <div class="container  mt-4">
        <table class="table table-dark table-striped">
            <tr class="table-light">
                <td colspan="3" class="justify-item-end">
                   <a href="{{route('categories.create')}}">
                    <button class="btn btn-success ms-0">AJouter Categorie</button>
                </a>
                </td>
            </tr>
            <tr class="table-primary text-center">
                <th>Nomero</th>
                <th>Intitule</th>
                
                <th>Action</th>
            </tr>
       
            <tbody>
                @for ($i=0;$i<count($categories);$i++ )
                    <tr class="text-center" >
                      <td>{{$categories[$i]->id}} </td>
                      <td>{{$categories[$i]->intitule}} </td>
                
                   
                      <td class="text-end">
                          <a href="{{route('categories.edit',['category'=>$categories[$i]->id])}}">
                            <button class="btn btn-success">Modifier</button>
                          </a>
                     </td>

                    </tr>
  
                @endfor
                @empty($categories)
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
            {{$categories->links() }}
        </div>
        
    </div>
   
@endsection