<div class="container-fluid px-4">
    <div class="row my-4">
        <h3 class="fs-4 mb-3">Statistical Products</h3>
        <div class="col overflow-auto">
            <table class="table bg-white rounded shadow-sm  table-hover">
                <thead>
                    <tr>
                        <th scope="col">Name category </th>
                        <th scope="col">Amount</th>
                        <th scope="col">Low price</th>
                        <th scope="col">High price</th>
                        <th scope="col">Avg price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($items as $item) {
                        extract($item);
                    ?>
                        <tr>
                            <th scope="row"><?= $name_category; ?></th>
                            <td><?= $amount; ?></td>
                            <td><?= $low_price; ?></td>
                            <td><?= $high_price; ?></td>
                            <td><?= $avg_price; ?></td>
                            <td>
                                <img src="<?= $IMAGE_URL ?>/products/<?= $image; ?>" alt="" width="50px" class="water-img">
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>