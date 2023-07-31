<?php
error_reporting(0);
include("config/connection.php");
include("config/session.php");
$sql = 'SELECT * FROM hotel';
$check = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($check);
if (isset($_POST['submit'])) {
    $Title = $_POST['title'];
    $Name = $_POST['name'];
    $Price = $_POST['price'];
    $Rating = $_POST['rating'];
    $Visibility = $_POST['visibility'];
    $sqlupdate = "UPDATE hotel SET Title='$Title',Name='$Name',Price='$Price',Rating='$Rating',Visibility='$Visibility' WHERE Sno='$Uid'";
    mysqli_query($connection, $sqlupdate) or die("Table Connectivity failed");;
    echo "<script>window.location='viewhotel.php'</script>";
} else {
    if (isset($_GET['gid'])) {
        $Gid = $_GET['gid'];
        $sqlsel = "SELECT * FROM hotel where Sno=$Gid";
        $resultsel = mysqli_query($connection, $sqlsel);
        $rowsel = mysqli_fetch_assoc($resultsel);
        $path = "images/Udaipur/Hotel/" . $rowsel['Images'];
        unlink($path); // deleting from folder
        $sqldel = "DELETE FROM hotel WHERE Sno=$Gid";
        mysqli_query($connection, $sqldel); // deleting from database
    } else {
        if (isset($_POST['delete'])) {
            $tot = count($_POST['chk']);
            $a = 0;
            while ($a < $tot) {
                $d = $_POST['chk'][$a];
                $sqlsel = "SELECT * FROM hotel WHERE Sno=$d";
                $resultsel = mysqli_query($connection, $sqlsel);
                $rowsel = mysqli_fetch_assoc($resultsel);
                $path = "images/Udaipur/Hotel/" . $rowsel['Image'];
                unlink($path); // deleting from folder	
                $sqldel = "DELETE FROM hotel WHERE Sno=$d";
                mysqli_query($connection, $sqldel); // deleting from database	
                $a++;
            }
            echo "<script>window.location='viewhotel.php'</script>";
        }
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
        include('header.php');
        ?>
        <div class="main">
            <div class="mleft">
                <?php include("menubar.php"); ?>
            </div>

            <div class="mright">
                <h1>View Hotel</h1>
                <form method="post">

                    <div class="viewrow">

                        <div class="viewcol">
                            <heading> S.NO </heading>
                        </div>
                        <div class="viewcol w120">
                            <heading> Title </heading>
                        </div>
                        <div class="viewcol w120">
                            <heading> Images </heading>
                        </div>
                        <div class="viewcol w120">
                            <heading> Price </heading>
                        </div>
                        <div class="viewcol w210">
                            <heading> Rating </heading>
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
                    while ($row = mysqli_fetch_assoc($check)) {
                    ?>
                        <div class="viewrow">
                            <div class="viewcol"> <?php echo $row['Sno']; ?> </div>
                            <div class="viewcol w120"> <?php echo $row['Title']; ?></div>
                            <div class="viewcol w120"> <img src="images/Udaipur/Hotel/<?php echo $row['Images'] ?>" width="50" height="50" alt="Image" /></div>
                            <div class="viewcol w120"> <?php echo $row['Price']; ?></div>
                            <div class="viewcol w210"> <?php echo $row['Rating']; ?></div>
                            <div class="viewcol w120"> <?php
                                                        if ($row['Visibility'] == 1)
                                                            echo "Show";
                                                        else
                                                            echo "Hide";
                                                        ?> </div>
                            <div class="viewcol action">
                                <a class="anchor" href="hotel.php?uid=<?php echo $row['Sno']; ?>">
                                    <div class="editbtn"> Edit</div>
                                </a>
                                <a class="anchor" href="viewhotel.php?gid=<?php echo $row['Sno']; ?>">
                                    <div class="delbtn" onClick="return confirm(' Are you sure Delete?')"> Delete</div>
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>

</html>