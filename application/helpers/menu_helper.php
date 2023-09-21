<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('get_menu'))
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
		$result = $ci->db->query("SELECT blog_type FROM `tbl_menu` join tbl_page on tbl_page.id=tbl_menu.page_id and tbl_menu.page_type='page' and tbl_page.blog_type!='' and tbl_menu.id='$menu_id'")->result();
		foreach($result as $row){
			if($row->blog_type=="default"){
				$page_type = "";
			}else{
				$page_type = "manage_".$row->blog_type;
			}
			$result1 = $ci->db->query("SELECT * FROM `tbl_blog` where page_type='$page_type'")->result();
			foreach($result1 as $row1){
				$return.='<li> <a href="'.base_url().'blog/'.$row1->url.'" class="nav-link">'.$row1->title.'</a></il>';
			}			
		}
		if($return){
			$return ='<ul>'.$return.'</ul>';
		}
		return $return;	
	}

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
	
	function get_field_data($field_name)
    {
		$ci =& get_instance();
		$ci->load->database(); 
	
		$row = $ci->db->query("select title from tbl_field_data where field_name='$field_name'")->row();
		return $row->title;
	}

	function admin_side_image($image_label,$image_name,$image_cls,$image_data,$field,$required) {
		$image_data1 = $image_name;
		if($field=="field" || $field=="field-12") {
			$image_data1 = $image_data;
			$image_data = get_field_data($image_data);
		}
		$image_path = get_library_to_image($image_data,'main');
		?>
		<input type="hidden" name="<?php echo $image_name ?>_old" value="<?php echo $image_data ?>" class="<?php echo $image_name ?>_old_cls">
		<div class="form-group">
			<div class="col-sm-12" style="margin-top:5px;">
				<label class="control-label">
					<?php echo $image_label ?>
				</label>
			</div>
			<?php if($image_path=="") { ?>
			<div class="col-sm-12" style="margin-top:5px;">
				<input type="file" class="form-control" name="<?php echo $image_name ?>" class="<?php echo $image_cls ?>" <?php if($required==1) { echo "required"; } ?>/>
			</div>
			<?php } else { ?>
				<div class="col-sm-12 default_field_css_<?php echo $image_data1 ?>" style="margin-top:5px;"></div>
				<?php if($field=="field"){ ?>
				<div class="col-sm-4 img_default_field_css_<?php echo $image_data1 ?>" style="margin-top:5px;">
				<?php } else { ?>
				<div class="col-sm-12 img_default_field_css_<?php echo $image_data1 ?>" style="margin-top:5px;">
				<?php } ?>
					<img src="<?php echo $image_path ?>" width="100%">
					<?php if($field=="field" || $field=="field-12") {?>
						<a href="javascript:void(0)" onclick="delete_field_data_image('<?php echo $image_data1 ?>','<?php echo $required ?>')" class="btn-white btn btn-xs">Delete</a>
					<?php } else { ?>
						<a href="javascript:void(0)" onclick="delete_page_image('<?php echo $image_data1 ?>','<?php echo $required ?>')" class="btn-white btn btn-xs" style="margin-top:5px;">Delete</a>
					<?php } ?>
			</div>
			<?php } ?>
		</div>
		<?php
	}

	function get_blog($page_type="")
    {
		$ci =& get_instance();
		$ci->load->database(); 
	
		$result = $ci->db->query("select * from tbl_blog where page_type='$page_type'")->result();
		return $result;
	}
}