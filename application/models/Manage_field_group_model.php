<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Manage_field_group_model extends CI_Model  
{  
	function get_field_group_set_page_type($page_type="",$child_page="")
    {
		?>
		<option value="page" <?php if($page_type=="page") { echo "selected"; } ?>>Page</li>
		<option value="blog"  <?php if($page_type=="blog" && $child_page=="") { echo "selected"; } ?>>Blog</li>
		<?php 
		$row = $this->db->query("select id from tbl_permission_page where page_type='manage_blog'")->row();
		
		$result = $this->db->query("select page_title,page_type from tbl_permission_page where menu_id='$row->id'")->result();
		foreach($result as $row){
			$page_title = str_replace("Manage","",$row->page_title);
			$page_type_ = str_replace("manage_","",$row->page_type);
			?>
			<option value="blog"
			child_page="<?php echo $page_type_ ?>"
			<?php if($page_type=="blog" && $child_page==$page_type_) { echo "selected"; } ?>>
			<?php echo $page_title ?>
			</li>
			<?php
		}
	}
	
	function get_field_group_admin_to_page_type($page_type="",$child_page="",$page_id="",$group_id="")
    {
		if($page_type=="blog"){
			$row = $this->db->query("select id from tbl_permission_page where page_type='manage_blog'")->row();
			
			$result = $this->db->query("select page_title,page_type from tbl_permission_page where menu_id='$row->id'")->result();
			foreach($result as $row){
				$page_title = str_replace("Manage","",$row->page_title);
				$page_type_ = str_replace("manage_","",$row->page_type);
				
				if($page_type=="blog" && $child_page==$page_type_) 
				{
					$return["group_page_type"] 	= $page_title;
					$return["group_page"] 		= $page_title;
					if($page_id==0){
						$return["group_page"] 		= "All ".$page_title;
					}else{
						$row1 = $this->db->query("select title from tbl_page where id='$page_id'")->row();
						$return["group_page"] 		= $row1->title;
					}
				}
			}
		}
		if($page_type=="blog" && $page_id==0 && $child_page==""){
			$return["group_page_type"] 	= "Blog";
			$return["group_page"] 		= "All Blogs";
		}
		
		if($page_type=="page"){
			$row1 = $this->db->query("select title from tbl_page where id='$page_id'")->row();
			$return["group_page_type"] 	= "Page";
			$return["group_page"] 		= $row1->title;
		}
		
		if($page_type=="page" && $page_id==0){
			$return["group_page_type"] 	= "Page";
			$return["group_page"] 		= "All Pages";
		}
		
		return $return;
	}
	
	function get_field_type_to_type($id)
    {		
		$row = $this->db->query("select title from tbl_field_group_type where id='$id'")->row();
		
		return $row->title;
	}
	
	function get_field_group_to_show_box($page_type,$page_id)
    {
		$result = $this->db->query("SELECT * FROM `tbl_field_group_set` where page_type='$page_type' and page_id=0")->result();
		$this->get_field_group_to_show_box_result($result,$page_type,$page_id);
		
		$result = $this->db->query("SELECT * FROM `tbl_field_group_set` where page_type='$page_type' and page_id='$page_id'")->result();
		$this->get_field_group_to_show_box_result($result,$page_type,$page_id);
	}
	
	function get_field_group_to_show_box_result($result,$page_type,$page_id){
		foreach($result as $row1){ ?>
			<input type="hidden" name="page_id" value="<?php echo $page_id ?>">
			<?php
			$row = $this->db->query("SELECT tbl_field_group.*,tbl_field_group_type.title as type FROM `tbl_field_group` join tbl_field_group_type on tbl_field_group_type.id=tbl_field_group.group_type_id and tbl_field_group.id='$row1->group_id'")->row();
			if(!empty($row)){
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
	}
	
	function get_field_group_admin_page_view($group_id)
    {		
		$items = "";
		
		$result = $this->db->query("SELECT * FROM `tbl_field_group_set` where group_id='$group_id'")->result();
		foreach($result as $row) {
			$dt = $this->get_field_group_admin_to_page_type($row->page_type,$row->child_page,$row->page_id,$row->group_id);
			$items.=$dt["group_page"].",";
		}
		if ($items != '') {
			$items = substr($items, 0, -1);
		}
		return $items;
	}
	
	public function insert_field_group_set($page_type,$child_page,$page_id,$group_id){
		
		$system_ip 	= $this->input->ip_address();
		$time 		= time();
		$date 		= date("Y-m-d",$time);
		$user_id 	= $this->session->userdata("user_id");
		
		$dt = array(
		'page_type'=>$page_type,
		'child_page'=>$child_page,
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
					'date'=>$date,
					'time'=>$time,
					'update_date'=>$date,
					'update_time'=>$time,
					'system_ip'=>$system_ip,
					'user_id'=>$user_id,);
				
				$row = $this->db->query("select id from tbl_field_data where field_name='$field_name' and page_id='$page_id' ")->row();
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
		if($page_id==""){
			$page_id = 0;
		}
			
		if($title!=""){
			$dt = array(
				'title'=>$title,
				'field_name'=>$field_name,
				'page_id'=>$page_id,
				'date'=>$date,
				'time'=>$time,
				'update_date'=>$date,
				'update_time'=>$time,
				'system_ip'=>$system_ip,
				'user_id'=>$user_id,);
			
			$row1 = $this->db->query("select id from tbl_field_data where field_name='$field_name' and page_id='$page_id'")->row();
			if($row1->id==""){
				$this->Scheme_Model->insert_fun("tbl_field_data",$dt);
			}else{
				$where = array("id"=>$row1->id);
				$this->Scheme_Model->edit_fun("tbl_field_data",$dt,$where);
			}
		}
	}
	
	
	/********************************************************/
	
	function get_all_category_for_selected($category_id,$page_type)
    {	
		$page_type = "manage_".$page_type;
		
		$child_page = $_GET["child_page"];
		if($child_page!=""){
			$page_type = "manage_".$child_page;
		}
		$category_id = explode (",",$category_id);
		
		$result = $this->db->query("SELECT tbl_category.* FROM `tbl_permission_page` join tbl_category on tbl_permission_page.id=tbl_category.join_page_id where tbl_permission_page.page_type='$page_type' and tbl_category.category_id=0")->result();
		foreach($result as $row){
			?>
			<div class="col-sm-12">
				<label style="margin-left:<?php echo $i; ?>px;">
					<input type="checkbox" class="new_check_box" name="category_id[]" value="<?php echo $row->id ?>" <?php if(in_array($row->id,$category_id)) { echo "checked"; } ?>> 
					<?php echo $row->title; ?>
				<label>
			</div>
			<?php
			$this->get_all_category_for_selected_child($category_id,$row->id,0);
		}
	}
	
	function get_all_category_for_selected_child($category_id,$cid,$i)
	{
		$i = $i + 15;
		
		$result = $this->db->query("SELECT * from tbl_category where category_id=$cid")->result();
		foreach($result as $row){
			?>
			<div class="col-sm-12">
				<label style="margin-left:<?php echo $i; ?>px;">
					<input type="checkbox" class="new_check_box" name="category_id[]" value="<?php echo $row->id ?>" <?php if(in_array($row->id,$category_id)) { echo "checked"; } ?>> 
					<?php echo $row->title; ?>
				<label>
			</div>
			<?php
			$this->get_all_category_for_selected_child($category_id,$row->id,$i);
		}
	}
	/********************************************************/
	
	function get_all_type_of_category_to_join_in_page($join_page_id="")
    {
		?>
		<div class="form-group">
			<div class="col-sm-12">
				<label class="control-label" for="form-field-1">
					Content To Join
				</label>
			</div>
			<div class="col-sm-12">
				<select name="join_page_id" id="join_page_id" data-placeholder="Select Parent Category" class="chosen-select">
					<option value="">
						Select Content To Join
					</option>
					<?php 
					$result = $this->db->query("SELECT id,page_title FROM `tbl_permission_page` where join_page='1'")->result();
					foreach($result as $row) { 
						$page_title = str_replace("Manage","",$row->page_title);
						$menu_id = $row->id;
						?>
						<optgroup label="<?php echo $page_title ?>">
						
							<option value="<?php echo $row->id; ?>" <?php if($join_page_id==$row->id) { echo "selected"; } ?>>
								<?php echo $page_title ?>
							</option>
							
							<?php 
							$result1 = $this->db->query("SELECT id,page_title FROM `tbl_permission_page` where menu_id='$menu_id'")->result();
							foreach($result1 as $row1) { 
								$page_title1 = str_replace("Manage","",$row1->page_title);
								?>
								<option value="<?php echo $row1->id; ?>" <?php if($join_page_id==$row1->id) { echo "selected"; } ?>>
									<?php echo $page_title1 ?>
								</option>
								<?php
							}
							?>
						</optgroup>
						<?php } ?>
				</select>
			</div>
			<div class="help-inline col-sm-12 has-error">
				<span class="help-block reset middle">  
					<?= form_error('join_page_id'); ?>
				</span>
			</div>
		</div>
		<?php
	}
	
	function change_select_group_page_type($all="",$page_type="",$page_id="",$child_page=""){
		?>
		<select name="group_page_id" id="group_page_id" data-placeholder="Select Group Page" class="chosen-select" required onchange="onchanage_page_info()">
			<option value="">
				Select Group Page
			</option>
			<option 
			value="0" 
			page_title="<?php echo $all ?>" 
			page_url="<?php echo $page_type ?>"
			<?php if($page_id=="0") { echo "selected"; } ?>>
				All <?php echo $all ?>
			</option>
			<?php 
			$result = $this->db->query("select id,title,url,child_page from tbl_page where status=1 and page_type='$page_type' and child_page='$child_page'")->result();
			foreach($result as $row) { ?>
				<option 
				value="<?php echo $row->id ?>" 
				page_title="<?php echo $row->title?>"
				page_url="<?php echo $row->url?>"
				<?php if($page_id==$row->id) { echo "selected"; } ?>>
				<?php echo $row->title ?>
				</li>
			<?php } ?>
		</select>
		<?php 
	}
}  