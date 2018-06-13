<?php

$q = isset($_GET['q'])? $_GET['q'] : 'my_uploaded_items';
$result = $data['result'];

if($q === 'my_items') {
    echo 'inside my won items <br>';

    foreach ($result as $item){
        echo '<div class="upl_items">
        <img class="prod_img" src="resources/images/'.$item['image'].'" alt="product" />
        <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Keywords</th>
                        <th>Condition</th>
                        <th>Brand</th>
                        <th>Country</th>
                        <th>Current Price</th>
                        <th>Next Price</th>
                        <th>Expires on</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>' . $item['title'] . '</td>
                        <td>' . $item['description'] . '</td>
                        <td>' . $item['keywords'] . '</td>
                        <td>' . $item['condition'] . '</td>
                        <td>' . $item['brand'] . '</td>
                        <td>' . $item['country'] . '</td>
                        <td>' . $item['curr_price'] . '</td>
                        <td>' . $item['next_price'] . '</td>
                        <td>' . $item['expires_on'] . '</td>
                    </tr>
                </tbody>
        </table>
    </div>';

    }

}

if($q === 'my_uploaded_items') {
    
    foreach ($result as $item){
        echo '<div class="upl_items">
        <img class="prod_img" src="resources/images/'.$item['image'].'" alt="product" />
        <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Keywords</th>
                        <th>Condition</th>
                        <th>Brand</th>
                        <th>Country</th>
                        <th>Current Price</th>
                        <th>Next Price</th>
                        <th>Expires on</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>' . $item['title'] . '</td>
                        <td>' . $item['description'] . '</td>
                        <td>' . $item['keywords'] . '</td>
                        <td>' . $item['condition'] . '</td>
                        <td>' . $item['brand'] . '</td>
                        <td>' . $item['country'] . '</td>
                        <td>' . $item['curr_price'] . '</td>
                        <td>' . $item['next_price'] . '</td>
                        <td>' . $item['expires_on'] . '</td>
                    </tr>
                </tbody>
        </table>
    </div>';

    }

    include 'user_item_form_upload.php';

}