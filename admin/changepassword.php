<?php
error_reporting(0);
include('config/connection.php');
include('config/session.php');
$msg = "";
if (isset($_POST['submit'])) {
    $Op = $_POST['op'];
    $Np = $_POST['np'];
    $Cp = $_POST['cp'];
    $admin = $_SESSION['Admin'];
    $sql = "SELECT * FROM login WHERE Sno= '$admin' ";
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);
    if ($row['Upass'] != $Op) {
        $msg = "Old Password Incorrect";
    } else {
        if ($Np != $Cp) {
            $msg = "Confirm Password Incorrect";
        } else {
            $sqlupd = "UPDATE login SET Upass='$Np' WHERE Sno='$admin'";
            mysqli_query($connection, $sqlupd);
            $msg = "Password Changed";
        }
    }
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
                <h1>Change Password</h1>
                <div class="heading">
                    <form method="post" class="form">
                        <div class="row">
                            <div class="rleft"> Old Password : </div>
                            <div class="r_right"> <input type="password" name="op" class="input" placeholder="Old Password "> </div>
                        </div>
                        <div class="row">
                            <div class="rleft"> New Password : </div>
                            <div class="r_right"> <input type="password" name="np" class="input" placeholder="New Password "> </div>
                        </div>
                        <div class="row">
                            <div class="rleft"> Confirm Password : </div>
                            <div class="r_right"> <input type="password" name="cp" class="input" placeholder="Confirm Password "> </div>
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