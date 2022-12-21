<div class="container-fluid px-4">
    <div class="row my-4">
        <h3 class="fs-4 mb-3">Add category</h3>
        <div class="col ">
            <section class="card login register col-sm-12 col-md-7 m-auto p-5 ">
                <form action="index.php" method="post" enctype="multipart/form-data">
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example1cg">Name category</label>
                        <input name="name_category" type="text" required placeholder="enter category name" maxlength="100" class="form-control">
                    </div>
                    <button name="btn_insert" class="btn btn-success">Add</button>
                </form>
            </section>
        </div>
    </div>
</div>