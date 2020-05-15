<?php

include_once(DIR_APPLICATION.'controller/api/koddika/ExceptionsHandler.php');


class ModelApiCustomers extends Model {
	
	use ExceptionsHandler;


	public function getCustomer($data) {
        

        $this->setUserErrorAdvice();
        
          try{
 
                $sql  = "SELECT * FROM " . DB_PREFIX . "customer ";


                if (!empty($data['filter_name'])) {
                    $sql .= " AND name = '" . (string)$data['filter_name'] . "'";
                }

                if (!empty($data['filter_email'])) {
                    $sql .= " AND email LIKE '" . $this->db->escape((string)$data['filter_email']) . "%'";
                }

                if (!empty($data['filter_group_id'])) {
                    $sql .= " AND customer_group_id LIKE '" . $this->db->escape((int)$data['filter_group_id']) . "%'";
                }

                if (!empty($data['filter_store_id'])) {
                    $sql .= " AND store_id LIKE '" . $this->db->escape((string)$data['filter_store_id']) . "%'";
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

                return $query->row;

            }catch(Exception $ex){ // Anything that went wrong
                
                $this->ConsultResponse(400,$ex->getMessage(),true);
            }

    }
    



}