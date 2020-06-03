<?php 


include_once(DIR_APPLICATION.'controller/api/koddika/ExceptionsHandler.php');


class ControllerApiKoddikaAttributes extends Controller {

    use ExceptionsHandler;

    public function getattributes(){
        
        $this->setUserErrorAdvice();
        

        try{
            $this->load->language('api/koddika');
            
            if (!isset($this->session->data['api_id'])) {

                $this->ConsultResponse(401,$this->language->get('error_permission'),true); ;

            } else {
                if(isset($_GET['lang_id']))  $lang_id = $_GET['lang_id']; else $lang_id = 1;
               

                $this->load->model('api/attributes');
                $attributes = $this->model_api_attributes->getAttributes($lang_id);

                $this->ConsultResponse(200,$attributes,true); 
            }
        }catch(Exception $ex){ // Anything that went wrong
        
           $this->ConsultResponse(400,$ex->getMessage(),true);
        }

    }
	

}