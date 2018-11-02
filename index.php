<?php
/**
 * Created by PhpStorm.
 * User: al
 * Date: 03.11.2018
 * Time: 1:36
 */

$output = json_decode(file_get_contents('php://input'),true);
$id = $output['message']['text'];
file_put_contents("logs.txt",$id);
