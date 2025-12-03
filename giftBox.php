<?php
$name = "Ayenne";
$greeting = "Hello!";
if ($name) {
$greeting = "Hello, " . $name . "! Welcome to Sleigh All Day.";
}
$product = "Holiday Special Gift Box";
$cost = 20;
$totals = [];
for ($i = 1; $i <= 15; $i++) {
$subtotal = $cost * $i;
$discount = ($cost / 100) * ($i * 4);
$totals[$i] = $subtotal - $discount;
}
?>

<?php require "includes/header.php"; ?>

<h2><?php echo $greeting; ?></h2>
<p>Product: <b><?php echo $product; ?></b></p>

<img src="img/chocolate.jpg" style="width:250px; height:auto; margin-bottom:20px; align:right;">


<table border="1" cellpadding="10">
<tr>
    <th>Quantity</th>
    <th>Discounted Total Price</th>
</tr>

<?php foreach ($totals as $quantity => $price): ?>
<tr>
    <td>
    <?php echo $quantity; ?>
    pack<?php echo ($quantity == 1) ? "" : "s"; ?>
    </td>
    <td>₱<?php echo number_format($price, 2); ?></td>
</tr>
<?php endforeach; ?>

</table>

<?php include "includes/footer.php"; ?>