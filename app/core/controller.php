<?php 
Class Controller
{
    public function view($path,$data = [])
    {
        if(file_exists("../app/views/" . THEME . $path . ".php"))
        {
            include "../app/views/" . THEME . $path . ".php";
        }
    }
}

?>