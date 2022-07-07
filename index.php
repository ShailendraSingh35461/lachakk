<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Lachakk</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- hello sir -->
    <!-- Favicon Amaaan Shailendra -->
    <link href="img/lachakk-logo.jpg" rel="icon">

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
                    <?php
                    $socialarray[] = array("icon" => "fa-facebook-f", "url" => "#");
                    $socialarray[] = array("icon" => "fa-instagram", "url" => "#");
                    $socialarray[] = array("icon" => "fa-linkedin-in", "url" => "#");
                    $socialarray[] = array("icon" => "fa-whatsapp", "url" => "#");

                    foreach ($socialarray as $social) {
                        $socialicon = $social['icon'];
                        $socialurl = $social['url'];
                        echo '<a class="text-dark px-2" href="' . $socialurl . '">
                        <i class="fab ' . $socialicon . '"></i>
                    </a>';
                    }
                    ?>
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


    <!-- Navbar Start -->
    <div class="container-fluid mb-5">
        <div class="row border-top px-xl-5">
            <div class="col">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold">
                            <img src="./img/lachakk-logo.jpg" height="100" width="100" alt="">
                        </h1>
                    </a>

                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav ml-auto py-0">
                            
                            <button type="button" class="btn btn-light btn-lg">
                                <a href="./story.php" style="text-decoration: none;">Our Story</a>
                            </button>
                            <button type="button" class="btn btn-light btn-lg">
                                <a href="./contact.php" style="text-decoration: none;">Contact</a>
                            </button>
                            <button type="button" class="btn btn-light btn-lg" data-toggle="modal" data-target="#loginmodel">
                                Login
                            </button>
                            <button type="button" class="btn btn-light btn-lg" data-toggle="modal" data-target="#registermodel">
                                Register
                            </button>

                        </div>

                        <!-- Login Modal -->
                        <div class="modal fade" id="loginmodel" tabindex="-1" role="dialog" aria-labelledby="loginmodel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h5 class="modal-title" id="loginmodel">Submit Form</h5>
                                        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button> -->
                                        <button type="button" class="close border border-white" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">
                                                <i class="bi bi-x" style="font-size: 20px;"></i>
                                            </span>
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <p>
                                            Login please.
                                        </p>
                                        <form>

                                            <div class="form-group">
                                                <label>User Id</label>
                                                <input type="text" required class="form-control" id="person_name" placeholder="Person Name">
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" required class="form-control" id="password" placeholder="Password">
                                            </div>
                                            <div class="form-group row" style="margin-bottom:20px;">
                                                <div class="col-sm-5">
                                                    <!--<img src="captcha.php" id="captcha_image" />-->
                                                    <label for="captcha-number">153166</label>
                                                    <a id="captcha_reload" href="#">reload</a>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="captcha">Captcah</label>
                                                    <input type="text" class="form-control" required id="captcha" name="Captcha">
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success btn-block" id="verifycharger">
                                                Login
                                            </button>
                                        </form>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Register Modal -->
                        <div class="modal fade" id="registermodel" tabindex="-1" role="dialog" aria-labelledby="registermodel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h5 class="modal-title" id="loginmodel">Submit Form</h5>
                                        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button> -->
                                        <button type="button" class="close border border-white" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">
                                                <i class="bi bi-x" style="font-size: 20px;"></i>
                                            </span>
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <p>
                                            New user please register yourself.
                                        </p>
                                        <form>

                                            <div class="form-group">
                                                <label>Email Id</label>
                                                <input type="text" required class="form-control" id="email" placeholder="Email Id">
                                            </div>
                                            <div class="form-group">
                                                <label>Person Name</label>
                                                <input type="text" required class="form-control" id="person_name" placeholder="Person Name">
                                            </div>
                                            <div class="form-group">
                                                <label>Contact</label>
                                                <input type="text" required class="form-control" id="number" placeholder="Contact Number">
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" required class="form-control" id="password" placeholder="Password">
                                            </div>
                                            <div class="form-group row" style="margin-bottom:20px;">
                                                <div class="col-sm-5">
                                                    <!--<img src="captcha.php" id="captcha_image" />-->
                                                    <label for="captcha-number">153166</label>
                                                    <a id="captcha_reload" href="#">reload</a>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="captcha">Captcah</label>
                                                    <input type="text" class="form-control" required id="captcha" name="Captcha">
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success btn-block" id="verifycharger">
                                                Register
                                            </button>
                                        </form>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </nav>

                <div id="header-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">

                        <?php
                        $bigimga[] = array("img" => "label1.jpeg", "offer" => "10% Off Your First Order", "texts" => "Vintage Banjara Bags");
                        $bigimga[] = array("img" => "label2.jpg", "offer" => "10% Off Your First Order", "texts" => "Reasonable Price & Not Refundable");
                        $i = 0;
                        foreach ($bigimga as $bimg) {
                            $active =  $i == 0 ? "active" : "";
                            echo '<div class="carousel-item ' . $active . '" style="height: 510px;">
                            <img class="img" src="img/' . $bimg['img'] . '" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h4 class="text-light text-uppercase font-weight-medium mb-3">' . $bimg['offer'] . '</h4>
                                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">' . $bimg['texts'] . '</h3>
                                    <a href="" class="btn btn-light py-2 px-3">Shop Now</a>
                                </div>
                            </div>
                        </div>';
                            $i++;
                        }
                        ?>
                    </div>
                    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-prev-icon mb-n2"></span>
                        </div>
                    </a>
                    <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-next-icon mb-n2"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Featured providing Start -->
    <div class="container-fluid pt-5">
        <div class="row justify-content-md-center">
            <!-- PHP Function -->
            <?php
            features($icon = 'fa-check', $name = "Quality Product");
            features($icon = 'fa-shipping-fast', $name = "Free Shipping");
            features($icon = 'fa-exchange-alt', $name = "Same Day Return");
            ?>
        </div>
    </div>
    <!-- Featured End -->


    <!-- Categories Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <!-- categories product  -->
            <?php
            products($count = 12, $img = "cat1.jpeg", $name = "Boho Bags", $url = "./bohodetail.php");
            products($count = 10, $img = "cat2.jpeg", $name = "Potli Bags", $url = "./potlidetail.php");
            products($count = 12, $img = "cat3.jpeg", $name = "Clutch Bags", $url = "./clutchdetail.php");
            products($count = 12, $img = "cat2.jpeg", $name = "Tote Bags", $url = "./totedetail.php");
            products($count = 12, $img = "cat1.jpeg", $name = "Travel Bags", $url = "./traveldetail.php");
            products($count = 12, $img = "cat3.jpeg", $name = "Bag Packs", $url = "./bagpacks.php");
            ?>
        </div>
    </div>
    <!-- Categories End -->


    <!-- Offer Start -->
    <!-- <div class="container-fluid offer pt-5">
        <div class="row px-xl-5">
            <div class="col-md-6 pb-4">
                <div class="position-relative bg-secondary text-center text-md-right text-white mb-2 py-5 px-5">
                    <img src="img/offer-1.png" alt="">
                    <div class="position-relative" style="z-index: 1;">
                        <h5 class="text-uppercase text-primary mb-3">20% off the all order</h5>
                        <h1 class="mb-4 font-weight-semi-bold">Spring Collection</h1>
                        <a href="" class="btn btn-outline-primary py-md-2 px-md-3">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pb-4">
                <div class="position-relative bg-secondary text-center text-md-left text-white mb-2 py-5 px-5">
                    <img src="img/offer-2.png" alt="">
                    <div class="position-relative" style="z-index: 1;">
                        <h5 class="text-uppercase text-primary mb-3">20% off the all order</h5>
                        <h1 class="mb-4 font-weight-semi-bold">Winter Collection</h1>
                        <a href="" class="btn btn-outline-primary py-md-2 px-md-3">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Offer End -->


    <!-- Trendy Products Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Trendy Products</span></h2>
        </div>
        <div class="row px-xl-5 pb-3">
            <?php
            trendy($mrp = 125, $srp = 120, $img = "item2.PNG", $name = "Blue Shirt", $url = "./viewpage.php", $id=101);
            trendy($mrp = 125, $srp = 120, $img = "item3.PNG", $name = "Blue Shirt", $url = "./viewpage.php", $id=102);
            trendy($mrp = 125, $srp = 120, $img = "./potli/potli3.PNG", $name = "Blue Shirt", $url = "./viewpage.php", $id=103);
            trendy($mrp = 125, $srp = 4500, $img = "item2.PNG", $name = "Blue Shirt", $url = "./viewpage.php", $id=104);
            ?>
        </div>
    </div>
    <!-- Products End -->


    <!-- Company Partner Start -->
    <!-- <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel vendor-carousel">
                    <div class="vendor-item border p-4">
                        <img src="img/vendor-1.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="img/vendor-2.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="img/vendor-3.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="img/vendor-4.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="img/vendor-5.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="img/vendor-6.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="img/vendor-7.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="img/vendor-8.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Vendor End -->


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
                <!-- <img class="img-fluid" src="img/payments.png" height="10px" alt=""> -->
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

