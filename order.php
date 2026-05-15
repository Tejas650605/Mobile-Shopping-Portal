<?php
include 'includes/db.php';

if(isset($_GET['id'])){

    $id = $_GET['id'];

    $query = "SELECT * FROM products WHERE id='$id'";

    $result = mysqli_query($conn,$query);

    $row = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Order Product</title>

    <style>

        body{
            font-family:Arial;
            background:#f1f1f1;
        }

        .order-box{
            width:400px;
            margin:50px auto;
            background:white;
            padding:30px;
            border-radius:10px;
            text-align:center;
        }

        img{
            width:200px;
        }

        button{
            padding:12px 25px;
            background:green;
            color:white;
            border:none;
            border-radius:8px;
            cursor:pointer;
            margin-top:15px;
        }

    </style>

</head>

<body>

<div class="order-box">

    <h2><?php echo $row['mobile_name']; ?></h2>

    <img src="images/<?php echo $row['image']; ?>">

    <h3>₹<?php echo $row['price']; ?></h3>

    <p><?php echo $row['description']; ?></p>

    <button onclick="alert('Order Placed Successfully 😄')">
        Confirm Order
    </button>

</div>

</body>
</html>