 <?php
if ((strpos($message, "/credits") === 0)||(strpos($message, "!credits") === 0)||(strpos($message, ".credits") === 0))
{
 if($role == 'PREMIUM' || $role == 'OWNER' || $chtrole == 'PREMIUM')
 {
  $cred = explode("\n", file_get_contents('func/premium.txt'));
   $cred1[] = array();
foreach ($cred as $creds )
    {
      $cred1[0] = substr($creds,0,11);
      $cred1[1] = substr($creds,0,10);
      if (($cred1[0] == $userId) || ($cred1[1] == $userId))
      {
        $usercrd = substr($creds,11);
        if(empty($usrcrd))
          $usercrd = substr($creds,10);
        sendChatAction($chatId,"type");
       reply_to($chatId,urlencode(" 
な 𝒚𝒐𝒖𝒓 𝒄𝒓𝒆𝒅𝒊𝒕𝒔 : $usercrd
"),$messageId);
exit;
        break;
      }
    }
 }
else
{
  sendChatAction($chatId,"type");
reply_to($chatId,urlencode("
な 𝒖𝒔𝒆𝒓 𝒔𝒕𝒂𝒕𝒖𝒔: 𝗙𝗥𝗘𝗘 
な 𝗔𝗦𝗞 𝗢𝗪𝗡𝗘𝗥 𝗧𝗢 𝗕𝗨𝗬 
"),$messageId);
exit();
}
}
?>