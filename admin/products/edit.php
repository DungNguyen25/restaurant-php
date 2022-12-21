<div class="container-fluid px-4">
    <div class="row my-4">
        <h3 class="fs-4 mb-3">Edit</h3>
        <div class="col">
            <section class="card login register col-sm-12 col-md-7 m-auto p-5 ">
                <form action="index.php" method="post" enctype="multipart/form-data">
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example1cg">Name products</label>
                        <input type="text" value="<?= $items['name_product'] ?>" name="name_product" maxlength="100" class="form-control">
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example3cg">Price: $</label>
                        <input type="text" min="0" max="9999999999" value="<?= $items['price'] ?>" name="price" onkeypress="if(this.value.length == 10) return false;" class="form-control">
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example4cg">Category</label>
                        <select name="name_category" class="form-control">
                            <option name="name_category" value="<?= $items['name_category'] ?>"><?= $items['name_category'] ?></option>
                            <!-- add category -->
                            <?php
                            foreach ($categories as $item) {
                                extract($item);
                            ?>
                                <option name="name_category" value="<?= $name_category ?>"><?= $name_category ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example3cg">Ảnh</label>
                        <input type="file" name="image" value="" class="form-control" accept="image/jpg, image/jpeg, image/png, image/webp">
                    </div>
                    <button name="btn_update" class="btn btn-success">Edit</button>
                </form>
                <?php
                ?>
            </section>
        </div>
    </div>
</div>