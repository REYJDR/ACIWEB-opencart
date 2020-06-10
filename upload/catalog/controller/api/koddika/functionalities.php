<?php 


include_once(DIR_APPLICATION.'controller/api/koddika/ExceptionsHandler.php');


class ControllerApiKoddikaFunctionalities extends Controller {

    use ExceptionsHandler;

    public function gettblcol(){
        
        $this->setUserErrorAdvice();
        
            try{
            $this->load->language('api/koddika');
            
            
                    if(!isset($this->session->data['api_id'])) {
                        
                         $this->ConsultResponse(401,$this->language->get('error_permission'),true); ;
            
                    }else{

                        $json = json_decode( file_get_contents('php://input'), true); 

                      //  $this->ConsultResponse(200,$json,true); 
                        $json = (array)$json;
          
       
                    if(empty($json))  $this->ConsultResponse(401,'Request is  empty ',true);
                    
                        $this->load->model('api/functionalities');
                        
                        $col = $this->model_api_functionalities->getTblCol($json);
                
                        $this->ConsultResponse(200,$col,true); 
                    }
    
            
    
            }catch(Exception $ex){ // Anything that went wrong
            
                $this->ConsultResponse(400,$ex->getMessage(),true);
            
            }
    
        }

}