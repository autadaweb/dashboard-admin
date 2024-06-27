
<!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="shortcut icon" href="/img/icon.png" type="image/png">
        <title>{{env('APP_NAME')}}</title>
        <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-1.13.8/sc-2.3.0/datatables.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
        <link rel="stylesheet" href="{{ url('css/style.css') }}">
        <script src="{{url('js/jquery.min.js')}}"></script>
        <script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-1.13.8/sc-2.3.0/datatables.min.js"></script>
        <script src="/js/download_xlsx.js"></script>

        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script src="{{url('js/bootstrap.bundle.min.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        @yield('download_xlsx')

        
      </head>
    
      <body class="bg-light">
       
          <div class="sidebar active-sidebar  shadow me-4 bg-white text-white d-none d-sm-block" id="sidebar">
            <nav class="navbar navbar-light sticky-top bg-light-subtle bg-gradient">
              <div class="container-fluid">
                
                <div class="navbar-brand" >
                  
                  <p class="text-center  small text-nowrap fw-bold">
                    
    
                    <img width="100" height="100" class="img-start rounded-circle" src="/img/icon.png" alt="">

                   <p class="text-center"> <cite >{{Auth::user()->name}}</cite></p>
                  
                  
                  </p>
                  
                 
                  
                  <hr>
                  

                  <div class="input-group">
                    <input type="search" placeholder="Cari" id="searchMenu" class="form-control form-control-sm ">
                    <span class="input-group-text bg-white"><i class="bi bi-search"></i></span>
                  </div>

                </div>
              </div>
            </nav>
         
          
            @include('_templates.menu')

           
          

              <br>
              <br>
        </div>
<nav id="navbar" class="active-main-content navbar navbar-expand-sm sticky-top bg-light-subtle shadow-sm p-3">
  <div class="container-fluid">
    
    <a  class="navbar-brand text-success d-none d-sm-block" type="button" id="button-toggle">

      <i class="bi bi-list"></i>
    </a>

      
      <a  class="navbar-brand text-success d-block d-sm-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#menu-hp"><i class="bi bi-list"></i></a>
      <ul class="navbar-nav">
        
        <li class="nav-item dropstart">
          
          <a class="nav-link text-hijau" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{date('M d, H:i')}} <i class="bi bi-person-circle"></i> 
          </a>
          <ul class="dropdown-menu ">
            <li><a class="dropdown-item" href="/ganti-sandi"><i class="bi bi-shield-lock"></i> Ganti sandi</a></li>
            <li>
              <form onsubmit="return confirm('Apakah anda ingin meninggalkan aplikasi ini?')" action="{{ url('/logout') }}" method="post">
                @csrf
                
              <button class="dropdown-item" type="submit"><i class="bi bi-power"></i> Logout</button>
            </form>
            
            </li>
          </ul>
        </li>
      </ul>

  </div>
</nav>




<div class="offcanvas offcanvas-start d-block d-sm-none" data-bs-scroll="true" tabindex="-2" id="menu-hp" aria-labelledby="offcanvasWithBothOptionsLabel" style="width: 250px;">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title"> <img src="{{url('img/icon.png')}}" width="42" alt="icon2.png" class="mx-auto "> <span class="fw-bold text-success"></span></h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body" style="max-height: fit-content;overflow:auto">


   
    




{{-- menu --}}

@include('_templates.menu')

{{-- akhir menu --}}








  </div>
</div>



<div class="p-4 active-main-content" id="main-content">





@yield('container')



<br>
<br>
<br>
<br>

@if(env('SIMULASI') ?? false)
<div class="alert alert-warning m-4 mb-3" role="alert">

  @if(env('APP_ENV') !== 'local')
  <strong>Simulasi,</strong> Perubahan yang terjadi disini tidak mempengaruhi data real!

  @else
  <strong>Warning,</strong> Deadline tanggal <strong>{{env('DEADLINE')}}</strong>, {{file_get_contents(base_path('README.html'))}}
  @endif

  
</div>

@endif


</div>
<p id="brand" class="text-center text-muted">&copy;{{env('APP_NAME')}}, {{ date('Y') }}</p>







<script src="{{url('js/main.js')}}"></script>
  </body>
</html>