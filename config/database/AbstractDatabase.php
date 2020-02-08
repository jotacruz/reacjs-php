<?php 

namespace config\database;

use config\database\models\Models;
use Exception;

class AbstractDatabase {

    private $db = null;
    
    public function __construct($db)
    {
        
        $this->db = $db;

    }

    public function findAll(Models $model){

        $statement = "
            SELECT 
                * 
            FROM
                 {$model->getEntity()}";

        try {

            $statement = $this->db->query($statement);
            $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
                
        } catch (Exception $e){
            echo "Error: " . $e->getMessage();
        }

    }

}
