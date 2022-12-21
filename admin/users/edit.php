<div class="container-fluid px-4">
    <div class="row my-4">
        <h3 class="fs-4 mb-3">Edit khách hàng</h3>
        <div class="col">
            <section class="card login register col-sm-12 col-md-7 m-auto p-5 ">
                <?php

                ?>
                <form action="index.php" method="post" enctype="multipart/form-data">
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example1cg">Tên khách hàng</label>
                        <input name="name" type="text" required value="<?= $items['name'] ?>" maxlength="100" class="form-control">
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example3cg">Email khách hàng</label>
                        <input type="text" min="0" max="9999999999" required value="<?= $items['email'] ?>" name="email" onkeypress="if(this.value.length == 10) return false;" class="form-control">
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example3cg">Số điện thoại</label>
                        <input type="text" min="0" max="9999999999" required value="<?= $items['number'] ?>" name="number" onkeypress="if(this.value.length == 10) return false;" class="form-control">
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example3cg">Địa chỉ</label>
                        <input type="text" min="0" max="9999999999" required value="<?= $items['address'] ?>" name="address" onkeypress="if(this.value.length == 10) return false;" class="form-control">
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example3cg">Vai trò</label>
                        <input type="text" min="0" max="9999999999" required value="<?= $items['part'] ?>" name="email" onkeypress="if(this.value.length == 10) return false;" class="form-control">
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example3cg">Ảnh</label>
                        <input type="file" name="image" value="<?= $items['image']  ?>" class="form-control" accept="image/jpg, image/jpeg, image/png, image/webp" required>
                    </div>
                    <button name="btn_insert" class="btn btn-success">Thêm</button>
                </form>
                <?php
                ?>
            </section>
        </div>
    </div>
</div>