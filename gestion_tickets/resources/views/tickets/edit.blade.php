@extends('layouts.template')
@section('title','modifer un ticket')
@section('content')
<div class="row justify-content-md-center ">
    <div class="col-6  bg-info border border-secondary mt-3 rounded-3 h3">
     Ajouter des détail à ce ticket
    </div>
  </div>
<div class="container">
 
    <div class="row">
        <div class="col_8">
            <form method="POST" action="{{route('tickets.update',['ticket'=>$ticket[0]->id])}}">
                @csrf
                @method('put')
                <div class="mb-3 mt-3">

                    <label  class="form-label ">Détail</label>
                    <textarea class="form-control"  rows="3"  name="detail" readonly="readonly">
                        {!!str_replace("</br>","<br>",$ticket[0]->description)!!}
                        
                        {{-- {{$ticket[0]->description }} --}}
                    </textarea>
                  </div>
                 
                  <div class="mb-3">

                    <label  class="form-label">Neveau détail</label>
                    <textarea class="form-control"  rows="3"  name="neveauDtail">
                        
                    </textarea>
                  </div>
                  @error('neveauDtail')
                      <div class="alert alert-danger">
                        {{$message}}
                      </div>
                  @enderror
                  <div>
                    <label  class="form-label">Etat</label>
                    <select class="form-select" aria-label="Default select example" name="etat">
                     

                        @for($i=0;$i<count($intituleEtats); $i++)
                            <option value="{{$intituleEtats[$i]->intitule_etat}}" @if ($intituleEtats[$i]->intitule_etat==$etatTicket)
                            @php
                             echo 'selected'   
                            @endphp
                                
                            @endif>{{$intituleEtats[$i]->intitule_etat}} </option>
                        @endfor
                    </select>
                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary" >Ajouter détail</button>
                    </div>
                  </div>
            </form>
        </div>
    </div>
</div>
@endsection