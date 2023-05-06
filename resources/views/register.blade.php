<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Page</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('cssfile/register.css')}}">
</head>
<body>
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card shadow-lg border-0 rounded-lg">
          <div class="card-header">
            <h3 class="text-center font-weight-light my-4">Create Account</h3>
          </div>
          <div class="card-body">
            @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
              {{ Session::get('success') }}
            </div>
            @endif
            <form action="{{ route('register') }}" method="POST">
              @csrf
              <div class="form-floating mb-3">
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" required>
                <label for="name">Name</label>
              </div>
              <div class="form-floating mb-3">
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" required>
                <label for="email">Email address</label>
              </div>
              <div class="form-floating mb-3">
                <select name="role" class="form-select" id="role" required>
                  <option value="" selected disabled>Choose your role</option>
                  <option value="teacher">Teacher</option>
                  <option value="student">Student</option>
                  <option value="staff">Staff</option>
                </select>
                <label for="role">Role</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password" required>
                <label for="password">Password</label>
              </div>
              <div class="mt-4 mb-0">
                <div class="d-grid">
                  <button type="submit" class="btn btn-primary">Create Account</button>
                </div>
              </div>
            </form>
          </div>
          <div class="card-footer text-center py-3">
            <div class="small"><a href="{{ route('login') }}">Have an account? Login here!</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
