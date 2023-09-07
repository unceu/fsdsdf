<?php 
if ((strpos($message, "/users") === 0)||(strpos($message, "!users") === 0)||(strpos($message, ".users") === 0)){
  if($role == "OWNER")
  {

$users = count(file('./func/users.txt'));
reply_to($chatId,urlencode(
"
ぱ 𝑼𝒔𝒆𝒓𝒔  : $users

𝘽𝙊𝙏 𝘽𝙔 - $bowner
"
),$messageId);
 
  }
  else
  {
   reply_to($chatId,"ぱ 𝐎𝐧𝐥𝐲 𝐨𝐰𝐧𝐞𝐫 𝐜𝐨𝐦𝐦𝐚𝐧𝐝 ❌");
  }
} 
