<?php
$token = '1352468214:AAFY5bBmtjJhTHOcsa4KgWXbBBpbPhcmGtE';

function UzKoDeR($method,$datas=[]){
global $token;
    $url = "https://api.telegram.org/bot".$token."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}


$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$mid = $message->message_id;
$cid = $message->chat->id;
$tx = $message->text;
$uid= $message->from->id;
$rname= $message->from->first_name;
$rmid= $message->reply_to_message->message_id;
$mention = $message->entities[0]->type;
$ty = $message->chat->type;
$title = $message->chat->title;
$repid = $message->reply_to_message->from->id;
$gruppa = file_get_contents("gruppa.db");
$lichka = file_get_contents("lichka.db");
$new = $message->new_chat_member;
$left = $message->left_chat_member;
$for = $message->forward_from;
$forx = $message->forward_from_chat;
$fadmin = $message->from->id;
$title = $message->chat->title;
$uid = $message->from->id;

  if ($tx=="/start") {
  UzKoDeR('sendmessage',[
  'chat_id'=>$cid,
  'text'=>"salom *$rname* men github'da joylashganman !",
'parse_mode'=>"markdown",
]);
}



