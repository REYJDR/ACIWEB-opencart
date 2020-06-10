<?php

include_once(DIR_APPLICATION.'controller/api/koddika/ExceptionsHandler.php');


class ModelApiProducts extends Model {
	
	use ExceptionsHandler;


	public function addProduct($data) {


		$this->setUserErrorAdvice();

		try{
			$ManNameID = "";


				$this->db->query("INSERT INTO " . DB_PREFIX . "product SET  
									model = '" . $this->db->escape((string)$data['model']) . "', 
									sku = '" . $this->db->escape((string)$data['sku']) . "', 
									upc = '" . $this->db->escape((string)$data['upc']) . "', 
									ean = '" . $this->db->escape((string)$data['ean']) . "', 
									jan = '" . $this->db->escape((string)$data['jan']) . "', 
									isbn = '" . $this->db->escape((string)$data['isbn']) . "', 
									mpn = '" . $this->db->escape((string)$data['mpn']) . "', 
									location = '" . $this->db->escape((string)$data['location']) . "',  
									quantity = '" . (int)$data['quantity'] . "', 
									minimum = '" .  (int)$data['minimum'] . "', 
									subtract = '" . (int)$data['subtract'] . "', 
									stock_status_id = '" . (int)$data['stock_status_id'] . "', 
									date_available = '" . $this->db->escape((string)$data['date_available']) . "', 
									manufacturer_id = '0', 
									shipping = '" . (int)$data['shipping'] . "', 
									price = '" . (float)$data['price'] . "', 
									points = '0', 
									weight = '" . (float)$data['weight'] . "', 
									weight_class_id = '" . (int)$data['weight_class_id'] . "', 
									length = '" . (float)$data['length'] . "', 
									width = '" . (float)$data['width'] . "', 
									height = '" . (float)$data['height'] . "', 
									length_class_id = '" . (int)$data['length_class_id'] . "', 
									status = '" . (int)$data['status'] . "', 
									tax_class_id = '" . (int)$data['tax_class_id'] . "', 
									sort_order = '" . (int)$data['sort_order'] . "', 
									date_added = NOW(), 
									date_modified = NOW()");
		
				$product_id = $this->db->getLastId();
		
				// if ($data['image']) {
				// 	$this->db->query("UPDATE " . DB_PREFIX . "product SET 
				// 	image = '" . $this->db->escape((string)$data['image']) . "' WHERE product_id = '" . (int)$product_id . "'");
				// }
		
				// Description
				foreach ($data['product_description'] as $language_id => $value) {
					$this->db->query("INSERT INTO " . DB_PREFIX . "product_description SET
					 product_id = '" . (int)$product_id . "', 
					 language_id = '" . (int)$language_id . "', 
					 name = '" . $this->db->escape($value['name']) . "', 
					 description = '" . $this->db->escape($value['description']) . "', 
					 tag = '" . $this->db->escape($value['tag']) . "', 
					 meta_title = '" . $this->db->escape($value['meta_title']) . "', 
					 meta_description = '" . $this->db->escape($value['meta_description']) . "', 
					 meta_keyword = '" . $this->db->escape($value['meta_keyword']) . "'");
				}
		
                //in exist manufacture name its creates a new one
				if($data['manufacturer'] != '' || $data['manufacturer'] != NULL ){

					$ManName = $this->db->query("SELECT manufacturer_id FROM ". DB_PREFIX ."manufacturer where name='{$data['manufacturer']}'");

					if($ManName != ''){

						$this->db->query("INSERT INTO  ". DB_PREFIX ."manufacturer SET name ='{$data['manufacturer']}'");
						$ManNameID = $this->db->getLastId();
						$this->db->query("INSERT INTO  ". DB_PREFIX ."manufacturer_to_store SET manufacturer_id ='".(int)$ManNameID."' , store_id='".(int)$data['store_id']."'");
						$this->db->query("UPDATE ". DB_PREFIX ."product SET manufacturer_id ='".(int)$ManNameID."' WHERE product_id='" .(int)$product_id."'");
						


					}else{

						$ManNameID = $ManName->row['manufacturer_id'];
						$this->db->query("UPDATE ". DB_PREFIX ."product SET manufacturer_id ='".(int)$ManNameID."' WHERE product_id='" .(int)$product_id."'");
						
					}
				}


				// Categories
				// if (isset($data['product_category'])) {
				// 	foreach ($data['product_category'] as $category_id) {
				// 		$this->db->query("INSERT INTO " . DB_PREFIX . "product_to_category SET 
				// 		product_id = '" . (int)$product_id . "', 
				// 		category_id = '" . (int)$category_id . "'");
				// 	}
				// }


				if (isset($data['category']) && isset($data['sub_category'])) {

					if($data['sub_category'] != '' && $data['category']!= ''){
					  
						$catId = $this->CheckCategoryId($data['category'],$data['sub_category'],$data['store_id']);

						var_dump($catId); die();
						$this->db->query("INSERT INTO   ". DB_PREFIX ."product_to_category SET category_id ='".(int)$catId."' , product_id='" .(int)$product_id."'");
						
					}
				}




				// Filters
				if (isset($data['product_filter'])) {
					foreach ($data['product_filter'] as $filter_id) {
						$this->db->query("INSERT INTO " . DB_PREFIX . "product_filter SET 
						product_id = '" . (int)$product_id . "', 
						filter_id = '" . (int)$filter_id . "'");
					}
				}
		
				// Stores
				if (isset($data['store_id'])) {
					$store_id= $data['store_id'];
						$this->db->query("INSERT INTO " . DB_PREFIX . "product_to_store SET 
						product_id = '" . (int)$product_id . "', 
						store_id = '" . (int)$data['store_id']. "'");
					
				}
		
				// Downloads
				// if (isset($data['product_download'])) {
				// 	foreach ($data['product_download'] as $download_id) {
				// 		$this->db->query("INSERT INTO " . DB_PREFIX . "product_to_download SET 
				// 		product_id = '" . (int)$product_id . "', 
				// 		download_id = '" . (int)$download_id . "'");
				// 	}
				// }
		
				// Attributes
				if (isset($data['product_attribute'])) {
					foreach ($data['product_attribute'] as $product_attribute) {
						if ($product_attribute['attribute_id']) {
							// Removes duplicates
							$this->db->query("DELETE FROM " . DB_PREFIX . "product_attribute WHERE product_id = '" . (int)$product_id . "' AND attribute_id = '" . (int)$product_attribute['attribute_id'] . "'");
		
							foreach ($product_attribute['product_attribute_description'] as $language_id => $product_attribute_description) {
								$this->db->query("DELETE FROM " . DB_PREFIX . "product_attribute WHERE product_id = '" . (int)$product_id . "' AND attribute_id = '" . (int)$product_attribute['attribute_id'] . "' AND language_id = '" . (int)$language_id . "'");
		
								$this->db->query("INSERT INTO " . DB_PREFIX . "product_attribute SET product_id = '" . (int)$product_id . "', attribute_id = '" . (int)$product_attribute['attribute_id'] . "', language_id = '" . (int)$language_id . "', text = '" . $this->db->escape($product_attribute_description['text']) . "'");
							}
						}
					}
				}
		
				// SEO URL
				if (isset($data['product_seo_url'])) {
					foreach ($data['product_seo_url'] as $store_id => $language) {
						foreach ($language as $language_id => $keyword) {
							if ($keyword) {
								$this->db->query("INSERT INTO " . DB_PREFIX . "seo_url SET 
								store_id = '" . (int)$store_id . "', 
								language_id = '" . (int)$language_id . "', 
								query = 'product_id=" . (int)$product_id . "', 
								keyword = '" . $this->db->escape($keyword) . "', 
								push = '" . $this->db->escape('route=product/product&product_id=' . (int)$product_id) . "'");
							}
						}
					}
				}
		
				// Layout
				if (isset($data['product_layout'])) {
					foreach ($data['product_layout'] as $store_id => $layout_id) {
						$this->db->query("INSERT INTO " . DB_PREFIX . "product_to_layout SET 
						product_id = '" . (int)$product_id . "', 
						store_id = '" . (int)$store_id . "', 
						layout_id = '" . (int)$layout_id . "'");
					}
				}
		
				$this->cache->delete('product');
		
				return $product_id;

			}catch(Exception $ex){ // Anything that went wrong
					
				$this->ConsultResponse(400,$ex->getMessage(),true);
			}
	} 
	
	public function getProductByNameModel($product_name,$product_model='',$store_id = 0) {
		
		$query = $this->db->query("SELECT DISTINCT * FROM `" . DB_PREFIX . "product` p LEFT JOIN `" . DB_PREFIX . "product_to_store` ps ON (ps.`product_id` = p.`product_id`) 
																					   LEFT JOIN `" . DB_PREFIX . "product_description` pd ON (p.`product_id` = pd.`product_id`) 
													  WHERE pd.`name` = '" . (string)$product_name . "' 
													  AND  p.`model` = '" . (string)$product_model . "' 
													  AND pd.`language_id` = '" . (int)$this->config->get('config_language_id') . "' 
													  AND ps.store_id='{$store_id}'");

		return $query->row;
	}



	public function CheckCategoryId($category,$subcategory,$store_id) {
		

		$lang_id = (int)$this->config->get('config_language_id');

		//check if a parent category exists, create if not 
		$sql = "SELECT c.category_id
					FROM oc_category  c 
					inner join oc_category_description d on  d.category_id =  c.category_id  
					where c.parent_id=0 and d.language_id='{$lang_id}' and  d.name = '{$category}';";

		

		if(empty($ParentCategoryID->row)){

				$this->db->query("INSERT INTO " . DB_PREFIX . "category SET parent_id = '0', top = '0',  sort_order ='1', status = '1'");
				
				$ParentCategoryID = $this->db->getLastId();


				$this->db->query("INSERT INTO " . DB_PREFIX . "category_description SET category_id = '{$ParentCategoryID}',  language_id = '{$lang_id}', name = '{$category}',description = '{$category}', meta_title = '{$category}'");

				$this->db->query("INSERT INTO " . DB_PREFIX . "category_to_store SET category_id = '{$ParentCategoryID}', store_id = '{$store_id}'");
		}else{


			$ParentCategoryID =	$ParentCategoryID->row['category_id'];
		}
		

		if($subcategory == ''){ return $ParentCategoryID; }

		//check if a subcategory exist, create if not
		$sql = "SELECT   c.category_id
					FROM oc_category  c 
					inner join oc_category_description d on  d.category_id =  c.category_id  
					where c.parent_id<>0 and d.language_id='{$lang_id}' and  d.name = '{$subcategory}';";

		$SubCategoryID = $this->db->query($sql);
		
		if(empty($SubCategoryID->row)){

				$this->db->query("INSERT INTO " . DB_PREFIX . "category SET  parent_id = '{$ParentCategoryID}', top = '0',  sort_order ='1',status = '1'");

				$SubCategoryID = $this->db->getLastId();

				$this->db->query("INSERT INTO " . DB_PREFIX . "category_description SET  category_id = '{$SubCategoryID}', language_id = '{$lang_id}', name = '{$subcategory}', description = '{$subcategory}', meta_title = '{$subcategory}'");

				$this->db->query("INSERT INTO " . DB_PREFIX . "category_to_store SET category_id = '{$SubCategoryID}', store_id = '{$store_id}'");
			
			
		}else{

			$SubCategoryID->row['category_id'];
		}




		return $SubCategoryID;
	}


	public function getProducts($data = array()) {
		$sql = "SELECT * FROM `" . DB_PREFIX . "product` p LEFT JOIN `" . DB_PREFIX . "product_description` pd ON (p.`product_id` = pd.`product_id`) WHERE pd.`language_id` = '" . (int)$this->config->get('config_language_id') . "'";

		if (!empty($data['filter_master_id'])) {
			$sql .= " AND p.master_id = '" . (int)$data['filter_master_id'] . "'";
		}

		if (!empty($data['filter_name'])) {
			$sql .= " AND pd.name LIKE '" . $this->db->escape((string)$data['filter_name']) . "%'";
		}

		if (!empty($data['filter_model'])) {
			$sql .= " AND p.model LIKE '" . $this->db->escape((string)$data['filter_model']) . "%'";
		}

		if (!empty($data['filter_price'])) {
			$sql .= " AND p.price LIKE '" . $this->db->escape((string)$data['filter_price']) . "%'";
		}

		if (isset($data['filter_quantity']) && $data['filter_quantity'] !== '') {
			$sql .= " AND p.quantity = '" . (int)$data['filter_quantity'] . "'";
		}

		if (isset($data['filter_status']) && $data['filter_status'] !== '') {
			$sql .= " AND p.status = '" . (int)$data['filter_status'] . "'";
		}

		$sql .= " GROUP BY p.product_id";

		$sort_data = array(
			'pd.name',
			'p.model',
			'p.price',
			'p.quantity',
			'p.status',
			'p.sort_order'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY pd.name";
		}

		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC";
		} else {
			$sql .= " ASC";
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

		$query = $this->db->query($sql);

		return $query->rows;
	}


}