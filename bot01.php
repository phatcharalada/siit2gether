<?php
 
$strAccessToken = "r6RJIufV4VqrvXoCUH9+URr4r0hlxp0YMIONbgN9EIbJs0afiXswzXb7wnFEHVyt6QiK4sYfuN5ICtoASmba25wkSLNwVaNV5PSePj2rDknU5mf0sOa/8vEqn/nt3MuqHaGjtmWLwnxsVd+kRxGVkAdB04t89/1O/w1cDnyilFU=";
 
$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);
 
$strUrl = "https://api.line.me/v2/bot/message/reply";
 
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";
 
if($arrJson['events'][0]['message']['text'] == "Y"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "Ok! Let's get start it! First, what type of you
CPE students who have a car please type C.
CPE students who don't have a car please type D.";}

else if($arrJson['events'][0]['message']['text'] == "C"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "Please type your car brand-model, car color and motor vehicle registration.
(E.g. Honda-Civic, Black, ตด8888)";}

else if($arrJson['events'][0]['message']['text'] == "D"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "Please type your Full name, Nickname and student ID (E.g. Ms.Phatcharalada Dapphetthikorn,Maingam,5622771707)";}

else if($arrJson['events'][0]['message']['text'] == "Honda-Civic, Black, ตด8888"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "Please select appointed time by type number following this number: 10 15 20 25 or 30 minutes.";}

else if($arrJson['events'][0]['message']['text'] == "Ms.Phatcharalada Dapphetthikorn,Maingam,5622771707"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "Please select appointed time by type number following this number: 10 15 20 25 or 30 minutes.";}

else if($arrJson['events'][0]['message']['text'] == "10"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "Please select appointed place between
  IT&MT building type T
  CIC building I for Bangkadi campus.
  And for Rangsit campus please selct between
  Main building type M
  Activity building type A";}

else if($arrJson['events'][0]['message']['text'] == "T"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "Please select destination between
  Rangsit campus type R
  Bangkadi campus type B.";}

else if($arrJson['events'][0]['message']['text'] == "R"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "This is all of your information that we will send to CPE student who don't have a car 
  Honda-Civic, Black, ตด8888
  with appointment time 10 m
  for appointment place is IT&MT building
  and the destination is Rangsit campus
  If you want to cancel please type Q 
  but if you want to continue please type W.";}

else if($arrJson['events'][0]['message']['text'] == "W"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "We have Ms.Phatcharalada Dapphetthikorn,Maingam,562771707.
  Thank you very much for using our services.";}


//else{
//  $arrPostData = array();
//  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
//  $arrPostData['messages'][0]['type'] = "text";
//  $arrPostData['messages'][0]['text'] = "I don't understand";}
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$strUrl);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrPostData));
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close ($ch);
 
?>
