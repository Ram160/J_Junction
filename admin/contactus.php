<?php
error_reporting(0);
include('config/connection.php');
include("config/session.php");
$sql = "SELECT * FROM contact";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);
if (isset($_POST['submit'])) {
    $Person = $_POST['cperson'];
    $Mobile = $_POST['mobile'];
    $Email = $_POST['mail'];
    $Email2 = $_POST['mail2'];
    $Address = $_POST['address'];
    $sqlupdate = "UPDATE contact SET Person='$Person', Mobile = '$Mobile',Email = '$Email', Email2 = '$Email2', Address = '$Address' WHERE Sno = 1";
    $resultupdate = mysqli_query($connection, $sqlupdate);
    if ($result)
        header('location:contactus.php');
}
?>
<html>

<head>
    <title> Contact Us </title>
    <link href="css/style_admin.css" rel="stylesheet" />
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
                <h1>Contact Us</h1>
                <div class="heading">
                    <form method="post" class="form">
                        <div class="row">
                            <div class="rleft"> Contact Person : </div>
                            <div class="r_right"> <input type="text" name="cperson" value="<?php echo $row['Person'] ?>" class="input" placeholder="Contact Person"></div>
                        </div>
                        <div class="row">
                            <div class="rleft"> Mobile Number : </div>
                            <div class="r_right"> <input type="text" name="mobile" value="<?php echo $row['Mobile'] ?>" class=" input" placeholder="Mobile Number "> </div>
                        </div>
                        <div class="row">
                            <div class="rleft"> Email Id: : </div>
                            <div class="r_right"> <input type="email" name="mail" value="<?php echo $row['Email'] ?>" class="input" placeholder="Email"> </div>
                        </div>

                        <div class="row">
                            <div class="rleft"> Email Id2 : </div>
                            <div class="r_right"> <input type="text" name="mail2" value="<?php echo $row['Email2'] ?>" class="input" placeholder="Phone Number"> </div>
                        </div>

                        <div class="row" style="height:100px;">
                            <div class="rleft"> Address : </div>
                            <div class="r_right" style="height:100px"> <textarea name="address" class="tarea" placeholder="Address"><?php echo $row['Address'] ?></textarea> </div>
                        </div>

                        <div class="row">
                            <div class="rleft"></div>
                            <div class="r_right"> <input type="submit" name="submit" value="Update" class="button"> </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>