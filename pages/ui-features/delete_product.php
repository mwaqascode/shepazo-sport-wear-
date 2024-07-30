<?php

include '../../connect.php';

if (isset($_GET['delete_product'])) {
    $delete_id = $_GET['delete_product'];
    //    echo $delete_id;
    //    die;
    $sql = "DELETE FROM categories WHERE category_id =$delete_id ";
    $query = mysqli_query($con, $sql);
    if (!$query) {
        echo 'not';
    } else {
        // echo 'not';
        echo '<script>window.location.href="categories.php";</script>';
    }
    
    
 } 
