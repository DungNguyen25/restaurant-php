<div class="container-fluid px-4">
    <a href="update_profile.php" class="btn btn-dark">Add order</a>
    <div class="row my-4">
        <h3 class="fs-4 mb-3">List orders</h3>
        <div class="col overflow-auto">
            <table class=" table bg-white rounded shadow-sm  table-hover ">
                <thead>
                    <tr>
                        <th scope="col">ID Order</th>
                        <th scope="col">User name</th>
                        <th scope="col">Number</th>
                        <th scope="col">Email</th>
                        <th scope="col">Method</th>
                        <th scope="col" width="300">Address</th>
                        <th scope="col" width="300">Total products</th>
                        <th scope="col">Total price</th>
                        <th scope="col">Placed on</th>
                        <th scope="col">Payment status</th>
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
                            <th scope="row"><?= $id_order; ?></th>
                            <td><?= $user_name; ?></td>
                            <td><?= $number; ?></td>
                            <td><?= $email; ?></td>
                            <td><?= $method; ?></td>
                            <td><?= $address; ?></td>
                            <td><?= $total_products; ?></td>
                            <td><?= $total_price; ?></td>
                            <td><?= $placed_on; ?></td>
                            <td><?= $payment_status; ?></td>
                            <td><a href="index.php?btn_update=<?= $id_order; ?>" class=" btn btn-success">update</a></td>
                            <td><a href="index.php?btn_delete=<?= $id_order; ?>" class="btn btn-danger" onclick="return confirm('delete this account?');">delete</a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</div>