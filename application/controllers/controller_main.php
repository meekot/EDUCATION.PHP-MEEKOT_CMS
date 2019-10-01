<?php

class Controller_Main extends Controller
{       
        function __construct()
        {
            $this->view = new View();
            $this->post = new Controller_Post();
        }

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

        function action_single_1()
        {
            $dataPost['post'] = $this->post->get_post(1);
            $this->view->generate('main/single.php', 'main_template_view.php', $dataPost);
        }
}