<?php
$username = "Holiday Shopper";
$greeting = "Hello, " . $username . "!";
$offer = array(
    "item" => "Holiday Special Gift Box",
    "quantity" => 2,
    "price" => 20,
    "discount" => 5
);
$usual_price = $offer["quantity"] * $offer["price"];
$offer_price = $offer["quantity"] * $offer["discount"];
$saving = $usual_price - $offer_price;
?>

<?php require "includes/header.php"; ?>

<style>
    .saving-circle {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        background:rgb(160, 16, 16);
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        position: fixed;
        top: 20px;
        right: 20px;
        font-size: 22px;
        font-weight: bold;
    }
    .product-image {
        width: 250px;
        height: auto;
        margin-top: 20px;
    }
</style>

<div class="saving-circle">
₱<?php echo $saving; ?><br> SAVED!
</div>

<h2><?php echo $greeting; ?></h2>

<p>
Buy <b><?php echo $offer["quantity"]; ?></b> packs of
<b><?php echo $offer["item"]; ?></b>
and save big today!
</p>

<p>
Discounted Price: <b>₱<?php echo $offer_price; ?></b><br>
Original Price: <b>₱<?php echo $usual_price; ?></b>
</p>

<img src="img/teddy.jpg" class="product-image">

<?php include "includes/footer.php"; ?>