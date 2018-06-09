<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 5/25/2018
 * Time: 10:17 PM
 */

$q = $_GET['q'];
$result = $data['result'];

if($q === 'my_items') {
    echo 'inside my won items <br>';


    while ($row = mysqli_fetch_array($result)) {
        echo '<div>';
        echo '<p>' . $row['title'] . '</p>';
        echo '<p>' . $row['description'] . '</p>';
        echo '<p>' . $row['is_active'] . '</p>';
        echo '</div>';
    }

}

if($q === 'my_uploaded_items') {
    echo 'inside my uploaded items <br>';
    require_once 'user_item_form_upload.php';
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo '<button onclick="deleteProduct(this.value)" value=' . $row['product_id'] . '>Delete</button>';
        echo '<button onclick="editProduct(this.value)" value=' . $row['product_id'] .'>Edit</button>';

        echo "<td>" . $row['title'] . "</td>";
        echo "<td>" . $row['description'] . "</td>";
        echo "<td>" . $row['is_active'] . "</td>";
        echo "</tr> <br>";
    }
    echo '
        <div id="pentru_insert">
        <p>pentru inserts</p>
    </div>';


}