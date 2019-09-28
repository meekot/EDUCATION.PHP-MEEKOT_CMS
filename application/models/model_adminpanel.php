<?php

class Model_Adminpanel extends Model
{       
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
            setcookie('auth', $cookie, time()+3600);

            return;
        }
        public function get_users()
        {            
            $result = $this->mysql('SELECT * FROM users');
            
            return $result;
        }
}