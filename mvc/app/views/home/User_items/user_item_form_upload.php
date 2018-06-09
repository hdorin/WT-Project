<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="myitems.css" type="text/css"/>

</head>
<body>

<br>
<!--<div id="txtHint">-->
<!--    <p>Items info will be listed here.</p>-->
<!--</div>-->

<div class="upload_product">
    <label for="title">
        <b>Title</b>
    </label>
    <input id="title" type="text" placeholder="Enter title ... " name="title" required>

    <label for="description">
        <b>Description</b>
    </label>
    <input id="description" type="text" placeholder="Enter description ... " name="description" required>

    <br>


    <b>State of product</b>
    <label for="is_active">
        <select id="is_active" name="is_active">
            <option value="0">Inactive</option>
            <option value="1">Active</option>
        </select>
    </label>

    <br>

    <form name="frmImage" enctype="multipart/form-data" action="" method="post" class="frmImageUpload">
        <label>Upload Image File:</label>
        <input name="userImage" type="file" class="inputFile">
    </form>

    <br>

    <div class="clearfix">
        <button type="button" class="cancelbtn">Cancel
        </button>
        <button onclick="uploadProduct(title, description, is_active);" class="signupbtn">UpLoad</button>
    </div>
</div>


</body>
</html>
