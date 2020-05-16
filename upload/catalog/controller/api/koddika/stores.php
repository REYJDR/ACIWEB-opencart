<?php 


include_once(DIR_APPLICATION.'controller/api/koddika/ExceptionsHandler.php');


class ControllerApiKoddikaStores extends Controller {

    use ExceptionsHandler;

    public function getstores(){
        
        $this->setUserErrorAdvice();
        

        try{
            $this->load->language('api/koddika');
            
            if (!isset($this->session->data['api_id'])) {

                $this->ConsultResponse(401,$this->language->get('error_permission'),true); ;

            } else {


                $this->load->model('api/stores');
                $stores = $this->model_api_stores->getStores();

                $this->ConsultResponse(200,$stores,true); 
            }
        }catch(Exception $ex){ // Anything that went wrong
        
           $this->ConsultResponse(400,$ex->getMessage(),true);
        }

    }
	

}