<?php

class Controller_Adminpanel extends Controller 
{
        function __construct()
        {
                $this->model = new Model_Adminpanel();  
                $this->view = new View();
        }

        function action_index()
        {
                if($this->model->is_admin())
                {
                        $this->view->generate('admin/admin_view.php', 'admin_template_view.php');
                }
                else
                {
                        header("Location: /adminpanel/login");
                }
        }
        
        function action_login()
        {
                if(!empty($_POST))
                {
                        $this->pageData = $this->model->login();

                        if(!isset($this->pageData))
                        {
                                header("Location: /adminpanel/");
                        }
                }

                if($this->model->is_admin())
                {
                        header("Location: /adminpanel/");
                }
                
                $this->view->generate('admin/login_view.php', 'main_template_view.php', $this->pageData);
                
        }
        
        function action_user()
        {
                if($this->model->is_admin())
                {       
                        $this->pageData["users"] = $this->model->get_users();
                        
                        if(!empty($_POST))
                        {
                                $this->pageData["edit_users"] = $this->model->edit_users();
                        }

                        $this->view->generate('admin/add_user.php', 'admin_template_view.php', $this->pageData);
                }
                else
                {
                        header("Location: /adminpanel/login");
                }
        }
}