<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Checkout</title>
    <link rel="stylesheet" href="resources/stylesheets/checkout.css" type="text/css" />
    <link rel="apple-touch-icon" sizes="180x180" href="resources/images/favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="resources/images/favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="resources/images/favicon/favicon-16x16.png" />
</head>
<body id="bodyMain">

    <div id="checkoutBox">
        <div id="siteLogoContainer">
            <img id="siteLogo" src="resources/images/logo.jpg" alt="Site logo" />
        </div>
        <div id="heading1">
            <h1>Checkout</h1>
        </div>
        <div id="infoBox">
            <div id="productImage">
                <img src="resources/images/auction-car.jpg" alt="Product Image" />
            </div>
            <div id="detailsList">
                <ul>
                    <li><mark>Product name:</mark> Nice car</li>
                    <li><mark>Production year:</mark> 1987</li>
                    <li><mark>Color:</mark> Yellow</li>
                    <li><mark>Condition:</mark> Good</li>
                    <li><mark>Other details:</mark> None</li>
                </ul>
            </div>


        </div>
        <div id="paypalBox">
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                <input type="hidden" name="cmd" value="_xclick">
                <input type="hidden" name="business" value="PTNU9JVNKUQ3S">
                <input type="hidden" name="lc" value="RO">
                <input type="hidden" name="item_name" value=<?=$data['itemName']?>> <!--Name of the product-->
                <input type="hidden" name="item_number" value=<?=$data['itemId']?>> <!--ID of the product-->
                <input type="hidden" name="amount" value=<?=$data['itemPrice']?>>
                <input type="hidden" name="currency_code" value="EUR">
                <input type="hidden" name="button_subtype" value="services">
                <input type="hidden" name="no_note" value="0">
                <input type="hidden" name="cn" value="Add special instructions to the seller:">
                <input type="hidden" name="no_shipping" value="1">
                <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHosted">
                <table>
                    <tr><td><input type="hidden" name="on0" value="Buyer Account ID"></td></tr>
                    <tr><td><input type="hidden" name="os0" maxlength="200" value=<?=$data['buyerId']?>></td></tr>
                    <tr><td><input type="hidden" name="on1" value="Shipping Address"></td></tr>
                    <tr><td><input type="hidden" name="os1" maxlength="200" value=<?=$data['shippingAddress']?>></td></tr>
                </table>
                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>


        </div>

    </div>
</body>
</html>