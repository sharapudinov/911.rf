<?php
/**
 * Created by PhpStorm.
 * User: shara
 * Date: 19.02.2016
 * Time: 13:44
 */

function test_dump($arg){
    global $USER;
    if ($USER->IsAuthorized()){
        echo '<pre>';
        var_dump($arg);
        echo '</pre>';
    }
}