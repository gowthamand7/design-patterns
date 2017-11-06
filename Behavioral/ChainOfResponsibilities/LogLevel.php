<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibilities;

abstract class LogLevel
{
    const NONE = 0;                 // File Logger
    const INFO = 1;                 // File Logger
    const DEBUG = 2;                // DB Logger
    const WARNING = 4;              // DB Logger
    const ERROR = 8;                // Email Logger
    const FUNCTIONAL_MESSAGE = 16;  // Email Logger
    const FUNCTIONAL_ERROR = 32;    // Email Logger
    const ALL = 64;                 // Console Logger
    const undefined = 128;

}