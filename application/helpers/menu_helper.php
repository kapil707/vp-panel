<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('get_menu'))
{
    function get_menu()
    {	
		$ci =& get_instance();
		$ci->load->database(); 
	
		$result = $ci->db->query("select * from tbl_menu where status=1 and menu_id=0 order by sorting_order asc")->result();
		foreach($result as $row){
			$x.= '<li><a href="'.base_url().$row->url.'" class="nav-link">'.$row->title.'</a></li>';
		}
        return $x;
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
		if($field=="field"){
			$image_data1 = $image_data;
			$image_data = get_field_data($image_data);
		}
		$image_path = get_library_to_image($image_data);
		?>
		<input type="hidden" name="<?php echo $image_name ?>_old" value="<?php echo $image_data ?>" class="<?php echo $image_name ?>_old_cls">
		<div class="form-group">
			<div class="col-sm-12">
				<label class="control-label">
					<?php echo $image_label ?>
				</label>
			</div>
			<?php if($image_path=="") { ?>
			<div class="col-sm-12">
				<input type="file" class="form-control" name="<?php echo $image_name ?>" class="<?php echo $image_cls ?>" <?php if($required==1) { echo "required"; } ?>/>
			</div>
			<?php } else { ?>
				<div class="col-sm-12 default_field_css_<?php echo $image_data1 ?>"></div>
				<?php if($field=="field"){ ?>
				<div class="col-sm-4 img_default_field_css_<?php echo $image_data1 ?>">
				<?php } else { ?>
				<div class="col-sm-12 img_default_field_css_<?php echo $image_data1 ?>">
				<?php } ?>
					<img src="<?php echo $image_path ?>" width="100%">
					<?php if($field=="field"){ ?>
						<a href="javascript:void(0)" onclick="delete_field_data_image('<?php echo $image_data1 ?>','<?php echo $required ?>')" class="btn-white btn btn-xs">Delete</a>
					<?php } else { ?>
						<a href="javascript:void(0)" onclick="delete_page_image('<?php echo $image_data1 ?>','<?php echo $required ?>')" class="btn-white btn btn-xs">Delete</a>
					<?php } ?>
			</div>
			<?php } ?>
		</div>
		<?php
	}
}