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
               liste des utlisateurs
            </div>
        </div>
    </div>
    

   <div class="container text-center mt-4">
        <table class="table table-dark table-striped">
            <tr class="table-primary">
                <th>Nom</th>
                <th>Email</th>
                <th>Role</th>
                <th>Droit</th>
                <th>Action</th>
            </tr>
       
            <tbody>
                @for ($i=0;$i<count($users);$i++ )
                    <tr>
                      <td>{{$users[$i]->name}} </td>
                      <td>{{$users[$i]->email}} </td>
                    <form action="{{route('users.edit',['user'=>$users[$i]->id])}}" method="POST">
                        @csrf
                        @method('PUT')
                        <td>
                            <select name="role" >
                                <option value="{{$users[$i]->role }}" > {{$users[$i]->role}} </option>
                                @if($users[$i]->role=="admin")
                                <option value="user">user</option>
                                @else 
                                <option value="admin"> admin </option>
                                @endif
                            </select>
                        </td>
                        {{-- <td>{{$users[$i]->role}} </td> --}}
                        <td>
                            <select name="droit" >
                                <option value="{{$users[$i]->droit }}" > {{$users[$i]->droit}} </option>
                                @if($users[$i]->droit=="responsable")
                                <option value="rapporteur">rapporteurr</option>
                                @else 
                                <option value="responsable">responsable </option>
                                @endif
                            </select>
                        </td>
                   
                      <td>
                          
                          <input type="submit" class="btn btn-success" value="Modifier"/>
                          
                          
                        
                     </td>
                    </form>
                    </tr>
  
                @endfor
                @empty($users)
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
            {{$users->links() }}
        </div>
        
    </div>
   
@endsection