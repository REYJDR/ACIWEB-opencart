<?php

include_once(DIR_APPLICATION.'controller/api/koddika/ExceptionsHandler.php');


class ModelApiFunctionalities extends Model {
	
	use ExceptionsHandler;

    
    public function getTblCol($tables) {

        $this->setUserErrorAdvice();
 
        try{ 

           
            foreach ($tables['tables'] as $table) {

               
                $sql = "SHOW COLUMNS FROM " . DB_PREFIX . "{$table};";
                
                        
                $query = $this->db->query($sql);
        
                
                foreach ($query->rows as $key => $value) {
                
                    $col[$table][$key] = $value['Field'] ;
                    
                }
        
                
            }    
            
            return $col;

        }catch(Exception $ex){ // Anything that went wrong
                
            $this->ConsultResponse(400,$ex->getMessage(),true);
        }
	} 
	
}