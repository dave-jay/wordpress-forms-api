<?php

/**
 * 
 * Below is the sample json we are going to get
  {
  "item_id": "[id]",
  "key": "[key]",
  "form_id": 6,
  "post_id": "[post_id]",
  "created_at": "[created_at format='Y-m-d H:i:s']",
  "updated_at": "[updated_at format='Y-m-d H:i:s']",
  "is_draft": "[is_draft]",
  "83": {
  "label": "[83 show=field_label]",
  "val": "[83]"
  },
  "84": {
  "label": "[84 show=field_label]",
  "val": "[84]"
  }
  }
 */
$request_data = array("request" => $_REQUEST, "server" => $_SERVER);

qi('post_logs', array("payload" => _escape(json_encode($request_data))));

$data = _escape($_POST['handshake']);
$payload = _escape($_POST['data']);
$ip = isset($_REQUEST['test_front_end_push']) ? $_REQUEST['test_front_end_push'] : $_SERVER['REMOTE_ADDR'];


$config_data = qs("select * from api_settings where handshake_password = ''  AND  ip_address  = '' ");
if (count($config_data)) {
    $status = 'SUCCESS';
} else {
    $status = 'FAILED';
}
$db_data = array('payload' => $payload, 'user_ip' => $ip, 'status' => $status);
qi("api_push_logs", $db_data);

if (!isset($_REQUEST['test_front_end_push'])) {
    die;
}



