<!DOCTYPE html>
<html>
  <head>
    <title>Welcome to SMPN 16 Kota Bogor Website</title>
    <link rel="stylesheet" href="{{asset('cssfile/welcome.css')}}">
    <style>
      .container {
        display: flex;
        flex-direction: column;
        align-items: center;
      }

      .btn-primary {
        margin-top: 20px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <img src="{{ asset('images/logo.png') }}" alt="Logo SMPN 16 Kota Bogor">
      <h1>Selamat Datang di Website SMPN 16 Kota Bogor</h1>
      <a href="{{ route('login') }}" class="btn btn-primary">Masuk</a>
    </div>
  </body>
</html>
