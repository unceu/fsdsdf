<?php
if ((strpos($message, "/start") === 0)||(strpos($message, "!start") === 0)||(strpos($message, ".start") === 0))
{
  $rolep = 1;
  sendChatAction($chatId,"type");
  $message = urlencode("
ぱ - 𝐔𝐬𝐞𝐫𝐧𝐚𝐦𝐞 » <a href='https://t.me/$username'>$firstname</a> 
ぱ - 𝐔𝐬𝐞𝐫𝐧𝐚𝐦𝐞 𝐢𝐝 » <code>$userId</code>
ぱ - 𝐔𝐬𝐞𝐫 𝐬𝐭𝐚𝐭𝐮𝐬 » $role

ぱ - 𝗨𝗦𝗘 /cmds 𝗙𝗢𝗥 𝗖𝗢𝗠𝗠𝗔𝗡𝗗𝗦

𝗕𝗢𝗧 𝗕𝗬 - $bowner
");
  reply_to($chatId,$message,$messageId);
}

?>