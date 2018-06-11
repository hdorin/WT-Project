<?php

    include 'header.php';
?>

    <link rel="stylesheet" href="resources/stylesheets/myitems.css" type="text/css" />

    <div class="products_wrapper">
        <button onclick="showProducts(this.value)" value="my_items">My Items</button>
        <button onclick="showProducts(this.value)" value="my_uploaded_items">My Uploaded Items</button>
    </div>

    <div id="txtHint">

    </div>


<?php

    include 'footer.php';

?>