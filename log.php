<?php
function logErrors($logFile = 'log.txt') { 
    error_reporting(E_ALL);
    ini_set('display_errors',0);
    if(!file_exists($logFile)){
        fopen($logFile,'w');
    }
    ini_set('error_log', $logFile);
} 