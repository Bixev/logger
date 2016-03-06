<?php

namespace Bixev\LightLogger;

class StdLogger implements LoggerInterface
{

    /**
     * @param mixed $log
     * @param string $level @see \Bixev\LightLogger\LoggerLevel::LEVEL_ ...
     */
    public function log($log, $level = null)
    {
        firelog($log);
    }

}