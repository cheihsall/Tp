<?php
function init_php_session():bool
    {
        if(!session_id())
        {
            session_start();
            session_regenerate_id();
            return true;
        }
        return false;
    }
    
?>