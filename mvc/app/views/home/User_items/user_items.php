<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 5/25/2018
 * Time: 10:17 PM
 */

$q = isset($_GET['q'])? $_GET['q'] : 'my_uploaded_items';
$result = $data['result'];

if($q === 'my_items') {
    echo 'inside my won items <br>';

    foreach ($result as $item){
        echo '<div>';
        echo '<p>' . $item['id'] . '</p>';
        echo '<p>' . $item['title'] . '</p>';
        echo '<p>' . $item['description'] . '</p>';
        echo '<p>' . $item['keywords'] . '</p>';
        echo '<p>' . $item['condition'] . '</p>';
        echo '<p>' . $item['brand'] . '</p>';
        echo '<p>' . $item['country'] . '</p>';
        echo '<p>' . $item['curr_price'] . '</p>';
        echo '<p>' . $item['next_price'] . '</p>';
        echo '<p>' . $item['expires_on'] . '</p>';

        echo '</div>';
    }

}

if($q === 'my_uploaded_items') {
    require_once 'user_item_form_upload.php';

    foreach ($result as $item){
        echo '<div>';
        echo '<p>' . $item['id'] . '</p>';
        echo '<p>' . $item['title'] . '</p>';
        echo '<p>' . $item['description'] . '</p>';
        echo '<p>' . $item['keywords'] . '</p>';
        echo '<p>' . $item['condition'] . '</p>';
        echo '<p>' . $item['brand'] . '</p>';
        echo '<p>' . $item['country'] . '</p>';
        echo '<p>' . $item['curr_price'] . '</p>';
        echo '<p>' . $item['next_price'] . '</p>';
        echo '<p>' . $item['expires_on'] . '</p>';


        echo '</div>';
    }

}