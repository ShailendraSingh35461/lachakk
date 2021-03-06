<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Details</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>


    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-xl-5">
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                    <!-- <h1 class="m-0 display-5 font-weight-semi-bold">
                        <span class="text-primary font-weight-bold border px-3 mr-1">
                        </span>
                    </h1> -->
                    <img src="./img/lachakk-logo.jpg" height="100" width="100" alt="">
                </a>
            </div>
            <div class="col-lg-8">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for products">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <!-- <div class="col-lg-3 col-6 text-right">
                <a href="" class="btn border">
                    <i class="fas fa-heart text-primary"></i>
                    <span class="badge">0</span>
                </a>
                <a href="" class="btn border">
                    <i class="fas fa-shopping-cart text-primary"></i>
                    <span class="badge">0</span>
                </a>
            </div> -->
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Clutch Bags Detail</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="./#">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Detail</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Products Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Products</span></h2>
        </div>
        <div class="row px-xl-5 pb-3">
            <?php
            products($mrp = 125, $srp = 120, $img = "item2.PNG", $name = "Blue Shirt", $url = "#");
            products($mrp = 125, $srp = 120, $img = "item3.PNG", $name = "Red Shirt", $url = "#");
            products($mrp = 125, $srp = 120, $img = "item4.PNG", $name = "White Shirt", $url = "#");
            products($mrp = 125, $srp = 4500, $img = "item2.PNG", $name = "Pink Shirt", $url = "#");
            ?>
        </div>
    </div>
    <!-- Products End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
        <div class="row border-top border-light mx-xl-5 py-4">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-dark">
                    &copy; <a class="text-dark font-weight-semi-bold" href="#">Lachakk</a>. All Rights Reserved to
                    Lachakk.
                    <a href="./policy.php">Privacy Policy</a>
                    <span class="text-muted px-2">|</span>
                    <a href="./shippolicy.php">Shipping Policy</a>
                    <span class="text-muted px-2">|</span>
                    <a href="./refund.php">Returns & Refunds</a>
                    <span class="text-muted px-2">|</span>
                    <a href="./cancelpolicy.php">Cancellations</a>
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <a class="text-red px-2" href="">
                    Google Pay
                </a>
                <span class="text-muted px-2">|</span>
                <a class="text-red px-2" href="">
                    Cash On Delivery
                </a>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top">
        <i class="fa fa-angle-double-up"></i>
    </a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

<?php
// Products function
function products($mrp, $srp, $img, $name, $url)
{
    echo '<div class="col-lg-3 col-md-6 col-sm-12 pb-1">
    <div class="card product-item border-0 mb-4">
        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
            <img class="img-fluid w-100" src="img/' . $img . '" alt="">
        </div>
        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
            <h6 class="text-truncate mb-3">' . $name . '</h6>
            <div class="d-flex justify-content-center">
                <h6>??? ' . number_format($srp, 2) . '</h6>
                <h6 class="text-muted ml-2"><del>??? ' . number_format($mrp, 2) . '</del></h6>
            </div>
        </div>
        <div class="card-footer d-flex justify-content-between bg-light border">
            <a href="' . $url . '" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View
                Detail</a>
            <a href="' . $url . '" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
        </div>
    </div>
</div>';
}
?>

</html>