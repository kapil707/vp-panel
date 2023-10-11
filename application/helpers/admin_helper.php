<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('get_child_page_name'))
{
	function get_child_page_name($child_page){
		
		$ci =& get_instance();
		$ci->load->database(); 
		
		if($child_page!=""){
			$child_page = "manage_".$child_page;
		}
		
		$row = $ci->db->query("select page_title from tbl_permission_page where page_type='$child_page'")->row();
		return $row->page_title;
	}
}

if ( ! function_exists('admin_side_image'))
{
	function admin_side_image($image_label,$image_name,$image_cls,$image_data,$field,$required,$page_id=0) {
		$image_data1 = $image_name;
		if($field=="field" || $field=="field-12") {
			$image_data1 	= $image_data;
			$image_id 		= get_field_data_id($image_data,$page_id);// yha delete karna ke liya chiya
			$image_data 	= get_field_data($image_data,$page_id);
		}
		$image_path = get_library_to_image($image_data,'main');
		$extension  = pathinfo($image_path, PATHINFO_EXTENSION);
		?>
		
		<input type="hidden" name="<?php echo $image_name ?>" value="<?php echo $image_data ?>" class="<?php echo $image_name ?>_default_field_css">
		
		<div class="form-group">
			<div class="col-sm-12" style="margin-top:5px;">
				<label class="control-label">
					<?php echo $image_label ?>
				</label>
			</div>
			
			<div class="col-sm-12" style="margin-top:5px;">
				<a href="javascript:void(0)" onclick="open_modal_of_select_image_or_upload('<?php echo $image_name ?>')" class="btn-white btn btn-xs" style="padding:10px;">Select Image Or Upload (<?php echo $image_label ?>)</a>
			</div>
			
			<?php 
			if($field=="field"){ 
				$col = 4;
			}else{ 
				$col = 12;
			} ?>
			<div class="col-sm-<?php echo $col ?>" style="margin-top:5px;">
				<img src="<?php echo $image_path ?>" width="100%" class="<?php echo $image_name ?>_imgtag">
				<?php if($extension=="mp4"){ ?>
				<video width="100%" height="120" controls>
					<source src="<?php echo $image_path ?>" type="video/mp4">
				</video>				
				<?php } ?>
				
				<?php if($image_data){ ?>
				<?php if($field=="field" || $field=="field-12") {?>
					<a href="javascript:void(0)" onclick="delete_field_data_image('<?php echo $image_id ?>','<?php echo $image_data1 ?>')" class="btn-white btn btn-xs <?php echo $image_name ?>_image_delete_btn" style="margin-top:5px;padding:10px;">Delete (<?php echo $image_label ?>)</a>
				<?php } else { ?>
					<a href="javascript:void(0)" onclick="delete_page_image('<?php echo $image_data1 ?>')" class="btn-white btn btn-xs <?php echo $image_name ?>_image_delete_btn" style="margin-top:5px;padding:10px;">Delete (<?php echo $image_label ?>)</a>
				<?php } ?>
			
				<?php } ?>
			</div>
		</div>
		<?php
	}
}

