<?php
namespace Php\Exam;
use Psr\Log\LoggerInterface;

class Logger implements LoggerInterface{
    
    function info()
    {
        echo 'info' . PHP_EOL;
    }   
    function notice()
    {
        echo 'notice' . PHP_EOL;
    }
    function critical()
    {
        echo 'critical' . PHP_EOL;
    }
    function error()
    {
        echo 'error' . PHP_EOL;
    }
}
?>