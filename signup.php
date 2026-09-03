<?php include('includes/header.php'); //  ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-success text-white text-center py-3 rounded-top-4">
                    <h4 class="mb-0">
                        <i class="fas fa-user-plus me-2"></i> Create Account
                    </h4>
                </div>
                <div class="card-body p-4">
                    <!-- Registration Form -->
                    <form action="actions/signup.php" method="POST">
                        <!-- Full Name -->
                        <div class="mb-3">
                            <label for="fullname" class="form-label fw-semibold">
                                <i class="fas fa-user me-2 text-success"></i>Full Name
                            </label>
                            <input type="text" class="form-control form-control-lg" id="fullname" name="fullname" 
                                   placeholder="Enter your full name" required>
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">
                                <i class="fas fa-envelope me-2 text-success"></i>Email Address
                            </label>
                            <input type="email" class="form-control form-control-lg" id="email" name="email" 
                                   placeholder="Enter your email" required>
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label fw-semibold">
                                <i class="fas fa-lock me-2 text-success"></i>Password
                            </label>
                            <input type="password" class="form-control form-control-lg" id="password" name="password" 
                                   placeholder="Create a password (min 8 characters)" required minlength="8">
                            <div class="form-text">
                                <i class="fas fa-info-circle me-1"></i> Password must be at least 8 characters
                            </div>
                        </div>

                        <!-- Confirm Password -->
                        <div class="mb-3">
                            <label for="confirm_password" class="form-label fw-semibold">
                                <i class="fas fa-check-circle me-2 text-success"></i>Confirm Password
                            </label>
                            <input type="password" class="form-control form-control-lg" id="confirm_password" name="confirm_password" 
                                   placeholder="Confirm your password" required>
                        </div>

                        <!-- Terms & Conditions -->
                        <div class="mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="terms" name="terms" required>
                                <label class="form-check-label" for="terms">
                                    I agree to the <a href="#" class="text-decoration-none">Terms & Conditions</a> and 
                                    <a href="#" class="text-decoration-none">Privacy Policy</a>
                                </label>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-success btn-lg w-100">
                            <i class="fas fa-user-plus me-2"></i> Register
                        </button>
                    </form>

                    <!-- Login Link -->
                    <div class="text-center mt-3">
                        <p class="mb-0">
                            Already have an account? 
                            <a href="#" class="text-decoration-none fw-semibold">Login</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); // footer ... ?>