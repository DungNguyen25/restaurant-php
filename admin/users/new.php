<div class="container-fluid px-4">
    <div class="row my-4">
        <h3 class="fs-4 mb-3">Thêm mới sản phẩm</h3>
        <div class="col">
            <section class="card login register col-sm-12 col-md-7 m-auto p-5 ">
                <form action="index.php" method="post" enctype="multipart/form-data">
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example1cg">Tên sản phẩm</label>
                        <input name="name" type="text" required placeholder="enter product name" maxlength="100" class="form-control">
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example3cg">Giá tiền</label>
                        <input type="text" min="0" max="9999999999" required placeholder="enter product price" name="price" onkeypress="if(this.value.length == 10) return false;" class="form-control">
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example4cg">Number</label>
                        <select name="category" class="form-control" required>
                            <option value="" disabled selected>select category --</option>
                            <!-- add category -->
                            <?php
                            foreach ($items as $item) {
                                extract($item);
                            ?>
                                <option name="category" value="<?= $category ?>"><?= $category ?></option>
                            <?php
                            }
                            ?>

                        </select>
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example3cg">Ảnh</label>
                        <input type="file" name="image" class="form-control" accept="image/jpg, image/jpeg, image/png, image/webp" required>
                    </div>
                    <button name="btn_insert" class="btn btn-success">Thêm</button>
                </form>
            </section>
        </div>
    </div>
</div>