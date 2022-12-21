<?php
if (strlen($MESSAGE)) {
    echo "<h5>$MESSAGE</h5>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="shortcut icon" href="<?= $CONTENT_URL ?>/imgs/page/logo.png">
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/admin.css">
    <script src="https://kit.fontawesome.com/5956274f26.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    ?>
    <div class="wrapper">
        <header class="header">
        </header>
        <main class="d-flex" id="wrapper">
            <div class="bg-black" id="sidebar-wrapper">
                <?php require "menu.php" ?>
            </div>
            <div id="page-content-wrapper">
                <?php
                require "nav.php";
                require $VIEW_NAME;
                ?>
            </div>
        </main>
        <footer class="footer">
        </footer>
    </div>
    <?php
    ?>
</body>

</html>