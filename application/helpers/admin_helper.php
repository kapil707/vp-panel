<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('admin_side_image'))
{
	function admin_side_image($image_label,$image_name,$image_cls,$image_data,$field,$required,$page_id=0,$options_id=0) {
		$image_data1 = $image_name;
		if($field=="field" || $field=="field-12") {
			$image_data1 	= $image_data;
			$image_data 	= get_field_data($image_data,$page_id,$options_id);
		}
		$image_path = get_library_to_image($image_data,'main');
		$extension = pathinfo($image_path, PATHINFO_EXTENSION);
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
					<?php if($extension=="mp4"){
					?>
					<video width="100%" height="120" controls>
						<source src="<?php echo $image_path ?>" type="video/mp4">
					</video>
					<?php
					} else { ?>
					<img src="<?php echo $image_path ?>" width="100%">
					<?php } ?>
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
						<select name="status" id="status" data-placeholder="Select Status" class="chosen-select" >
							<option value="1" <?php if($row->status==1) { ?> selected <?php } ?>>
								Active
							</option>
							<option value="0" <?php if($row->status==0) { ?> selected <?php } ?>>
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