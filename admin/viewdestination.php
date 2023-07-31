<?php
error_reporting(0);
include("config/connection.php");
include("config/session.php");
$sql = "SELECT * FROM destination";
$result = mysqli_query($connection, $sql);

if (isset($_POST['submit'])) {
    $Title = $_POST['title'];
    $Image = $_POST['image'];
    $Visibility = $_POST['visibility'];
    $sqlupdate = "UPDATE destination SET Title='$Title',Image='$Image',Visibility='$Visibility' WHERE Sno='$Uid'";
    mysqli_query($connection, $sqlupdate) or die("Table Connectivity failed");
    echo "<script>window.location='viewdestination.php'</script>";
} else {
    if (isset($_GET['gid'])) {
        $Gid = $_GET['gid'];
        $sqlsel = "SELECT * FROM destination WHERE Sno='$Gid'";
        $resultsel = mysqli_query($connection, $sqlsel);
        $rowsel = mysqli_fetch_assoc($resultsel);
        $path = "images/Udaipur/Destination/" . $rowsel['Images'];
        unlink($path); // deleting from folder
        $sqldel = "DELETE FROM destination WHERE Sno='$Gid'";
        mysqli_query($connection, $sqldel); // deleting from database
        echo "<script>window.location='viewdestination.php'</script>";
    }
}
// multiple delete
if (isset($_POST['delete'])) {
    $tot = count($_POST['chk']);
    $a = 0;
    while ($a < $tot) {
        $d = $_POST['chk'][$a];
        $sqlsel = "SELECT * FROM destination WHERE Sno=$d";
        $resultsel = mysqli_query($connection, $sqlsel);
        $rowsel = mysqli_fetch_assoc($resultsel);

        $path = "images/Udaipur/Destination/" . $rowsel['Images'];
        unlink($path); // deleting from folder	

        $sqldel = "DELETE FROM destination WHERE Sno=$d";
        mysqli_query($connection, $sqldel); // deleting from database	
        $a++;
    }
}
?>


<html>

<head>
    <title> View Destination </title>
    <link href="css/style_admin.css" rel="stylesheet" />
</head>

<body>


</body>
<div class="outer">

    <?php include('header.php'); ?>
    <div class="main">
        <div class="mleft">
            <?php include('menubar.php'); ?>
        </div>
        <div class="mright">
            <h1>View Destination</h1>
            <form method="post">
                <div class="viewrow">
                    <div class="viewcol">
                        <heading> S.NO </heading>
                    </div>
                    <div class="viewcol">
                        <heading>
                            <input type="submit" name="delete" value="Delete" class="del" onClick="return confirm(' Are you sure Delete?')">
                            <heading>
                    </div>
                    <div class="viewcol w210">
                        <heading> Title </heading>
                    </div>
                    <div class="viewcol w283">
                        <heading> Image </heading>
                    </div>
                    <div class="viewcol w120">
                        <heading> Visible </heading>
                    </div>
                    <div class="viewcol action">
                        <heading> Action </heading>
                    </div>
                    </heading>
                </div>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="viewrow">
                        <div class="viewcol"> <?php echo $row['Sno']; ?></div>
                        <div class="viewcol"> <input type="checkbox" name="chk[]" value="<?php echo $row['Sno']; ?>"></div>
                        <div class="viewcol w210"> <?php echo $row['Title']; ?></div>
                        <div class="viewcol w283"> <img src="images/Udaipur/Destination/<?php echo $row['Images']; ?>" width="120" height="60" alt="Image" /></div>
                        <div class="viewcol w120"> <?php
                                                    if ($row['Visibility'] == 0)
                                                        echo "Hide";
                                                    else
                                                        echo "Show";
                                                    ?></div>
                        <div class="viewcol action">
                            <a href="destination.php?uid=<?php echo $row['Sno']; ?>">
                                <div class="editbtn"> Edit </div>
                            </a>

                            <a href="viewdestination.php?gid=<?php echo $row['Sno']; ?>">
                                <div class="delbtn" onClick="return confirm(' Are you sure Delete?')">
                                    Delete
                                </div>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </form>
        </div>
    </div>
</div>

</html>