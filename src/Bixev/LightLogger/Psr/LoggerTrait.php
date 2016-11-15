<?php
namespace Bixev\LightLogger\Psr;

trait LoggerTrait
{

    /**
     * @var \Psr\Log\LoggerInterface
     */
    protected $_logger;

    /**
     * @param \Psr\Log\LoggerInterface $logger
     */
    public function setLogger(\Psr\Log\LoggerInterface $logger = null)
    {
        $this->_logger = $logger;
    }

    /**
     * @param mixed $log
     */
    protected function log($log)
    {
        if ($this->_logger !== null) {
            $this->_logger->debug(print_r($log, true));
        }
    }

}