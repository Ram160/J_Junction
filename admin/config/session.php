<?php
session_start();
if ($_SESSION['Admin'] == "") {
    echo "<script> window.location='index.php';    </script> ";
}
