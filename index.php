<?php include('includes/header.php'); //  ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-primary text-white text-center py-3 rounded-top-4">
                    <h4 class="mb-0">
                        <i class="fas fa-sign-in-alt me-2"></i> Login System
                    </h4>
                </div>
                <div class="card-body p-4">
                    <!-- Login Form -->
                    <form action="" method="POST">
                        <!-- Email Field -->
                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">
                                <i class="fas fa-envelope me-2 text-primary"></i>Email Address
                            </label>
                            <input type="email" class="form-control form-control-lg" id="email" name="email" 
                                   placeholder="Enter your email" required>
                        </div>

                        <!-- Password Field -->
                        <div class="mb-3">
                            <label for="password" class="form-label fw-semibold">
                                <i class="fas fa-lock me-2 text-primary"></i>Password
                            </label>
                            <input type="password" class="form-control form-control-lg" id="password" name="password" 
                                   placeholder="Enter your password" required>
                        </div>

                        <!-- Remember Me & Forgot Password -->
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="remember">
                                <label class="form-check-label" for="remember">Remember Me</label>
                            </div>
                            <a href="#" class="text-decoration-none">Forgot Password?</a>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary btn-lg w-100">
                            <i class="fas fa-sign-in-alt me-2"></i> Login
                        </button>
                    </form>

                    <!-- Register Link -->
                    <div class="text-center mt-3">
                        <p class="mb-0">
                            Don't have an account? 
                            <a href="#" class="text-decoration-none fw-semibold">Register</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); // footer ... ?>