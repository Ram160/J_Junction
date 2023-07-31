<?php
include('admin/config/connection.php');
$sql = "SELECT * FROM home WHERE Sno=3";
$check = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($check);

$sqlad = "SELECT * FROM adventure WHERE Visibility =1 AND Sno>3 AND Sno<15";
$checkad = mysqli_query($connection, $sqlad);

$sqldes = "SELECT * FROM destination WHERE Visibility =1 AND Sno>6 AND Sno<12";
$checkdes = mysqli_query($connection, $sqldes);

$sqlc = "SELECT * FROM contact WHERE Sno = 1";
$checkc = mysqli_query($connection, $sqlc);
$rowc = mysqli_fetch_assoc($checkc);
?>

<html>

<head>
  <title>JOURNEY JUNCTION</title>
  <link href="css/style.css" rel="stylesheet" />
</head>

<body>
  <div class="container">

    <?php include('header.php'); ?>

    <div id="home" style="background:linear-gradient(rgba(70, 20, 40, 0.5),rgba(50, 50, 40, 0.5)), url('admin/images/Udaipur/<?php echo $row['ImageBack']; ?>');
  background-size: 100% 100%;">
      <div style="color:#F4EEFF; font-size:30px; height:50px">Welcome to</div>
      <h1 class="city"><?php echo $row['Cityname']; ?></h1><br />
      <h2 style="color: #EEEEEE; font-size:50px; height:70px"><?php echo $row['Nick_Name']; ?><h2>
    </div>

    <div class="slider" id="destination">
      <h1>Destinations</h1>
      <?php
      while ($row = mysqli_fetch_assoc($checkdes)) {
      ?>
        <div class="slide"> <img src="admin/images/Udaipur/Destination/<?php echo $row['Images']; ?>"> </div>
      <?php } ?>
    </div>

    <div id="adventure">
      <h1>Adventures</h1>
      <div class="adv-container">
        <div class="adv-carousel">
          <?php
          while ($row = mysqli_fetch_assoc($checkad)) {
          ?>
            <figure> <img src="admin/images/Udaipur/Adventure/<?php echo $row['Images']; ?> "></figure>
          <?php } ?>
        </div>
      </div>
    </div>

    <?php
include('admin/config/connection.php');
$sql = "SELECT * FROM hotel WHERE Visibility=1 AND Sno>6";
$check = mysqli_query($connection, $sql);

?>
<div id="hotel">
    <h1>Hotel</h1>
    <?php
    while ($row = mysqli_fetch_assoc($check)) {
    ?>
        <div class="card">
            <div class="card-inner">
                <div class="card-front" style="background-image: url('admin/images/Udaipur/Hotel/<?php echo $row['Images']; ?>');">
                </div>
                <div class="card-back">
                    <h2><?php echo $row['Title']; ?></h2>
                    <h6>Price:&nbsp;&nbsp; <?php echo $row['Price']; ?>&#8377; (1 Night)</h6>
                    <h6>Rating: &nbsp;&nbsp; <?php echo $row['Rating']; ?> (463 User)</h6>
                    <a target="_blank" href="https://www.booking.com/hotel/in/hilltop-palace.en-gb.html">
                        <div class="button">Book Now</div>
                    </a>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>

    <div id="reach">
      <h1>Reach</h1>
      <a href="https://www.ixigo.com/flights" target="_blank">
        <div class="transport">
          <h3>Flight</h3>
          <img src="images/00 (3).png" />
        </div>
      </a>

      <a href="https://www.ixigo.com/trains">
        <div class="transport">
          <h3>Train</h3>
          <img src="images/00 (4).png" />
        </div>
      </a>

      <a href="https://www.ixigo.com/buses">
        <div class="transport">
          <h3>Bus</h3>
          <img src="images/00 (2).png" />
        </div>
      </a>

    </div>

    <div id="contact">
      <div class="fleft">
        <h2>Contact Us</h2>
        <p>
          <?php echo $rowc['Person']; ?><br />
          <?php echo $rowc['Mobile']; ?><br />
          <?php echo $rowc['Email']; ?><br />
          <?php echo $rowc['Email2']; ?><br />
          <?php echo $rowc['Address']; ?><br />
        </p>
      </div>
      <div class="fright">
        <form class="form">
          Subscribe Letter for Trip offers<br />
          <input type="text" placeholder="Email" /><br />
          <input type="password" placeholder="Password" /><br />
          <input type="submit" value="Login" />
        </form>
      </div>

      <div>
        <iframe class="fbottom" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13490.640458712658!2d73.6629632811346!3d24.598331526789867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3967e5e4a1e21081%3A0x6c6fe92a24bf849a!2sNehru%20Garden!5e1!3m2!1sen!2sin!4v1688968600247!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
</body>

</html>