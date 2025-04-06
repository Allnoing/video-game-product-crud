<?php
/* Author: Sa'Cairo Bonner
   Create Date: 4/02/2025
   Class: ITN264
   Class Section: 201
   Assignment: Display Data from Database 
   Purpose: page that lists products from our database and then a form that allow you to edit the records.
   Note: This is the main file to open in your browser to view the product list webpage.
   */
require 'mysqli_connection.php';

// Get all products from the database
$sql = "SELECT product_id, product_code, product_name, description, list_price, discount_percent FROM products";
$result = $conn->query($sql);

// Checks for query execution errors
// If the query fails, stops the script and outputs the error
if (!$result) {
    die("Query failed: " . $conn->error);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Video Game Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <h1 class="mb-4 text-center">Video Game Products</h1>

    <!-- Product Table -->
    <table class="table table-hover table-bordered shadow">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Code</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price ($)</th>
                <th>Discount (%)</th>
                <th>Action</th>
            </tr>
        </thead>
        
        <?php if ($result->num_rows > 0): ?>
            <tbody>
            <?php while($product = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $product['product_id'] ?></td>
                <td><?= htmlspecialchars($product['product_code']) ?></td>
                <td><?= htmlspecialchars($product['product_name']) ?></td>
                <td><?= htmlspecialchars($product['description']) ?></td>
                <td><?= number_format($product['list_price'], 2) ?></td>
                <td><?= number_format($product['discount_percent'], 2) ?></td>
                <td>

                    <!-- Edit button linking to the edit form for products -->
                    <a href="edit_product.php?id=<?= $product['product_id'] ?>" class="btn btn-sm btn-primary">Edit</a>
                </td>
            </tr>
            <?php endwhile; ?>
            </tbody>
        <?php else: ?>
            
            <!-- If no products found, display a message inside a full-width table row on the page -->
            <tr><td colspan="7" class="text-center">No products available.</td></tr>
        <?php endif; ?>
        
    </table>
</div>
</body>
</html>
