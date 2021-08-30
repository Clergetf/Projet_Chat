<?php

class Connexion
{
    //connexion database
    public function getPDO()
    {
        return new SQLite3('tchat.db');
        
    }

}

?>