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
						<div class="col-sm-12">
							<label class="control-label" for="form-field-1">
								Title
							</label>
						</div>
						<div class="col-sm-12">
							<input type="text" class="form-control title" id="form-field-1" placeholder="Title" name="title" value="<?php echo set_value('title'); ?>" onchange="url_change()" />
						</div>
						<div class="help-inline col-sm-12 has-error">
							<span class="help-block reset middle">  
								<?= form_error('title'); ?>
							</span>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-sm-12">
							<label class="control-label" for="form-field-1">
								Description
							</label>
						</div>
						<div class="col-sm-12">
							<textarea type="text" class="form-control summernote" id="form-field-1" placeholder="Description" name="description" style="height:100px"><?php echo set_value('description'); ?></textarea>
						</div>
						<div class="help-inline col-sm-12 has-error">
							<span class="help-block reset middle">  
								<?= form_error('description'); ?>
							</span>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-sm-12">
							<label class="control-label" for="form-field-1">
								Excerpt
							</label>
						</div>
						<div class="col-sm-12">
							<textarea type="text" class="form-control" id="form-field-1" placeholder="Excerpt" name="excerpt" style="height:100px"><?php echo set_value('excerpt'); ?></textarea>
						</div>
						<div class="help-inline col-sm-12 has-error">
							<span class="help-block reset middle">  
								<?= form_error('excerpt'); ?>
							</span>
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
							<input type="text" class="form-control url" id="form-field-1" placeholder="Url" name="url" value="<?php echo set_value('url'); ?>" />
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
</div><!-- /.row -->
<script>
function url_change()
{
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
				//java_alert_function("success","Delete Successfully");
				//$('.product_code_error').html("This Product SKU Already Taken");
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