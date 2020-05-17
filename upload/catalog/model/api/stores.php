<?php

include_once(DIR_APPLICATION.'controller/api/koddika/ExceptionsHandler.php');


class ModelApiStores extends Model {
	
    use ExceptionsHandler;
    
    public function getStores() {


        $this->setUserErrorAdvice();
        
        try{
            $sql = "SELECT store_id, value FROM `". DB_PREFIX ."setting`  WHERE `key`='config_name' group by store_id";
            
            $stores_query = $this->db->query($sql);
            
            return $stores_query->rows;
        }catch(Exception $ex){ // Anything that went wrong
            
            $this->ConsultResponse(400,$ex->getMessage(),true);
        }
    }
}
