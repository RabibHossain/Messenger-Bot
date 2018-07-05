<?php
$a='{
  "persistent_menu":[
    {
      "locale":"default",
      "composer_input_disabled": false,
      "call_to_actions":[
        
            {
              "title":"CHECK OUT",
              "type":"postback",
              "payload":"CHECK OUT"
            },
            {
              "type":"web_url",
              "title":"Visit Here",
              "url":"https://www.messenger.com/",
              "webview_height_ratio":"compact"
            }
         
      ]
    }
  ]
}';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://graph.facebook.com/v2.6/me/messenger_profile?access_token=ACCESS_TOKEN");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $a);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POST, 1);

$headers = array();
$headers[] = "Content-Type: application/json";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

echo $result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);
?>
