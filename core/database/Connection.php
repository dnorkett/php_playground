<?php

class Connection {

    public static function make($config)                  //static lets you use this globally without having an instance.   :: syntax
    {
        try {            
            return new PDO(
                
                $config['database']['connection'].';dbname='.$config['database']['name'], 
                $config['database']['username'],
                $config['database']['password'],
                $config['database']['options']
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }        
    }    


}