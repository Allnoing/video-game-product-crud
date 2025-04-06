<?php
// This file handles the functionality of editing product records in the database.
// It processes the form submission from 'edit_product.php' and updates the database with the new values.

require 'mysqli_connection.php'; // Database connection file

// Checks if the request method is POST to ensure the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate input data
    $product_id = intval($_POST['product_id']); // Convert product ID to an integer
    $product_code = $conn->real_escape_string($_POST['product_code']); // Escape special characters for SQL
    $product_name = $conn->real_escape_string($_POST['product_name']);
    $description = $conn->real_escape_string($_POST['description']);
    $list_price = floatval($_POST['list_price']); // Converts list price to a float
    $discount_percent = floatval($_POST['discount_percent']); // Converts discount percent to a float

    // SQL query to update the product in the database
    $sql = "
        UPDATE products 
        SET 
            product_code = '$product_code',
            product_name = '$product_name',
            description = '$description',
            list_price = $list_price,
            discount_percent = $discount_percent
        WHERE product_id = $product_id
    ";

    // Execute the query and check for success
    if ($conn->query($sql) === TRUE) {
        // Redirect to the product list page on successful update
        header("Location: product_list.php");
        exit();
    } else {
        // Output an error message if the query fails
        echo "Error updating product: " . $conn->error;
    }
} else {
    // Handle invalid request methods (like for example, GET requests)
    echo "Invalid request.";
}
?>
