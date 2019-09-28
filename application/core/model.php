<?php

class Model
{
        protected $db = null;

        public function __construct() //autostart functiton
        {
		        $this->db = DB::connect(); //db connect
        }
        
        protected function mysql($sql, $bindValues = null) 
        {
                $errors = array();
                $result = array();

                $pdo = $this->db->prepare($sql);

                $pdo->execute($bindValues);
            
                while ($row = $pdo->fetch(PDO::FETCH_ASSOC))
                {
                    array_push($result, $row);
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
}