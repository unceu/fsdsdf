<?php

$rl = explode("\n", file_get_contents('func/premium.txt'));
foreach ($rl as $rls )
    {
      //sendMessage('5813512210',$rls,$messageId);
      $rls2 = substr($rls,0,10);
      if ($rls2 == $userId)
      {
      $usr = substr($rls,11);
        //sendMessage('5813512210',$usr,$messageId);
       if ($usr <= 0)
       {
         $dir = "func/premium.txt";
        $contents = file_get_contents($dir);
$contents = str_replace($rls, '', $contents);
file_put_contents($dir, $contents);
$file = fopen('func/users.txt','a');
fwrite($file,"\n".$userId);
        reply_to($chatId,urlencode(" 
𝑪𝒓𝒆𝒅𝒊𝒕𝒔: 𝟬 
𝑼𝒔𝒆𝒓 𝑺𝒕𝒂𝒕𝒖𝒔 : 𝗙𝗥𝗘𝗘 
"),$messageId);
         
       }
      }
    }
    

?>