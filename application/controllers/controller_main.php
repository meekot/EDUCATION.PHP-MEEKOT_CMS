<?php

class Controller_Main extends Controller
{
        function action_index()
        {
            $this->view->generate('main/index.php', 'main_template_view.php');
        }

        function action_about()
        {
            $this->view->generate('main/about.php', 'main_template_view.php');
        }
        
        function action_blog()
        {
            $this->view->generate('main/blog.php', 'main_template_view.php');
        }

        function action_contact()
        {
            $this->view->generate('main/contact.php', 'main_template_view.php');
        }

        function action_projects()
        {
            $this->view->generate('main/projects.php', 'main_template_view.php');
        }

        function action_services()
        {
            $this->view->generate('main/services.php', 'main_template_view.php');
        }

        function action_single()
        {
            $this->view->generate('main/single.php', 'main_template_view.php');
        }

}