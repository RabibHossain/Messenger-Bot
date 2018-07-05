<?php

$a='{
  "persistent_menu":[
    {
      "locale":"default",
      "composer_input_disabled": false,
      "call_to_actions":[
        {
          "title":"My Account",
          "type":"nested",
          "call_to_actions":[
            {
              "title":"Pay Bill",
              "type":"postback",
              "payload":"PAYBILL_PAYLOAD"
            },
            {
              "title":"History",
              "type":"postback",
              "payload":"HISTORY_PAYLOAD"
            },
            {
              "title":"Contact Info",
              "type":"postback",
              "payload":"CONTACT_INFO_PAYLOAD"
            }
          ]
        },
        {
          "type":"web_url",
          "title":"Latest News",
          "url":"http://www.messenger.com/",
          "webview_height_ratio":"full"
        }
      ]
    },
    {
      "locale":"zh_CN",
      "composer_input_disabled":false,
      "call_to_actions":[
        {
          "title":"Pay Bill",
          "type":"postback",
          "payload":"PAYBILL_PAYLOAD"
        }
      ]    
    }
  ]
}';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://graph.facebook.com/v2.6/me/messenger_profile?access_token=ACESS_TOKEN");
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
