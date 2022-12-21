<div class="container-fluid px-4">
    <a href="index.php" class="btn btn-dark">Add products</a>
    <div class="row my-4">
        <h3 class="fs-4 mb-3">List products</h3>
        <div class="col overflow-auto">
            <table class="table bg-white rounded shadow-sm  table-hover">
                <thead>
                    <tr>
                        <th scope="col" width="50">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Price</th>
                        <th scope="col">Image</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($items as $item) {
                        extract($item);
                    ?>
                        <tr>
                            <th scope="row"><?= $id_product; ?></th>
                            <td><?= $name_product; ?></td>
                            <td><?= $name_category; ?></td>
                            <td><?= $price; ?></td>
                            <td>
                                <img src="<?= $IMAGE_URL ?>/products/<?= $image; ?>" alt="" width="50px" class="water-img">
                            </td>
                            <td><a href="index.php?btn_edit=<?= $id_product ?>" class="btn btn-success">update</a></td>
                            <td><a href="index.php?btn_delete=<?= $id_product ?>" class="btn btn-danger" onclick="return confirm('delete this account?');">delete</a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>