<?php
/**

 * Time: 1:36
 */

$output = json_decode(file_get_contents('php://input'),true);
//$lastms = $output['message']['text'];
$id = $output['message']['chat']['id'];
$token = '789933109:AAGwpNJWVTPmH33XJyDPI1qYLFbhziRdo6o';
function sendMessage($token, $id)
{
    file_get_contents("https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $id . "&text=hi. it is all i can(");
}
sendMessage($token, $id);
//file_put_contents("logs.txt",$lastms);
// 2 file_put_contents("logs.txt",$output);
file_put_contents("logs.txt", var_export($output, true));