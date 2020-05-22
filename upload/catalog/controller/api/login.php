<?php
class ControllerApiLogin extends Controller {
	public function index() {
		$this->load->language('api/login');

		$json = array();

		$this->load->model('account/api');


		

		

		// Login with API Key
		// if(isset($this->request->post['username'])) {
		// 	$api_info = $this->model_account_api->login($this->request->post['username'], $this->request->post['key']);
		// } else {
		// 	$api_info = $this->model_account_api->login('Default', $this->request->post['key']);
		// }

		//koddika adaptation
		$api_info = $this->model_account_api->login('Default', $this->getKeyHeader());
		

		if ($api_info) {
			// Check if IP is allowed
			$ip_data = array();
	
			$results = $this->model_account_api->getApiIps($api_info['api_id']);
	
			foreach ($results as $result) {
				$ip_data[] = trim($result['ip']);
			}
	
			if (!in_array($this->request->server['REMOTE_ADDR'], $ip_data)) {
				$json['error']['ip'] = sprintf($this->language->get('error_ip'), $this->request->server['REMOTE_ADDR']);
			}				
				
			if (!$json) {
				$json['success'] = $this->language->get('text_success');
				
				$session = new Session($this->config->get('session_engine'), $this->registry);
				
				$session->start();
				
				$this->model_account_api->addApiSession($api_info['api_id'], $session->getId(), $this->request->server['REMOTE_ADDR']);
				
				$session->data['api_id'] = $api_info['api_id'];
				
				// Create Token
				$json['api_token'] = $session->getId();
			} else {
				$json['error']['key'] = $this->language->get('error_key');
			}
		}
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}



	//MODIFY BY KODDIKA
/** 
 * Get header Authorization
 * */
private function getKeyHeader(){
	
	$headers = null;
	
	if (isset($_SERVER['X_API_KEY'])) {
		$headers = trim($_SERVER["X_API_KEY"]);
	}
	else if (isset($_SERVER['HTTP_X_API_KEY'])) { //Nginx or fast CGI
		
		$headers = trim($_SERVER["HTTP_X_API_KEY"]);
	} elseif (function_exists('apache_request_headers')) {
		$requestHeaders = apache_request_headers();
		// Server-side fix for bug in old Android versions (a nice side-effect of this fix means we don't care about capitalization for Authorization)
		$requestHeaders = array_combine(array_map('ucwords', array_keys($requestHeaders)), array_values($requestHeaders));
		//print_r($requestHeaders);
		if (isset($requestHeaders['X_API_KEY'])) {
			$headers = trim($requestHeaders['X_API_KEY']);
		}
	}
	return $headers;
}

//MODIFY BY KODDIKA

}
