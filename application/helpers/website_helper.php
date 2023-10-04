<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('remove_p_tag'))
{
	function remove_p_tag($data)
    {
		$data = str_replace(['<p>', '</p>'], '', $data);
		return $data;
	}
}

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
			$row1 = $ci->db->query("select * from tbl_page where id='$row->page_id'")->row();
			if($row->child_page!=""){
				$row1->url = $row->child_page;
			}
			$dt = get_blog_pg_url($row->page_type,$row->child_page);
			if($dt["url"]) {
				$row1->url = $dt["url"];
			}
			
			$return.= '<li><a href="'.base_url().$row1->url.'" class="nav-link">'.$row->title.'</a>'.vp_menu_submenu($row->id).'</li>';
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
		
		// iss say wo wala sub manu ata ha jo sirf menu say set hota ha 
		$result = $ci->db->query("select * from tbl_menu where status=1 and menu_id='$menu_id' order by sorting_order asc")->result();
		foreach($result as $row){
			if($row->page_type!="" && $row->page_id){
				$row1 = $ci->db->query("select * from tbl_".$row->page_type." where id='$row->page_id'")->row();
			}
			if($row->page_type!="" && $row->page_id==0){
				$row1->url = $row->page_type;
			}
			$return.='<li> <a href="'.base_url().$row1->url.'" class="nav-link">'.$row->title.'</a></il>';
		}
		
		// iss say blogs ke sub menu atay ha 
		$result = $ci->db->query("SELECT * FROM `tbl_menu` where id='$menu_id' and page_type='blog' and child_page!='' and page_id=0")->result();
		foreach($result as $row){
			$result1 = $ci->db->query("SELECT * FROM `tbl_page` where page_type='$row->page_type' and child_page='$row->child_page'")->result();
			foreach($result1 as $row1){
				$blog = "Blog";
				$dt = get_blog_pg_url($row1->page_type,$row1->child_page);
				if($dt["url"]){
					$blog = $dt["url"];
				}
				$return.='<li> <a href="'.base_url().$blog.'/'.$row1->url.'" class="nav-link">'.$row1->title.'</a></il>';
			}			
		}
		
		$result = $ci->db->query("SELECT * FROM `tbl_menu` where id='$menu_id' and page_type='blog' and child_page='' and page_id=0")->result();
		foreach($result as $row){
			$result1 = $ci->db->query("SELECT * FROM `tbl_page` where page_type='$row->page_type' and child_page='$row->child_page'")->result();
			foreach($result1 as $row1){
				$blog = "Blog";
				$dt = get_blog_pg_url($row1->page_type,$row1->child_page);
				if($dt["url"]){
					$blog = $dt["url"];
				}
				$return.='<li> <a href="'.base_url().$blog.'/'.$row1->url.'" class="nav-link">'.$row1->title.'</a></il>';
			}			
		}
		if($return){
			$return ='<ul style="display:none">'.$return.'</ul>';
		}
		return $return;	
	}
}

if ( ! function_exists('get_all_page_data'))
{
	function get_all_page_data($page_url="home"){

		$ci =& get_instance();
		$ci->load->database(); 
		
		$row = $ci->db->query("select * from tbl_page where url='$page_url'")->row();
		$page_type = "page";
		$link_page = $row->link_page;
		
		$data[0] = $row; 
		$data[1] = $page_type;
		$data[2] = $row->link_page;
		//print_r($data);
		return $data;
	}
}

if ( ! function_exists('get_all_blog_data'))
{
	function get_all_blog_data($page_url){

		$ci =& get_instance();
		$ci->load->database(); 
		
		$row = $ci->db->query("select * from tbl_page where url='$page_url'")->row();
		$dt = get_blog_pg_url($row->page_type,$row->child_page);
		
		$data[0] = $row; 
		$data[1] = $page_type;
		$data[2] = $dt["link_page"];

		return $data;
	}
}

if ( ! function_exists('get_blog_pg_url'))
{	
	function get_blog_pg_url($page_type="",$child_page=""){
		
		$ci =& get_instance();
		$ci->load->database(); 
		
		$page_type = "manage_".$page_type;
		if($child_page){
			$page_type = "manage_".$child_page;
		}
		
		$row = $ci->db->query("select * from tbl_permission_page where page_type='$page_type'")->row();
		
		$row1 = $ci->db->query("select link_page,url from tbl_page where join_page_id='$row->id'")->row();
		
		$data["link_page"] = $row1->link_page;
		$data["url"] = $row1->url;
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
	function get_field_data($field_name,$page_id=0)
    {
		$ci =& get_instance();
		$ci->load->database(); 

		$row = $ci->db->query("select title from tbl_field_data where field_name='$field_name' and page_id='$page_id'")->row();
		return $row->title;
	}
}

if ( ! function_exists('get_field_data_id'))
{	
	function get_field_data_id($field_name,$page_id=0)
    {
		$ci =& get_instance();
		$ci->load->database(); 

		$row = $ci->db->query("select id from tbl_field_data where field_name='$field_name' and page_id='$page_id'")->row();
		return $row->id;
	}
}

if ( ! function_exists('get_blog'))
{
	function get_blog($child_page="")
    {
		$ci =& get_instance();
		$ci->load->database(); 
	
		$result = $ci->db->query("select * from tbl_page where page_type='blog' and child_page='$child_page'")->result();
		return $result;
	}
}

if ( ! function_exists('get_gallery'))
{
	function get_gallery($child_page="")
    {
		$ci =& get_instance();
		$ci->load->database(); 
	
		$result = $ci->db->query("select * from tbl_page where page_type='gallery' and child_page='$child_page'")->result();
		return $result;
	}
}

if ( ! function_exists('get_social_icon'))
{
	function get_social_icon()
    {
		$ci =& get_instance();
		$ci->load->database(); 
	
		$result = $ci->db->query("select * from tbl_page where page_type='social_icon'")->result();
		return $result;
	}
}