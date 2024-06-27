<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ganti Sandi</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <nav class="navbar bg-white shadow">
        <div class="container-fluid">
          <a class="navbar-brand" href="/home"><i class="bi bi-arrow-left"></i></a>
        </div>
      </nav>
      <br>
      <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card card-body shadow p-4">
                    {{notif()}}
                    <center>
                        <img src="/img/password.png" width="200" alt="">
                    </center>
                    <br>
                    <br>
                    <form action="/post-ganti-sandi" method="post">
                        @csrf
                    <div class="form-floating mb-3">
                        <input minlength="12" type="password" name="password" class="form-control text-center" autofocus required>
                        <label for="">Masukan sandi baru</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" minlength="12" name="ulangi" class="form-control text-center" required>
                        <label for="">Ulangi sandi</label>
                    </div>

                    <button type="submit" class="btn btn-lg btn-primary w-100">SUBMIT</button>
                    <br>
                    <br>

                </form>
                </div>
            </div>
        </div>
      </div>
      <br>
      <br>
      <br>
    
</body>
</html>