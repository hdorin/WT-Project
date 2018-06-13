<?php

    include 'header.php';
?>

    <link rel="stylesheet" href="resources/stylesheets/myitems.css" type="text/css" />

    <div class="products_wrapper">
        <button class="tab" onclick="showProducts(this.value)" value="my_items">My Items</button>
        <button class="tab" onclick="showProducts(this.value)" value="my_uploaded_items">My Uploaded Items</button>
    </div>

    <p id="responseMsg"><?=$data['resp']?></p>
    
    <div id="txtHint">

    </div>


<?php

    include 'footer.php';

?>