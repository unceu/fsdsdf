<?php
if ((strpos($message, "/cmds") === 0)||(strpos($message, "!cmds") === 0)||(strpos($message, ".cmds") === 0))
{
  sendChatAction($chatId,"type");
  $cmd = urlencode("
な 𝒀𝒖𝒏𝒐𝒄𝒉𝒌 𝒈𝒂𝒕𝒆𝒔

な /chk - 𝑺𝒕𝒓𝒊𝒑𝒆 𝑪𝒉𝒂𝒓𝒈𝒆 $𝟏
な /mass - 𝑴𝑨𝑺𝑺 𝑺𝒕𝒓𝒊𝒑𝒆 𝑪𝒉𝒂𝒓𝒈𝒆 $𝟏
な /sk - 𝑪𝒉𝒆𝒄𝒌 𝒀𝒐𝒖𝒓 𝑺𝑲
な /msk - 𝑴𝒂𝒔𝒔 𝑪𝒉𝒆𝒄𝒌 𝒀𝒐𝒖𝒓 𝑺𝑲
な /ccn - 𝒄𝒄𝒏 𝒄𝒉𝒆𝒄𝒌 
な /bin - 𝒄𝒉𝒆𝒄𝒌 𝒃𝒊𝒏
な /mtt - 𝒎𝒂𝒔𝒔 𝒄𝒉𝒌 𝟏$
な /mss - 𝒎𝒂𝒔𝒔 𝒄𝒉𝒌 𝟎.𝟓𝟎
な /mccn - 𝒎𝒂𝒔𝒔 𝒄𝒄𝒏

な 𝗨𝗦𝗘𝗥 𝗖𝗢𝗠𝗠𝗔𝗡𝗗𝗦

な /redeem - REDEEM CREDITS

な /credits - CHECK CREDITS

な 𝗔𝗗𝗠𝗜𝗡 𝗖𝗢𝗠𝗠𝗔𝗡𝗗𝗦

な  /adm

な 𝗕𝗢𝗧 𝗕𝗬 - $bowner 
");
  reply_to($chatId,$cmd,$messageId);
}

?>