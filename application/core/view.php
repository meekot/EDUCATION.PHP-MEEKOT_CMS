<?php 

class View
{


    function generate($content_view, $template_view, $pageData = null)
    {
        include VIEW_PATH.$template_view;
    }

}