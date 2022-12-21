<div class="container-fluid px-4">
    <div class="row my-4">
        <h3 class="fs-4 mb-3">Thêm mới sản phẩm</h3>
        <div class="col">
            <section class="card login register col-sm-12 col-md-7 m-auto p-5 ">
                <form action="index.php" method="post" enctype="multipart/form-data">
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example1cg">Name</label>
                        <input name="name_product" type="text" required placeholder="enter product name" maxlength="100" class="form-control">
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example3cg">Price</label>
                        <input type="text" min="0" max="9999999999" required placeholder="enter product price" name="price" onkeypress="if(this.value.length == 10) return false;" class="form-control">
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example4cg">Category</label>
                        <select name="name_category" class="form-control" required>
                            <option value="" disabled selected>select category --</option>
                            <!-- add category -->
                            <?php
                            foreach ($items as $item) {
                                extract($item);
                            ?>
                                <option name="name_category" value="<?= $name_category ?>"><?= $name_category ?></option>
                            <?php
                            }
                            ?>

                        </select>
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example3cg">Image</label>
                        <input type="file" name="image" class="form-control" accept="image/jpg, image/jpeg, image/png, image/webp" required>
                    </div>
                    <button name="btn_insert" class="btn btn-success">Thêm</button>
                </form>
            </section>
        </div>
    </div>
</div>