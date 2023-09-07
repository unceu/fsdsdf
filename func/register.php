<?php
if ((strpos($message, "/register") === 0)||(strpos($message, "!register") === 0)||(strpos($message, ".register") === 0))
{
  $new = explode("\n", file_get_contents('func/users.txt'));
  foreach ($new as $ids )
    {
      $found = '0';
      if ($ids == $userId)
      {
        $found='1';
        break;
      }
    }
if ($found == '1')
{
  sendChatAction($chatId,"type");
reply_to($chatId,"な - 𝒀𝒐𝒖'𝒓𝒆 𝒂𝒍𝒓𝒆𝒂𝒅𝒚 𝒓𝒆𝒈𝒊𝒔𝒕𝒆𝒓",$message_id);
}
else
{
$file = fopen('func/users.txt','a');
fwrite($file,$userId."\n"); 
  sendChatAction($chatId,"type");
reply_to($chatId,"
な - 𝑼𝒔𝒆𝒓 𝒔𝒖𝒄𝒄𝒆𝒔𝒔𝒇𝒖𝒍 𝒓𝒆𝒈𝒊𝒔𝒕𝒆𝒓𝒆𝒅",$message_id);
}
exit;
}
?>
