<?php
session_start();
require 'inc/head.php';
if (!empty($_SESSION['name'])) {
    ?>

    <section class="cookies container-fluid">
        <div class="row">
            <h2><?= ucfirst($_SESSION['name']) ?>, here's your shopping cart</h2>
            <?php if ($_SESSION['pecan_nuts'] > 0) { ?>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <figure class="thumbnail text-center">
                        <img src="assets/img/product-46.jpg" alt="cookies choclate chips" class="img-responsive">
                        <figcaption class="caption">
                            <h3>Pecan nuts</h3>
                            <p>Cooked by Penny !</p>
                            <p>In your cart: <?= $_SESSION['pecan_nuts'] ?></p>
                        </figcaption>
                    </figure>
                </div>
            <?php }
            if ($_SESSION['chocolate'] > 0) {
                ?>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <figure class="thumbnail text-center">
                        <img src="assets/img/product-36.jpg" alt="cookies choclate chips" class="img-responsive">
                        <figcaption class="caption">
                            <h3>Chocolate chips</h3>
                            <p>Cooked by Bernadette !</p>
                            <p>In your cart: <?= $_SESSION['chips'] ?></p>
                        </figcaption>
                    </figure>
                </div>
            <?php }
            if ($_SESSION['chips'] > 0) {
                ?>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <figure class="thumbnail text-center">
                        <img src="assets/img/product-58.jpg" alt="cookies choclate chips" class="img-responsive">
                        <figcaption class="caption">
                            <h3>Chocolate cookie</h3>
                            <p>Cooked by Bernadette !</p>
                            <p>In your cart: <?= $_SESSION['chocolate'] ?></p>
                        </figcaption>
                    </figure>
                </div>
            <?php }
            if ($_SESSION['mms'] > 0) {
                ?>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <figure class="thumbnail text-center">
                        <img src="assets/img/product-32.jpg" alt="cookies choclate chips" class="img-responsive">
                        <figcaption class="caption">
                            <h3>M&M's&copy; cookies</h3>
                            <p>Cooked by Penny !</p>
                            <p>In your cart: <?= $_SESSION['mms'] ?></p>
                        </figcaption>
                    </figure>
                </div>
            <?php } ?>
        </div>
    </section>

    <?php require 'inc/foot.php';
} else {
    header('location: index.php');
} ?>
