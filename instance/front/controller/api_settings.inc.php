<?php

/**
 * Api Settings File
 * 
 * 
 * @version 1.0
 * @package Namit Holdings
 * 
 */
if (isset($_REQUEST['Deletedata']) && $_REQUEST['Deletedata'] == 1) {
    qd("api_settings", " id= '" . trim($_REQUEST['id']) . "' ");
    echo "1";
    die;
}

if (isset($_REQUEST['save_record']) && $_REQUEST['save_record'] != '') {

    $fields = array();
    $fields['ip_address'] = trim($_REQUEST['ip_address_add']);
    $fields['handshake_password'] = trim($_REQUEST['handshake_password_add']);
    $fields['date'] = trim($_REQUEST['date_add']);
    $fields['comments'] = trim($_REQUEST['comments_add']);
    $fields = _escapeArray($fields);

    if (isset($_REQUEST['edit_id']) && trim($_REQUEST['edit_id']) > 0) {
        $update = qu("api_settings", $fields, " id= '" . trim($_REQUEST['edit_id']) . "' ");
        $greetings = "Record has been updated successfully";
    } else {
        $insdert_id = qi("api_settings", $fields);
        $greetings = "Record has been added successfully";
    }
}

$api_settings = ApiSettings::GetApiSettings();
$jsInclude = "api_settings.js.php";
_cg("page_title", "Api Settings");
?>