<?php
/**
 * Created by PhpStorm.
 * User: al
 * Date: 03.11.2018
 * Time: 1:36
 */

$output = file_get_contents('php://input');
file_put_contents("logs.txt",$output);
