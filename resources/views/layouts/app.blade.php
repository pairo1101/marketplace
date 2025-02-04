<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Main Page')</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body, html {
      height: 100%;
      margin: 0;
    }
    .container-box {
      height: 100%; /* Containers take up the full height of the viewport */
      display: flex;
      align-items: center;
      justify-content: center;
      border: 1px solid #ddd;
      background-color: #f8f9fa;
    }
    .row {
      height: calc(100vh - 56px); /* Adjust height to exclude navbar */
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <form action="{{route('user.logout',['user' => $user])}}" method="POST" class="d-flex ms-auto">
            @csrf
            <button type="submit" class="btn btn-outline-primary d-flex align-items-center logout-btn">
              <i class="bi bi-paw me-2"></i> Logout
            </button>
          </form>
        </div>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">

      <!-- Left Container -->
      <div class="col-3">
        @yield('left-container', 'Left Container')
      </div>

      <!-- Middle Container -->
      <div class="col-9">
        @yield('middle-container')
      </div>

    </div>
  </div>

  <!-- Bootstrap JS (Optional for interactive components) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
