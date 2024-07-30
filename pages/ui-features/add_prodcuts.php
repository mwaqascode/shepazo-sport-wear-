<?php

require '../../connect.php';


if(isset($_POST['submit'])){
    $product_name=$_POST['product_name'];
    

    $sql="INSERT INTO `add_categories`(`categories_name`) VALUES ('$product_name')";


    $query=mysqli_query($con,$sql);

    if($query){
        echo '<script> alert("insert data")  </script> ';
        header('location:add_categories.php');
    }else{
        echo '<script> alert(" not insert data")  </script> ';

    }
}


?>