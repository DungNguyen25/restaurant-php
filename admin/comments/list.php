<div class="container-fluid px-4">
    <div class="row my-4">
        <h3 class="fs-4 mb-3">List comments</h3>
        <div class="col overflow-auto">
            <table class="table bg-white rounded shadow-sm  table-hover">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Newest</th>
                        <th scope="col">Latest</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($items as $item) {
                        extract($item);
                    ?>
                        <tr>
                            <th scope="row"><?= $name_product; ?></th>
                            <td><?= $amount; ?></td>
                            <td><?= $newest; ?></td>
                            <td><?= $latest; ?></td>
                            <td><a href="index.php?id_product=<?= $id_product ?>" class="btn btn-success">Detail</a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</div>