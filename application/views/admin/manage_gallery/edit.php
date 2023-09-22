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
					<div class="form-group">
						<div class="col-sm-12">
							<label class="control-label" for="form-field-1">
								Description
							</label>
						</div>
						<div class="col-sm-12">
							<textarea type="text" class="form-control summernote" id="form-field-1" placeholder="Description" name="description" style="height:100px"><?php echo $row->description; ?></textarea>
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
							<textarea type="text" class="form-control" id="form-field-1" placeholder="Excerpt" name="excerpt" style="height:100px"><?php echo $row->excerpt; ?></textarea>
						</div>
						<div class="help-inline col-sm-12 has-error">
							<span class="help-block reset middle">  
								<?= form_error('excerpt'); ?>
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
					<?php admin_side_image("Mobile Image","mobile_image","",$row->mobile_image,"",""); ?>
					
					<hr>					
					<?php $this->Manage_field_group_model->get_status_or_submit_button($row->status,"Update"); ?>
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