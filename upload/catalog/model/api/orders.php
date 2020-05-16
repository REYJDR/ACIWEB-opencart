<?php

include_once(DIR_APPLICATION.'controller/api/koddika/ExceptionsHandler.php');


class ModelApiOrders extends Model {
	
    use ExceptionsHandler;
    

    public function getOrders($data) {


        $this->setUserErrorAdvice();
        
          try{

        
                $sql = "SELECT *, (SELECT os.name FROM `" . DB_PREFIX . "order_status` os WHERE os.order_status_id = o.order_status_id AND os.language_id = o.language_id) AS order_status FROM `" . DB_PREFIX . "order` o ";
        
                $where = '';
                $limit = '';
        
                if (!empty($data['filter_order_id'])) {

                   // $where .= " AND o.order_id  = '" . (int)$data['filter_order_id'] . "'";

                    $where == '' ? $where = "where o.order_id  = '" . (int)$data['filter_order_id'] . "'" :  $where .= " AND o.order_id  = '" . (int)$data['filter_order_id'] . "'";
                   

                }
        
                if (!empty($data['filter_status'])) {
                   

                    $where == '' ? $where = " where o.order_status_id = '" . $this->db->escape((int)$data['filter_status']) . "'" :  $where .= " AND o.order_status_id = '" . $this->db->escape((int)$data['filter_status']) . "'";
                    
                }
        
               
                if ($data['filter_has_invoices']== "1")   $where == '' ? $where = " where o.invoice_no <> '0' " :  $where .= " AND o.invoice_no <> '0' ";
                    
                if ($data['filter_has_invoices']== "0")   $where == '' ? $where = " where o.invoice_no = '0' " :  $where .= " AND o.invoice_no = '0' ";
                    
              
        
                if (isset($data['start']) || isset($data['limit'])) {
                    if ($data['start'] < 0) {
                        $data['start'] = 0;
                    }
        
                    if ($data['limit'] < 1) {
                        $data['limit'] = 20;
                    }
        
                    $limit = " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
                }
        
             
                $sql = $sql.$where.$limit;
              
        
                $order_query = $this->db->query($sql);
                
        
                if ($order_query->num_rows) {


                        foreach ($order_query->rows as $key => $row) {


                            $country_query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "country` WHERE country_id = '" . (int)$row['payment_country_id'] . "'");
                            
                            if ($country_query->num_rows) {
                                $payment_iso_code_2 = $country_query->row['iso_code_2'];
                                $payment_iso_code_3 = $country_query->row['iso_code_3'];
                            } else {
                                $payment_iso_code_2 = '';
                                $payment_iso_code_3 = '';
                            }

                            $zone_query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "zone` WHERE zone_id = '" . (int)$row['payment_zone_id'] . "'");

                            if ($zone_query->num_rows) {
                                $payment_zone_code = $zone_query->row['code'];
                            } else {
                                $payment_zone_code = '';
                            }

                            $country_query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "country` WHERE country_id = '" . (int)$row['shipping_country_id'] . "'");

                            if ($country_query->num_rows) {
                                $shipping_iso_code_2 = $country_query->row['iso_code_2'];
                                $shipping_iso_code_3 = $country_query->row['iso_code_3'];
                            } else {
                                $shipping_iso_code_2 = '';
                                $shipping_iso_code_3 = '';
                            }

                            $zone_query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "zone` WHERE zone_id = '" . (int)$row['shipping_zone_id'] . "'");

                            if ($zone_query->num_rows) {
                                $shipping_zone_code = $zone_query->row['code'];
                            } else {
                                $shipping_zone_code = '';
                            }

                            $this->load->model('localisation/language');

                            $language_info = $this->model_localisation_language->getLanguage($row['language_id']);

