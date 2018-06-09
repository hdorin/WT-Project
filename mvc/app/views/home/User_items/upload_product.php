<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 5/27/2018
 * Time: 2:24 PM
 */

$q = $_GET['q'];
$z = $_GET['z'];
$x = $_GET['x'];


echo $q . ' ' . $z . ' ' . $x;


require_once '../../../core/DataBase.php';

$link = new DataBase();

$sql = $link->prepare('INSERT INTO products (product_id, title, description, is_active) VALUES (:product_id, :title, :description, :is_active)');
$sql->execute(array(
    ':product_id' => 10,
    ':title' => $q,
    ':description' => $z,
    ':is_active' => $x
));
