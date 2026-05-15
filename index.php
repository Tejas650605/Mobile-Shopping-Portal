<?php
include 'includes/db.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Mobile Shopping Portal</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="navbar">

<h2>Mobile Shop</h2>

<div class="nav-links">

<a href="index.php">Home</a>

<a href="login.php">Login</a>

<a href="user/register.php">Register</a>

</div>

</div>
<h1>📱 Mobile Shopping Portal</h1>

<div class="banner">

    <div class="slider">

    <img src="images/banner1.jpg" class="slide active">
    <img src="images/banner2.jpg" class="slide">
    <img src="images/banner3.jpg" class="slide">

</div>

</div>

<form method="GET" class="search-box">

    <input type="text" name="search" placeholder="Search Mobile...">

    <button type="submit">Search</button>

</form>

<div class="container">

<?php

if(isset($_GET['search'])){

    $search = $_GET['search'];

    $query = "SELECT * FROM products 
              WHERE mobile_name LIKE '%$search%' 
              OR brand LIKE '%$search%'";
}
else{

    $query = "SELECT * FROM products";
}
$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($result))
{
?>

<div class="card">

<img src="images/<?php echo $row['image']; ?>">

<h2><?php echo $row['mobile_name']; ?></h2>

<p class="brand">
Brand: <?php echo $row['brand']; ?>
</p>

<p class="price">
₹<?php echo $row['price']; ?>
</p>

<p class="desc">
<?php echo $row['description']; ?>
</p>

<a href="order.php?id=<?php echo $row['id']; ?>">

<button class="buy-btn">Buy Now</button>
</a>

<a href="cart.php?id=<?php echo $row['id']; ?>">
    <button class="cart-btn">Add To Cart</button>
</a>

<a href="#" class="btn">Add To Cart</a>

</div>

<?php
}
?>

</div>

<script>

let slides = document.querySelectorAll('.slide');

let index = 0;

function changeSlide(){

    slides[index].classList.remove('active');

    index++;

    if(index >= slides.length){
        index = 0;
    }

    slides[index].classList.add('active');
}

setInterval(changeSlide, 3000);

</script>

<script>

let slides = document.querySelectorAll('.slide');

let current = 0;

function slider(){

    slides[current].classList.remove('active');

    current++;

    if(current >= slides.length){
        current = 0;
    }

    slides[current].classList.add('active');
}

setInterval(slider, 3000);

</script>
</body>

</body>
</html>