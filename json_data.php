<?php
/**
 * Created by PhpStorm.
 * User: emanuel
 * Date: 04.03.2015
 * Time: 22:29
 */


require_once 'config/db.php';
require_once 'db_data.php';

header('Content-Type: application/json');


$result = false;
if(isset($_GET['descriere']) && isset($_GET['url'])){
    $nume = $_GET['descriere'];
    $url = $_GET['url'];

    foreach($array_db as $values){
        if($values['nume'] == $nume && $values['url'] == $url){
            $result = true;
        }
    }

}
echo json_encode(array('result' => $result));

?>