<?php
/**
 * Created by PhpStorm.
 * User: al
 * Date: 03.11.2018
 * Time: 1:36
 */

$output = json_decode(file_get_contents('php://input'),true);
$id = $output['message']['chat']['id'];
file_put_contents("logs.txt",$output);
