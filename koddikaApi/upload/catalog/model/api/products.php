<?php

include_once(DIR_APPLICATION.'controller/api/koddika/ExceptionsHandler.php');


class ModelApiProducts extends Model {
	
	use ExceptionsHandler;


	public function addProduct($data) {

		try{
				$this->db->query("INSERT INTO " . DB_PREFIX . "product SET master_id = '" . (int)$data['master_id'] . "', model = '" . $this->db->escape((string)$data['model']) . "', sku = '" . $this->db->escape((string)$data['sku']) . "', upc = '" . $this->db->escape((string)$data['upc']) . "', ean = '" . $this->db->escape((string)$data['ean']) . "', jan = '" . $this->db->escape((string)$data['jan']) . "', isbn = '" . $this->db->escape((string)$data['isbn']) . "', mpn = '" . $this->db->escape((string)$data['mpn']) . "', location = '" . $this->db->escape((string)$data['location']) . "', variant = '" . $this->db->escape(!empty($data['variant']) ? json_encode($data['variant']) : '') . "', override = '" . $this->db->escape(!empty($data['override']) ? json_encode($data['override']) : '') . "', quantity = '" . (int)$data['quantity'] . "', minimum = '" . (int)$data['minimum'] . "', subtract = '" . (int)$data['subtract'] . "', stock_status_id = '" . (int)$data['stock_status_id'] . "', date_available = '" . $this->db->escape((string)$data['date_available']) . "', manufacturer_id = '" . (int)$data['manufacturer_id'] . "', shipping = '" . (int)$data['shipping'] . "', price = '" . (float)$data['price'] . "', points = '" . (int)$data['points'] . "', weight = '" . (float)$data['weight'] . "', weight_class_id = '" . (int)$data['weight_class_id'] . "', length = '" . (float)$data['length'] . "', width = '" . (float)$data['width'] . "', height = '" . (float)$data['height'] . "', length_class_id = '" . (int)$data['length_class_id'] . "', status = '" . (int)$data['status'] . "', tax_class_id = '" . (int)$data['tax_class_id'] . "', sort_order = '" . (int)$data['sort_order'] . "', date_added = NOW(), date_modified = NOW()");
		
				$product_id = $this->db->getLastId();
		
				if ($data['image']) {
					$this->db->query("UPDATE " . DB_PREFIX . "product SET image = '" . $this->db->escape((string)$data['image']) . "' WHERE product_id = '" . (int)$product_id . "'");
				}
		
				// Description
				foreach ($data['product_description'] as $language_id => $value) {
					$this->db->query("INSERT INTO " . DB_PREFIX . "product_description SET product_id = '" . (int)$product_id . "', language_id = '" . (int)$language_id . "', name = '" . $this->db->escape($value['name']) . "', description = '" . $this->db->escape($value['description']) . "', tag = '" . $this->db->escape($value['tag']) . "', meta_title = '" . $this->db->escape($value['meta_title']) . "', meta_description = '" . $this->db->escape($value['meta_description']) . "', meta_keyword = '" . $this->db->escape($value['meta_keyword']) . "'");
				}
		
				// Categories
				if (isset($data['product_category'])) {
					foreach ($data['product_category'] as $category_id) {
						$this->db->query("INSERT INTO " . DB_PREFIX . "product_to_category SET product_id = '" . (int)$product_id . "', category_id = '" . (int)$category_id . "'");
					}
				}
		
				// Filters
				if (isset($data['product_filter'])) {
					foreach ($data['product_filter'] as $filter_id) {
						$this->db->query("INSERT INTO " . DB_PREFIX . "product_filter SET product_id = '" . (int)$product_id . "', filter_id = '" . (int)$filter_id . "'");
					}
				}
		
				// Stores
				if (isset($data['product_store'])) {
					foreach ($data['product_store'] as $store_id) {
						$this->db->query("INSERT INTO " . DB_PREFIX . "product_to_store SET product_id = '" . (int)$product_id . "', store_id = '" . (int)$store_id . "'");
					}
				}
		
				// Downloads
				if (isset($data['product_download'])) {
					foreach ($data['product_download'] as $download_id) {
						$this->db->query("INSERT INTO " . DB_PREFIX . "product_to_download SET product_id = '" . (int)$product_id . "', download_id = '" . (int)$download_id . "'");
					}
				}
		
				// Related
				if (isset($data['product_related'])) {
					foreach ($data['product_related'] as $related_id) {
						$this->db->query("DELETE FROM " . DB_PREFIX . "product_related WHERE product_id = '" . (int)$product_id . "' AND related_id = '" . (int)$related_id . "'");
						$this->db->query("INSERT INTO " . DB_PREFIX . "product_related SET product_id = '" . (int)$product_id . "', related_id = '" . (int)$related_id . "'");
						$this->db->query("DELETE FROM " . DB_PREFIX . "product_related WHERE product_id = '" . (int)$related_id . "' AND related_id = '" . (int)$product_id . "'");
						$this->db->query("INSERT INTO " . DB_PREFIX . "product_related SET product_id = '" . (int)$related_id . "', related_id = '" . (int)$product_id . "'");
					}
				}
		
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
		
				// Options
				if (isset($data['product_option'])) {
					foreach ($data['product_option'] as $product_option) {
						if ($product_option['type'] == 'select' || $product_option['type'] == 'radio' || $product_option['type'] == 'checkbox' || $product_option['type'] == 'image') {
							if (isset($product_option['product_option_value'])) {
								$this->db->query("INSERT INTO " . DB_PREFIX . "product_option SET product_id = '" . (int)$product_id . "', option_id = '" . (int)$product_option['option_id'] . "', required = '" . (int)$product_option['required'] . "'");
		
								$product_option_id = $this->db->getLastId();
		
								foreach ($product_option['product_option_value'] as $product_option_value) {
									$this->db->query("INSERT INTO " . DB_PREFIX . "product_option_value SET product_option_id = '" . (int)$product_option_id . "', product_id = '" . (int)$product_id . "', option_id = '" . (int)$product_option['option_id'] . "', option_value_id = '" . (int)$product_option_value['option_value_id'] . "', quantity = '" . (int)$product_option_value['quantity'] . "', subtract = '" . (int)$product_option_value['subtract'] . "', price = '" . (float)$product_option_value['price'] . "', price_prefix = '" . $this->db->escape($product_option_value['price_prefix']) . "', points = '" . (int)$product_option_value['points'] . "', points_prefix = '" . $this->db->escape($product_option_value['points_prefix']) . "', weight = '" . (float)$product_option_value['weight'] . "', weight_prefix = '" . $this->db->escape($product_option_value['weight_prefix']) . "'");
								}
							}
						} else {
							$this->db->query("INSERT INTO " . DB_PREFIX . "product_option SET product_id = '" . (int)$product_id . "', option_id = '" . (int)$product_option['option_id'] . "', value = '" . $this->db->escape($product_option['value']) . "', required = '" . (int)$product_option['required'] . "'");
						}
					}
				}
		
				// Recurring
				if (isset($data['product_recurring'])) {
					foreach ($data['product_recurring'] as $product_recurring) {
						if (isset($product_recurring['recurring_id'])) {
							$this->db->query("INSERT INTO `" . DB_PREFIX . "product_recurring` SET `product_id` = '" . (int)$product_id . "', customer_group_id = '" . (int)$product_recurring['customer_group_id'] . "', `recurring_id` = '" . (int)$product_recurring['recurring_id'] . "'");
						}
					}
				}
		
				// Discounts
				if (isset($data['product_discount'])) {
					foreach ($data['product_discount'] as $product_discount) {
						$this->db->query("INSERT INTO " . DB_PREFIX . "product_discount SET product_id = '" . (int)$product_id . "', customer_group_id = '" . (int)$product_discount['customer_group_id'] . "', quantity = '" . (int)$product_discount['quantity'] . "', priority = '" . (int)$product_discount['priority'] . "', price = '" . (float)$product_discount['price'] . "', date_start = '" . $this->db->escape($product_discount['date_start']) . "', date_end = '" . $this->db->escape($product_discount['date_end']) . "'");
					}
				}
		
				// Specials
				if (isset($data['product_special'])) {
					foreach ($data['product_special'] as $product_special) {
						$this->db->query("INSERT INTO " . DB_PREFIX . "product_special SET product_id = '" . (int)$product_id . "', customer_group_id = '" . (int)$product_special['customer_group_id'] . "', priority = '" . (int)$product_special['priority'] . "', price = '" . (float)$product_special['price'] . "', date_start = '" . $this->db->escape($product_special['date_start']) . "', date_end = '" . $this->db->escape($product_special['date_end']) . "'");
					}
				}
		
				// Images
				if (isset($data['product_image'])) {
					foreach ($data['product_image'] as $product_image) {
						$this->db->query("INSERT INTO " . DB_PREFIX . "product_image SET product_id = '" . (int)$product_id . "', image = '" . $this->db->escape($product_image['image']) . "', sort_order = '" . (int)$product_image['sort_order'] . "'");
					}
				}
		
				// Reward
				if (isset($data['product_reward'])) {
					foreach ($data['product_reward'] as $customer_group_id => $product_reward) {
						if ((int)$product_reward['points'] > 0) {
							$this->db->query("INSERT INTO " . DB_PREFIX . "product_reward SET product_id = '" . (int)$product_id . "', customer_group_id = '" . (int)$customer_group_id . "', points = '" . (int)$product_reward['points'] . "'");
						}
					}
				}
		
				// SEO URL
				if (isset($data['product_seo_url'])) {
					foreach ($data['product_seo_url'] as $store_id => $language) {
						foreach ($language as $language_id => $keyword) {
							if ($keyword) {
								$this->db->query("INSERT INTO " . DB_PREFIX . "seo_url SET store_id = '" . (int)$store_id . "', language_id = '" . (int)$language_id . "', query = 'product_id=" . (int)$product_id . "', keyword = '" . $this->db->escape($keyword) . "', push = '" . $this->db->escape('route=product/product&product_id=' . (int)$product_id) . "'");
							}
						}
					}
				}
		
				// Layout
				if (isset($data['product_layout'])) {
					foreach ($data['product_layout'] as $store_id => $layout_id) {
						$this->db->query("INSERT INTO " . DB_PREFIX . "product_to_layout SET product_id = '" . (int)$product_id . "', store_id = '" . (int)$store_id . "', layout_id = '" . (int)$layout_id . "'");
					}
				}
		
				$this->cache->delete('product');
		
				return $product_id;

			}catch(Exception $ex){ // Anything that went wrong
					
				$this->ConsultResponse(400,$ex->getMessage(),true);
			}
	} 
	
	public function getProductByNameModel($product_name,$product_model='') {
		
		$query = $this->db->query("SELECT DISTINCT * FROM `" . DB_PREFIX . "product` p LEFT JOIN `" . DB_PREFIX . "product_description` pd ON (p.`product_id` = pd.`product_id`) WHERE pd.`name` = '" . (string)$product_name . "' AND  p.`model` = '" . (string)$product_model . "' AND pd.`language_id` = '" . (int)$this->config->get('config_language_id') . "'");

		return $query->row;
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