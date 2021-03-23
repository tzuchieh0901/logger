<?php
namespace Psr\Log;

interface LoggerInterface{

    public function info();
    public function notice();
    public function critical();
    public function error();
    
}
?>