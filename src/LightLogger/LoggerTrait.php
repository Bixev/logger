<?php
namespace Bixev\LightLogger;

trait LoggerTrait
{

    /**
     * @var \Bixev\LightLogger\LoggerInterface
     */
    protected $_logger;

    /**
     * @param \Bixev\LightLogger\LoggerInterface $logger
     */
    public function setLogger(\Bixev\LightLogger\LoggerInterface $logger = null)
    {
        $this->_logger = $logger;
    }

    /**
     * @param mixed $log
     */
    protected function log($log)
    {
        if ($this->_logger !== null) {
            $this->_logger->log($log);
        }
    }

}