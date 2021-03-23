<?php
namespace Php\Exam;
use Psr\Log\LoggerInterface;

class Logger implements LoggerInterface{
    
    function info()
    {
     echo '123';
    }   
}
?>