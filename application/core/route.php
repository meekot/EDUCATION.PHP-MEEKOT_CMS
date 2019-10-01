<?php 

class Route // TODO: RE-WRITE ROUTER
{
        static function start() //function start routing
        {
                $controller_name = 'Main'; //default controller name
                $action_name = 'index'; //default action name

                $routes = explode('/', $_SERVER['REQUEST_URI']); //take values of URI splice /

                if ( !empty($routes[1]) ) 
                {
                        $controller_name = $routes[1]; //new name for controller of URI
                }

                if ( !empty($routes[2]) )
                {
                    $action_name = $routes[2]; //new name for action of URI
                }

                // > include model with verification on exist TODO: INCLUDE ALL MODELS, independently url NAMESPACE WORKSPACE
                $model_file = strtolower('Model_'.$controller_name).'.php';
                $model_path = "application/models/".$model_file;
                if(file_exists($model_path))
                {
                        include "application/models/".$model_file;
                }

                
                // > include controller with verification on exist 
                $controller_file = "controller_".strtolower($controller_name).'.php';
                $controller_path = CONTROLLER_PATH.$controller_file;
                if(!file_exists($controller_path))//vefify exist class $controller
                {
                    $action_name = $controller_name;
                    $controller_name = 'Controller_Main'; //if not, set default controller
                    $controller_file = strtolower($controller_name).'.php';
                    $controller_path = CONTROLLER_PATH.$controller_file;

                }
                else
                {
                    $controller_name = 'Controller_'.$controller_name;
                }

                include $controller_path;
                $controller = new $controller_name; //create intest of class with $controller_name like name of class
                $action = 'action_'.$action_name; 
    
                if(!method_exists($controller, $action)) //vefify exist method action in class $controller
                {   
                    Route::ErrorPage404(); //if not exist, error
                    return;
                }
                               
                $controller->$action();
        }

        function ErrorPage404()
        {
            $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
            header('HTTP/1.1 404 Not Found');
                    header("Status: 404 Not Found");
                    header('Location:'.$host.'404');
        }
}