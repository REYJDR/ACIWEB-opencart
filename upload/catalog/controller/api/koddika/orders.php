<?php 


include_once(DIR_APPLICATION.'controller/api/koddika/ExceptionsHandler.php');


class ControllerApiKoddikaOrders extends Controller {

    use ExceptionsHandler;

    public function getorders(){
        
        $this->setUserErrorAdvice();
        

        try{
            $this->load->language('api/koddika');
            
            if (!isset($this->session->data['api_id'])) {

                $this->ConsultResponse(401,$this->language->get('error_permission'),true); ;

            } else {

            $data= array("filter_store_id" => isset($_GET['filter_store_id']) ? $_GET['filter_store_id'] : '',
                         "filter_has_invoices"  => isset($_GET['filter_has_invoices']) ? $_GET['filter_has_invoices'] : '',
                         "filter_status"  => isset($_GET['filter_status']) ? $_GET['filter_status'] : '' ,                      
                         "filter_order_id"  => isset($_GET['filter_order_id']) ? $_GET['filter_order_id'] : '' ); 
                         

                $this->load->model('api/orders');
                $orders = $this->model_api_orders->getOrders($data);

                $this->ConsultResponse(200,$orders,true); 
            }
        }catch(Exception $ex){ // Anything that went wrong
        
           $this->ConsultResponse(400,$ex->getMessage(),true);
        }

    }
	

}