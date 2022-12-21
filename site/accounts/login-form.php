<section class="col-sm-12 col-md-5 m-auto p-5 ">
    <form action="login.php" method="post">
        <!-- Email input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="form2Example1">User name, Email and Number</label>
            <input id="form2Example1" class="form-control" type="text" name="login" value="<?= $email ?> <?= $user_name ?> <?= $number ?>" required placeholder="enter your email" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
        </div>
        <!-- Password input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="form2Example2">Password</label>
            <input id="form2Example2" class="form-control" type="password" name="pass" required placeholder="enter your password" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
        </div>
        <div class="row mb-4">
            <div class="col d-flex justify-content-center">
                <!-- Checkbox -->
                <div class="form-check">
                    <input name="ghi_nho" class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                    <label class="form-check-label" for="form2Example31"> Remember me </label>
                </div>
            </div>

            <div class="col">
                <!-- Simple link -->
                <a href="#!">Forgot password?</a>
            </div>
        </div>
        <!-- Submit button -->
        <button name="btn_login" class="btn btn-primary btn-block mb-4">Login</button>
        <div class="text-center">
            <p>Not a member? <a href="register.php">Register</a></p>
            <!-- <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-facebook-f"></i>
            </button>

            <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-google"></i>
            </button>

            <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-twitter"></i>
            </button>

            <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-github"></i>
            </button> -->
        </div>
    </form>
</section>