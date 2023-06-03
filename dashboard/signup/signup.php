<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>





















    <div class="container  my-5 py-3 bg-light d-flex justify-content-center">

        <form action="signup.php?submitted=true" method="post" enctype="multipart/form-data" class="col-7 rounded  p-3 bg-dark text-light">
            <div class="col-12 rounded py-3">
                <h4 class="text-center  ">
                    Signup to Fresh Mart
                </h4>
            </div>
            <div class="row  justify-content-center align-item-center">
                <div class="row ">
                    <div class="col-12">
                        <label for="Username">Username</label>
                        <input type="text" name="Username" class="form-control " id="">
                    </div>
                    <div class="col-12">
                        <label for="password">password</label>
                        <input type="text" name="password" class="form-control " id="">
                    </div>

                </div>

            </div>
            <div class="row justify-content-center my-3">
                <input type="submit" value="submit" class="col-3 btn btn-primary">
            </div>

        </form>
    </div>
    <?php
    session_start();
    if (isset($_SESSION['loggedin'])) {
        header('location: ../index.php');
        die();
    } else {

        if (isset($_GET['submitted'])) {
            // print_r($_POST);

            $connection = mysqli_connect('localhost', 'root', '', 'admin');
            $response = mysqli_query($connection, "SELECT * FROM `freshmartadmin`");
            $row = mysqli_fetch_assoc($response);

            if ($row['UserName'] == $_POST['Username'] && $row['Password'] == $_POST['password']) {
                echo 'valid';
                // print_r( $row);

                $_SESSION['Username'] = $_POST['Username'];
                // $_SESSION['Email'] = $_POST['Email'];
                $_SESSION['loggedin'] = true;
                header('location: ../index.php');
                die();
            } else {
                echo '<script> alert("you are not admin")';
                header('location: signup.php');
                die();
            }
        }
    }
    ?>






























    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>