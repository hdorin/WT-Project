
<?php
    
    include 'header.php';
?>

<link rel="stylesheet" href="resources/stylesheets/products.css" type="text/css"/>

<p id="responseMsg"><?=$data['resp']?></p>

            <?php 
            $products = $data['products'];


            foreach ($products as $product) {
                echo '<div class="product">';
                    echo '<a href="product_page">';
                        echo '<h2>'. $product['title'] .  ' [' . $product['condition'] . ']</h2>';
                        echo '<img src="resources/images/' . $product['image'] . '" alt="alternative" />';
                    echo '</a>';

                    echo '<div class="rightSide">';
                        echo '<div id="desc" class="desc" onclick="coll()">';
                            echo '<p><strong>DESCRIPTION</strong>:</p>';
                            echo $product['description'];
                        echo '</div>';


                        echo '<div class="inner">';
                            echo '<p><strong>Brand</strong>: ' . $product['brand'] . '</p>';
                            echo '<p><strong>Country of provenance</strong>: ' . $product['country'] . '</p>';
                            echo '<p><strong>Keywords</strong>: ' . $product['keywords'] . '</p>';
                            echo '<p><strong>Expiration Date</strong>: ' . $product['expires_on'] . '</p>';
                        echo '</div>';


                        echo '<div class="prices">';
                            echo '<p>Current Price - ' . $product['curr_price']. '$</p>';
                            echo '<p>Next Price - ' . $product['next_price'] . '$</p>';
		                echo '</div>';

		                echo '
                        <form action="products/bidBtn" method="POST" id="form'.$product['id'].'">
                              <input type="hidden" name="id_post" value="' . $product['id'] . '"/>
                        </form>

                        <button class="button" form="form'.$product['id'].'" style="vertical-align:middle"><span>Bid </span></button>';
		            echo '</div>';
		        echo '<br style="clear:both;"/>';
                echo '</div>';
            }

            ?>


<!--
<div class="product" >
    <a href="#">
        <h2>Speakers [Good]</h2>
        <img src="resources/images/speakers.jpg" alt="alternative" />
    </a>

    <div class="rightSide">
        <div id="desc" class="desc" onclick="coll()">
            <p><strong>DESCRIPTION</strong>:</p>
            This is some long text that will not fit in the box. This is some long text that will not fit in the box.
            This is some long text that will not fit in the box. This is some long text that will not fit in the box.
            This is some long text that will not fit in the box. This is some long text that will not fit in the box.
            This is some long text that will not fit in the box. This is some long text that will not fit in the box.
            This is some long text that will not fit in the box. This is some long text that will not fit in the box.
        </div>
        <div class="inner">
            <p><strong>Brand</strong>: Shure</p>
            <p><strong>Country of provenance</strong>: United States</p>
            <p><strong>Keywords</strong>: audio device</p>
            <p><strong>Expiration Date</strong>: 2018-06-17</p>
        </div>
        <div class="prices">
            <p>Current Price - 200$</p>
            <p>Next Price - 220$</p>
         </div>
        <button class="button" style="vertical-align:middle"><span>Bid </span></button>
    </div>
    <br style="clear:both;"/>
</div>
-->

<?php

    include 'footer.php';

?>