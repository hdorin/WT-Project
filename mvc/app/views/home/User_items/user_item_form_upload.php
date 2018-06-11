<!DOCTYPE html>
<html>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="myitems.css" type="text/css"/>
    <link href="upload.js" rel="script">

</head>
<body>

<br>
<!--<div id="txtHint">-->
<!--    <p>Items info will be listed here.</p>-->
<!--</div>-->

<form id="product_insert" action="upload_product/process" method="post" >

    <h1>Upload</h1>
    <h2>Title</h2>
    <input id="titleField" name="titleField" type="text" required/>
    <h2>Description</h2>
    <input id="descriptionField" name="descriptionField" type="text" required/>
    <h2>Keywords</h2>
    <input id="keywordsField" name="keywordsField" type="text" required/>
    <h2>Condition</h2>
    <input id="conditionField" name="conditionField" type="text" required/>
    <h2>Brand</h2>
    <input id="brandField" name="brandField" type="text" required/>
    <h2>Country</h2>
    <input id="countryField" name="countryField" type="text" required/>
    <h2>Current_price</h2>
    <input id="curr_priceField" name="curr_priceField" type="text" required/>
    <h2>Next_price</h2>
    <input id="next_priceField" name="next_priceField" type="text" required/>
    <h2>Expires_on</h2>
    <input type="text" id="expires_onField" name="expires_onField" required/>



    <input id="insert_button" type="submit" value="Upload" />
</form>

</body>
</html>
