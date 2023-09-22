<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('vp_head'))
{
	function vp_head(){

		?>
		<title>
			<?php echo get_field_data("site_title") ?> || <?php echo get_field_data("site_tagline") ?>
		</title>

		<?php echo $google_code ?>

		<meta name="author" content="<?php echo $meta_title ?>">
		<meta name="description" content="<?php echo $meta_discription ?>" />
		<meta name="keywords" content="<?php echo $meta_keywords ?>" />

		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">

		<?php $image_site_favicon = get_library_to_image(get_field_data("image_site_favicon")); ?>
		<link rel="icon" type="image/png" href="<?php echo $image_site_favicon ?>">
		<link rel="apple-touch-icon" href="<?php echo $image_site_favicon ?>">
		<?php
	}
}

if ( ! function_exists('vp_menu'))
{
    function vp_menu()
    {	
		$ci =& get_instance();
		$ci->load->database(); 
	
		$result = $ci->db->query("select * from tbl_menu where status=1 and menu_id=0 order by sorting_order asc")->result();
		foreach($result as $row){
			if($row->page_type!="" && $row->page_id){
				$row1 = $ci->db->query("select * from tbl_".$row->page_type." where id='$row->page_id'")->row();
			}
			if($row->page_type!="" && $row->page_id==0){
				$row1->url = $row->page_type;
			}
			$return.= '<li><a href="'.base_url().$row1->url.'" class="nav-link">'.$row->title.'</a>'.vp_menu_submenu($row1->id).'</li>';
		}
        return $return;
    }   
}

if ( ! function_exists('vp_menu_submenu'))
{
	function vp_menu_submenu($menu_id)
    {
		$ci =& get_instance();
		$ci->load->database(); 
	
		$result = $ci->db->query("select * from tbl_menu where status=1 and menu_id=$menu_id order by sorting_order asc")->result();
		foreach($result as $row){
			if($row->page_type!="" && $row->page_id){
				$row1 = $ci->db->query("select * from tbl_".$row->page_type." where id='$row->page_id'")->row();
			}
			if($row->page_type!="" && $row->page_id==0){
				$row1->url = $row->page_type;
			}
			$return.='<li> <a href="'.base_url().$row1->url.'" class="nav-link">'.$row->title.'</a></il>';
		}
		$result = $ci->db->query("SELECT options_id,tbl_options.page_type,tbl_options.page_name,tbl_options.isdefault FROM `tbl_menu` join tbl_page on tbl_page.id=tbl_menu.page_id and tbl_menu.page_type='page' and tbl_page.options_id!='' join  tbl_options on tbl_options.id=tbl_page.options_id and tbl_menu.id='$menu_id'")->result();
		foreach($result as $row){
			$tbl = $row->page_type; // yha par table ke liya use ho raha h
			if($row->isdefault=="1"){
				$page_type = "";
			}else{
				$page_type = "manage_".$row->page_name;
			}
			$result1 = $ci->db->query("SELECT * FROM `tbl_$tbl` where page_type='$page_type'")->result();
			foreach($result1 as $row1){
				$return.='<li> <a href="'.base_url().'blog/'.$row1->url.'" class="nav-link">'.$row1->title.'</a></il>';
			}			
		}
		if($return){
			$return ='<ul>'.$return.'</ul>';
		}
		return $return;	
	}
}

if ( ! function_exists('get_all_page_data'))
{
	function get_all_page_data($page_url="home"){

		$ci =& get_instance();
		$ci->load->database(); 

		$row1 = $ci->db->query("select id,page_type from tbl_menu where page_type='$page_url' and page_id=0")->row();
		if(!empty($row1->id)){
			$page_type = $row1->page_type;
			$link_page = $row1->page_type;
		}else{
			$row = $ci->db->query("select * from tbl_page where url='$page_url'")->row();
			$page_type = "page";
			$link_page = $row->link_page;
		}
		$data[0] = $row; 
		$data[1] = $page_type;
		$data[2] = $row->link_page;
		return $data;
	}
}

if ( ! function_exists('get_library_to_image'))
{	
	function get_library_to_image($id,$type="")
    {
		$ci =& get_instance();
		$ci->load->database(); 
	
		$row = $ci->db->query("select image from tbl_library where id='$id'")->row();
		
		if($row->image && $type==""){
			return base_url()."uploads/manage_library/photo/resize/".$row->image;
		}
		
		if($row->image && $type=="main"){
			return base_url()."uploads/manage_library/photo/main/".$row->image;
		}
	}
}

if ( ! function_exists('get_field_data'))
{	
	function get_field_data($field_name,$page_id='',$options_id='')
    {
		$ci =& get_instance();
		$ci->load->database(); 
		
		$where = "";
		if($page_id){
			$where = " and page_id='$page_id'";
		}
		
		if($options_id){
			$where.= " and options_id='$options_id'";
		}
		
		if(!$page_id && !$options_id){
			$where= " and page_id='$page_id' and options_id='$options_id'";
		}
		$row = $ci->db->query("select title from tbl_field_data where field_name='$field_name' $where")->row();
		return $row->title;
	}
}

if ( ! function_exists('get_blog'))
{
	function get_blog($page_type="")
    {
		$ci =& get_instance();
		$ci->load->database(); 
	
		$result = $ci->db->query("select * from tbl_blog where page_type='$page_type'")->result();
		return $result;
	}
}

if ( ! function_exists('get_gallery'))
{
	function get_gallery($page_type="")
    {
		$ci =& get_instance();
		$ci->load->database(); 
	
		$result = $ci->db->query("select * from tbl_gallery where page_type='$page_type'")->result();
		return $result;
	}
}