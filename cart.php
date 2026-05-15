<?php
session_start();

if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = [];
}

if(isset($_GET['id'])){

    $id = $_GET['id'];

    $_SESSION['cart'][] = $id;

    header("Location: cart.php");
}

include 'includes/db.php';
?>

<!DOCTYPE html>
<html>
<head>

<title>My Cart</title>

<style>

body{
    font-family:Arial;
    background:#f1f1f1;
}

.container{
    width:90%;
    margin:auto;
}

.cart-box{
    background:white;
    padding:20px;
    margin-top:20px;
    border-radius:10px;
}

img{
    width:120px;
}

button{
    padding:10px 20px;
    background:green;
    color:white;
    border:none;
    border-radius:8px;
}

</style>

</head>

<body>

<div class="container">

<h1>🛒 My Cart</h1>

<?php

$total = 0;

foreach($_SESSION['cart'] as $cart_id){

$query = "SELECT * FROM products WHERE id='$cart_id'";

$result = mysqli_query($conn,$query);

$row = mysqli_fetch_assoc($result);

$total += $row['price'];

?>

<div class="cart-box">

<img src="images/<?php echo $row['image']; ?>">

<h2><?php echo $row['mobile_name']; ?></h2>

<h3>₹<?php echo $row['price']; ?></h3>

</div>

<?php } ?>

<h2>Total Price: ₹<?php echo $total; ?></h2>

<button>Proceed To Payment</button>

</div>

</body>
</html>