// Faetures function
function features($icon, $name)
{
    echo '<div class="col-lg-3 col-md-6 col-sm-12 pb-1">
    <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
        <h1 class="fa ' . $icon . ' text-primary m-0 mr-3"></h1>
        <h5 class="font-weight-semi-bold m-0">' . $name . '</h5>
    </div>
</div>';
}

// Categories Product function
function products($count, $img, $name, $url)
{
    echo '<div class="col-lg-4 col-md-6 pb-1">
    <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
        <p class="text-right">' . $count . ' Products</p>
        <a href="' . $url . '" class="cat-img position-relative overflow-hidden mb-3">
            <img class="img-fluid" src="img/' . $img . '" alt="">
        </a>
        <h5 class="font-weight-semi-bold m-0">' . $name . '</h5>
    </div>
</div>';
}

// Trendy Products function
function trendy($mrp, $srp, $img, $name, $url,$id)
{
    echo '<div class="col-lg-3 col-md-6 col-sm-12 pb-1">
    <div class="card product-item border-0 mb-4">
        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
            <img class="img-fluid w-100" src="img/' . $img . '" alt="">
        </div>
        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
            <h6 class="text-truncate mb-3">' . $name . '</h6>
            <div class="d-flex justify-content-center">
                <h6>₹ ' . number_format($srp, 2) . '</h6>
                <h6 class="text-muted ml-2"><del>₹ ' . number_format($mrp, 2) . '</del></h6>
            </div>
        </div>
        <div class="card-footer d-flex justify-content-between bg-light border">
            <a href="' . $url . '?productid='.base64_encode($id).'" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View
                Detail</a>
        </div>
    </div>
</div>';
}
?>

</html>