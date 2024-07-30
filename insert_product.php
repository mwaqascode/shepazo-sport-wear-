
<?php
include 'connect.php';

if (isset($_POST['upload'])) {
    $product_name = $_POST['product_name'];
    $product_art = $_POST['product_art'];
    $parent = $_POST['parent'];



    $product_image = $_FILES['product_image'];
    $image_name = $product_image['name'];
    $image_tmp = $product_image['tmp_name'];
    $image_path = "picture/" . $image_name;
    
    if (move_uploaded_file($image_tmp, $image_path)) {
        $sql = "INSERT INTO products (product_name, product_art, product_image, category_id) VALUES ('$product_name', '$product_art', '$image_path','$parent')";
        $query = mysqli_query($con, $sql);
        if ($query) {
            echo "Success";
        } else {
            echo "Not sent";
        }
    } else {
        echo "Image upload failed";
    }
}
header('location:add_product.php');
?>
