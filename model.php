<?php
include 'connect.php';

// Fetch products from database
$products = mysqli_query($con, "SELECT * FROM `products`  ");

// Display products in modal
?>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" title="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5 class="modal-title text-center" id="exampleModalLabel">PRODUCT QUICK VIEW</h5>
        <div class="container mt-4">
          <div class="row">
            <?php foreach ($products as $product) { ?>
              <div class="col-md-5">
                <img src="<?php echo $product['product_image']; ?>" width="400px" alt="">
              </div>
              <div class="col-md-7">
                <div class="details">
                  <h2><?php echo $product['product_name']; ?></h2>
                  <h3><?php echo $product['product_name']; ?> </h3>
                  <p><?php echo $product['product_name']; ?></p>
                </div>
              </div>
            <?php } ?>
            <div class="col-md-12">
              <div class="row mdl">
                <div class="col-md-2">
                  <input type="number" id="quantity" class="form-control input inpt" value="1" min="1" max="999">
                </div>
                <div class="col-md-5">
                  <button type="button" class="btn btn-primary btn-lg inpt" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-shopping-basket" aria-hidden="true"> </i> Add to Basket
                  </button>
                </div>
                <div class="col-md-5">
                  <button type="button" class="btn btn-primary btn-lg inpt" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-paper-plane" aria-hidden="true"> Quick Enquiry </i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
