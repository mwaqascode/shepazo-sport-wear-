<?php
// include 'connect.php';
// session_start(); // Start the session at the beginning

// if (isset($_POST['user_login'])) {
//     $user_name = $_POST['user_name'];
//     $user_password = $_POST['user_password'];
//     $sql = "SELECT * FROM `user_table` WHERE user_name='$user_name' and user_password='$user_password'";
//     $query = mysqli_query($con, $sql);
//     $row_count = mysqli_num_rows($query);
//     if ($row_count == 1) {
//         $_SESSION['admin'] = $_POST['user_name']; // Set the session variable
//         header('location:dashboard.php');
//         exit;
//     } else {
//         echo " <script> alert ('invalid credentials') </script> ";
//     }
// }

?>
<?php







?>

<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// query //

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $hashed_password);
        $stmt->fetch();
        
        if (password_verify($password, $hashed_password)) {
            $_SESSION['user_id'] = $id;
            header("Location: dashboard.php");
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with that username.";
    }

    $stmt->close();
}

$conn->close();
?>






<!doctype html>
<html lang="en">

<head>
    <title>LOG IN</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="shortcut icon" href="assets/images/favicon.png" />

</head>
<style>
    body {
        margin: 0;
        padding: 0;
        height: 100%;
        background: #381b5b;
    }

    .login_black {
        background: linear-gradient(to bottom, #e75d6a, #381b5b);
        float: left;
        width: 100%;
        padding: 50px 0;

    }

    .add_log {
        background: white;
        padding: 50px 0 50px 0;
    }
</style>

<body>

    <section class="login_black ">
        <div class="container ">
            <div class="add_log rounded">
                <h1 class="text-center">Administrator</h1>
                <form action="" method="post">
                    <div class="row px-4">
                        <div class="col-md-6">

                            <div class="form-ouline  py-2">
                                <label for="" class="form-label">Name</label>
                                <input type="text" class="form-control" placeholder="Please enter your name" name="username" required="required" autocomplete="off" />
                            </div>


                            <div class="form-ouline  py-2">
                                <label for="" class="form-label">Password</label>
                                <input type="password" class="form-control" placeholder="Enter your password" name="password" required="required" autocomplete="off" />
                            </div>


                            <div class="mt-2 pt-2 ">
                                <input type="submit" value="Login" class="bg-info border-0 py-2 px-3" name="user_login">
                            </div>


                        </div>
                        <div class="col-md-6">
                            <img class="img-fluid" src="photo/free.jpeg" alt="" style="height: 330px;  width: 100%;">
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>