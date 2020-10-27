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

function sendmessage($chat_id, $tx, $model){
  UzKoDeR('sendMessage',[
  'chat_id'=>$chat_id,
  'text'=>$tx,
  'parse_mode'=>$mode
  ]);
  }
  function sendaction($chat_id, $action){
  UzKoDeR('sendchataction',[
  'chat_id'=>$chat_id,
  'action'=>$action,
    'parse_mode'=>$mode
  ]);
  }
  function Forward($KojaShe, $AzKoja, $KodomMSG)
{
    UzKoDeR('ForwardMessage', [
        'chat_id' => $KojaShe,
        'from_chat_id' => $AzKoja,
        'message_id' => $KodomMSG
    ]);
}
mkdir('step');
mkdir('asosiy');
$cid1 = $message->chat->id;
$step = file_get_contents("step/$cid1.step");
 function step($id,$value){ 
file_put_contents("step/$cid1.step",$value);
}
function put($fayl,$nima){
file_put_contents("$fayl","$nima");
}
function get($fayl){
$get = file_get_contents("$fayl");  
return $get5;
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
$ismbot="teest";
$usbot="itozalovchi_bot";
$data = $update->callback_query->data;
$qid = $update->callback_query->id;
$cid2 = $update->callback_query->message->chat->id;
$from2 = $update->callback_query->from->id;
$mid2 = $update->callback_query->message->message_id;

$ctext = $update->callback_query->message->text; 
$callfrid = $update->callback_query->from->id; 
$callfrusername = $update->callback_query->from->username; 
$callfname = $update->callback_query->from->first_name;  
$calltitle = $update->callback_query->message->chat->title; 
$calluser = $update->callback_query->message->chat->username; 

if($ty=="private"){
  if ($tx=="/start") {
  UzKoDeR('sendmessage',[
  'chat_id'=>$cid,
  'text'=>"salom *$rname* men github'da joylashganman !",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([ 
        'inline_keyboard'=>[ 
       [['text'=>"Admin", 'url'=>"t.me/uzkoder"]] 
       ] 
       ]) 
]);
}
}


