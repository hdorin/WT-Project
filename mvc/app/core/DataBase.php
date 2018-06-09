<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 6/1/2018
 * Time: 12:59 AM
 */

class DataBase extends PDO
{
    public function __construct()
    {
        parent::__construct('mysql:host=localhost;dbname=auctiox_db', 'bot', '12345');
    }
}