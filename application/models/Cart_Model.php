<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cart_Model extends CI_Model  
{
	function get_session_of_cart()
	{
		$MAC = exec('getmac'); 
		$MAC = strtok($MAC, ' ');
		$ipaddress = getenv('HTTP_CLIENT_IP');
		return $MAC.$ipaddress.rand()."_".time();
	}
	
	function temp_id_for_order_time()
	{
		$MAC = exec('getmac'); 
		$MAC = strtok($MAC, ' ');
		return $MAC."_".time();
	}
	
	function get_next_order_id()
	{		
		$where = "";//array('mac'=>$mac);
		$row   = $this->Main_Model->get_single_data_row("tbl_order_id",$where,'id','desc');
		
		$next_id = $row->next_id + 1;
		$dt = array('next_id'=>$next_id,);
		$where = array('id'=>"1");
		$this->Main_Model->edit_fun("tbl_order_id",$dt,$where);	

		return $row->prefix.$row->next_id;		
	}
	
	function get_session_of_user($query_work='')
	{
		$mac = $this->get_session_of_cart();
		
		$mac   = "Guest_".$mac;
		$_SESSION["client_id"] = $mac;
		$where = array('mac'=>$mac);
		$row   = $this->Main_Model->get_single_data_row("tbl_client",$where);
		if($row->id=="")
		{
			if($query_work==1)
			{
				$fname  = base64_encode($_POST["fname"]);
				$lname  = base64_encode($_POST["lname"]);
				$mobile = ($_POST["mobile"]);
				$email  = ($_POST["email"]);
				
				$status = 1;
				$time = time();
				$date = date("Y-m-d",$time);
				
				$dt = array('fname'=>$fname,'lname'=>$lname,'mobile'=>$mobile,'email'=>$email,'status'=>$status,'time'=>$time,'date'=>$date,'mac'=>$mac,);
				$client_id = $this->Scheme_Model->insert_fun("tbl_client",$dt);
				$this->Scheme_Model->register_email($id);
				
				/*$dt = array('fname'=>$fname,'lname'=>$lname,'mobile'=>$mobile,'email'=>$email,'client_id'=>$client_id,);
				$addressid = $this->Scheme_Model->insert_fun("tbl_client_address",$dt);*/
			}
		}
		else
		{
			$client_id = $row->id;
			$where = array('client_id'=>$client_id);
			$row   = $this->Main_Model->get_single_data_row("tbl_client_address",$where);
			$addressid = $row->id;
		}
		$x[0] = $client_id;
		$x[1] = $addressid;
		return $x;
	}
	
	public function get_cart_total_items()
	{
		$i = 0;
		/****************************************************************/
		$temp_id = $_SESSION["temp_id"];
		/****************************************************************/
		if($_SESSION["client_id"]!=""){
			$client_id = $_SESSION["client_id"];
			$where = array('client_id'=>$client_id,'status'=>0);
		}
		else{
			$where = array('temp_id'=>$temp_id,'status'=>0);
		}
		$result = $this->Main_Model->get_single_data_result("tbl_add_to_cart",$where);foreach($result as $row)
		{
			$i++;
		}
		return $i;
	}
	
	public function get_cart_total_price()
	{
		$i = 0;
		/****************************************************************/
		$temp_id = $_SESSION["temp_id"];
		/****************************************************************/
		if($_SESSION["client_id"]!=""){
			$client_id = $_SESSION["client_id"];
			$where = array('client_id'=>$client_id,'status'=>0);
		}
		else{
			$where = array('temp_id'=>$temp_id,'status'=>0);
		}
		$result = $this->Main_Model->get_single_data_result("tbl_add_to_cart",$where);foreach($result as $row)
		{
			$i = ($row->final_price*$row->quantity) + $i;
		}
		return $i;
	}
	
	public function menu_cart_dropdown()
	{
		$price_icon = $this->Main_Model->get_website_data("price_icon");
		/****************************************************************/
		$temp_id = $_SESSION["temp_id"];
		/****************************************************************/
		if($_SESSION["client_id"]!=""){
			$client_id = $_SESSION["client_id"];
			$where = array('client_id'=>$client_id,'status'=>0);
		}
		else{
			$where = array('temp_id'=>$temp_id,'status'=>0);
		}
		$result = $this->Main_Model->get_single_data_result("tbl_add_to_cart",$where);
		?>
		<Script>
		$(".total_of_cart").html('<?php echo $total_of_cart = $this->Cart_Model->get_cart_total_items() ?>')
		</script>
		<div class="row total-header-section">
			<div class="col-lg-6 col-sm-6 col-6 menu_mycart">
				<i class="fa fa-shopping-cart" aria-hidden="true"></i> 
				My Cart 
				<span class="badge badge-pill badge-danger">
				<?php echo $total_of_cart ?>
				</span>
			</div>
			<div class="col-lg-6 col-sm-6 col-6 total-section text-right menu_mycart_total">
				<p>Total: <span class="">
				<?php echo $price_icon ?><?php echo number_format($this->Cart_Model->get_cart_total_price(),2); ?>
				</span></p>
			</div>
		</div>
		<?php
		foreach($result as $row)
		{
			$row_id 		= $row->id;
			$product_id 	= $row->product_id;
			$variations1_id = $row->variations1_id;
			$variations2_id = $row->variations2_id;
			
			$image = $this->Product_Model->get_cart_product_image($product_id,$variations1_id,$variations2_id);
			
			$where = array('id'=>$product_id);
			$tbl_product = $this->Main_Model->get_single_data_row("tbl_product",$where);
			$url = base_url()."product/".$tbl_product->url.".html?v1=$variations1_id&v2=$variations2_id";
			?>
			<div class="row cart-detail">
				<div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
					<a href="<?= $url ?>">
						<img src="<?php echo $image ?>" class="">
					</a>
				</div>
				<div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
					<a href="<?= $url ?>">
						<div class="product_title">
							<?= ucwords(strtolower(base64_decode($row->product_name))) ?>
						</div>
					</a>
					<span class="price">Price :
						<?php echo $price_icon ?><?php echo number_format($row->final_price*$row->quantity,2) ?>
					</span><Br>
					<span class="count"> Quantity : <?php echo $row->quantity ?></span>
					<p>
						<button type="button" class="btn dropdown_cart_remove_cart" onclick="dropdown_cart_remove_cart('<?php echo $row->id ?>')">
						<i class="fa fa-shopping-bag mr-1"></i>
							Remove
						</button>
					</p>
				</div>
			</div>
		<?php } ?>
		<div class="row cart-detail">
			<div class="col-lg-6 col-sm-6 col-12 text-center">
				<a href="<?= base_url(); ?>cart">
				<button class="btn btn_view_cart">View Cart</button></a>
			</div>
			<div class="col-lg-6 col-sm-6 col-12 text-center">
				<a href="<?= base_url(); ?>cart/checkout">
				<button class="btn btn_checkout">Checkout</button></a>
			</div>
		</div>
		<?php
	}
	
	
	public function get_cart_in_page()
	{	
		$price_icon = $this->Main_Model->get_website_data("price_icon");
		$i = 1;
		/****************************************************************/
		$temp_id = $_SESSION["temp_id"];
		/****************************************************************/
		if($_SESSION["client_id"]!=""){
			$client_id = $_SESSION["client_id"];
			$where = array('client_id'=>$client_id,'status'=>0);
		}
		else{
			$where = array('temp_id'=>$temp_id,'status'=>0);
		}
		$result = $this->Main_Model->get_single_data_result("tbl_add_to_cart",$where);
		foreach($result as $row)
		{
			$row_id 		= $row->id;
			$product_id 	= $row->product_id;
			$variations1_id = $row->variations1_id;
			$variations2_id = $row->variations2_id;
			
			$image = $this->Product_Model->get_cart_product_image($product_id,$variations1_id,$variations2_id);
			?>
			<div class="cart_page_div_full cart_item_<?php echo $row_id ?>">
				<div class="cart_page_div_for_img text-center">
					<a href="#" class="cart_page_page_image">
						<img src="<?php echo $image ?>" class="img-fluid img-thumbnail" style="max-height: 40vh;">
					</a>
				</div>
				<div class="cart_page_div_other_info">
					<p>
						<a href="<?= base_url(); ?>product/<?= $row1->url; ?>.html?v1=<?= $row->variations1_name?>&v2=<?= $row->variations2_name?>">
						<span class="cart_page_product_title">
						<?= base64_decode($row->product_name)?>
						</span>
						<?php
						if($row1->variations1_title!="")
						{
							?>
							<br>
							<?= base64_decode($row1->variations1_title); ?>:
							<span>
							<?= base64_decode($row->variations1_name); ?>
							</span>
							<?php
						}
						?>
						<?php
						if($row1->variations2_title!="")
						{
							?>
							<br>
							<?= base64_decode($row1->variations2_title); ?>:
							<?php
							if($row->variations2_name!="0") { ?>
							<span>
							<?= base64_decode($row->variations2_name); ?>
							</span>
							<?php
							}
						}
						?></a>
					</p>
					<p class="cart_page_product_price">
						Price : <?= $price_icon ?> <?php echo number_format($row->final_price,2) ?>
					</p>
					<p class="cart_page_product_quantity">
						<label>Quantity:</label>
						<select class="cart_page_product_quantity1 quantity_<?php echo $row_id ?>" onchange="onchange_select_quantity('<?php echo $row_id ?>')">
							<?php 
							$max_qty = "20";
							//$max_qty = $join->quantity;
							?>
							<?php for($r=1;$r<=$max_qty;$r++){ ?>
							<option value="<?= $r?>" 
							<?php if($row->quantity==$r){ echo "selected"; } ?>><?= $r?></option>
							<?php } ?>
						</select>
					</p>
					<p class="cart_page_product_subtotal">
						Subtotal (<?= $row->quantity;?> item):
						<?php echo $price_icon ?><?php echo number_format($row->final_price*$row->quantity,2) ?>
					</p>
					<p>
						<button type="button" class="btn cart_page_remove_cart" onclick="cart_page_remove_cart('<?php echo $row->id ?>')">
						<i class="fa fa-shopping-bag mr-1"></i>
							Remove to Cart
						</button>
					</p>
				</div>
			</div>
		<?php } ?>
		<?php 
	}
	
	public function Checkout_page_cart_total($coutry_id,$state_id)
	{
		$price_icon = $this->Main_Model->get_website_data("price_icon");
		$total = 0;
		$gst = 0;
		/****************************************************************/
		$temp_id = $_SESSION["temp_id"];
		/****************************************************************/
		if($_SESSION["client_id"]!=""){
			$client_id = $_SESSION["client_id"];
			$where = array('client_id'=>$client_id,'status'=>0);
		}
		else{
			$where = array('temp_id'=>$temp_id,'status'=>0);
		}
		$result = $this->Main_Model->get_single_data_result("tbl_add_to_cart",$where);
		foreach($result as $row)
		{
			$total+= $row->final_price * $row->quantity;
		}
		
		$tbl_invoice_setting = $this->db->query("select * FROM `tbl_invoice_setting` where id='1'")->row();
		
		$invoice_country_id = $tbl_invoice_setting->country_id;
		$invoice_state_id	= $tbl_invoice_setting->state_id;
		$shipping_free 		= $this->Scheme_Model->get_website_data("add_shipping_free");
		$shipping 			= $this->Scheme_Model->get_website_data("add_fix_shipping");
		?>
		<ul class="checkout_ul1">
			<li>Subtotal : 
				<span><?= $price_icon ?>
				<?= $subtotal = number_format($total,2); ?>
				<?php $subtotal1 = round($total,2); ?></span>
			</li>
			<li>Shipping : 
				<?php 
				$query = $this->db->query("select * FROM `tbl_shipping` where country_id='$coutry_id' and state_id='$state_id'")->row();
				if($query->id)
				{
					$shipping = $query->shipping;
				}
				?>
				<span><?= $price_icon ?>
				<?= $shipping = number_format($shipping,2); ?></span>
			</li>
			<?php
			if($state_id==$invoice_state_id)
			{
				$gst_type = "1";
				?>
				<li>
					SGST : 
					<span><?= $price_icon ?>
					<?= number_format($gst/2,2); ?></span>
				</li>
				<li>
					CGST : 
					<span><?= $price_icon ?>
					<?= number_format($gst/2,2); ?>
					<?php $gst = number_format($gst,2); ?></span>
				</li>
				<?php
			}
			else
			{
				$gst_type = "2";
				?>
				<li>
					IGST : 
					<span><?= $price_icon ?>
					<?= $gst = number_format($gst,2); ?></span>
				</li>
				<?php 
			}
			?>
			<li>
				Discount : 
				<?php
				$coupon_code_discount = $_SESSION["coupon_code_discount"];
				if($coupon_code_discount=="")
				{
					$coupon_code_discount = 0;
				}
				?>
				<span><?= $price_icon ?>
				<?= $coupon_code_discount = number_format($coupon_code_discount,2); ?>	</span>				
			</li>
			<li>
				Grand Total : 
				<span><?= $price_icon ?>
				<?= $grand_total = number_format($total+$gst+$shipping-$coupon_code_discount,2); ?>
				<?php $grand_total1 = round($total+$gst+$shipping-$coupon_code_discount,2); ?></span>
			</li>
		</ul>
		<input type="hidden" name="subtotal" value="<?= $subtotal1 ?>">
		<input type="hidden" name="shipping" value="<?= $shipping ?>">
		<input type="hidden" name="gst" value="<?= $gst ?>">
		<input type="hidden" name="gst_type" value="<?= $gst_type ?>">
		<input type="hidden" name="coupon_code_discount" value="<?= $coupon_code_discount ?>">
		<input type="hidden" name="grand_total" value="<?= $grand_total1 ?>">
		<?php
	}
	
	
	//emailsend_function
	public function view_invoice_by_id($id)
	{
		$price_icon = $this->Main_Model->get_website_data("price_icon");
		$where = array('id'=>$id);
		$row = $this->Main_Model->get_single_data_row("tbl_checkout",$where,'','','','');
		$order_id 		= $row->order_id;
		$datetime 		= $row->datetime;
		$fname 			= base64_decode($row->fname);
		$lname 			= base64_decode($row->lname);
		$companyname 	= base64_decode($row->companyname);
		$email 			= $row->email;
		$mobile 		= $row->mobile;
		$country_id 	= $row->country_id;
		$state_id 		= $row->state_id;
		$city_id 		= $row->city_id;
		$postcode 		= $row->postcode;		
		$subtotal 		= $row->subtotal;
		$shipping 		= $row->shipping;
		$gst 			= $row->gst;
		$gst_type 		= $row->gst_type;
		$coupon_code_discount = $row->coupon_code_discount;
		$grand_total	= $row->grand_total;
		
		/******************************************/
		$where = array('id'=>$country_id);
		$tbl_country = $this->Main_Model->get_single_data_row("tbl_country",$where,'','','','');
		$country	= $tbl_country->name;	

		$where = array('id'=>$state_id);
		$tbl_state 	= $this->Main_Model->get_single_data_row("tbl_state",$where,'','','','');
		$state			= $tbl_state->name;	
		
		$where = array('id'=>$city_id);
		$tbl_city 	= $this->Main_Model->get_single_data_row("tbl_city",$where,'','','','');
		$city			= $tbl_city->name;	
		
		/******************************************/
		$address 		= base64_decode($row->address)."<br>$city , $state ,$country, $postcode";
		/******************************************/
		
		
		$payment_type   = $row->payment_type;
		if($payment_type=="1")
		{
			$where = array('id'=>$payment_type);
			$tbl_show_payment_btn = $this->Main_Model->get_single_data_row("tbl_show_payment_btn",$where,'','','','');
			$payment_type = $tbl_show_payment_btn->button_type;
		}
		if($payment_type=="2")
		{
			/*$where = array('id'=>$payment_type);
			$tbl_show_payment_btn = $this->Main_Model->get_single_data_row("tbl_show_payment_btn",$where,'','','','');
			$payment_type = $tbl_show_payment_btn->button_type;*/
			
			
			$where = array('ORDERID'=>$order_id);
			$tbl_paytm_response = $this->Main_Model->get_single_data_row("tbl_paytm_response",$where,'','','','');
			$payment_type= "Paytm ($tbl_paytm_response->GATEWAYNAME)";
		}
		/********************************************/
		
		$where = array('join_to_order'=>$row->id);
		$result = $this->Main_Model->get_single_data_result("tbl_add_to_cart",$where,'','','','');
		foreach ($result as $row1)
		{
			$quantity = $row1->quantity;
			$final_price = $row1->final_price;
			$product_gst = $row1->product_gst;
			$product_name = ucwords(strtolower(base64_decode($row1->product_name)));
			$total = number_format($final_price *$quantity ,2);
			$final_price = number_format(round($final_price,2));
			$myproductdata.='<tr><td style="font-size: 17px;padding: 6px;">
				'.$product_name.'
			</td>
			<td style="font-size: 17px;text-align:right;padding: 6px;">
				'.$quantity.'
			</td>
			<td style="font-size: 17px;text-align:right;padding: 6px;">
				'.$price_icon.' '.$final_price.'/-
			</td>
			<td style="font-size: 17px;text-align:right;padding: 6px;">
				'.$product_gst.'
			</td>
			<td style="font-size: 17px;text-align:right;padding: 6px;">
				'.$price_icon.' '.$total.'/-		
			</td></tr>';
		}
		
		$tax = $gst;
		if($gst_type==1)
		{			
			$gst = "<div class='col-sm-12 col-12 text-right'>
						Total GST : ".$price_icon." ".number_format($gst,2)."/-
					</div>";
		}
		else
		{
			$gst = "<div class='col-sm-12 col-12 text-right'>
						Total SGST : ".$price_icon." ".number_format($gst/2,2)."/-
					</div>
					<div class='col-sm-12 col-12 text-right'>
						Total CGST : ".$price_icon." ".number_format($gst/2,2)."/-
					</div>";
		}
		
		$img_url = base_url()."/uploads/manage_website/photo/main/".$this->Main_Model->get_website_data("logo");
		
		$tbl_invoice_setting = $this->db->query("select * FROM `tbl_invoice_setting` where id='1'")->row();
		
		$invoice_country_id = $tbl_invoice_setting->country_id;
		$invoice_state_id	= $tbl_invoice_setting->state_id;
		$invoice_address    = $tbl_invoice_setting->invoice_address;
		$invoice_footer     = $tbl_invoice_setting->footer;
		
		$mailbody = "<div class='row'>
						<div class='col-sm-6 col-6'>
							<img src='".$img_url."' width='80%'>
							<br>
						</div>
						<div class='col-sm-6 col-6 text-right'>
							<br>
							<div>Order Number : ".$order_id."</div>
							<div>Order Date :".$datetime."</div>
							<div>Payment Type : ".$payment_type."</div>
						</div>
						<div class='col-sm-12 col-12 text-center'>
							<h3><b>Tax Invoice / Online</b></h3>
						</div>
					</div>
					<div class='row'>
						<div class='col-sm-6 col-6'>
							<b>Sold By:</b><br>
							<div>".$invoice_address."</div>
						</div>
						<div class='col-sm-6 col-6 text-right'>
							<b>Billing Address:</b><br>
							<div>".$companyname."</div>
							<div>".$fname." ".$lname."</div>
							<div>".$email."</div>
							<div>".$mobile."</div>
							<div>".$address."</div>
						</div>
					</div>
					<div class='row'>
						<div class='col-sm-12 col-12'>
							<table class='table-bordered table-striped'>
								<tr>
									<td style='background: #eee;border-bottom: 1px solid #ddd;font-weight: bold;padding: 6px;font-size: 17px;color:#2e2e2e;'>
										Product Name
									</td>
									<td style='background: #eee;border-bottom: 1px solid #ddd;font-weight: bold;font-size: 17px;padding: 6px;width: 5%;color:#2e2e2e;text-align:center;'>Qty</td>		
									<td style='background: #eee;border-bottom: 1px solid #ddd;font-weight: bold;font-size: 17px;padding: 6px;color:#2e2e2e;width: 20%;text-align:center;'>
										Price
									</td>
									<td style='background: #eee;border-bottom: 1px solid #ddd;font-weight: bold;font-size: 17px;padding: 6px;color:#2e2e2e;width: 20%;text-align:center;'>
										".$title_of_tax."(%)
									</td>
									<td style='background: #eee;border-bottom: 1px solid #ddd;font-weight: bold;font-size: 17px;padding: 6px;width: 20%;color:#2e2e2e;text-align:center;'>
										Total
									</td>
								</tr>
								".$myproductdata."
						  </table>
						</div>
					</div>
					<div class='row'>
						<div class='col-sm-12 col-12 text-right'>
						   Subtotal : ".$price_icon." ".$subtotal."/-
						</div>
						<div class='col-sm-12 col-12 text-right'>
						   Shipping : ".$price_icon." ".$shipping."/-
						</div>
						".$gst."
						<div class='col-sm-12 col-12 text-right'>
						   Discount : ".$price_icon." ".$coupon_code_discount."/-
						</div>
						<div class='col-sm-12 col-12 text-right'>
						   Grand Total : ".$price_icon." ".$grand_total."/-
						</div>
					</div>
					<div class='row'>
						<div class='col-sm-12 col-12 text-center'>
							<br>
							$invoice_footer
						</div>
					</div>";
		return $mailbody;
	}
}  