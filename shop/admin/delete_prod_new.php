<?php

include("../db.php");
extract($_POST);

$data = mysqli_query($con,"DELETE FROM products where product_id= $product_id");
if($data)
    echo 1;
mysqli_close($con);