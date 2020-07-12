<?php
class Renderer{

    /*
    *   @param string $path
    *   @param array $variables
    *   @return void
    */



    public static function Render(string $content_path, array $donnees = [], int $isnavbar): void{

        extract($donnees);

        if($isnavbar == 1){
            ob_start();
            require('vue/templates/layouts/navbar.html.php');
            $navbar = ob_get_clean();
        }
        else{
            $navbar = NULL;
        }

        ob_start();
        require('vue/templates/content/'.$content_path.'.html.php');
        $page_content = ob_get_clean();
        require('vue/templates/layouts/layout.html.php');
    }

    public static function Render_specific_layout(string $content_path, string $layout, array $donnees = [], int $isnavbar): void{

        extract($donnees);

        if($isnavbar == 1){
            ob_start();
            require('vue/templates/layouts/navbar.html.php');
            $navbar = ob_get_clean();
        }
        else{
            $navbar = NULL;
        }

        ob_start();
        require('vue/templates/content/'.$content_path.'.html.php');
        $page_content = ob_get_clean();
        require('vue/templates/layouts/'.$layout.'.html.php');
    }



    // public static function Render(string $content_path, array $donnees = []): void{

    //     extract($donnees);

    //     ob_start();
    //     require('vue/templates/content/'.$content_path.'.html.php');
    //     $page_content = ob_get_clean();
    //     require('vue/templates/layouts/layout.html.php');
    // }

    // public static function Render_specific_layout(string $content_path, string $layout, array $donnees = []): void{

    //     extract($donnees);

    //     ob_start();
    //     require('vue/templates/content/'.$content_path.'.html.php');
    //     $page_content = ob_get_clean();
    //     require('vue/templates/layouts/'.$layout.'.html.php');
    // }


}
?>