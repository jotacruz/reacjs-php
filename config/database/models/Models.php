<?php

namespace config\database\models;

use config\database\AbstractDatabase;

class Models extends AbstractDatabase {

    protected $entity = null;
    
    protected $entityLabel = null;

    protected $primaryKey = null;

    protected $orderField = null;

    protected $orderFieldDir = null;

    public function __construct($primaryKey = 'id', $orderField = 'id', $orderFieldDir = 'ASC')
    {

        $this->primaryKey = $primaryKey;

        $this->orderField = $orderField;

        $this->orderFieldDir = $orderFieldDir;

    }

    public function getEntity(){
        return $this->entity;
    }

    public function setEntity($entity){
        $this->entity = $entity;
    }

    public function getEntityLabel(){
        return $this->entityLabel;
    }

    public function setEntityLabel($entityLabel){
        $this->entityLabel = $entityLabel;
    }

    

}