<?php
/**
smthh
 */

$output = json_decode(file_get_contents('php://input'),true);
$lastms = $output['message']['text'];
$id = $output['message']['chat']['id'];
file_get_contents("https://api.telegram.org/bot789933109:AAGwpNJWVTPmH33XJyDPI1qYLFbhziRdo6o/sendMessage?chat_id=".$id."&text=hi. it is all i can(");
file_put_contents("logs.txt",$lastms);
