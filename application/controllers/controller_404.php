<?php

class Controller_404 extends Controller
{
    function action_index()
    {
        $this->view->generate('main/404.php', 'main_template_view.php');
    }    
}