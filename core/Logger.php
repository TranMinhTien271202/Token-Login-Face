<?php

namespace Core;

use Monolog\Logger as MonologLogger;
use Monolog\Handler\StreamHandler;

class Logger {
    private static $instance = null;
    private $logger;

    private function __construct() {
        $this->logger = new MonologLogger('app');
        $this->logger->pushHandler(new StreamHandler(__DIR__ . '/../logs/app.log', MonologLogger::DEBUG));
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function info($message) {
        $this->logger->info($message);
    }

    public function error($message) {
        $this->logger->error($message);
    }
}
