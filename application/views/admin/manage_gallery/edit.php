<div class="row">
	<div class="col-xs-12" style="margin-bottom:20px;">
		<a href="<?= base_url()?>admin/<?= $Page_name; ?>/<?php echo $pg_type ?>" class="btn btn-w-m btn-info">
			Back
		</a>
	</div>
	<?php
	foreach ($result as $row)
	{ ?>
	<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
		<div class="col-xs-9">
			<div class="ibox float-e-margins">
				<div class="ibox-content">
					<div class="form-group">
						<div class="col-sm-12">
							<label class="control-label" for="form-field-1">
								Title
							</label>
						</div>
						<div class="col-sm-12">
							<input type="text" class="form-control title" id="form-field-1" placeholder="Title" name="title" value="<?php echo $row->title; ?>" onchange="url_change()" />
						</div>
						<div class="help-inline col-sm-12 has-error">
							<span class="help-block reset middle">  
								<?= form_error('title'); ?>
							</span>
						</div>
					</div>
					
				</div>
			</div>
			<?php $this->Manage_field_group_model->get_field_group_to_show_box("blog",$row->id);?>
		</div>
		<div class="col-xs-3">
			<div class="ibox float-e-margins">
				<div class="ibox-content">
					<div class="form-group">
						<div class="col-sm-12">
							<label class="control-label" for="form-field-1">
								Select Category
							</label>
						</div>
						<?php 
						$page_type = $_GET["page_type"];
						if($page_type==""){
							$page_type = "gallery";
						}else{
							$page_type = str_replace("manage_","",$page_type);
						}
						$category_id = explode (",",$row->category_id);
						$this->Manage_field_group_model->get_all_category_for_selected($category_id,"0",5,"gallery",$page_type) ?>
					</div>
				</div>
			</div>
			<div class="ibox float-e-margins">
				<div class="ibox-content">
					<?php admin_side_image("Image","image","",$row->image,"",""); ?>
					<hr>
					
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
					</div>
					
					<div class="clearfix form-actions">
						<div class="col-md-12">
							<button type="submit" class="btn btn-block btn-info submit_button" name="Submit">
								<i class="ace-icon fa fa-check bigger-110"></i>
								Update
							</button>
							
							<span class="btn btn-block btn-danger submit_button_disabled" name="Submit" style="display:none">
								<i class="ace-icon fa fa-check bigger-110"></i>
								Update
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
	<?php } ?>
</div><!-- /.row -->
<script>
function url_change()
{
	url = $(".url").val();
	if(url==""){
		title = $(".title").val();
		title = title.replace(/&/g,'and');
		title = title.trim(title).replace(/ /g,'-');
		title = encodeURI(title).replace(/[!\/\\#,+()$~%.'":*?<>{}]/g,'');
		$(".url").val(title)
		v = '<?= base_url(); ?>'+title;
		url1 = "Permalink : <a href='"+v+"' target='_blank'>"+v+"</a>";
		$(".url1").html(url1)
		change_url(title)
	}
}

function url_change2()
{
	url = $(".url").val();
	if(url!=""){
		title = $(".url").val();
		title = title.replace(/&/g,'and');
		title = title.trim(title).replace(/ /g,'-');
		title = encodeURI(title).replace(/[!\/\\#,+()$~%.'":*?<>{}]/g,'');

		v = '<?= base_url(); ?>'+title;
		url1 = "Permalink : <a href='"+v+"' target='_blank'>"+v+"</a>";
		$(".url1").html(url1)
		change_url(title)
	}
}

function change_url(url)
{
	id = 0;
	$.ajax({
	type       : "POST",
	data       :  {url:url,id:id,} ,
	url        : "<?= base_url()?>admin/<?= $Page_name?>/check_url",
	success    : function(data){
			if(data!="")
			{
				if(data=="Error")
				{
					java_alert_function("error","This Url Already Taken")
					$('.url_error').html("This Url Already Taken");
					disabled_submit_button(1);
				}
				if(data=="ok")
				{
					java_alert_function("success","Url Ok");
					$('.url_error').html("Url Ok");
					disabled_submit_button(0);
				}
			}					
			else
			{
				java_alert_function("error","Something Wrong")
				$('.url_error').html("Something Wrong");
			}
		}
	});
}
</script>