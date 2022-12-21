<div class="container-fluid px-4">
    <div class="row my-4">
        <h3 class="fs-4 mb-3">List comments</h3>
        <div class="col overflow-auto">
            <table class="table bg-white rounded shadow-sm  table-hover">
                <thead>
                    <tr>
                        <th scope="col" width="100">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Content</th>
                        <th scope="col">Date</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($items as $bl) {
                        extract($bl);
                    ?>
                        <tr>
                            <th scope="row"> <img src=" <?= $CONTENT_URL ?>/imgs/users/<?= $image ?>" class="img-thumbnail" alt=""></th>
                            <td> <?= $user_name ?></td>
                            <td><?= $content ?></td>
                            <td> <?= $date_comment ?></td>
                            <td> <?= $id_comment ?></td>
                            <td><a href="index.php?btn_delete=<?= $id_comment ?>" class="btn btn-danger">delete</a></td>
                        </tr>

                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</div>