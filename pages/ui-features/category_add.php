<?php

require '../../connect.php';



?>




<?php 
if (isset($_POST['submit'])) {
    $category_name = $_POST['category_name'];
    $category = $_POST['category'];

    $stmt = $con->prepare("INSERT INTO `categories`(`uk_category_id`, `category_name`) VALUES (?,?) on DUPLICATE KEY UPDATE category_name=value(category_name), uk_category_id= value(uk_category_id)");
    $stmt->bind_param("is", $category, $category_name);

    if ($stmt->execute()) {
      echo '<script> alert("insert data")  </script> ';

    }


    $stmt->close();
    $con->close();
    header('location:add_categories.php');
}


?>

