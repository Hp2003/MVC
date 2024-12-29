<?php 
return [

    /**
     * Contains all configs for logs
     * Add new variable in this file for
     * new logging file eg: $aliasname => $nameoffile
     */

    'loggers' => [
        'emergency' => 'emergency.log',
        'alert' => 'alert.log',
        'critical' => 'critical.log',
        'error' => 'error.log',
        'warning' => 'warning.log',
        'notice' => 'notice.log',
        'info' => 'info.log',
        'degub' => 'debug.log',
        'test' => 'test.log',

        // Add your custom log here
        // 'alias' => 'logfile.log'
    ],

    /**
     * Should contain default name for log dir
     * change it to set new dir for logs
     * old logs will stay in old dir so they should be deleted
     * manually
     */
    'log_dir' => 'storage/logs'
];