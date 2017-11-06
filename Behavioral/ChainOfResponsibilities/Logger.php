<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibilities;

abstract class Logger
{
    protected $log_levels;
    private $nextLogger = null;

    function __construct(array $levels)
    {
        $this->log_levels = [];
        foreach ($levels as $level)
        {
            $this->log_levels[] = $level;
        }
    }

    public function setNext(Logger $logger)
    {
        $this->nextLogger = $logger;
        return $this->nextLogger;
    }

    public function log(int $level, string $message)
    {
        $processed = false;
        if (in_array($level, $this->log_levels))
        {
            return $this->write($message);
        }

        if (isset($this->nextLogger))
        {
            $processed = $this->nextLogger->log($level, $message);
        }

        if ($processed == false)
        {
            throw new \Exception('Undefined Error level');
        }
        return $processed;
    }

    protected abstract function write(string $message);
}