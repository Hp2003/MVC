<?php 

/**
 * Class responsible to return all config values
 */
namespace Lib\Config;

class Config 
{

    /**
     * Returns value from config file
     *
     * @param string $name
     * @param string $default
     * @return array|string
     * 
     * @throws Exception name is not provided
     */
    public static function get(string $name, string $default = '') : array | string
    {

        if(strlen($name) === 0){
            throw new \Exception('Please provide $name');
        }
        $args = explode('.', $name);

        if(count($args) !== 2 ){
            throw new \Exception('$name is not valid argument please provide valid $name eg: configname.variable');
        }

        $filename = $args[0];
        $variabel = $args[1];

        $config = include('../../backend/config/' . $filename . ".php");

        return $config[$variabel] ?? $default;
    }   
}
