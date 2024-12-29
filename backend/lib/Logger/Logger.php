<?php 
namespace Lib\Logger;

use Monolog\Level;
use Monolog\Logger as Log;
use Monolog\Handler\StreamHandler;
use Lib\Config\Config;
use Monolog\Handler\FirePHPHandler;

/**
 * Main class to log 
 */
class Logger 
{

    /**
     * Logger varaible ( Monolog )
     *
     * @var Monolog\Logger;
     */
    protected $logger = null;

    public static function log(string $message, string $type = 'info', Level $level = Level::Debug) : void
    {
        $logger = new Log($type);
        $logger->pushHandler(new StreamHandler(BD  .Config::get('logger.log_dir') . '/' .  Config::get('logger.loggers')[$type], $level));
        $logger->pushHandler(new FirePHPHandler());
        $logger->info($message);
    }
}