                            if ($language_info) {
                                $language_code = $language_info['code'];
                            } else {
                                $language_code = $this->config->get('config_language');
                            }




                        
                            $order[$key]['header'] = array(
                                'order_id'                => $row['order_id'],
                                'invoice_no'              => $row['invoice_no'],
                                'invoice_prefix'          => $row['invoice_prefix'],
                                'store_id'                => $row['store_id'],
                                'store_name'              => $row['store_name'],
                                'store_url'               => $row['store_url'],
                                'customer_id'             => $row['customer_id'],
                                'firstname'               => $row['firstname'],
                                'lastname'                => $row['lastname'],
                                'email'                   => $row['email'],
                                'telephone'               => $row['telephone'],
                                'custom_field'            => json_decode($row['custom_field'], true),
                                'payment_firstname'       => $row['payment_firstname'],
                                'payment_lastname'        => $row['payment_lastname'],
                                'payment_company'         => $row['payment_company'],
                                'payment_address_1'       => $row['payment_address_1'],
                                'payment_address_2'       => $row['payment_address_2'],
                                'payment_postcode'        => $row['payment_postcode'],
                                'payment_city'            => $row['payment_city'],
                                'payment_zone_id'         => $row['payment_zone_id'],
                                'payment_zone'            => $row['payment_zone'],
                                'payment_zone_code'       => $payment_zone_code,
                                'payment_country_id'      => $row['payment_country_id'],
                                'payment_country'         => $row['payment_country'],
                                'payment_iso_code_2'      => $payment_iso_code_2,
                                'payment_iso_code_3'      => $payment_iso_code_3,
                                'payment_address_format'  => $row['payment_address_format'],
                                'payment_custom_field'    => json_decode($row['payment_custom_field'], true),
                                'payment_method'          => $row['payment_method'],
                                'payment_code'            => $row['payment_code'],
                                'shipping_firstname'      => $row['shipping_firstname'],
                                'shipping_lastname'       => $row['shipping_lastname'],
                                'shipping_company'        => $row['shipping_company'],
                                'shipping_address_1'      => $row['shipping_address_1'],
                                'shipping_address_2'      => $row['shipping_address_2'],
                                'shipping_postcode'       => $row['shipping_postcode'],
                                'shipping_city'           => $row['shipping_city'],
                                'shipping_zone_id'        => $row['shipping_zone_id'],
                                'shipping_zone'           => $row['shipping_zone'],
                                'shipping_zone_code'      => $shipping_zone_code,
                                'shipping_country_id'     => $row['shipping_country_id'],
                                'shipping_country'        => $row['shipping_country'],
                                'shipping_iso_code_2'     => $shipping_iso_code_2,
                                'shipping_iso_code_3'     => $shipping_iso_code_3,
                                'shipping_address_format' => $row['shipping_address_format'],
                                'shipping_custom_field'   => json_decode($row['shipping_custom_field'], true),
                                'shipping_method'         => $row['shipping_method'],
                                'shipping_code'           => $row['shipping_code'],
                                'comment'                 => $row['comment'],
                                'total'                   => $row['total'],
                                'order_status_id'         => $row['order_status_id'],
                                'order_status'            => $row['order_status'],
                                'affiliate_id'            => $row['affiliate_id'],
                                'commission'              => $row['commission'],
                                'language_id'             => $row['language_id'],
                                'language_code'           => $language_code,
                                'currency_id'             => $row['currency_id'],
                                'currency_code'           => $row['currency_code'],
                                'currency_value'          => $row['currency_value'],
                                'ip'                      => $row['ip'],
                                'forwarded_ip'            => $row['forwarded_ip'],
                                'user_agent'              => $row['user_agent'],
                                'accept_language'         => $row['accept_language'],
                                'date_added'              => $row['date_added'],
                                'date_modified'           => $row['date_modified']
                            );


                            $product_query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "order_product` WHERE order_id = '" . (int)$row['order_id'] . "'");
                            $order[$key]['detail'] = $product_query->rows;
                            

                        }

                        $this->ConsultResponse(200,$order,true);

                } else {
                    $this->ConsultResponse(200,'Not found any orders!',true);
                }


            }catch(Exception $ex){ // Anything that went wrong
                
                $this->ConsultResponse(400,$ex->getMessage(),true);
            }


        }



}