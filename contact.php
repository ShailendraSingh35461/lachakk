<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Contact</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/lachakk-logo.jpg" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

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
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Contact</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="./#">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Contact</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Content Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Contact For Any Queries</span></h2>
        </div>
        <div class="row justify-content-md-center px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form">
                    <!-- To Display SUCCESS & FAILED ERROR -->
                    <?php
                    // if(!empty($_GET['form'])){
                    //     if($_GET['form']=='pass'){
                    //         echo "New Record Added Successfully";
                    //     }else{
                    //         echo "Something Went Wrong";
                    //     }
                    // }
                    // if (!empty($_GET['form'])) echo $_GET['form'] == 'pass' ? "New Record Added Successfully" : "Something Went Wrong";
                    if (!empty($_GET['form'])) echo $_GET['form'] == 'pass' ? "New Record Added Successfully" :  $_GET['form'];
                    ?>
                    <!-- <div id="success"></div> -->
                    <form method="post" name="sentMessage" action="https://www.lachakk.com/form.php" id="contactForm">
                        <div class="control-group">
                            <input type="text" class="form-control" id="name" placeholder="Your Name" name="name" required />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="number" class="form-control" id="number" placeholder="Your Mobile No" name="number" required />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" id="email" placeholder="Your Email" name="email" required />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" id="subject" placeholder="Your subject" name="subject" required />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" rows="6" id="message" placeholder="Message" name="message" required></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit">Send
                                Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


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
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>