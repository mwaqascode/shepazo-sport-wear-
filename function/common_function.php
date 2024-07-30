<?php

function getproducts()
{
    global $con;

    $limit = 4;
    $page = $_GET['page'] ?? 1;
    $page = $_GET['page'] ?? 1;
    if (!is_numeric($page) || $page < 1) {
        $page = 1;
    }
    $offset = ($page - 1) * $limit;
    // var_dump($offset, $limit) ;

    if (!isset($_GET['category'])) {
        $sql = "SELECT * FROM products ORDER BY RAND() LIMIT $offset,$limit";
        $stmt = mysqli_prepare($con, $sql);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {


                $product_id = $row['product_id'];
                $product_image = $row['product_image'];
                $product_name = $row['product_name'];
                $product_art = $row['product_art'];

                echo '
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-4"> 
                            <div class="card card-2" style="width: 17rem;"> 
                       <img class="card-img-top" src=" ' . $product_image . ' " alt="">     
                        <div class="card-body text-center"> 
                                    <h5 class="card-title">' . $product_name . '</h5> 
                                    <p class="card-text">' . $product_art . '</p> 
                                </div> 
                            </div> 
                <div class="box-content">
                  <div class="social">
                     <div class="icon">
                        <ul>
                            <li>
                            
                           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                             <i class="fa fa-eye" aria-hidden="true"></i>
                           </button>
                                
                                
                                </li>


                            <li><a href="">
                                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                </a></li>
                            <li><a href="">
                                    <i class="fa fa-info" aria-hidden="true"></i>
                                </a></li>
                            <li><a href="">
                                    <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                                </a></li>
                                 </ul>
                            </div>
                    </div>
                 </div>
                            
                        </div> 
                        
                    ';
            }
        }
    }
}





function get_unique_products()
{
    global $con;

    $limit = 8;
    $page = $_GET['page'] ?? 1;
    $page = $_GET['page'] ?? 1;
    if (!is_numeric($page) || $page < 1) {
        $page = 1;
    }
    $offset = ($page - 1) * $limit;

    if (isset($_GET['category'])) {
        $category_id = $_GET['category'];
        $sql = "SELECT * FROM products WHERE category_id = '$category_id' LIMIT $offset, $limit";
        $stmt = mysqli_prepare($con, $sql);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        $num_of_rows = mysqli_num_rows($result);
        if ($num_of_rows == 0) {
            echo '<h2>Products Not Found</h2>';
        }

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {


                $category_id = $row['category_id'];
                $product_id = $row['product_id'];

                $product_image = $row['product_image'];
                $product_name = $row['product_name'];
                $product_art = $row['product_art'];

                echo '
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-4"> 
                            <div class="card card-2" style="width: 17rem;"> 
                       <img class="card-img-top" src=" ' . $product_image . ' " alt="">     
                        <div class="card-body text-center"> 
                                    <h5 class="card-title">' . $product_name . '</h5> 
                                    <p class="card-text">' . $product_art . '</p> 
                                </div> 
                            </div> 
                <div class="box-content">
                  <div class="social">
                     <div class="icon">
                        <ul>
                            <li>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                             <i class="fa fa-eye" aria-hidden="true"></i>
                           </button>
                                
                                </li>

                            <li><a href="">
                                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                </a></li>
                            <li><a href="">
                                    <i class="fa fa-info" aria-hidden="true"></i>
                                </a></li>
                            <li><a href="">
                                    <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                                </a></li>
                                 </ul>
                            </div>
                    </div>
                 </div>
                            
                        </div> 
                        
                    ';
            }
        }
    }
}


function get_search_products()
{
    global $con;


    if (isset($_GET['search_data_products']) && !empty($_GET['search_data_products']) && isset($_GET['submit'])) {
        $search_data_value = $_GET['search_data_products'];

        $sql = "SELECT * FROM products WHERE product_name LIKE '%$search_data_value%' OR product_art LIKE '%$search_data_value%'";
        $stmt = mysqli_prepare($con, $sql);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        $num_of_rows = mysqli_num_rows($result);
        if ($num_of_rows == 0) {
            echo '<h2>Products Not Found</h2>';
        }

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {


                $category_id = $row['category_id'];
                $product_id = $row['product_id'];

                $product_image = $row['product_image'];
                $product_name = $row['product_name'];
                $product_art = $row['product_art'];

                echo '
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-4"> 
                            <div class="card card-2" style="width: 17rem;"> 
                       <img class="card-img-top" src=" ' . $product_image . ' " alt="">     
                        <div class="card-body text-center"> 
                                    <h5 class="card-title">' . $product_name . '</h5> 
                                    <p class="card-text">' . $product_art . '</p> 
                                </div> 
                            </div> 
                <div class="box-content">
                  <div class="social">
                     <div class="icon">
                        <ul>
                            <li>
                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                             <i class="fa fa-eye" aria-hidden="true"></i>
                           </button>
                                
                                </li>
                            <li><a href="">
                                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                </a></li>
                            <li><a href="">
                                    <i class="fa fa-info" aria-hidden="true"></i>
                                </a></li>
                            <li><a href="">
                                    <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                                </a></li>
                                 </ul>
                            </div>
                    </div>
                 </div>
                            
                        </div> 
                        
                    ';
            }
        }
    }
}



function get_view_products()
{
    global $con;


    if (isset($_GET['product_id'])) {
        $product_id = $_GET['product_id'];
        $sql = "SELECT * FROM `products` where product_id=$product_id ";
        $stmt = mysqli_prepare($con, $sql);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        $num_of_rows = mysqli_num_rows($result);
        if ($num_of_rows == 0) {
            echo '<h2>Products Not Found</h2>';
        }

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {


                $category_id = $row['category_id'];
                $product_id = $row['product_id'];

                $product_image = $row['product_image'];
                $product_name = $row['product_name'];
                $product_art = $row['product_art'];

                echo '
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-4"> 
                            <div class="card card-2" style="width: 17rem;"> 
                       <img class="card-img-top" src=" ' . $product_image . ' " alt="">     
                        <div class="card-body text-center"> 
                                    <h5 class="card-title">' . $product_name . '</h5> 
                                    <p class="card-text">' . $product_art . '</p> 
                                </div> 
                            </div> 
                <div class="box-content">
                  <div class="social">
                     <div class="icon">
                        <ul>
                            <li>
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                             <i class="fa fa-eye" aria-hidden="true"></i>
                           </button>
                                </li>
                            <li><a href="">
                                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                </a></li>
                            <li><a href="">
                                    <i class="fa fa-info" aria-hidden="true"></i>
                                </a></li>
                            <li><a href="">
                                    <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                                </a></li>
                                 </ul>
                            </div>
                    </div>
                 </div>
                            
                        </div> 
                        
                    ';
            }
        }
    }
}
