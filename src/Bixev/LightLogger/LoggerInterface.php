<?php

namespace Bixev\LightLogger;

interface LoggerInterface
{
    /**
     * @param mixed $log
     * @param string $level @see \Bixev\LightLogger\LoggerLevel::LEVEL_ ...
     */
    public function log($log, $level = null);

}