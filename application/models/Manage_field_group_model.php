<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Manage_field_group_model extends CI_Model  
{  
	function get_field_group_set_page_type()
    {
		?>
		<option value="page">Page</li>
		<option value="blog">Blog</li>
		<?php
	}
	
	function get_field_group_admin_to_page_name($page_type,$page_id)
    {		
		$row = $this->db->query("select title from tbl_$page_type where id='$page_id'")->row();
		
		return $row->title;
	}
	
	function get_field_type_to_type($id)
    {		
		$row = $this->db->query("select title from tbl_field_group_type where id='$id'")->row();
		
		return $row->title;
	}
	
	function get_field_group_to_show_box($page_type,$id)
    {	
		$result = $this->db->query("SELECT tbl_field_group.*,tbl_field_group_type.title as type FROM `tbl_field_group` join tbl_field_group_type on tbl_field_group.field_type = tbl_field_group_type.id join tbl_field_group_set on tbl_field_group_set.group_id=tbl_field_group.id where tbl_field_group_set.page_type='$page_type' and tbl_field_group_set.page_id='$id'")->result();
		foreach($result as $row){
			if($row->type=="text"){
				?>
				<div class="ibox float-e-margins">
					<div class="ibox-content">
						<div class="form-group">
							<div class="col-sm-12">
								<label class="control-label" for="form-field-1">
									<?php echo $row->field_label ?>
								</label>
							</div>
							<div class="col-sm-12">
								<input type="text" class="form-control" id="form-field-1" placeholder="<?php echo $row->field_label ?>" name="<?php echo $row->field_name ?>" value="<?php echo get_field_data($row->field_name) ?>" <?php if($row->required==1){ echo "requried"; } ?> />
							</div>
						</div>
					</div>
				</div>
				<?php
			}
			
			if($row->type=="textarea"){ ?>
				<div class="ibox float-e-margins">
					<div class="ibox-content">
						<div class="form-group">
							<div class="col-sm-12">
								<label class="control-label" for="form-field-1">
									<?php echo $row->field_label ?>
								</label>
							</div>
							<div class="col-sm-12">
								<textarea type="text" class="form-control" id="form-field-1" placeholder="<?php echo $row->field_label ?>" name="<?php echo $row->field_name ?>" style="height:100px" <?php if($row->required==1){ echo "requried"; } ?>><?php echo get_field_data($row->field_name) ?></textarea>
							</div>
						</div>
					</div>
				</div>
				<?php
			}
			
			if($row->type=="image"){
				?>
				<div class="ibox float-e-margins">
					<div class="ibox-content">
						<div class="form-group">
							<div class="col-sm-12">
								<label class="control-label" for="form-field-1">
									<?php echo $row->field_label ?>
								</label>
							</div>
							<?php if(get_field_data($row->field_name)=="") { ?>
							<div class="col-sm-12">
								<input type="file" class="form-control" name="<?php echo $row->field_name ?>" <?php if($row->required==1){ echo "required"; } ?> />
							</div>
							<?php } else { ?>
							<div class="col-sm-12 css_<?php echo $row->field_name ?>">
							
							</div>
							<div class="col-sm-3 img_css_<?php echo $row->field_name ?>">
								<img src="<?php echo get_library_to_image(get_field_data($row->field_name))?>" width="100%">
								<a href="javascript:void(0)" onclick="delete_field_data_image('<?php echo $row->field_name ?>','<?php echo $row->required ?>')" class="btn-white btn btn-xs">Delete</a>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
				<?php
			}
		}
	}
	
	function get_field_group_admin_page_view($group_id)
    {		
		$items = "";
		
		$result = $this->db->query("select page_type,page_id from tbl_field_group_set where group_id='$group_id'")->result();
		foreach($result as $row) {
			$items.= $this->get_field_group_admin_to_page_name($row->page_type,$row->page_id).",";
		}
		if ($items != '') {
			$items = substr($items, 0, -1);
		}
		return $items;
	}
	
	public function insert_field_group_set($page_type,$page_id,$group_id){
		
		$system_ip 	= $this->input->ip_address();
		$time 		= time();
		$date 		= date("Y-m-d",$time);
		$user_id 	= $this->session->userdata("user_id");
		
		$dt = array(
		'page_type'=>$page_type,
		'page_id'=>$page_id,
		'group_id'=>$group_id,
		'date'=>$date,
		'time'=>$time,
		'update_date'=>$date,
		'update_time'=>$time,
		'system_ip'=>$system_ip,
		'user_id'=>$user_id,);
		$this->Scheme_Model->insert_fun("tbl_field_group_set",$dt);
	}
	
	function insert_field_data()
    {		
		$system_ip 	= $this->input->ip_address();
		$time 		= time();
		$date 		= date("Y-m-d",$time);
		$user_id 	= $this->session->userdata("user_id");
		
		$result = $this->db->query("select field_name from tbl_field_group where status=1")->result();
		foreach($result as $row) {
			
			$title 	= "";
			$field_name = $row->field_name;
			if($_POST[$field_name])
			{
				$title 	= $_POST[$field_name];
			}	
			
			if($_FILES[$field_name]["name"]!="")
			{
				$title 	= $this->Manage_library_Model->insert_image_library($_FILES[$field_name]);
			}
			
			if($title!=""){
				$dt = array(
					'title'=>$title,
					'field_name'=>$field_name,
					'date'=>$date,
					'time'=>$time,
					'update_date'=>$date,
					'update_time'=>$time,
					'system_ip'=>$system_ip,
					'user_id'=>$user_id,);
				
				$row1 = $this->db->query("select id from tbl_field_data where field_name='$field_name'")->row();
				if($row1->id==""){
					$this->Scheme_Model->insert_fun("tbl_field_data",$dt);
				}else{
					$where = array("id"=>$row1->id);
					$this->Scheme_Model->edit_fun("tbl_field_data",$dt,$where);
				}
			}
		}
	}
	
	
	/********************************************************/
	
	function get_all_category_for_selected($category_id,$id,$myi)
    {		
		$i = $myi + 20;
		$result = $this->db->query("select id,title from tbl_category where status=1 and category_id='$id'")->result();
		foreach($result as $row){
			?>
			<div class="col-sm-12">
				<label style="margin-left:<?php echo $i; ?>px;">
					<input type="checkbox" class="new_check_box" name="category_id[]" value="<?php echo $row->id ?>" <?php if(in_array($row->id,$category_id)) { echo "checked"; } ?>> 
					<?php echo $row->title; ?>
				<label>
			</div>
			<?php
			$this->get_all_category_for_selected($category_id,$row->id,$i);
		}
	}
}  