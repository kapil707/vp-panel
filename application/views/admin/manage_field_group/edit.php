<div class="row">
	<div class="col-xs-12" style="margin-bottom:20px;">
		<a href="<?= base_url()?>admin/<?= $Page_name; ?>" class="btn btn-w-m btn-info">
			Back
		</a>
	</div>
	<?php
	foreach ($result as $row)
	{ ?>
	<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
	<input type="hidden" name="field_label_old" value="<?php echo $row->field_label; ?>" />
	<input type="hidden" name="field_name_old" value="<?php echo $row->field_name; ?>" />
	<!-- <input type="hidden" name="group_child_page" class="css_group_child_page" value="<?php echo $row->child_page ?>"> -->
	<input type="hidden" name="group_child_page" class="css_group_child_page" value="">
		<div class="col-xs-9">
			<div class="ibox float-e-margins">
				<div class="ibox-content">
					<div class="form-group">
						<div class="col-sm-12">
							<label class="control-label" for="form-field-1">
								Field Label
							</label>
						</div>
						<div class="col-sm-12">
							<input type="text" class="form-control" id="form-field-1" placeholder="Field Label" name="field_label" value="<?php echo $row->field_label; ?>" required />
						</div>
						<div class="help-inline col-sm-12 has-error">
							<span class="help-block reset middle">  
								<?= form_error('field_label'); ?>
							</span>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-sm-12">
							<label class="control-label" for="form-field-1">
								Field Name
							</label>
						</div>
						<div class="col-sm-12">
							<input type="text" class="form-control field_name" id="form-field-1" placeholder="Field Name" name="field_name" value="<?php echo $row->field_name; ?>" required />
						</div>
						<div class="help-inline col-sm-12 has-error">
							<span class="help-block reset middle">  
								<?= form_error('field_name'); ?>
							</span>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-sm-12">
							<label class="control-label" for="form-field-1">
								Field Type
							</label>
						</div>
						<div class="col-sm-12">
							<select name="group_type_id" id="group_type_id" data-placeholder="Select Field Type" class="chosen-select">
								<option value="0">
									Select Field Type
								</option>
								<?php
								$result1 = $this->db->query("select * from tbl_field_group_type")->result();
								foreach($result1 as $row1){
									?>
									<option value="<?php echo $row1->id ?>" <?php if($row1->id==$row->group_type_id) { ?> selected <?php } ?>>
									<?php echo $row1->title ?>
									</option>
									<?php
								}
								?>
							</select>
						</div>
						<div class="help-inline col-sm-12 has-error">
							<span class="help-block reset middle">  
								<?= form_error('group_type_id'); ?>
							</span>
						</div>
					</div>
				</div>
			</div>
			<div class="ibox float-e-margins">
				<div class="ibox-content">
					<div class="form-group">
						<div class="col-sm-12 text-center">
							<h3>Set Group</h3>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-sm-6">
							<div class="col-sm-12">
								<label class="control-label" for="form-field-1">
									Group Page Type
								</label>
							</div>
							<div class="col-sm-12">
								<select name="group_page_type" id="group_page_type" data-placeholder="Select Group Type" class="chosen-select group_page_type_0" onchange="onchange_select_group_page_type(0)">
									<option value="not">
										Select Group Page Type
									</option>
									<?php $this->Manage_field_group_model->get_field_group_set_page_type($row->page_type,$row->child_page) ?>
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
						<div class="col-sm-12 text-center">
							<h3></h3>
						</div>
					</div>
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th>
									Group Page Type
								</th>
								<th>
									Group Page
								</th>
								<th>
									Date
								</th>
								<th>
									Time
								</th>
								<th>
									Action
								</th>
							</tr>
						</thead>
						<tbody>
						<?php
						$result1 = $this->db->query("select * from tbl_field_group_set where group_id='$row->id'")->result();
						foreach ($result1 as $row1)
						{
							?>
							<tr id="row1_<?= $row1->id; ?>">
								<td>
									<?php
									$get_group_page = $this->Manage_field_group_model->get_field_group_admin_to_page_type($row1->page_type,$row1->child_page,$row1->page_id,$row1->group_id);
									echo $get_group_page["group_page_type"];
									?>
								</td>
								<td>
									<?php echo $get_group_page["group_page"];?>
								</td>
								<td>
									<?php 
									$date = ($row->update_time); 
									echo date('d-M-Y', $date);
									?>
								</td>
								<td>
									<?php 
									$time = ($row->update_time); 
									echo date('H:i', $time);
									?>
								</td>
								<td class="text-right">
									<div class="btn-group">
										<a href="javascript:void(0)" onclick="delete_field_group_set('<?= $row1->id; ?>')" class="btn-white btn btn-xs">Delete</i> </a>
									</div>
								</td>
							</tr>
							<?php
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="col-xs-3">
			<?php publish_panel_right_top($row,"Update"); ?>
			<div class="ibox float-e-margins">
				<div class="ibox-content">
					<div class="form-group">
						<div class="col-sm-12">
							<label class="control-label" for="form-field-1">
								Required
							</label>
						</div>
						<div class="col-sm-12">
							<select name="required" id="required" data-placeholder="Select Required" class="chosen-select">
								<option value="1" <?php if($row->required=="1") { ?> selected <?php } ?>>
									Active
								</option>
								<option value="0" <?php if($row->required=="0") { ?> selected <?php } ?>>
									Inactive
								</option>
							</select>
						</div>
						<div class="help-inline col-sm-12 has-error">
							<span class="help-block reset middle">  
								<?= form_error('required'); ?>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
	<?php } ?>
</div>
<script>
function onchange_select_group_page_type(id){
	page_type  = $('.group_page_type_'+id+' option:selected').val();
	child_page = $('.group_page_type_'+id+' option:selected').attr("child_page");
	
	$(".css_group_child_page").val(child_page)
	change_select_group_page_type(page_type,child_page,"")
}
function change_select_group_page_type(page_type,child_page,page_id)
{	
	$.ajax({
	type       : "POST",
	data       :  {page_type:page_type,child_page:child_page,page_id:page_id} ,
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

function delete_field_group_set(id)
{
	if (confirm('Are you sure Delete?')) { 

	$.ajax({
		type       : "POST",
		data       :  {id:id,},
		url        : "<?= base_url()?>admin/<?= $Page_name; ?>/delete_field_group_set",
		success    : function(data){
				if(data!="")
				{
					java_alert_function("success","Delete Successfully");
					$("#row1_"+id).hide("500");
				}					
				else
				{
					java_alert_function("error","Something Wrong")
				}
			}
		});
	}
}
</script>