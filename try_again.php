<?php
    session_start();
    $_SESSION["started"] = FALSE;
    $_SESSION["try_count"] = 3;
    header('Location: index.php' , true, 302);
?>