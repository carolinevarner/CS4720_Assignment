<?php
function log_event($message) {
    $log = "[" . date("Y-m-d H:i:s") . "] " . $message . "\n";
    file_put_contents(__DIR__ . "/logs/app.log", $log, FILE_APPEND);
}
?>