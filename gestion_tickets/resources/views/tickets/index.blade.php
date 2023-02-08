
@section('name')

    
@endsection
<!doctype html>
<html>
<head>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
   
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <h1>This is example from ItSolutionStuff.com</h1>
    <div class="container ">
        <div class="row bg-primary justify-content-center">
            <div class="col-6">
                hi bootstrap
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row justify-contant-end">
            <div class="col4">
                <a href="{{route('tickets.create')}}">
                    <button type="button" class="btn btn-primary btn-lg">creer ticket</button>
                </a>
            </div>
        </div>
      
        <table class="table">
            <thead>
              <tr>
                <th scope="col">title</th>
                <th scope="col">date de ticket</th>
                <th scope="col">Etat</th>
                <th scope="col">CSC</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($tickets as $ticket)
                  <tr>
                    <td>{{$ticket['title']}} </td>
                    <td>{{$ticket['created_at']}} </td>
                    <td>{{$ticket['etat']}} </td>
                    <td>{{$ticket['csc']}} </td>
                    <td>
                        <img src="./image/icons/voir.png" class="img-thumbnail" alt="icone pour voir les détail">
                    </td>
                    
              @empty
                  
              @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>