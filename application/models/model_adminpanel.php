<?php

class Model_Adminpanel extends Model
{       
        public function login()
        {   
            // > get post data 'user' $$ 'password'
            $user = $_POST['user'];  
            $password = $_POST['password'];
        
            // > find 'user' in users table, with core/model(parent) class function and put return in result var;
            $result = $this->mysql('SELECT * FROM users WHERE user = :user', [
                'user' => $user
            ]);
            
            
            // > if returned empty row, generate error message
            if(empty($result[0]))
            {
                return "Error: wrong username";
            }
            
            $result = $result[0];

            // > if in returned row dont have a good passwor, generate error message
            if($result['password'] != $password)
            {
                return "Error: wrong password";
            }
            

            // > if 'user' and 'password' good, generate cookies
            $cookie = md5($user.$password.time());
            
            // > put cookies in DB
            $this->mysql('UPDATE users SET session = :cookie WHERE user = :user', [
                'cookie' => $cookie,
                'user' => $user
            ]);

            // > set cookies in user browser
            setcookie('auth', $cookie, time()+3600, "/");

            return;
        }
        public function get_users()
        {            
            $result = $this->mysql('SELECT * FROM users');
            
            return $result;
        }

        public function add_users()
        {
            $data = $_POST['data'];
            
            $result = $this->verify_array(
                $data,
                ['id', 'user', 'tokken', 'password', 'first_name', 'last_name'],
                ['first_name', 'last_name', 'password'],
                ['json_field']);
            

            $this->mysql('INSERT INTO t1 ('.
            implode(',', $result['insert']['name'])
            .') VALUES ('.
            implode(',', $result['insert']['values'])
            .') ON DUPLICATE KEY UPDATE '.
            implode(',', $result['updata'])
            , $result['binds']);
            

        }


        public function verify_array( Array $data, Array $allowInsert, Array $allowUpdate, Array $encodeJson)
        {   
            $result = [
                'insert' => array(),
                'update' => array(),
                'binds'  => array()

            ];

            foreach( $data as $key => $value)
            {
                    if(in_array($key, $allowInsert))
                    {
                        $result['insert']['name'][] = $key;
                        $result['insert']['value'][] = ':'.$key;
                    }
                    if(in_array($key, $allowUpdate))
                    {
                        $result['update'][] = $key." =:".$key;
                    }
                    $result['binds'][':'.$key] = (in_array($key, $encodeJson))? json_encode($value) : $value; 
            }
            
            return $result; 
        }
}