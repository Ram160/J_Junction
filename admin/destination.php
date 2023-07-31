<?php
error_reporting(0);
include("config/connection.php");
include("config/session.php");
$msg = "";
if (isset($_GET['uid'])) {
    $Uid = $_GET['uid'];
    $sql = "SELECT * FROM destination WHERE Sno='$Uid'";
    $check = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($check);
    if (isset($_POST['submit'])) {
        $Title = $_POST['title'];
        $Filename = $_FILES['images']['name'];
        $Tmpname = $_FILES['images']['tmp_name'];
        $Folder = "images/Udaipur/Destination/" . $Filename;
        move_uploaded_file($Tmpname, $Folder);
        $Visibility = $_POST['visibility'];
        $sqlupdate = "UPDATE destination SET Title='$Title',Images='$Filename',Visibility='$Visibility' WHERE Sno='$Uid'";
        mysqli_query($connection, $sqlupdate) or die("Table Connectivity failed");
    }
} else {
    if (isset($_POST['submit'])) {
        $Title = $_POST['title'];
        $Filename = $_FILES['images']['name'];
        $Tmpname = $_FILES['images']['tmp_name'];
        $Folder = "images/Udaipur/Destination/" . $Filename;
        move_uploaded_file($Tmpname, $Folder);
        $Visibility = $_POST['visibility'];
        $sql = "INSERT INTO destination (Title,Visibility,Images) values('$Title','$Visibility','$Filename');";
        mysqli_query($connection, $sql) or die("Table Connectivity failed");
    }
}
?>
<html>

<head>
    <title> Add Destination </title>
    <link href="css/style_admin.css" rel="stylesheet" />
</head>

<body>

    <div class="outer">
        <?php include("header.php"); ?>
        <div class="main">
            <div class="mleft"><?php include("menubar.php"); ?></div>
            <div class="mright">
                <h1>Add Destination</h1>
                <div class="heading">

                    <form class="form" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="rleft"> Title : </div>
                            <div class="r_right"> <input type="text" name="title" class="input" value="<?php echo $row['Title']; ?>"> </div>
                        </div>
                        <div class="row">
                            <div class="rleft"> Image : </div>
                            <div class="r_right"> <input type="file" name="images" class="input" value="<?php echo $row['Images']; ?>"> </div>
                        </div>
                        <div class="row">
                            <div class="rleft"> Visibility : </div>
                            <div class="r_right">
                                <input type="radio" name="visibility" value="0" <?php if ($row['Visibility'] == 0)
                                                                                    echo "checked"; ?>> Hide
                                <input type="radio" name="visibility" value="1" <?php if ($row['Visibility'] == 1)
                                                                                    echo "checked"; ?>> Show
                            </div>
                        </div>
                        <div class="row">
                            <div class="rleft"></div>
                            <div class="r_right"> <input type="submit" name="submit" value="Submit" class="button"> <?php echo $msg; ?> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</html>