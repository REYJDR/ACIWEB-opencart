<?php

include_once(DIR_APPLICATION.'controller/api/koddika/ExceptionsHandler.php');


class ModelApiCustomers extends Model {
	
	use ExceptionsHandler;


	public function getCustomer($data) {
        

        $this->setUserErrorAdvice();
        
          try{

                if(!isset($data['filter_store_id']) ){

                    $this->ConsultResponse(400,"[The parameter filter_store_id  is mandatory]",true);
                }


                $sql  = "SELECT * FROM " . DB_PREFIX . "customer ";

                if ($data['filter_store_id'] != "") {
                    $sql .= "WHERE store_id LIKE '" . $this->db->escape((string)$data['filter_store_id']) . "%'";
                }


                if (isset($data['start']) || isset($data['limit'])) {
                    if ($data['start'] < 0) {
                        $data['start'] = 0;
                    }

                    if ($data['limit'] < 1) {
                        $data['limit'] = 20;
                    }

                    $sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
                }

           
                $query  = $this->db->query($sql);

                if(count($query->rows) < 1) $this->ConsultResponse(200,'There`s no data for this request',true);

                return $query->rows;

            }catch(Exception $ex){ // Anything that went wrong
                
                $this->ConsultResponse(400,$ex->getMessage(),true);
            }

    }
    



}