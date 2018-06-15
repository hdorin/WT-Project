<?php

include 'header.php';
?>
    <link rel="stylesheet" href="resources/stylesheets/product.css" type="text/css"/>

    <main>
        <div class="wrapper">
            <section class="index-links">
                <div class="s-wrap s-type-2" role="slider">
                    <ul class="s-content">
                        <li class="s-item s-item-1"></li>
                        <li class="s-item s-item-2"></li>
                        <li class="s-item s-item-3"></li>
                        <li class="s-item s-item-4"></li>
                        <li class="s-item s-item-5"></li>
                    </ul>
                </div>
            </section>
        </div>
    </main>


    <div class="whole">

        <div class="right">
            <h1>
                <?= $data['result']['title'] ?>
            </h1>
            <p><strong> Description</strong>: </p>
            <p>
                <?= $data['result']['description'] ?>
            </p>

            <p><strong>Brand</strong>:
                <?= $data['result']['brand'] ?>
            </p>
            <p><strong>Country of provenance</strong>:
                <?= $data['result']['country'] ?>
            </p>
            <p><strong>Keywords</strong>:
                <?= $data['result']['keywords'] ?>
            </p>
            <p><strong>Expiration Date</strong>:
                <?= $data['result']['expires_on'] ?>
            </p>
                        <p><strong>OWNER`S ID</strong>: [3]</p>
            <div class="prices">
                <p>Current Price -
                    <?= $data['result']['curr_price'] ?>
                    $</p>
                <p>Next Price -
                    <?= $data['result']['next_price'] ?>
                    $</p>
            </div>
            <button class="button" style="vertical-align:middle"><span>Bid </span></button>
        </div>
    </div>


<?php
include 'footer.php';
?>