<?php
// This file is used to display the edit product page.
// It retrieves the product data from the database based on the provided product ID
// and uses the 'renderProductForm' function to display a form for editing the product details.

require 'mysqli_connection.php';
require 'product_form.php'; // Include the file containing the form function

// Checks if a product ID is provided in the URL given as a GET parameter
// If not, or if it's not a number, stop the script and output an error message
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("Invalid product ID.");
}

$product_id = intval($_GET['id']);

// Grabs product data from the database
$sql = "SELECT * FROM products WHERE product_id = $product_id";
$result = $conn->query($sql);

if (!$result || $result->num_rows === 0) {
    die("Product not found.");
}

$product = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <h1 class="mb-4 text-center">Edit Product</h1>

    <?php
    // Calls the function to render the form
    renderProductForm($product);
    ?>
</div>
</body>
</html>
