<?php

class Controller_Post extends Controller 
{
    function __construct()
    {
        $this->model = new Model_Post();  
        
        $this->view = new View();        
    }

    function get_post($id)
    {   
        $template = 'application\modules\post\view_post.php';
        
        if($this->model->is_admin())
        {   
            $template = 'application\modules\post\view_post_admin.php';            
        }

        $data = $this->model->get_post($id);
    
        return $this->view->generate_module($template, $data);
    }


}
