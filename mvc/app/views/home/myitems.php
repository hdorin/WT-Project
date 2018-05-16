<?php
    
    include 'header.php';
?>

    <link rel="stylesheet" href="resources/stylesheets/myitems.css" type="text/css" />

        <div class="cart">
            <h2 class="title"><span class="text"><strong>Your Items</strong> </span></h2>
            <br />
            <table class="table">
                <thead>
                    <tr>
                        <th>Checkout</th>
                        <th>Image</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Unit Price</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox" value="option1"></td>
                        <td><img alt="" src="resources/images/speakers.jpg"></td>
                        <td>Speakers [LIKE NEW]</td>
                        <td>1</td>
                        <td>$300</td>
                        <td>$300</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" value="option1"></td>
                        <td><img alt="" src="resources/images/bag.jpg"></td>
                        <td>Louis Vuitton Bag</td>
                        <td>2</td>
                        <td>$1,150</td>
                        <td>$2,450</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" value="option1"></td>
                        <td><img alt="" src="resources/images/speakers2.jpg"></td>
                        <td>Ultra-cool cans!!!</td>
                        <td>1</td>
                        <td>$120</td>
                        <td>$120</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><strong>$2,870</strong></td>
                    </tr>
                </tbody>
            </table>
            <button type="submit" id="removeBtn" onclick="window.location.href='checkout.php'">CHECKOUT</button>
        </div>



<?php

    include 'footer.php';

?>