if ( ! function_exists('select_image_or_upload'))
{
	function select_image_or_upload($field_name="",$limit=""){
		$ci =& get_instance();
		$ci->load->database();
		
		?>
		<div class="container-fluid">
			<div class="row">
				<?php
				$result = $ci->db->query("select * from tbl_library order by id desc LIMIT $limit , 18")->result();
				foreach($result as $row){
					$url = get_library_to_image($row->id);?>
					<div class="col-md-2" style="height: 180px;">
						<div style="height: 120px;overflow: hidden;border: solid 1px #f3f3f3; border-radius: 10px;margin-bottom: 5px;" onclick="set_image_in_page('<?php echo $field_name ?>','<?php echo $row->id ?>')">
							<img src="<?php echo $url?>" style="object-fit: scale-down;height: 120px;width:100%">
						</div>
						<span class="<?php echo $row->id ?>_image_url" url="<?php echo $url?>"><?php echo $row->title; ?></span>
					</div>
					<?php
				}
				$limit = $limit + 18;
				?>
				<div class="col-sm-12 load_more_id_<?php echo $limit ?> text-center" style="margin-top:10px;">
					<a href="javascript:void(0)" onclick="select_image_or_upload_load('<?php echo $field_name ?>','<?php echo $limit ?>')" class="btn-white btn btn-xs" style="padding:10px;">Load More</a>
				</div>
			</div>
		</div>
		<?php
	}
}
if ( ! function_exists('publish_panel_right_top'))
{
	function publish_panel_right_top($row,$submit_text){
		
		?>
		<div class="ibox float-e-margins">
			<div class="ibox-content">
				<label>Publish</label>
				<div class="form-group">
					<div class="col-sm-12">
						<?php if($submit_text=="Update") { ?>
						<i class="fa fa-calendar" aria-hidden="true"></i>
						<?php
							$time = ($row->update_time); 
							echo "Update Time : ".date('d M,Y', $time)." at ".date('H:i', $time);
						} ?>
					</div>
				</div>
				<hr>
				<?php if($row!="not") { ?>
				<div class="form-group">
					<div class="col-sm-12">
						<label class="control-label" for="form-field-1">
							Status
						</label>
					</div>
					<div class="col-sm-12">
						<select name="status" id="status" data-placeholder="Select Status" class="chosen-select">
							<?php
							$status = 0;
							if(!empty($row->status)){
								$status = $row->status;
							}
							?>
							<option value="1" <?php if($status==1) { ?> selected <?php } ?>>
								Active
							</option>
							<option value="0" <?php if($status==0) { ?> selected <?php } ?>>
								Inactive
							</option>
						</select>
					</div>
					<div class="help-inline col-sm-12 has-error">
						<span class="help-block reset middle">  
							<?= form_error('status'); ?>
						</span>
					</div>
				</div>
				<?php } ?>
				<div class="form-group">
					<div class="col-md-6" style="margin-top:10px;">
						<?php if($submit_text=="Update") { ?>
						<a href="javascript:void(0)" onclick="delete_page_rec('<?= $row->id; ?>')" class="text-danger">Move to Trash</i> </a>
						<?php } ?>
					</div>
					<div class="col-md-6">
						<button type="submit" class="btn btn-block btn-primary submit_button" name="Submit">
							<i class="ace-icon fa fa-check bigger-110"></i>
							<?php echo $submit_text ?>
						</button>
						
						<span class="btn btn-block btn-danger submit_button_disabled" name="Submit" style="display:none">
							<i class="ace-icon fa fa-check bigger-110"></i>
							<?php echo $submit_text ?>
						</span>
					</div>
				</div>
			</div>
		</div>
		<?php
	}
}

if ( ! function_exists('get_page_type_to_options_id'))
{
	function get_page_type_to_options_id($page_name){
		$ci =& get_instance();
		$ci->load->database(); 
	
		$page_name = str_replace("manage_","",$page_name);
		
		$row = $ci->db->query("select id from tbl_options where page_name='$page_name'")->row();
		if($row->id){
			return $row->id;
		}else{
			return 0;
		}
	}
}

if ( ! function_exists('get_page_template'))
{
	function get_page_template($row=""){ 
		$ci =& get_instance();
		//$ci->load->database(); 
		?>	
		<div class="ibox float-e-margins">
			<div class="ibox-content">
				<div class="form-group">
					<div class="col-sm-12">
						<label class="control-label" for="form-field-1">
							Page Template
						</label>
					</div>
					<div class="col-sm-12">
						<?php
						$ci->load->helper('directory'); //load directory helper
						$theme = get_field_data("system_theme");
						$dir = "./theme/".$theme."/";
						$map = directory_map($dir);
						?>
						<select class="form-control" name="link_page">
							<option>Select Template</option>
							<?php 
							error_reporting(0);
							foreach($map as $row){
								if(strpos($row,'.php')){
									$val = str_replace(".php","",$row); ?>
									<option <?php if(!empty($row->link_page)) { if($row->link_page.".php"==$row) { echo "selected"; } }?> value="<?php echo $val; ?>">
										<?php echo $row; ?>
									</option>
								<?php
								}
							} ?>
						</select>
					</div>
				</div>
			</div>
		</div>
	<?php 
	}
}