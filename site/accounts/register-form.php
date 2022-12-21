<section class="login register col-sm-12 col-md-5 m-auto p-5 ">
    <form action="register.php" method="post" enctype="multipart/form-data">
        <div class="form-outline mb-4">
            <label class="form-label" for="form3Example1cg">User Name</label>
            <input id="form3Example1cg" class="form-control form-control-lg" type="text" name="user_name" required placeholder="enter your name" maxlength="50">
        </div>

        <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3cg">Email</label>
            <input id="form3Example3cg" class="form-control form-control-lg" type="email" name="email" required placeholder="enter your email" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
        </div>

        <div class="form-outline mb-4">
            <label class="form-label" for="form3Example4cg">Number</label>
            <input id="form3Example4cg" class="form-control form-control-lg" type="number" name="number" required placeholder="enter your number" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
        </div>
        <div class="form-outline mb-4">
            <label class="form-label" for="form3Example4cg">Password</label>
            <input id="form3Example4cg" class="form-control form-control-lg" type="password" name="pass" required placeholder="enter your password" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
        </div>

        <div class="form-outline mb-4">
            <label class="form-label" for="form3Example4cdg">Repeat your password</label>
            <input id="form3Example4cdg" class="form-control form-control-lg" type="password" name="cpass" required placeholder="confirm your password" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
        </div>

        <div class="d-flex justify-content-center">
            <button class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" name="btn_register">Đăng ký</button>
        </div>
        <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="dang-nhap.php" class="fw-bold text-body"><u>Login here</u></a></p>
        <input name="part" value="0" type="hidden">
        <input name="activating" value="0" type="hidden">
    </form>
</section>