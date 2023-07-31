<?php
include('admin/config/connection.php');
$sql = "SELECT * FROM food";
$check = mysqli_query($connection, $sql);
?>

<div class="food">
    <h1>Food</h1>
    <?php
    while ($row = mysqli_fetch_assoc($check)) {
    ?>

        <div class="card">
            <div class="card-inner">
                <div class="card-front" style="background-image: url('admin/images/Udaipur/Food/<?php echo $row['Images']; ?>');">
                </div>
                <div class="card-back">
                    <h2><?php echo $row['Title']; ?></h2>
                    <h4>Price: &nbsp;<?php echo $row['Price']; ?></h4>
                    <p><?php echo $row['Description']; ?></p>
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
            <div class="card-front" style="background-image: url('images/food/002.webp');">
            </div>
            <div class="card-back">
                <h2></h2>
                <h4>Price: &nbsp;</h4>
                <p></p>
                </a>
            </div>
        </div>
    </div>


    <div class="card">
        <div class="card-inner">
            <div class="card-front" style="background-image: url('images/food/003.webp');">
            </div>
            <div class="card-back">
                <h2></h2>
                <h4>Price: &nbsp;</h4>
                <p></p>
                </a>
            </div>
        </div>
    </div>


    <div class="card">
        <div class="card-inner">
            <div class="card-front" style="background-image: url('images/food/004.webp');">
            </div>
            <div class="card-back">
                <h2></h2>
                <h4>Price: &nbsp;</h4>
                <p></p>
                </a>
            </div>
        </div>
    </div>


    <div class="card">
        <div class="card-inner">
            <div class="card-front" style="background-image: url('images/food/005.jpg');">
            </div>
            <div class="card-back">
                <h2></h2>
                <h4>Price: &nbsp;</h4>
                <p></p>
                </a>
            </div>
        </div>
    </div> -->

</div>