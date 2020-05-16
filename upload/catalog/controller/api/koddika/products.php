<?php 


include_once(DIR_APPLICATION.'controller/api/koddika/ExceptionsHandler.php');


class ControllerApiKoddikaProducts extends Controller {

    use ExceptionsHandler;

  
  public function addproducts() {

      $this->setUserErrorAdvice();

      try{
        
        $this->load->language('api/koddika');
        $json = array();
     

        if (!isset($this->session->data['api_id'])) {

          $this->ConsultResponse(401,$this->language->get('error_permission'),true);
          
        } else {

          $json = json_decode( file_get_contents('php://input'), true); 
          $json = (array)$json;

          $this->load->model('api/products');


           if(count($json) > 1){

            $error = [];

            foreach($json as $key => $reg){

              $errorMsg =  $this->validateForm($reg,$key);

              if($errorMsg != '') $error[$key] = $errorMsg;
             
            }

        

            foreach($json as $key => $reg){    

              
              if(!empty($error) && isset($error[$key])) $res[$key]= "{$error[$key]}";  else {  

                if($this->model_api_products->getProductByNameModel($reg['product_description'][1]['name'] ,$reg['model'],$reg['store_id']) != null ) {

                  $res[$key]= "Item {$reg['product_description'][1]['name']} and model {$reg['model']} already exist at id:{$key}";

                }else{

                  $products = $this->model_api_products->addProduct($reg);
                  $res[$key]= "Item {$reg['product_description'][1]['name']} added correctly with id:{$products}";
                
                }
            
             }
             
            }

             $this->ConsultResponse(200,$res,true); 
            

            

          }else{


              $this->validateForm($json[1]) ;
                 
              $products = $this->model_api_products->addProduct($json[1]);
                
              $this->ConsultResponse(200,"Item {$json[1]['product_description'][1]['name']} added correctly with id:{$products}",true); 
           

          }




        }
           
  
      }catch(Exception $ex){ // Anything that went wrong
        
        $this->ConsultResponse(400,$ex->getMessage(),true);
      }

  }

  public function getproducts(){

    $this->setUserErrorAdvice();
    
      try{
        $this->load->language('api/koddika');
        
      
              if (!isset($this->session->data['api_id'])) {
                  
                $this->ConsultResponse(401,$this->language->get('error_permission'),true); ;
      
              } else {
                $json = json_decode( file_get_contents('php://input'), true); 
                $json = (array)$json;
        
        
                $this->load->model('api/products');
                $products = $this->model_api_products->getProducts($json);
        
                $this->ConsultResponse(200,$products,true); 

              }

       

      }catch(Exception $ex){ // Anything that went wrong
        
        $this->ConsultResponse(400,$ex->getMessage(),true);
      }

  }

  protected function validateForm($json, $key = '') {  

    try{ 

     $this->load->model('api/products');
   
      if(isset($json['product_description']) && !is_array($json['product_description'])) return $this->setValidationError('product_description', 'is not an array', $key);
      if(!isset($json['product_description']) || empty($json['product_description']))    return $this->setValidationError('product_description', 'is mandatory', $key);      
      if(isset($json['product_store'])  && !is_array($json['product_store']))            return $this->setValidationError('product_store', 'is not an array', $key);
      if(isset($json['product_reward']) && !is_array($json['product_reward']))           return $this->setValidationError('product_reward', 'is not an array', $key);
      if(isset($json['product_layout']) && !is_array($json['product_layout']))           return $this->setValidationError('product_layout', 'is not an array', $key);
      if(!isset($json['model']) || $json['model']=='')                                   return $this->setValidationError('model', 'is mandatory', $key);
      if(!isset($json['store_id']) || $json['store_id'] == '' )                          return $this->setValidationError('store_id', 'is mandatory', $key);
      

      foreach ($json['product_description'] as $language_id => $value) {

        if(!isset($value['name']) || $value['name']=='') return $this->setValidationError('model', 'is mandatory', $key);
        if(!isset($value['meta_title']) || $value['name']=='') return $this->setValidationError('model', 'is mandatory', $key);
      }


      // if ($json['master_id']) {
        

      //   $product_options = $this->model_api_products->getOptions($json['master_id']);

      //   foreach ($product_options as $product_option) {
      //     if (isset($json['override']['variant'][$product_option['product_option_id']]) && $product_option['required'] && empty($json['variant'][$product_option['product_option_id']])) {
      //       $this->error['variant'][$product_option['product_option_id']] = sprintf($this->language->get('error_required'), $product_option['name']);
      //     }
      //   }
      // }

    }catch(\Exception $ex){ // Anything that went wrong
      
      $this->ConsultResponse(400,$ex->getMessage(),true);
    }
	}


  public function setValidationError($valiable ,$detail, $key = '' ){

    $key != '' ? $keyItem = "at the item {$key}" : $keyItem = '' ;
    
    if($key != '' ) return "The parameters {$valiable} {$detail} {$keyItem}" ;

    $this->ConsultResponse(400,"The parameters {$valiable} {$detail} " , true) ;


  }



}
