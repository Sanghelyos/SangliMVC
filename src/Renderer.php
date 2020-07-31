<?php
class Renderer{

    /*
    *   @param string $path
    *   @param array $variables
    *   @return void
    */



    public static function Render(string $content_path, array $donnees = [], int $isnavbar, int $isfooter): void{

        extract($donnees);

        if($isnavbar == 1){
            ob_start();
            require('vue/layouts/navbar.html.php');
            $navbar = ob_get_clean();
        }
        else{
            $navbar = NULL;
        }

        if($isfooter == 1){
            ob_start();
            require('vue/layouts/footer.html.php');
            $footer = ob_get_clean();
        }
        else{
            $footer = NULL;
        }

        ob_start();
        require('vue/content/'.$content_path.'.html.php');
        $page_content = ob_get_clean();
        require('vue/layouts/layout.html.php');
    }

    public static function Render_specific_layout(string $content_path, string $layout, array $donnees = [], int $isnavbar, int $isfooter): void{

        extract($donnees);

        if($isnavbar == 1){
            ob_start();
            require('vue/layouts/navbar.html.php');
            $navbar = ob_get_clean();
        }
        else{
            $navbar = NULL;
        }

        if($isfooter == 1){
            ob_start();
            require('vue/layouts/footer.html.php');
            $footer = ob_get_clean();
        }
        else{
            $footer = NULL;
        }

        ob_start();
        require('vue/content/'.$content_path.'.html.php');
        $page_content = ob_get_clean();
        require('vue/layouts/'.$layout.'.html.php');
    }
}