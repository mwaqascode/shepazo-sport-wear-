<?php
include 'connect.php';
include 'function/common_function.php';
// if(isset($_GET['product_view'])){
//     //include 'product_view.php';
//     header('location:product_view.php');
//   }

?>

<div class="container p-0">
    <div class="row">
        <?php
        $limit = 8;
        $page = $_GET['page'] ?? 1;
        $category_id = $_GET['category'] ?? '';

        if (!is_numeric($page) || $page < 1) {
            $page = 1;
        }

        $offset = ($page - 1) * $limit;

        if ($category_id) {
            get_unique_products($category_id, $limit, $offset);
        } else {
            getproducts($limit, $offset);
        }
        ?>
    </div>
</div>

<?php
$total_pages = ceil(mysqli_num_rows(mysqli_query($con, "SELECT * FROM products WHERE category_id = '$category_id'")) / $limit);
echo '<nav aria-label="Page navigation example" id="pagination">';
echo '<ul class="pagination justify-content-center mt-4">';

if ($page == 1) {
    echo '<li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>';
} else {
    echo '<li class="page-item"><a class="page-link" href="?page=' . ($page - 1) . '&category=' . $category_id . '">Previous</a></li>';
}

for ($i = 1; $i <= $total_pages; $i++) {
    $active = ($page == $i) ? 'active' : '';
    echo '<li class="page-item ' . $active . '"><a class="page-link" href="?page=' . $i . '&category=' . $category_id . '">' . $i . '</a></li>';
}

// add next button
if ($page == $total_pages) {
    echo '<li class="page-item disabled"><a class="page-link" href="#">Next</a></li>';
} else {
    echo '<li class="page-item"><a class="page-link" href="?page=' . ($page + 1) . '&category=' . $category_id . '">Next</a></li>';
}

echo '</ul>';
echo '</nav>';
?>


<!-- <nav aria-label="Page navigation example" id="pagination">
    <ul class="pagination justify-content-center mt-4">
        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
</nav>
<input type="hidden" value="1" name="currentpage" id="currentpage"> -->