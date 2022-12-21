<section class="login register col-sm-12 col-md-5 m-auto p-5 ">
    <form action="update-accounts.php" method="post" enctype="multipart/form-data">
        <img src="<?= $CONTENT_URL ?>/imgs/users/<?= $image ?>" class="col-md-3 m-auto img-thumbnail mb-4" alt="">
        <input type="hidden" name="id_user" value="<?= $id_user ?>">
        <div class="form-outline mb-4">
            <label class="form-label" for="form3Example1cg">User Name</label>
            <input name="user_name" value="<?= $user_name ?>" id="form3Example1cg" class="form-control form-control-lg" type="text" required placeholder="enter your name" maxlength="50">
        </div>

        <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3cg">Email</label>
            <input name="email" value="<?= $email ?>" id="form3Example3cg" class="form-control form-control-lg" type="email" required placeholder="enter your email" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
        </div>

        <div class="form-outline mb-4">
            <label class="form-label" for="form3Example4cg">Number</label>
            <input name="number" value="<?= $number ?>" id=" form3Example4cg" class="form-control form-control-lg" type="number" required placeholder="enter your number" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
        </div>
        <div class="form-outline mb-4">
            <label class="form-label" for="form3Example4cg">Address</label>
            <input name="address" value="<?= $address ?>" id=" form3Example4cg" class="form-control form-control-lg" type="text" required placeholder="enter your number" maxlength="50">
        </div>
        <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3cg">Image</label>
            <input name="image" type="file" class="form-control" accept="image/jpg, image/jpeg, image/png, image/webp" required>
        </div>
        <div class="d-flex justify-content-center">
            <button class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" name="btn_update">Update</button>
        </div>
    </form>
</section>