<?php
include 'connect.php';
// include 'function/common_function.php';
// if(isset($_GET['product_view'])){
//     //include 'product_view.php';
//     header('location:product_view.php');
//   }
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="partials../style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="partials../reponsive.css">

    <!-- font  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="assets/images/favicon.png" />


    <title>sport wear</title>
</head>

<body>




    <?php
    include 'header.php';
    ?>
    <section class="mtyl">
        <div class="container sub-tittle">
            <h1>FOOT BALL</h1>
            <div class="line"></div>
        </div>
        <div class="container mtxl">
            <div class="sub-tittle">
                <h3>Foot Ball</h3>
            </div>

            <div class="row filter nav-tab pt-3">
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-4">
                            <p>Sort By:</p>
                        </div>
                        <div class="col-6">
                            <select name="o" id="sort_order">
                                <option value="pd.name">Name</option>
                                <option value="p.model">Model</option>
                                <option value="p.add_time">Date</option>
                                <option value="p.sort_order" selected="selected">Default</option>
                                <option value="p.hits">Trending</option>
                                <option value="p.viewed">Views</option>
                            </select>
                        </div>
                        <div class="col-2 text-center">
                            <!-- <i class="fa-solid fa-down-long"></i>off -->
                            <svg class="fa-solid" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                <path d="M2 334.5c-3.8 8.8-2 19 4.6 26l136 144c4.5 4.8 10.8 7.5 17.4 7.5s12.9-2.7 17.4-7.5l136-144c6.6-7 8.4-17.2 4.6-26s-12.5-14.5-22-14.5l-72 0 0-288c0-17.7-14.3-32-32-32L128 0C110.3 0 96 14.3 96 32l0 288-72 0c-9.6 0-18.2 5.7-22 14.5z" />
                            </svg>
                        </div>
                    </div>

                </div>

                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-10">
                            <p class="text-center text-danger">

                                Items 1-8 of 9
                            </p>
                        </div>
                        <div class="col-md-2">
                            <p class="text-right">
                                Show:
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="row">
                        <div class="col">
                            <select name="l" id="records_limit">
                                <option selected="selected">8</option>
                                <option>16</option>
                                <option>40</option>
                                <option>80</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <!-- <i class="fa-solid fa-list"></i> off  -->
                            <svg class="fa-list" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z" />
                            </svg>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
     


        <?php
        include 'feature.php'

        ?>





    </section>




    <section class="mtxl"></section>

    <?php
    include 'footer.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>