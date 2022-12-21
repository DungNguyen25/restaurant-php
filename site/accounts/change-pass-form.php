<div class="p-5">
    <section class="login register col-sm-12 col-md-5 m-auto p-5 ">
        <form action="change-pass.php" method="post" enctype="multipart/form-data">
            <div class="form-outline mb-4">
                <label class="form-label" for="form3Example4cg">Old Password</label>
                <input value="" id=" form3Example4cg" class="form-control form-control-lg" type="password" name="password" required placeholder="enter your password" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
            </div>
            <div class="form-outline mb-4">
                <label class="form-label" for="form3Example4cg">New Password</label>
                <input value="" id=" form3Example4cg" class="form-control form-control-lg" type="password" name="password2" required placeholder="enter your password" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="form3Example4cdg">Repeat password</label>
                <input id="form3Example4cdg" class="form-control form-control-lg" type="password" name="password3" required placeholder="confirm your password" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
            </div>

            <div class="d-flex justify-content-center">
                <button class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" name="btn_change">Change</button>
            </div>
        </form>
    </section>
</div>