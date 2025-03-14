<?php
session_start();

if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 0;
} else {
    $_SESSION['contador']++;
}
?>
<html>
<body>
    <p>
        <?php echo $_SESSION['contador']; ?>
    </p>
</body>
</html>