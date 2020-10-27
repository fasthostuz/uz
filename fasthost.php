<?php
$token = '1352468214:AAFY5bBmtjJhTHOcsa4KgWXbBBpbPhcmGtE';
echo "<a href='https://api.telegram.org/bot$token/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']."'>👉 BOSING 👈</a>";
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
$cid = $message->chat->id;
$tx = $message->text;
$rname= $message->from->first_name;
mkdir("ahmadjon");

  if ($tx=="/start") {
  UzKoDeR('sendmessage',[
  'chat_id'=>$cid,
  'text'=>"salom *$rname* men github'da joylashganman !",
'parse_mode'=>"markdown",
]);
}



