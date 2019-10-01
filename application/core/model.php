<?php

class Model
{
        protected $db = null;

        public function __construct() //autostart functiton
        {
		        $this->db = DB::connect(); //db connect
        }
        
        protected function mysql($sql, $bindValues = null, $executeType = 'select', $returnType = 'default') 
        {
                $errors = array();
                $result = array();

                $pdo = $this->db->prepare($sql);

                $pdo->execute($bindValues);
                
            

                if($executeType == 'select')
                {
                        while ($row = $pdo->fetch(PDO::FETCH_ASSOC))
                        {
                            switch($returnType){
                                default:
                                    array_push($result, $row);
                                break;
                                case 'arrayById':
                                    $result[$row['id']] = $row; 
                                break;
                            }
                        }
                }
                else
                {
                    $result['lastInsert'] = $pdo->lastInsertId();
                }

                

                $errors = $pdo->errorInfo();

                if($errors[0] != 0000 && ERRORMODE)
                {
                    print_r("//ERRORMODE// PDO_ERROR:  ");
                    print_r($errors); 
                    return;
                } 
                
                return $result;
        }
        
        private $isAdmin = false;

        public function is_admin()
        {   
            session_start();
            
            if(!isset($_COOKIE['auth']))
            {
                return false;
            }
            
            // > find our cookies in DB
            $result = $this->mysql('SELECT * FROM users WHERE session = :cookies', [
                'cookies' => $_COOKIE['auth']
            ]);

            // > if not fined return false
            if(empty($result[0]))
            {
                return false;
            } 

            return true;
        }
}