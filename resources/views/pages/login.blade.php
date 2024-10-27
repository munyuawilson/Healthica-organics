<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
 
  <link rel="shortcut icon" href="{{ asset('/images/logo.jpeg') }}"  type="image/x-icon">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-12345abcde..." crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{asset('/css/app.css')}}">

  <style>
  
    .login-container {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      padding: 2rem;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
      text-align: center;
    }
    .login-container h2 {
      color: #f8f9fa;
      margin-bottom: 20px;
    }
    .form-control {
      background: rgba(255, 255, 255, 0.15);
      color: #f8f9fa;
      border: none;
      padding: 1.2rem;
      border-radius: 5px;
    }
    .form-control:focus {
      background: rgba(255, 255, 255, 0.2);
      box-shadow: none;
    }
    .btn-login {
      width: 100%;
      background: #e63946;
      border: none;
      padding: 0.75rem;
      font-size: 1rem;
      font-weight: bold;
      color: #fff;
      border-radius: 5px;
      transition: 0.3s;
    }
    .btn-login:hover {
      background: #d62828;
    }
    .forgot-password {
      color: #adb5bd;
      font-size: 0.9rem;
      text-decoration: none;
    }
    .forgot-password:hover {
      color: #f8f9fa;
    }
  </style>
</head>
<body>
@include('includes.nav')
<div class="col d-flex  justify-content-center mt-5   pt-3 pb-5">
    
    <form class="border shadow px-4 pt-3 pb-3" method="post" action="{{route('login')}}">
        @csrf
    <h2 class="text-black text-center mt-5">Login</h2>
      <!-- Display validation errors here -->
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

      <div class="form-group mt-3">
        <input type="email" name='email' class="form-control" placeholder="Email" required>
      </div>
      <div class="form-group">
        <input type="password" name='password' class="form-control" placeholder="Password" required>
      </div>
      <button type="submit" class="btn  bg-color text-white">Login</button>
      <p class="mt-3">
        <a href="#" class="forgot-password">Forgot password?</a>
      </p>
    </form>
</div>

@include('includes.footer')


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
