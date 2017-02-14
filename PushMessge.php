<?php
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('<r6RJIufV4VqrvXoCUH9+URr4r0hlxp0YMIONbgN9EIbJs0afiXswzXb7wnFEHVyt6QiK4sYfuN5ICtoASmba25wkSLNwVaNV5PSePj2rDknU5mf0sOa/8vEqn/nt3MuqHaGjtmWLwnxsVd+kRxGVkAdB04t89/1O/w1cDnyilFU=>');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '<r6RJIufV4VqrvXoCUH9+URr4r0hlxp0YMIONbgN9EIbJs0afiXswzXb7wnFEHVyt6QiK4sYfuN5ICtoASmba25wkSLNwVaNV5PSePj2rDknU5mf0sOa/8vEqn/nt3MuqHaGjtmWLwnxsVd+kRxGVkAdB04t89/1O/w1cDnyilFU=>']);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello');
$response = $bot->pushMessage('<to>', $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
