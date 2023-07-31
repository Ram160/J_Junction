<?php
error_reporting(0);
include("config/connection.php");
include("config/session.php");
$sql = 'SELECT * FROM home WHERE Sno = 1';
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);
if (isset($_POST['submit'])) {
    $Name = $_POST['name'];
    $Nick_Name = $_POST['nickname'];
    $Filename = $_FILES['images']['name'];
    $Tmpname = $_FILES['images']['tmp_name'];
    $Folder = "images/Udaipur/" . $Filename;
    move_uploaded_file($Tmpname, $Folder);
    $sqlupdate = "UPDATE home SET Cityname='$Name',Nick_Name='$Nick_Name', ImageBack='$Filename'";
    mysqli_query($connection, $sqlupdate);
    echo "<script>window.location='home.php'</script>";
}
?>
<html>

<head>
    <title>Home</title>
    <link href="css/style_admin.css" rel="stylesheet">
</head>

<body>
    <div class="outer">
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
                <h1>Home</h1>
                <div class="heading">
                    <form method="post" class="form" enctype="multipart/form-data">
                        <div class="row">
                            <div class="rleft">
                                Name :
                            </div>
                            <div class="r_right">
                                <input type="text" name="name" class="input" value="<?php echo $row['Cityname']; ?>">
                            </div>
                        </div>

                        <div class="row">
                            <div class="rleft">
                                Nick_Name :
                            </div>
                            <div class="r_right">
                                <textarea type="text" name="nickname" class="input"><?php echo $row['Nick_Name']; ?></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="rleft">
                                Background :
                            </div>
                            <div class="r_right">
                                <input type="file" name="images" class="input" accept="image/*" /> <span><?php echo $row['ImageBack'] ?></span>
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
    </div>
</body>

</html>