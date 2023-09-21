<div class="row">
	<div class="col-xs-12" style="margin-bottom:20px;">
		<a href="<?= base_url()?>admin/<?= $Page_name; ?>" class="btn btn-w-m btn-info">
			Back
		</a>
	</div>
	<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
		<div class="col-xs-9">
			<div class="ibox float-e-margins">
				<div class="ibox-content">
					<div class="form-group">
						<div class="col-sm-6">
							<div class="col-sm-12">
								<label class="control-label" for="form-field-1">
									Group Page Type
								</label>
							</div>
							<div class="col-sm-12">
								<select name="group_page_type" id="group_page_type" data-placeholder="Select Group Type" class="chosen-select group_page_type_0" onchange="onchange_select_group_page_type(0)">
									<option value="0">
										Select Group Page Type
									</option>
									<?php $this->Manage_field_group_model->get_field_group_set_page_type() ?>
								</select>
							</div>
						</div>
						
						<div class="col-sm-6">
							<div class="col-sm-12">
								<label class="control-label" for="form-field-1">
									Group Page
								</label>
							</div>
							<div class="col-sm-12 get_field_group_set_page_div">
								<select name="group_page_id" id="group_page_id" data-placeholder="Select Group Page" class="chosen-select">
									<option value="0">
										Select Group Page
									</option>
								</select>
							</div>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-sm-12">
							<div class="col-sm-12">
								<label class="control-label" for="form-field-1">
									Title
								</label>
							</div>
							<div class="col-sm-12">
								<input type="text" class="form-control title" id="form-field-1" placeholder="Title" name="title" value="<?php echo set_value('title'); ?>" required />
							</div>
							<div class="help-inline col-sm-12 has-error">
								<span class="help-block reset middle">  
									<?= form_error('title'); ?>
								</span>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<div class="col-sm-12">
								<label class="control-label" for="form-field-1">
									Parent Menu
								</label>
							</div>
							<div class="col-sm-4">
								<select name="menu_id" id="menu_id" data-placeholder="Select Parent Menu" class="chosen-select">
									<option value="0">
										Select Parent Menu
									</option>
									<?php
									$query = $this->db->query("select * from tbl_menu where status=1")->result();
									foreach($query as $r){
										?>
										<option value="<?php echo $r->id ?>" <?php if($r->id==set_value('menu_id')) { ?> selected <?php } ?>>
										<?php echo $r->title ?>
										</option>
										<?php
									}
									?>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-3">
			<div class="ibox float-e-margins">
				<div class="ibox-content">
					<div class="form-group">
						<div class="col-sm-12">
							<label class="control-label" for="form-field-1">
								Url
							</label>
						</div>
						<div class="col-sm-12">
							<input type="text" class="form-control url" id="form-field-1" placeholder="Url" name="url" value="<?php echo set_value('url'); ?>" readonly />
						</div>
						<div class="col-sm-12">
							<span class="url1"></span>
						</div>
						<div class="help-inline col-sm-12 has-error">
							<span class="help-block reset middle url_error">  
								<?= form_error('url'); ?>
							</span>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-12">
							<label class="control-label" for="form-field-1">
								Sorting Order
							</label>
						</div>
						<div class="col-sm-12">
							<input type="text" class="form-control" id="form-field-1" placeholder="Sorting Order" name="sorting_order" value="<?php echo set_value('sorting_order'); ?>" required />
						</div>
						<div class="help-inline col-sm-12 has-error">
							<span class="help-block reset middle">  
								<?= form_error('sorting_order'); ?>
							</span>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-sm-12">
							<label class="control-label" for="form-field-1">
								Image
							</label>
						</div>
						<div class="col-sm-12">
							<input type="file" class="form-control" id="form-field-1" placeholder="image" name="image" />
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-sm-12">
							<label class="control-label" for="form-field-1">
								Mobile Image
							</label>
						</div>
						<div class="col-sm-12">
							<input type="file" class="form-control" id="form-field-1" placeholder="Mobile Image" name="mobile_image" />
						</div>
					</div>
					
					
					<div class="form-group">
						<div class="col-sm-12">
							<label class="control-label" for="form-field-1">
								Status
							</label>
						</div>
						<div class="col-sm-12">
							<select name="status" id="status" data-placeholder="Select Status" class="chosen-select" >
								<option value="1" <?php if(set_value('status')==1) { ?> selected <?php } ?>>
									Active
								</option>
								<option value="0" <?php if(set_value('status')==0) { ?> selected <?php } ?>>
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
					
					<div class="clearfix form-actions">
						<div class="col-md-12">
							<button type="submit" class="btn btn-block btn-info submit_button" name="Submit">
								<i class="ace-icon fa fa-check bigger-110"></i>
								Submit
							</button>
							
							<span class="btn btn-block btn-danger submit_button_disabled" name="Submit" style="display:none">
								<i class="ace-icon fa fa-check bigger-110"></i>
								Submit
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
<script>
function onchange_select_group_page_type(id){
	page_type = $('.group_page_type_'+id+' option:selected').val();
	change_select_group_page_type(page_type)
}
function change_select_group_page_type(page_type)
{	
	$.ajax({
	type       : "POST",
	data       :  { page_type : page_type,} ,
	url        : "<?= base_url()?>admin/<?= $Page_name?>/change_select_group_page_type_api",
	success    : function(data){
			if(data!="")
			{
				$('.get_field_group_set_page_div').html(data);
				$('.chosen-select').chosen({width: "100%"})
			}					
			else
			{
				java_alert_function("error","Something Wrong")
				$('.url_error').html("Something Wrong");
			}
		}
	});
}
function onchanage_page_info(){
	page_type = $('#group_page_id option:selected').val();
	page_title =  $('#group_page_id option:selected').attr("page_title");
	page_url =  $('#group_page_id option:selected').attr("page_url");
	
	$(".title").val(page_title)
	$(".url").val(page_url)
	v = '<?= base_url(); ?>'+page_url;
	page_url = "Permalink : <a href='"+v+"' target='_blank'>"+v+"</a>";
	$(".url1").html(page_url)
}
</script>