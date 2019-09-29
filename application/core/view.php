<?php 

class View
{


    function generate($content_view, $template_view, $pageData = null)
    {   $content_view = VIEW_PATH.$content_view;
        $template_view = VIEW_PATH.$template_view;
        print_r("Hello");

        include VIEW_PATH.$template_view;
    }

}