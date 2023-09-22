<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Manage_field_group_model extends CI_Model  
{  
	function get_field_group_set_page_type($selected="")
    {
		?>
		<option value="page" <?php if($selected=="page") { echo "selected"; } ?>>Page</li>
		<option value="blog"  <?php if($selected=="blog") { echo "selected"; } ?>>Blog</li>
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
	
	function get_field_group_to_show_box($page_type,$page_id)
    {
		$result = $this->db->query("SELECT tbl_field_group.*,tbl_field_group_type.title as type FROM `tbl_field_group` join tbl_field_group_type on tbl_field_group.field_type = tbl_field_group_type.id join tbl_field_group_set on tbl_field_group_set.group_id=tbl_field_group.id where tbl_field_group_set.page_type='$page_type' and tbl_field_group_set.page_id='$page_id'")->result();
		foreach($result as $row){ ?>
		<input type="hidden" name="page_id" value="<?php echo $page_id ?>">
		<?php
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
								<input type="text" class="form-control" id="form-field-1" placeholder="<?php echo $row->field_label ?>" name="<?php echo $row->field_name ?>" value="<?php echo get_field_data($row->field_name,$page_id) ?>" <?php if($row->required==1){ echo "requried"; } ?> />
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
								<textarea type="text" class="form-control" id="form-field-1" placeholder="<?php echo $row->field_label ?>" name="<?php echo $row->field_name ?>" style="height:100px" <?php if($row->required==1){ echo "requried"; } ?>><?php echo get_field_data($row->field_name,$page_id) ?></textarea>
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
						<?php admin_side_image($row->field_label,$row->field_name,"",$row->field_name,"field",$row->required,$page_id,0); ?>
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
			
			$page_id 	= $_POST["page_id"];
			$options_id = $_POST["options_id"];
			if($page_id==""){
				$page_id = 0;
			}
			if($options_id==""){
				$options_id = 0;
			}
			
			if($title!=""){
				$dt = array(
					'title'=>$title,
					'field_name'=>$field_name,
					'page_id'=>$page_id,
					'options_id'=>$options_id,
					'date'=>$date,
					'time'=>$time,
					'update_date'=>$date,
					'update_time'=>$time,
					'system_ip'=>$system_ip,
					'user_id'=>$user_id,);
				
				$row = $this->db->query("select id from tbl_field_data where field_name='$field_name' and page_id='$page_id' and options_id='$options_id'")->row();
				if($row->id==""){
					$this->Scheme_Model->insert_fun("tbl_field_data",$dt);
				}else{
					$where = array("id"=>$row->id);
					$this->Scheme_Model->edit_fun("tbl_field_data",$dt,$where);
				}
			}
		}
	}
	
	// yha oss time insert karta ha jo sida banay ha 
	function insert_field_data_default($title,$field_name)
    {		
		$system_ip 	= $this->input->ip_address();
		$time 		= time();
		$date 		= date("Y-m-d",$time);
		$user_id 	= $this->session->userdata("user_id");
		
		$page_id 	= $_POST["page_id"];
		$options_id = $_POST["options_id"];
		if($page_id==""){
			$page_id = 0;
		}
		if($options_id==""){
			$options_id = 0;
		}
			
		if($title!=""){
			$dt = array(
				'title'=>$title,
				'field_name'=>$field_name,
				'page_id'=>$page_id,
				'options_id'=>$options_id,
				'date'=>$date,
				'time'=>$time,
				'update_date'=>$date,
				'update_time'=>$time,
				'system_ip'=>$system_ip,
				'user_id'=>$user_id,);
			
			$row1 = $this->db->query("select id from tbl_field_data where field_name='$field_name' and page_id='$page_id' and options_id='$options_id'")->row();
			if($row1->id==""){
				$this->Scheme_Model->insert_fun("tbl_field_data",$dt);
			}else{
				$where = array("id"=>$row1->id);
				$this->Scheme_Model->edit_fun("tbl_field_data",$dt,$where);
			}
		}
	}
	
	
	/********************************************************/
	
	function get_all_category_for_selected($category_id,$id,$myi,$page_type,$page_name)
    {		
		$i = $myi + 20;
		$result = $this->db->query("select tbl_category.id,tbl_category.title from tbl_category join tbl_options on tbl_options.id=tbl_category.options_id where tbl_category.status=1 and tbl_category.category_id='$id' and tbl_options.page_type='$page_type' and tbl_options.page_name='$page_name'")->result();
		foreach($result as $row){
			?>
			<div class="col-sm-12">
				<label style="margin-left:<?php echo $i; ?>px;">
					<input type="checkbox" class="new_check_box" name="category_id[]" value="<?php echo $row->id ?>" <?php if(in_array($row->id,$category_id)) { echo "checked"; } ?>> 
					<?php echo $row->title; ?>
				<label>
			</div>
			<?php
			$this->get_all_category_for_selected($category_id,$row->id,$i,$page_type,$page_name);
		}
	}

	/********************************************************/
	
	function get_all_type_of_category_to_join_in_page($selected="")
    {
		?>
		<div class="form-group">
			<div class="col-sm-12">
				<label class="control-label" for="form-field-1">
					Content To Join
				</label>
			</div>
			<div class="col-sm-12">
				<select name="options_id" id="options_id" data-placeholder="Select Parent Category" class="chosen-select">
					<option value="">
						Select Content To Join
					</option>
					<optgroup label="Blogs">
					<?php
					$query = $this->db->query("select * from tbl_options where status=1 and page_type='blog'")->result();
					foreach($query as $r){
						?>
						<option value="<?php echo $r->id ?>" <?php if($r->id==$selected) { ?> selected <?php } ?>>
						<?php echo $r->page_name ?>
						</option>
						<?php
					}
					?>
					</optgroup>
					
					<optgroup label="Gallery">
					<?php
					$query = $this->db->query("select * from tbl_options where status=1 and page_type='gallery'")->result();
					foreach($query as $r){
						?>
						<option value="<?php echo $r->id ?>" <?php if($r->id==$selected) { ?> selected <?php } ?>>
						<?php echo $r->page_name ?>
						</option>
						<?php
					}
					?>
					</optgroup>
				</select>
			</div>
			<div class="help-inline col-sm-12 has-error">
				<span class="help-block reset middle">  
					<?= form_error('options_id'); ?>
				</span>
			</div>
		</div>
		<?php
	}
}  