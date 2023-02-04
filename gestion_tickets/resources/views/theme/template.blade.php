
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
        <div class="row">
          <div class="col">
            1 of 2
          </div>
          <div class="col">
            2 of 2
          </div>
        </div>
        <div class="row">
          <div class="col">
            1 of 3
          </div>
          <div class="col">
            2 of 3
          </div>
          <div class="col">
            3 of 3
          </div>
        </div>
      </div>
</body>
</html>