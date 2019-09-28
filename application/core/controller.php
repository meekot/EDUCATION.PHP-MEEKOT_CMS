<?php

class Controller
{
        // > init default variables
        public $model;
        public $view;   
        protected $pageData = array();

        function __construct(){
            
            $this->view = new View();

        }

        function action_index(){
            
        }
}