<?php
session_start();
require 'inc/head.php';
if (!empty($_SESSION['name'])) {
    if (isset($_GET['add_to_cart'])) {
        switch ($_GET['add_to_cart']) {
            case 46:
                $_SESSION['pecan_nuts']++;
                header('location index.php');
                break;
            case 36:
                $_SESSION['chips']++;
                header('location index.php');
                break;
            case 58:
                $_SESSION['chocolate']++;
                header('location index.php');
                break;
            case 32:
                $_SESSION['mms']++;
                header('location index.php');
                break;
        }
    }
}
?>
<section class="cookies container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-46.jpg" alt="cookies choclate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3>Pecan nuts</h3>
                    <p>Cooked by Penny !</p>
                    <a href="index.php?add_to_cart=46" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                    </a>
                </figcaption>
            </figure>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-36.jpg" alt="cookies choclate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3>Chocolate chips</h3>
                    <p>Cooked by Bernadette !</p>
                    <a href="?add_to_cart=36" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                    </a>
                </figcaption>
            </figure>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-58.jpg" alt="cookies choclate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3>Chocolate cookie</h3>
                    <p>Cooked by Bernadette !</p>
                    <a href="?add_to_cart=58" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                    </a>
                </figcaption>
            </figure>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-32.jpg" alt="cookies choclate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3>M&M's&copy; cookies</h3>
                    <p>Cooked by Penny !</p>
                    <a href="?add_to_cart=32" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                    </a>
                </figcaption>
            </figure>
        </div>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
