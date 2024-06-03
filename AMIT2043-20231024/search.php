<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Product</title>
</head>
<body>

<?php
$productCode = "";
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted product code
    $productCode = htmlspecialchars($_POST['product_code']);
}

?>

<form action="search.php" method="POST">
    <label for="product_code">Product Code:</label>
    <input type="text" id="product_code" name="product_code" value="<?php  echo isset($productCode)? $productCode:'' ?>">
    <input type="submit" value="Search">
</form>

</body>
</html>
