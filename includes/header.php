<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap 5 Navbar with Icons</title>
  <!-- Bootstrap 5 CSS (CDN) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome 6 (free) CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- Optional custom style (just for spacing/demo) -->
  <style>
    body {
      padding-top: 70px;  /* avoid navbar overlap */
      background: #f8f9fa;
    }
    .navbar-brand i {
      margin-right: 8px;
      color: #0d6efd;
    }
    .nav-link i {
      margin-right: 8px;
    }
    /* subtle hover effect */
    .navbar .nav-link:hover {
      color: #0d6efd !important;
    }
    .container.demo {
      background: white;
      padding: 2rem;
      border-radius: 1rem;
      box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.05);
      margin-top: 2rem;
    }
  </style>
</head>
<body>

  <!-- ===== BOOTSTRAP 5 NAVBAR ===== -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
    <div class="container-fluid px-4">
      <!-- Brand / Logo with icon -->
      <a class="navbar-brand fw-bold" href="home.php">
        <i class="fas fa-layer-group"></i> Authentication System
      </a>

      <!-- Toggler for mobile -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" 
              aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar links -->
      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
          <!-- HOME -->
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php">
              <i class="fas fa-home"></i> Home
            </a>
          </li>
          <li class="nav-item dropdown d-none d-lg-block">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-cog"></i> Account
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="index.php"><i class="fas fa-sign-in-alt me-2"></i>Login</a></li>
              <li><a class="dropdown-item" href="signup.php"><i class="fas fa-user-plus me-2"></i>Register</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt me-2"></i>Logout</a></li>
            </ul>
          </li>
        </ul>
        <!-- optional small extra: a search or button, but we keep it minimal -->
      </div>
    </div>
  </nav>