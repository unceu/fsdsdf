<?php

////////////////=============[ CHK BOT]=============////////////////

include('funct/functions.php');
error_reporting(0);

#=========================[ User ID ]=========================#

ignore_user_abort(true);
set_time_limit(0);

$update = base64_decode($argv[1]);
$update = json_decode($update, TRUE);
$print = print_r($update);
$chatId = $update["message"]["chat"]["id"];
$gId = $update["message"]["from"]["id"];
$userId = $update["message"]["from"]["id"];
$firstname = $update["message"]["from"]["first_name"];
$lastname = $update["message"]["from"]["last_name"];
$username = $update["message"]["from"]["username"];
$message = $update["message"]["text"];
$messageId = $update["message"]["message_id"];
//$pm = $message['reply_to_message']['text'];
$bowner = "<a href='t.me/balenottere'>undefy</a>";
//$header = "ʙʏᴛᴇ ᴄᴏᴅᴇʀ";
$mail = 'undefy'.random_strings(6).'';
$pass = random_strings(8);
$user = "<a href='tg://user?id=$userId'>$username</a>";
/*
$files = ['func/users.txt','func/premium.txt','func/codes.txt','func/ips.txt'];
foreach ($files as $filename)
  {
$fileLines = file($filename);
$fileLines = array_filter($fileLines, function($line) {
    return trim($line) !== '';
});
file_put_contents($filename, implode('', $fileLines));
  }
*/
foreach (glob("func/rolechk.php") as $filename)
{
    include $filename;
}

foreach (glob("func/register.php") as $filename)
{
    include $filename;
}

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
$new = explode("\n", file_get_contents('func/premium.txt'));
foreach ($new as $ids )
    {
      $found2 = '0';
      $ids = substr($ids,0,11);

     
      if ($ids == $userId)
      {
        $found2 ='1';
        break;
      }
    }
if (($found == '0') && ($found2 == '0' ))
{
sendMessage($chatId,urlencode("
𝐔𝐬𝐞𝐫 𝐧𝐨𝐭 𝐟𝐨𝐮𝐧𝐝 :(

𝑭𝒐𝒓 𝒖𝒔𝒊𝒏𝒈 𝒎𝒆 𝒓𝒆𝒈𝒊𝒔𝒕𝒆𝒓 

/register  
"),$messageId);
exit();
}


//=========[Premium users]============////
$prm = explode("\n", file_get_contents('func/premium.txt'));
foreach ($prm as $prmd )
    {
      $found = '0';
      $prmd = substr($ids,0,11);
      if ($prmd == $userId)
      {
        $found='1';
        break;
      }
    }
if ($found == '1')
{
  $role = "PREMIUM";
}
else
{
  $role = "FREE";
}
//========[OWNER DATA]===//

  if (($userId == "1058653930") || ($userId == "6188805615"))
  {
    $role = "OWNER";
  }
if ($chatId != $userId)
{
  $prch = explode("\n", file_get_contents('func/chat.txt'));
foreach ($prch as $prcht )
    {
      $found = '0';
      if ($prcht == $chatId)
      {
        $found='1';
        break;
      }
    }
if ($found == '1')
{
  $chtrole = 'PREMIUM';
}
else
{
  sendMessage($chatId,"➜ 𝗖𝗛𝗔𝗧 𝗡𝗢𝗧 𝗔𝗣𝗣𝗥𝗢𝗩𝗘𝗗 ❌",$messageId);
 exit();
}
}
foreach (glob("func/*.php") as $filename)
{
    
    include $filename;
  
}
foreach (glob("gates/*.php") as $filename)
{
    include $filename;
}
include('chker/userl.php');

//===============[ Premium Groups ]=============//

///==============================


//////////////////////////////
$sk = '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';



?>