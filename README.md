# Product Website

This project is a simple product management system that allows users to view, edit, and update product records stored in a database. Below is an explanation of the purpose and usage of each file in the project.

---

## Files and Their Usage

### 1. `product_list.php`
- **Purpose**: This is the main file to open in your browser to view the product list webpage.
- **Functionality**:
  - Retrieves all product records from the database.
  - Displays the product data in a table format.
  - Provides an "Edit" action for each product, which redirects to the `edit_product.php` page.
- **How to Use**: Open this file in your browser to see the list of products.

---

### 2. `edit_product.php`
- **Purpose**: Displays the edit product page for a specific product.
- **Functionality**:
  - Retrieves the product data from the database based on the `product_id` provided in the URL as a GET parameter.
  - Uses the `renderProductForm` function from `product_form.php` to display a form pre-filled with the product's details.
  - Allows users to edit the product details and submit the form.
- **How to Use**: Access this file in your browser with a valid `product_id` in the URL (e.g., `edit_product.php?id=1`).

---

### 3. `product_form.php`
- **Purpose**: Contains the reusable form for editing product details.
- **Functionality**:
  - Defines the `renderProductForm` function, which generates an HTML form for editing a product.
  - The form is pre-filled with the product data passed to the function.
  - This file is included in `edit_product.php` and is not meant to be accessed directly.
- **How to Use**: Call the `renderProductForm` function from another file (e.g., `edit_product.php`) and pass the product data as an argument.

---

### 4. `edit_product_db.php`
- **Purpose**: Handles the functionality of updating product records in the database.
- **Functionality**:
  - Processes the form submission from `edit_product.php`.
  - Validates and sanitizes the input data.
  - Updates the product record in the database with the new values.
  - Redirects the user back to `product_list.php` upon successful update.
  - Outputs an error message if the update fails.
- **How to Use**: This file is called when the form in `edit_product.php` is submitted. It should not be accessed directly.

---

### 5. `mysqli_connection.php`
- **Purpose**: Establishes a connection to the MySQL database.
- **Functionality**:
  - Contains the database connection logic using PHP's `mysqli` extension.
  - Defines constants for database credentials (`DB_HOST`, `DB_NAME`, `DB_USER`, `DB_PASSWORD`).
  - Creates a `$conn` object for database operations.
  - Outputs an error message if the connection fails.
- **How to Use**: Include this file in any PHP script that requires a database connection.

---

### 6. `product_db.sql`
- **Purpose**: Contains the SQL script to create and populate the `products` database table.
- **Functionality**:
  - Creates the `products` table with the following fields:
    - `product_id`: Primary key, auto-incremented integer.
    - `product_code`: A unique code for the product.
    - `product_name`: The name of the product.
    - `description`: A text description of the product.
    - `list_price`: The price of the product.
    - `discount_percent`: The discount percentage for the product.
  - Inserts sample data into the `products` table.
- **How to Use**:
  1. Import this file into your MySQL database using a tool like phpMyAdmin or the MySQL command line.
  2. Ensure the database name matches the one defined in `mysqli_connection.php`.

---

## How to Run the Project
1. Place all files in the `htdocs` directory of your XAMPP installation (e.g., `c:\xampp\htdocs\product_website`).
2. Start the Apache and MySQL services in XAMPP.
3. Import the `product_db.sql` file into your MySQL server to create and populate the database.
4. Open `product_list.php` in your browser to view the product list and start interacting with the application.

---

## Notes
- Ensure that the database connection details in `mysqli_connection.php` are correct.
- The project uses Bootstrap for styling, so an internet connection is required to load the Bootstrap CSS from the CDN.
- The sample data in `product_db.sql` includes a variety of products for testing purposes.

---

## Author
- **Name**: Sa'Cairo Bonner
- **Class**: ITN264, Section 201
- **Assignment**: Display Data from Database
- **Date**: April 2, 2025
