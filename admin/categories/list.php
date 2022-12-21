<div class="container-fluid px-4">
    <a href="index.php" class="btn btn-dark">Add category</a>
    <div class="row my-4">
        <h3 class="fs-4 mb-3">List Categories</h3>
        <div class="col">
            <table class="table bg-white rounded shadow-sm  table-hover">
                <thead>
                    <tr>
                        <th scope="col" width="50">#</th>
                        <th scope="col">Category</th>
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
                            <th scope="row"><?= $id_category; ?></th>
                            <td><?= $name_category; ?></td>

                            <td><a href="index.php" class="btn btn-success">update</a></td>
                            <td><a href="index.php?btn_delete=<?= $id_category; ?>" class="btn btn-danger" onclick="return confirm('delete this account?');">delete</a></td>
                        </tr>

                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</div>