<?php
require 'connect.php';
include 'function/common_function.php';

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

  <title>SHPEZO IMPEX</title>
</head>

<body>
  <?php
  include 'header.php'
  ?>
  <!-- slider  -->
  <!-- slider  -->
  <!-- <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">

    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="photo/banner1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="photo/banner2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="photo/banner3.jpg" class="d-block w-100" alt="...">
      </div>
    </div>

  </div> -->

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>


    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img src="photo/banner1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="photo/banner2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="photo/banner3.jpg" class="d-block w-100" alt="...">
      </div>
    </div>

    <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </button>
  </div>




  <section class="mtxl">
    <div class="container sub-tittle">
      <h3 class="text-center">About Us</h3>
      <h1>Who we are</h1>

    </div>
    <div class="container">

    </div>
    <div class="container mt-4">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12 text-center ">
          <p>Shpezo is a go to brand in Pakistan that specializes in selling high-quality athleisure wear. Shpezo offer
            durable and reliable activewear for fitness enthusiasts, with a focus on comfort and endurance. Shpezo
            clothing is made from the finest quality fabrics and follows eco-friendly manufacturing practices. Our
            trendy designs and comfortable fit make us a top choice for enhancing your fitness experience.</p>
        </div>


      </div>
    </div>
  </section>




  <section class="mtxl">


    <div class="container sub-tittle">
      <h1>FEATURE <span>PRODUCTS</span></h1>
    </div>

    <div class="container p-0">
      <div class="row">

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                ...
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>

        <?php
        // if (isset($_GET['product_view'])) {
        //   include 'product_view.php';
        //   // header('location:product_view.php');
        // }
        ?>
        <?php
        // include 'feature.php';
        getproducts()
        ?>
      </div>
    </div>


  </section>


  <?php
  include 'insta.php';

  ?>


  <?php
  include 'card.php';
  ?>





  <?php
  include 'footer.php';
  ?>




  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>