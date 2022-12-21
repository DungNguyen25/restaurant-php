<form class="container-fluid px-4">
    <a href="index.php" class="btn btn-dark">Add user</a>
    <div class="row my-4">
        <h3 class="fs-4 mb-3">List User</h3>
        <div class="col overflow-auto">
            <table class="table bg-white rounded shadow-sm  table-hover">
                <thead>
                    <tr>
                        <th scope="col" width="50">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Number</th>
                        <th scope="col">Address</th>
                        <th scope="col">Part</th>
                        <th scope="col">Activating</th>
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
                            <th scope="row"><?= $id_user; ?></th>
                            <td><?= $user_name; ?></td>
                            <td><?= $email; ?></td>
                            <td><?= $number; ?></td>
                            <td><?= $address; ?></td>
                            <td><?= $part; ?></td>
                            <td><?= $activating; ?></td>
                            <td><a href="index.php?btn_edit=<?= $id ?>" class="btn btn-success">update</a></td>
                            <td><a href="index.php?btn_delete=<?= $id; ?>" class="btn btn-danger" onclick="return confirm('delete this account?');">delete</a></td>
                        </tr>

                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</form>