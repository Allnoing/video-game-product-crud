<?php
// This PHP file contains the form section for editing a product.
// Right now as of 04/06/25 3:11 A.M., it is designed to be called as a function from other files like 'edit_product.php'.

function renderProductForm($product) {
    ?>
    <form method="POST" action="edit_product_db.php" class="bg-white p-4 shadow rounded">
        <!-- Hidden input to carry product ID -->
        <input type="hidden" name="product_id" value="<?= $product['product_id'] ?>">

        <div class="mb-3">
            <label for="product_code" class="form-label">Product Code</label>
            <input type="text" name="product_code" class="form-control" value="<?= htmlspecialchars($product['product_code']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="product_name" class="form-label">Product Name</label>
            <input type="text" name="product_name" class="form-control" value="<?= htmlspecialchars($product['product_name']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="3" required><?= htmlspecialchars($product['description']) ?></textarea>
        </div>

        <div class="mb-3">
            <label for="list_price" class="form-label">List Price</label>
            <input type="number" step="0.01" name="list_price" class="form-control" value="<?= $product['list_price'] ?>" required>
        </div>

        <div class="mb-3">
            <label for="discount_percent" class="form-label">Discount (%)</label>
            <input type="number" step="0.01" name="discount_percent" class="form-control" value="<?= $product['discount_percent'] ?>" required>
        </div>

        <div class="d-flex justify-content-between">
            <a href="product_list.php" class="btn btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-primary">Update Product</button>
        </div>
    </form>
    <?php
}
?>
