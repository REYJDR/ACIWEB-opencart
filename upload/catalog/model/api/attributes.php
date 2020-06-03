<?php

include_once(DIR_APPLICATION.'controller/api/koddika/ExceptionsHandler.php');


class ModelApiAttributes extends Model {
	
    use ExceptionsHandler;
    
    public function getAttributes($lang_id) {


        $this->setUserErrorAdvice();
        
        try{

            $sql = "SELECT A.attribute_id , 
                           D.name  as Attribute, 
                           GD.name as 'Group Name'
                     FROM ".DB_PREFIX."attribute as A 
                     LEFT JOIN ".DB_PREFIX."attribute_description as D on D.attribute_id = A.attribute_id  and D.language_id = '".$lang_id."'
                     LEFT JOIN ".DB_PREFIX."attribute_group_description as GD on GD.attribute_group_id = A.attribute_group_id and GD.language_id = '".$lang_id."'" ;

            $stores_query = $this->db->query($sql);
            
            return $stores_query->rows;
        }catch(Exception $ex){ // Anything that went wrong
            
            $this->ConsultResponse(400,$ex->getMessage(),true);
        }
    }
}