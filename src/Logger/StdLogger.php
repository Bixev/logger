<?php

namespace Bixev\Logger;

class StdLogger implements LoggerInterface
{

    /**
     * @param mixed $log
     */
    public function log($log)
    {
        firelog($log);
    }

}