<?php
include('admin/config/connection.php');
$sql = "SELECT * FROM hotel";
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
    <!--     
    <div class="card">
        <div class="card-inner">
            <div class="card-front" style="background-image: url('images/r001.jpg');">
            </div>
            <div class="card-back">
                <h2>Rampratap Palace</h2>
                <h6>Price:&nbsp;&nbsp; 2500&#8377; (1 Night)</h6>
                <h6>Rating: &nbsp;&nbsp; 4.5 (463 User)</h6>
                <a target="_blank" href="https://www.booking.com/hotel/in/rampratap-palace.en-gb.html">
                    <div class="button">Book Now</div>
                </a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-inner">
            <div class="card-front" style="background-image: url('images/a001.jpg');">
            </div>
            <div class="card-back">
                <h2>Hotel Boutique</h2>
                <h6>Price:&nbsp;&nbsp; 2500&#8377; (1 Night)</h6>
                <h6>Rating: &nbsp;&nbsp; 4.5 (463 User)</h6>
                <a target="_blank" href="https://www.booking.com/hotel/in/aura-boutique.en-gb.html">
                    <div class="button">Book Now</div>
                </a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-inner">
            <div class="card-front" style="background-image: url('images/j001.jpg');">
            </div>
            <div class="card-back">
                <h2>Jagat Niwas Palace</h2>
                <h6>Price:&nbsp;&nbsp; 2500&#8377; (1 Night)</h6>
                <h6>Rating: &nbsp;&nbsp; 4.5 (463 User)</h6>
                <a target="_blank" href="https://www.booking.com/hotel/in/jagat-niwas-palace.en-gb.html">
                    <div class="button">Book Now</div>
                </a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-inner">
            <div class="card-front" style="background-image: url('images/l001.jpg');">
            </div>
            <div class="card-back">
                <h2>Hotel Lakend</h2>
                <h6>Price:&nbsp;&nbsp; 2500&#8377; (1 Night)</h6>
                <h6>Rating: &nbsp;&nbsp; 4.5 (463 User)</h6>
                <a target="_blank" href="https://www.booking.com/hotel/in/lakend.en-gb.html">
                    <div class="button">Book Now</div>
                </a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-inner">
            <div class="card-front" style="background-image: url('images/t001.jpg');">
            </div>
            <div class="card-back">
                <h2>Trident Udaipur</h2>
                <h6>Price:&nbsp;&nbsp; 2500&#8377; (1 Night)</h6>
                <h6>Rating: &nbsp;&nbsp; 4.5 (463 User)</h6>
                <a target="_blank" href="https://www.booking.com/hotel/in/trident-udaipur.en-gb.html">
                    <div class="button">Book Now</div>
                </a>
            </div>
        </div>
    </div> -->
</div>