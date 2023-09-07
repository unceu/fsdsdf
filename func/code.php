<?php
if ((strpos($message, "/code") === 0)||(strpos($message, "!code") === 0)||(strpos($message, ".code") === 0))
{
  if($role != "OWNER")
  {
    sendMessage($chatId,"You are Not ADMIN ! ",$messageId);
  } 
  else
  {
$i = substr($message,6);
if($i == ' ' || $i == '') {
   $i = '1';
}
else
{
  $i = clean($message);
}
  
$credt = array();
while($i > 0)    
{
  $rnds = random_strings(4).'-'.random_strings(4).'-'.random_strings(4).'-'.random_strings(4);
$credt[] = "$rnds";
  $i = $i - 1;
}
sendChatAction($chatId,"type");
$sss = reply_to($chatId,urlencode(
  "

𝒈𝒆𝒏𝒆𝒓𝒂𝒕𝒊𝒏𝒈 𝒄𝒐𝒅𝒆𝒔....

𝒃𝒐𝒕 𝒃𝒚 - $bowner 
  "),$messageId);
$respon = json_decode($sss, TRUE);
$message_id_1 = $respon['result']['message_id'];
foreach ($credt as $codes)
  {
    $cdbln = substr($message, 8);
    if(empty($cdbln))
    {
      $cdbln = "1000";
    }
    $credtf = fopen('func/codes.txt','a');
    fwrite($credtf,$codes." ".$cdbln."\n");
    $codes = "<code>$codes</code>";
    $codess = "$codess\n$codes";
     edit_Message($chatId,urlencode("
な 𝒈𝒆𝒏𝒆𝒓𝒂𝒕𝒆𝒅 𝒄𝒐𝒅𝒆𝒔

$codess

𝒃𝒐𝒕 𝒃𝒚  - $bowner

"),$message_id_1);
  }
   
  }
}

?>