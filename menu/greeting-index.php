<?php
$a='{
     "setting_type":"call_to_actions",
     "thread_state":"new_thread",
     "call_to_actions":[
        {
            "payload":"DEV_DEFINED_PAYLOAD"
        }
      ]
    }';
// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://graph.facebook.com/v2.6/me/thread_settings?access_token=EAADZAHGE4LR8BANZAm8wKMkGeG41QQBf9NATPtiLQAdpHilKacPoRjHERVFUWxL23n0REQvAw07ZCOBde6C85P7GZC2WN43S4il853oLCDQUD356Lfv7i2f0EBjqMMyGCAIBkIZApzPydMEZCCAlSKlqpZCesqvXn1KbAxgOyUhLQZDZD");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $a);
curl_setopt($ch, CURLOPT_POST, 1);

$headers = array();
$headers[] = "Content-Type: application/json";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);

?>
