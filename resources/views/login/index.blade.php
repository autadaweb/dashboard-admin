<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Autada</title>
    <link rel="shortcut icon" href="img/icon.png" type="image/png">
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ url('css/login.css') }}"> --}}
    <script src="{{url('js/bootstrap.bundle.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.2/anime.min.js" integrity="sha512-aNMyYYxdIxIaot0Y1/PLuEu3eipGCmsEUBrUq+7aVyPGMFH8z0eTP0tkqAvv34fzN6z+201d3T8HPb1svWSKHQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  

</head>
<body>
<div class="container">
<div class="row justify-content-center mt-5">
  <div class="col-md-4">
    
    <br>
    <div class="card card-body shadow p-4 border-0">
      {{notif()}}

      <center>
        <img src="/img/icon.png" width="50%" alt="">
      </center>

      <form action="/auth" method="post">
        @csrf
      <label for="">Email</label>
      <input type="email" name="email" value="{{old('email')}}" class="form-control" required>
      <label for="">Password</label>
      <input type="password" name="password" class="form-control text-center" required>
      <br>
      <button type="submit" class="btn w-100 btn-primary">Login</button>
      </form>
      <br>
  </div>
</div>

</div>
</div>


    
</body>
</html>