<?php
error_reporting(0);
include("config/connection.php");
include("config/session.php");
if (isset($_GET['uid'])) {
    $Uid = $_GET['uid'];
    $sql = "SELECT * FROM food WHERE Sno = '$Uid'";
    $check = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($check);
    if (isset($_POST['submit'])) {
        $Title = $_POST['title'];
        $Price = $_POST['price'];
        $Description = $_POST['description'];
        $Visibility = $_POST['visibility'];
        $sqlupdate = "UPDATE food SET Title='$Title',Price='$Price',Description='$Description',Visibility='$Visibility' WHERE Sno='$Uid'";
        mysqli_query($connection, $sqlupdate) or die("Table Connectivity failed");
    }
} else {
    if (isset($_POST['submit'])) {
        $Title = $_POST['title'];
        $Price = $_POST['price'];
        $Filename = $_FILES['images']['name'];
        $Tmpname = $_FILES['images']['tmp_name'];
        $Folder = "images/Udaipur/Food/" . $Filename;
        move_uploaded_file($Tmpname, $Folder);
        $Description = $_POST['description'];
        $Visibility = $_POST['visibility'];
        $sql = "INSERT INTO food (Title,Price,Description,Visibility,Images) values('$Title','$Price', '$Description', '$Visibility','$Filename');";
        mysqli_query($connection, $sql) or die("Table Connectivity failed");
    }
}
?>


<html>

<head>
    <title>Hotel</title>
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
                <h1>Food</h1>
                <div class="heading">
                    <form method="post" class="form" enctype="multipart/form-data">
                        <div class="row">
                            <div class="rleft">
                                Title :
                            </div>
                            <div class="r_right">
                                <input type="text" name="title" class=" input" value="<?php echo $row['Title']; ?>">
                            </div>
                        </div>

                        <div class="row">
                            <div class="rleft">
                                Image :
                            </div>
                            <div class="r_right">
                                <input type="file" name="images" class="input">
                            </div>
                        </div>

                        <div class="row">
                            <div class="rleft">
                                Price :
                            </div>
                            <div class="r_right">
                                <input type="text" name="price" class="input" value="<?php echo $row['Price']; ?>">
                            </div>
                        </div>

                        <div class="row">
                            <div class="rleft">
                                Description :
                            </div>
                            <div class="r_right">
                                <textarea type="text" name="description" class="input"><?php echo $row['Description']; ?></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="rleft">
                                Visibility :
                            </div>
                            <div class="r_right">
                                <input type="radio" name="visibility" value="0" checked> Hide
                                <input type="radio" name="visibility" value="1"> Show
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