<?php

class DB    //root sdal;322$dldS
{   
        const USER = "mvcauth";
        const PASS = 'sdal;322$dldS';
        const HOST = "localhost";
        const DB = "mvcauth";


        public static function connect() 
        {
                $user = self::USER;
                $pass = self::PASS;
                $host = self::HOST;
                $db   = self::DB;

                try
                {
                        $conn = new PDO("mysql:dbname=$db;host=$host", $user, $pass);
                        return $conn;
                }
                catch(Exception $e){
                        exit("No db connect");
                }
        }
}
	