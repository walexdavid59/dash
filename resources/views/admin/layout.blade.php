<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <meta name="description" content="HRM">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    


    <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('/assets/css/normalize.css') }}" rel="stylesheet" type="text/css" media="all" />
    
    <link href="{{ asset('/assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('/assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('/assets/css/themify-icons.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('/assets/css/flag-icon.min.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('/assets/css/cs-skin-elastic.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('/assets/scss/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" media="all" />
  


</head>

<body>

      @include('admin.sidebar.sidebar')

      <div id="right-panel" class="right-panel">
      @include('admin.header.header')
    
        @yield('content')
       
      
        
      </div>
      

    <!-- javascripts -->
    <script src=" https://code.jquery.com/jquery-3.3.1.js"></script>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    {{--  <script src="{{ asset('assets/js/main.js') }}"></script>  --}}

    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/jquery-1.11.1.js') }}"></script>
    <script src="{{ asset('assets/js/lib/chart-js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets/js/widgets.js') }}"></script>
    <script src="{{ asset('assets/js/lib/vector-map/jquery.vmap.js') }}"></script>
    <script src="{{ asset('assets/js/lib/vector-map/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/vector-map/jquery.vmap.sampledata.js') }}"></script>
    <script src="{{ asset('assets/js/lib/vector-map/country/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('assets/js/lib/vector-map/country/jquery.vmap.world.js') }}"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

   
    <script>
            $(document).ready(function() {
                $('#example').DataTable();
            } );
    </script>
    <!-- App scripts -->
</body>
</html>