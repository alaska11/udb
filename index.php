<?php
/**

 * Time: 1:36
 */

$output = json_decode(file_get_contents('php://input'),true);
//$lastms = $output['message']['text'];
$id = $output['message']['chat']['id'];
$token = '789933109:AAGwpNJWVTPmH33XJyDPI1qYLFbhziRdo6o';
$mes1 = 'hi, just can say hi';
function sendMessage($token, $id, $mes1)
{
    file_get_contents("https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $id . "&text=" . $mes1);
}
sendMessage($token, $id, $mes1);
//file_put_contents("logs.txt",$lastms);
// 2 file_put_contents("logs.txt",$output);
$h = fopen('logs.txt', 'r+'); //выводит массив
fwrite($h, var_export($output, true)); //выводит массив