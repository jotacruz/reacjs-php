<?php

use config\database\models\Models;

class ModelUsuarios extends Models {

    public function __construct()
    {

        $this->entity = 'usuarios';
        $this->entityLabel  = 'Usuários';

    }

}