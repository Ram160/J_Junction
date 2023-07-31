<?php
error_reporting(0);
session_start();
unset($_SESSION['Admin']);
echo "<script> window.location='index.php';    </script> ";
?>

<?PHP
$sqlnews = "select * from news";
$resultnews = mysqli_query($conn, $sqlnews) or die("news query failed");
?>

<div class="newsbar">
    <marquee scrollamount="5">
        <?php
        while ($rownews = mysqli_fetch_assoc($resultnews)) {
        ?>
            <div class="news"> <?php echo $rownews['title']; ?></div>
        <?php
        }
        ?>

    </marquee>

</div>