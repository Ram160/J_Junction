<?php
error_reporting(0);
include("config/connection.php");
include("config/session.php");
$sql = "SELECT * FROM aboutus";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);
if (isset($_POST['submit'])) {
    $Title = $_POST['title'];
    $Description = $_POST['description'];
    $sqlupdate = "UPDATE aboutus SET Title='$Title',Description='$Description'";
    mysqli_query($connection, $sqlupdate);
    echo "<script> window.location='aboutus.php'</script>";
}
?>


<html>

<head>
    <title>About us</title>
    <link href="css/style_admin.css" rel="stylesheet">
</head>

<body>
    <?php
    include("header.php");
    ?>
    <div class="main">
        <div class="mleft">
            <?php
            include("menubar.php");
            ?>
        </div>
        <div class="mright">
            <h1>About us</h1>
            <div class="heading">
                <form method="post" class="form">
                    <div class="row">
                        <div class="rleft">
                            Title :
                        </div>
                        <div class="r_right">
                            <input type="text" name="title" class="input" value="<?php echo $row['Title']; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="rleft">
                            Description :
                        </div>
                        <div class="r_right">
                            <textarea type="text" name="description" class="input" placeholder="Description">
                                    <?php echo $row['Description']; ?>
                                </textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="rleft"></div>
                        <div class="r_right">
                            <input type="submit" name="submit" value="Update" class="button">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>