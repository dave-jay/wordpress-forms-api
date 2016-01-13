<?php

class ApiSettings {

    public static function GetApiSettings() {
        return q("SELECT * FROM api_settings");
    }

}

?>