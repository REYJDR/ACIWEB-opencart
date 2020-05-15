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

                

                $json = json_decode( file_get_contents('php://input'), true); 
                $json = (array)$json;

var_dump($json );
                $this->load->model('api/orders');
                $orders = $this->model_api_orders->getOrders($json);

                $this->ConsultResponse(200,$orders,true); 
            }
        }catch(Exception $ex){ // Anything that went wrong
        
           $this->ConsultResponse(400,$ex->getMessage(),true);
        }

    }
	

}