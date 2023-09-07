<?php
if ((strpos($message, "/adm") === 0)||(strpos($message, "!adm") === 0)||(strpos($message, ".adm") === 0))
{
  if($role != "OWNER")
  {
    sendMessage($chatId,"You are Not ADMIN ! ",$messageId);
  } 
  else
  {
  sendMessage($chatId,urlencode(
    " 
な 𝒂𝒅𝒎𝒊𝒏 𝒄𝒐𝒎𝒎𝒂𝒏𝒅𝒔

な  /add - 𝒂𝒅𝒅 𝒑𝒓𝒆𝒎𝒊𝒖𝒎 𝒖𝒔𝒆𝒓
な  /acht - 𝒂𝒅𝒅 𝒑𝒓𝒆𝒎𝒊𝒖𝒎 𝒄𝒉𝒂𝒕
な  /code - 𝒈𝒆𝒏𝒓𝒂𝒕𝒆 𝒓𝒆𝒅𝒆𝒆𝒎 𝒄𝒐𝒅𝒆

𝒃𝒐𝒕 𝒃𝒚  - $bowner
    "),$messageId);
  }
}

?>