<?php 

class View
{
    function generate_module($templateModule, $moduleData = null)
    {
        include $templateModule;
    }

    function generate($contentView, $templateView, $pageData = null)
    {   $contentView = VIEW_PATH.$contentView;
        $templateView = VIEW_PATH.$templateView;
        include $templateView;
    }

}