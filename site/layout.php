<?php
if (strlen($MESSAGE)) {
    echo "<h5>$MESSAGE</h5>";
}
require 'layout/login.php';
require 'layout/head.php'
?>
<div class="wrapper">
    <header class="header">
        <?php require 'layout/header.php' ?>
    </header>
    <main class="main">
        <?php
        require $VIEW_NAME;
        ?>
    </main>
    <footer class="footer">
        <?php require 'layout/footer.php' ?>
    </footer>
</div>
<?php
require 'layout/foot.php'
?>