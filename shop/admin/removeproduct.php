<?php
ob_start();
include("../db.php");

if(isset($_GET['id'])) {
    $product_id = $_GET['id'];

    // Delete the product from the database based on the product_id
    $delete_query = "DELETE FROM products WHERE product_id = $product_id";

    if(mysqli_query($con, $delete_query)) {
        // Product successfully deleted, redirect back to products list page
        echo '<script>window.location.href = "index.php?page=productlist";</script>';
    } else {
        echo "Error deleting product: " . mysqli_error($con);
    }
} else {
    echo "Invalid product ID.";
}
ob_end_flush();
?>
