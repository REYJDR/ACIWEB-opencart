<?php 

include_once(DIR_APPLICATION.'controller/api/koddika/ExceptionsHandler.php');


class ControllerApiKoddikaCustomers extends Controller {

    use ExceptionsHandler;

  
  public function addcustomer() {

    $this->setUserErrorAdvice();

    try{
        
        $this->load->language('api/koddika');
        $json = array();
     

        if (!isset($this->session->data['api_id'])) {

          $this->ConsultResponse(401,$this->language->get('error_permission'),true);
          
        } else {

          $json = json_decode( file_get_contents('php://input'), true); 
          $json = (array)$json;

          $this->load->model('api/customers');


           if(count($json) > 1){


            // foreach($json as $key => $reg){
            //   $this->validateForm($reg,$key);
            // }

            // foreach($json as $key => $reg){    

            //   if($this->model_api_products->getProductByNameModel($reg['product_description'][1]['name'] ,$reg['model']) != null ) {

            //     $res[$key]= "Item {$reg['product_description'][1]['name']} and model {$reg['model']} already exist at id:{$key}";

            //   }else{

            //     $products = $this->model_api_products->addProduct($reg);
            //     $res[$key]= "Item {$reg['product_description'][1]['name']} added correctly with id:{$products}";
               
            //   }
             
            // }

             $this->ConsultResponse(200,$res,true); 
            
          }else{

             $this->validateForm($json[1]) ;
            //   $products = $this->model_api_products->addProduct($json[1]);   
            //   $this->ConsultResponse(200,"Item {$json[1]['product_description'][1]['name']} added correctly with id:{$products}",true); 
           
          }

        }
           
  
      }catch(Exception $ex){ // Anything that went wrong
        
        $this->ConsultResponse(400,$ex->getMessage(),true);
      }

  }


  public function getcustomer(){

    $this->setUserErrorAdvice();
    
      try{


        $this->load->language('api/koddika');

        if (!isset($this->session->data['api_id'])) {
            
            $this->ConsultResponse(401,$this->language->get('error_permission'),true); ;

        } else {

            $json = json_decode( file_get_contents('php://input'), true); 
            $json = (array)$json;


            $this->load->model('api/customers');
            $customers = $this->model_api_customers->getCustomer($json);

            $this->ConsultResponse(200,$customers,true); 
        }

      }catch(Exception $ex){ // Anything that went wrong
        
        $this->ConsultResponse(400,$ex->getMessage(),true);
      }

  }

  protected function validateForm($json, $key = '') {  

    try{ 

     $this->load->model('api/products');
   
      if(isset($json['product_description']) && !is_array($json['product_description'])) $this->setValidationError('product_description', 'is not an array', $key);
      if(!isset($json['product_description']) || empty($json['product_description']))    $this->setValidationError('product_description', 'is mandatory', $key);      
      if(isset($json['product_store'])  && !is_array($json['product_store']))            $this->setValidationError('product_store', 'is not an array', $key);
      if(isset($json['product_reward']) && !is_array($json['product_reward']))           $this->setValidationError('product_reward', 'is not an array', $key);
      if(isset($json['product_layout']) && !is_array($json['product_layout']))           $this->setValidationError('product_layout', 'is not an array', $key);
      if(!isset($json['model']) || $json['model']=='')                                   $this->setValidationError('model', 'is mandatory', $key);
      if(!isset($json['product_store']) || empty($json['product_store']))                $this->setValidationError('product_store', 'is mandatory', $key);
      

      foreach ($json['product_description'] as $language_id => $value) {

        if ((utf8_strlen(trim($value['name'])) < 1) || (utf8_strlen($value['name']) > 255)) {
          $this->error['name'][$language_id] = $this->language->get('error_name');
        }

        if ((utf8_strlen(trim($value['meta_title'])) < 1) || (utf8_strlen($value['meta_title']) > 255)) {
          $this->error['meta_title'][$language_id] = $this->language->get('error_meta_title');
        }
      }

      if ((utf8_strlen(trim($json['model'])) < 1) || (utf8_strlen($json['model']) > 64)) {
        $this->error['model'] = $this->language->get('error_model');
      }

      $key != '' ? $keyItem = "at the item {$key}" : $keyItem = '' ;
    


      if ($json['master_id']) {
        

        $product_options = $this->model_api_products->getOptions($json['master_id']);

        foreach ($product_options as $product_option) {
          if (isset($json['override']['variant'][$product_option['product_option_id']]) && $product_option['required'] && empty($json['variant'][$product_option['product_option_id']])) {
            $this->error['variant'][$product_option['product_option_id']] = sprintf($this->language->get('error_required'), $product_option['name']);
          }
        }
      }


      if ($this->error && !isset($this->error['warning'])) {

         $this->ConsultResponse(400,$this->error,true);

        
      }

     
      return !$this->error;
    
    }catch(\Exception $ex){ // Anything that went wrong
      
      $this->ConsultResponse(400,$ex->getMessage(),true);
    }
  }

  protected function setValidationError($valiable ,$detail, $key = '' ){

    $key != '' ? $keyItem = "at the item {$key}" : $keyItem = '' ;
    
    $this->ConsultResponse(400,"The parameters {$valiable} {$detail} {$keyItem}" ,false) ;


  }
 

}