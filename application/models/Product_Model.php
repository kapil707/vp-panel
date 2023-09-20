<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Product_Model extends CI_Model  
{	
	function search_product($keyword='')
	{
		//$this->db->distinct();
		$this->db->select('tbl_product.*');
		$this->db->from('tbl_product');
		$this->db->join('tbl_product_category', "tbl_product.id=tbl_product_category.product_id", 'right outer');
		
		$this->db->join('tbl_variations1_variations2_join', "tbl_product.id=tbl_variations1_variations2_join.product_id and tbl_variations1_variations2_join.id = tbl_product.variations_join_id", 'right outer');
		$this->db->like('url', $keyword);
		$where = array('tbl_product.status'=>'1');
		//$this->db->where_in('tbl_product_category.category_id',$category_id);
		$this->db->where($where);
		if($orderby!="")
		{
			if($asc_desc=="asc")
			{
				$this->db->order_by($orderby,"asc");
			}
			if($asc_desc=="desc")
			{
				$this->db->order_by($orderby,"desc");
			}
		}
		$limit = 10;
		if($limit!="")
		{
			$this->db->limit($limit);
		}
		/*$this->db->group_by('tbl_category.name');*/
		$query = $this->db->get();
		return $query->result();
	}
	
	function get_category($limit=10)
	{
		$this->db->distinct();
		$this->db->select('tbl_category.name , tbl_category.url , tbl_category.id');
		$this->db->from('tbl_category');
		$this->db->join('tbl_product_category', "tbl_category.id=tbl_product_category.category_id", 'right outer');
		
		$where = array('tbl_category.status'=>'1','tbl_category.show_in_home'=>'1');
		$this->db->where($where);
		$this->db->limit($limit);
		$this->db->group_by('tbl_category.name');
		$query = $this->db->get();
		return $query->result();
	}
	
	
	
	function get_product_by_category_in($category_id='',$limit='',$orderby='',$asc_desc='asc',$min_price_set='',$max_price_set='')
	{
		//$this->db->distinct();
		$this->db->select('tbl_product.*');
		$this->db->from('tbl_product');
		$this->db->join('tbl_product_category', "tbl_product.id=tbl_product_category.product_id", 'right outer');
		
		$this->db->join('tbl_variations1_variations2_join', "tbl_product.id=tbl_variations1_variations2_join.product_id and tbl_variations1_variations2_join.id = tbl_product.variations_join_id", 'right outer');
		
		if($min_price_set!="")
		{
			$this->db->where('final_price >=', $min_price_set);
			$this->db->where('final_price <=', $max_price_set);
		}
		$where = array('tbl_product.status'=>'1');
		$this->db->where_in('tbl_product_category.category_id',$category_id);
		$this->db->where($where);
		if($orderby!="")
		{
			if($asc_desc=="asc")
			{
				$this->db->order_by($orderby,"asc");
			}
			if($asc_desc=="desc")
			{
				$this->db->order_by($orderby,"desc");
			}
		}
		else{
			$this->db->order_by("time","desc");
		}
		if($limit!="")
		{
			$this->db->limit($limit);
		}
		/*$this->db->group_by('tbl_category.name');*/
		$query = $this->db->get();
		return $query->result();
	}
	
	function get_product_image($product_id)
	{
		$this->db->select('*');
		$this->db->from('tbl_multiple_image');		
		$where = array('product_id'=>$product_id);
		$this->db->where($where);
		$query = $this->db->get();
		$row = $query->row();
		if($row->image=="")
		{
			$image = base_url()."uploads/images/default.png";
		}
		else
		{
			$image = base_url()."uploads/manage_product/photo/main/".$row->image;
		}
		return $image;
	}
	
	function get_product_price($product_id,$product_type)
	{
		$this->db->select('*');
		$this->db->from('tbl_variations1_variations2_join');
		if($product_type==1)
		{
			$where = array('product_id'=>$product_id);
		}
		if($product_type==2)
		{
			$where = array('product_id'=>$product_id,'variations1!='=>'0','variations2!='=>'0');
		}
		$this->db->where($where);
		$query = $this->db->get();
		$row = $query->row();
		
		$row_price[0] = number_format($row->mrp,2);
		$row_price[1] = number_format($row->sale_price,2);
		$row_price[2] = number_format($row->final_price,2);
		$row_price[3] = $row->discount;
		$row_price[4] = $row->quantity;
		return $row_price;
	}
	
	public function get_reviews_count($product_id)
	{
		$count = 0;
		$star = 0;
		$result = $this->db->query("select id,star from tbl_review where product_id='$product_id' order by id asc")->result();
		foreach($result as $row){
			$count++;
			$star = $star + $row->star;
		}
		$x[0] = $count;
		$x[1] = number_format($star / $count,1);
		if($x[0]=="0")
		{
			$x[1] = "0";
		}
		if($x[0]=="0")
		{
			$x[2] = '<i class="fa fa-star-o theme-star"></i>
			<i class="fa fa-star-o theme-star"></i>
			<i class="fa fa-star-o theme-star"></i>
			<i class="fa fa-star-o theme-star"></i>
			<i class="fa fa-star-o theme-star"></i>';
		}
		else
		{
			if($x[1]>=0.0 && $x[1]<=0.9)
			{
				$x[2] = '				
				<i class="fa fa-star-half-o theme-star"></i>
				<i class="fa fa-star-o theme-star"></i>
				<i class="fa fa-star-o theme-star"></i>
				<i class="fa fa-star-o theme-star"></i>
				<i class="fa fa-star-o theme-star"></i>';
			}
			if($x[1]>=0.9 && $x[1]<=1.0)
			{
				$x[2] = '				
				<i class="fa fa-star-half-o theme-star"></i>
				<i class="fa fa-star-o theme-star"></i>
				<i class="fa fa-star-o theme-star"></i>
				<i class="fa fa-star-o theme-star"></i>
				<i class="fa fa-star-o theme-star"></i>';
			}
			if($x[1]>=1.1 && $x[1]<=1.9)
			{
				$x[2] = '				
				<i class="fa fa-star theme-star"></i>
				<i class="fa fa-star-half-o theme-star"></i>
				<i class="fa fa-star-o theme-star"></i>
				<i class="fa fa-star-o theme-star"></i>
				<i class="fa fa-star-o theme-star"></i>';
			}
			if($x[1]>=1.9 && $x[1]<=2.0)
			{
				$x[2] = '				
				<i class="fa fa-star theme-star"></i>
				<i class="fa fa-star theme-star"></i>
				<i class="fa fa-star-o theme-star"></i>
				<i class="fa fa-star-o theme-star"></i>
				<i class="fa fa-star-o theme-star"></i>';
			}
			if($x[1]>=2.1 && $x[1]<=2.9)
			{
				$x[2] = '				
				<i class="fa fa-star theme-star"></i>
				<i class="fa fa-star theme-star"></i>
				<i class="fa fa-star-half-o theme-star"></i>
				<i class="fa fa-star-o theme-star"></i>
				<i class="fa fa-star-o theme-star"></i>';
			}
			if($x[1]>=2.9 && $x[1]<=3.0)
			{
				$x[2] = '				
				<i class="fa fa-star theme-star"></i>
				<i class="fa fa-star theme-star"></i>
				<i class="fa fa-star theme-star"></i>
				<i class="fa fa-star-o theme-star"></i>
				<i class="fa fa-star-o theme-star"></i>';
			}
			if($x[1]>=3.1 && $x[1]<=3.9)
			{
				$x[2] = '				
				<i class="fa fa-star theme-star"></i>
				<i class="fa fa-star theme-star"></i>
				<i class="fa fa-star theme-star"></i>
				<i class="fa fa-star-half-o theme-star"></i>
				<i class="fa fa-star-o theme-star"></i>';
			}
			if($x[1]>=3.9 && $x[1]<=4.0)
			{
				$x[2] = '				
				<i class="fa fa-star theme-star"></i>
				<i class="fa fa-star theme-star"></i>
				<i class="fa fa-star theme-star"></i>
				<i class="fa fa-star theme-star"></i>
				<i class="fa fa-star-o theme-star"></i>';
			}
			if($x[1]>=4.1 && $x[1]<=4.9)
			{
				$x[2] = '				
				<i class="fa fa-star theme-star"></i>
				<i class="fa fa-star theme-star"></i>
				<i class="fa fa-star theme-star"></i>
				<i class="fa fa-star theme-star"></i>
				<i class="fa fa-star-half-o theme-star"></i>';
			}
			if($x[1]>=4.9 && $x[1]<=5.0)
			{
				$x[2] = '				
				<i class="fa fa-star theme-star"></i>
				<i class="fa fa-star theme-star"></i>
				<i class="fa fa-star theme-star"></i>
				<i class="fa fa-star theme-star"></i>
				<i class="fa fa-star theme-star"></i>';
			}
		}
		
		$x[2] = "<span title='Rating ".$x[1]."'>".$x[2]."</span>";
		return $x;
	}
	
	
	
	
	
	function get_product_by_category_price($category_id='',$limit='',$orderby='',$asc_desc='asc')
	{
		//$this->db->distinct();
		$this->db->select('tbl_variations1_variations2_join.final_price');
		$this->db->from('tbl_product');
		$this->db->join('tbl_product_category', "tbl_product.id=tbl_product_category.product_id", 'right outer');
		
		$this->db->join('tbl_variations1_variations2_join', "tbl_product.id=tbl_variations1_variations2_join.product_id and tbl_variations1_variations2_join.id = tbl_product.variations_join_id", 'right outer');
		
		$where = array('tbl_product.status'=>'1');
		$this->db->where_in('tbl_product_category.category_id',$category_id);
		$this->db->where($where);
		if($orderby!="")
		{
			if($asc_desc=="asc")
			{
				$this->db->order_by($orderby,"asc");
			}
			if($asc_desc=="desc")
			{
				$this->db->order_by($orderby,"desc");
			}
		}
		if($limit!="")
		{
			$this->db->limit($limit);
		}
		/*$this->db->group_by('tbl_category.name');*/
		$query = $this->db->get();
		return $query->row();
	}
	
	function get_category_in_home_page($property_category='')
	{
		$this->db->select('*');
		$this->db->from('tbl_category');		
		$where = array('status'=>'1','show_in_home'=>'1','property_category'=>$property_category);
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result();
	}
	
	function get_category_in_home_page_menu_set($menu_set_id='')
	{
		$this->db->select('*');
		$this->db->from('tbl_category');		
		$where = array('show_in_home'=>'1','status'=>'1','menu_set_id'=>$menu_set_id);
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result();
	}
	
	function get_category_image($image='')
	{
		if($image=="")
		{
			$image = base_url()."uploads/images/default.png";
		}
		else
		{
			$image = base_url()."uploads/manage_category/photo/main/".$image;
		}
		return $image;
	}
	
	function get_variations_product_page($product_id='',$product_type='',$variations1_title='',$variations2_title='')
	{
		if($product_type==1) {
			
		}
		if($product_type==2) {
		$where1  = array('product_id'=>$product_id);		
		$result1 = $this->Main_Model->get_single_data_result("tbl_variations1",$where1);
		if(base64_decode($variations1_title)!=""){
		?>
		<div class="variations_title"><?= base64_decode($variations1_title); ?></div>
		<?php } ?>
		<ul class="variations">
		<?php
		$i = 0;
		foreach($result1 as $row1)
		{
			if(base64_decode($variations1_title)!=""){
			?>
			<li class="border rounded variations1_css variations1_css_<?php echo $row1->id ?> <?php if($i==0){ ?> variations_active <?php } ?>" onclick="variations1_change('<?php echo $row1->id ?>','<?php echo $row1->variations1_name ?>');">
				<?= base64_decode($row1->variations1_name); ?>
			</li>
			<?php } ?>
			<?php
			if($i==0){
				$variations1_id = $row1->id;
				$variations1_name = $row1->variations1_name;
			}
			$i++;
		}
		?>
		</ul>
		<?php
		$where2 = array('product_id'=>$product_id);			
		$result2 = $this->Main_Model->get_single_data_result("tbl_variations2",$where2);
		if(base64_decode($variations2_title)!=""){
		?>
			<div class="variations_title"><?= base64_decode($variations2_title); ?></div>
		<?php } ?>
		<ul class="variations">
		<?php
		$i = 0;
		foreach($result2 as $row2)
		{
			if(base64_decode($variations2_title)!=""){
			?>
			<li class="border rounded variations2_css variations2_css_<?php echo $row2->id ?> <?php if($i==0){ ?> variations_active <?php } ?>" onclick="variations2_change('<?php echo $row2->id ?>','<?php echo $row2->variations2_name ?>');">
				<?= base64_decode($row2->variations2_name); ?>
			</li>
			<?php } ?>
			<?php
			if($i==0){
				$variations2_id   = $row2->id;
				$variations2_name = $row2->variations2_name;
			}
			$i++;
		}
		?>
		</ul>
		<?php } ?>
		<script>
		$(".variations1_id").val('<?= $variations1_id ?>');
		$(".variations1_name").val('<?= $variations1_name ?>');
		$(".variations2_id").val('<?= $variations2_id ?>');
		$(".variations2_name").val('<?= $variations2_name ?>');
		<?php if($product_type==2) { ?>
		$(".variations1_name_span").html('(<?= base64_decode($variations1_name) ?>)');
		<?php if(base64_decode($variations2_title)!=""){ ?>
		$(".variations2_name_span").html('(<?= base64_decode($variations2_name) ?>)');
		<?php } ?><?php } ?>
		</script>
		<?php
	}
	public function get_cart_product_image($product_id='',$variations1_id='',$variations2_id='')
	{
		$this->db->select('tbl_multiple_image.*');
		$this->db->from('tbl_multiple_image');
		$this->db->join('tbl_variations1_variations2_join', "tbl_variations1_variations2_join.id=tbl_multiple_image.join_id", 'right outer');	
		
		$where = array('tbl_variations1_variations2_join.product_id'=>$product_id,'variations1'=>$variations1_id,'variations2'=>$variations2_id);
		$this->db->where($where);
		$query = $this->db->get();
		$row = $query->row();
		if($row->image=="")
		{
			$image = base_url()."uploads/images/default.png";
			
			$this->db->select('tbl_multiple_image.*');
			$this->db->from('tbl_multiple_image');
			
			$where = array('product_id'=>$product_id,);
			$this->db->where($where);
			$query = $this->db->get();
			$row = $query->row();
			if($row->image=="")
			{
				$image = base_url()."uploads/images/default.png";
			}
			else
			{
				$image = base_url()."uploads/manage_product/photo/main/".$row->image;
			}
		}
		else
		{
			$image = base_url()."uploads/manage_product/photo/main/".$row->image;
		}
		return $image;
	}
	
	public function get_cart_total_items()
	{
		/****************************************************************/
		$temp_id = $this->Product_Model->get_session_of_cart();
		/****************************************************************/
		$i = 0;
		$where = array('temp_id'=>$temp_id);
		$result = $this->Product_Model->get_single_data_result("tbl_add_to_cart",$where);
		foreach($result as $row)
		{
			$i++;
		}
		return $i;
	}
	
	public function get_cart_total_price()
	{
		/****************************************************************/
		$temp_id = $this->Product_Model->get_session_of_cart();
		/****************************************************************/
		$i = 0;
		$where = array('temp_id'=>$temp_id);
		$result = $this->Product_Model->get_single_data_result("tbl_add_to_cart",$where);
		foreach($result as $row)
		{
			$i = ($row->final_price*$row->quantity) + $i;
		}
		return $i;
	}
	
	public function menu_cart_dropdown()
	{
		$price_icon = $this->Scheme_Model->get_website_data("price_icon");
		/****************************************************************/
		$temp_id = $this->Product_Model->get_session_of_cart();
		/****************************************************************/
		$where = array('temp_id'=>$temp_id);
		$result = $this->Product_Model->get_single_data_result("tbl_add_to_cart",$where);
		?>
		<div class="row total-header-section">
			<div class="col-lg-6 col-sm-6 col-6">
				<i class="fa fa-shopping-cart" aria-hidden="true"></i>
				<span class="badge badge-pill badge-danger">
				<?php echo $this->Product_Model->get_cart_total_items() ?>
				</span>
			</div>
			<div class="col-lg-6 col-sm-6 col-6 total-section text-right">
				<p>Total: <span class="text-info">
				<?php echo $price_icon ?><?php echo number_format($this->Product_Model->get_cart_total_price(),2); ?>
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
			?>
			<div class="row cart-detail">
				<div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
					<img src="<?php echo $image ?>">
				</div>
				<div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
					<p><?= ucwords(strtolower(base64_decode($row->product_name))) ?></p>
					<span class="price text-info">
					<?php echo $price_icon ?><?php echo number_format($row->final_price*$row->quantity,2) ?>
					</span>
					<span class="count"> Quantity:<?php echo $row->quantity ?></span>
				</div>
			</div>
		<?php } ?>
		<div class="row">
			<div class="col-lg-6 col-sm-6 col-12 text-center">
				<a href="<?= base_url(); ?>cart">
				<button class="">Checkout</button></a>
			</div>
			<div class="col-lg-6 col-sm-6 col-12 text-center">
				<a href="<?= base_url(); ?>cart/checkout">
				<button class="">Proceed to Checkout</button></a>
			</div>
		</div>
		<?php
	}
	
	
}  