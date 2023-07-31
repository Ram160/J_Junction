<?php
error_reporting(0);
include("config/connection.php");
include("config/session.php");
$sql = 'SELECT * FROM food';
$check = mysqli_query($connection, $sql);

if (isset($_POST['submit'])) {
    $Title = $_POST['title'];
    $Image = $_POST['image'];
    $Price = $_POST['price'];
    $Description = $_POST['description'];
    $Visibility = $_POST['visibility'];
    $sqlupdate = "UPDATE food SET Title='$Title',Image='$Image',Price='$Price',Description='$Description',Visibility='$Visibility'";
    mysqli_query($connection, $sqlupdate) or die("Table Connectivity failed");
    echo "<script>window.location='viewfood.php'</script>";
} else {
    if (isset($_GET['gid'])) {
        $Gid = $_GET['gid'];
        $sqlsel = "SELECT * FROM food where Sno=$Gid";
        $resultsel = mysqli_query($connection, $sqlsel);
        $rowsel = mysqli_fetch_assoc($resultsel);
        $path = "images/Udaipur/Food/" . $rowsel['Images'];
        unlink($path); // deleting from folder
        $sqldel = "DELETE FROM food WHERE Sno=$Gid";
        mysqli_query($connection, $sqldel); // deleting from database
    }
}

// multiple delete
if (isset($_POST['delete'])) {
    $tot = count($_POST['chk']);
    $a = 0;
    while ($a < $tot) {
        $d = $_POST['chk'][$a];
        $sqlsel = "SELECT * FROM food WHERE Sno=$d";
        $resultsel = mysqli_query($conn, $sqlsel);
        $rowsel = mysqli_fetch_assoc($resultsel);
        $path = "images/" . $rowsel['Image'];
        unlink($path); // deleting from folder	
        $sqldel = "DELETE FROM food WHERE Sno=$d";
        mysqli_query($connection, $sqldel); // deleting from database	
        $a++;
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
                <h1>View Food</h1>
                <form method="post">

                    <div class="viewrow">

                        <div class="viewcol">
                            <heading> S.NO </heading>
                        </div>
                        <div class="viewcol w120">
                            <heading> Title </heading>
                        </div>
                        <div class="viewcol w120">
                            <heading> Image </heading>
                        </div>
                        <div class="viewcol w120">
                            <heading> Price </heading>
                        </div>
                        <div class="viewcol w210">
                            <heading> Description </heading>
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
                            <div class="viewcol w120"> <img src="images/Udaipur/Food/<?php echo $row['Images'] ?>" width="50" height="50" alt="Image" /></div>
                            <div class="viewcol w120"> <?php echo $row['Price']; ?> &#8377;/-</div>
                            <div class="viewcol w210"> <?php echo $row['Description']; ?></div>
                            <div class="viewcol w120"> <?php
                                                        if ($row['Visibility'] == 1)
                                                            echo "Show";
                                                        else
                                                            echo "Hide";
                                                        ?> </div>
                            <div class="viewcol action">
                                <a class="anchor" href="food.php?uid=<?php echo $row['Sno']; ?>">
                                    <div class="editbtn"> Edit</div>
                                </a>
                                <a class="anchor" href="viewfood.php?gid=<?php echo $row['Sno']; ?>">
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