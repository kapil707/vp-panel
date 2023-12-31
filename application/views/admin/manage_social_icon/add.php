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
							<input type="text" class="form-control" id="form-field-1" placeholder="Title" name="title" value="<?php echo set_value('title'); ?>" />
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
								Icon
							</label>
						</div>
						<div class="col-sm-12">
							<input type="text" class="form-control" id="form-field-1" placeholder="Icon" name="description" value="<?php echo set_value('description'); ?>" />
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
								Url
							</label>
						</div>
						<div class="col-sm-12">
							<input type="text" class="form-control" id="form-field-1" placeholder="Url" name="url" value="<?php echo set_value('url'); ?>" />
						</div>
						<div class="help-inline col-sm-12 has-error">
							<span class="help-block reset middle">  
								<?= form_error('url'); ?>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-3">
			<?php publish_panel_right_top("","Submit"); ?>
			<div class="ibox float-e-margins">
				<div class="ibox-content">
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
					
					<hr>
					<?php  admin_side_image("Image","image","","","",""); ?>
				</div>
			</div>
		</div>
	</form>
</div>
<script>
function onchange_title()
{
	url = $(".url").val();
	if(url==""){
		title = $(".title").val();
		title = title.replace(/&/g,'and');
		title = title.trim(title).replace(/ /g,'-');
		title = encodeURI(title).replace(/[!\/\\#,+()$~%.'":*?<>{}]/g,'');
		$(".url").val(title)
		v = '<?= base_url(); ?><?= $page_url ?>/'+title;
		url1 = "Permalink : <a href='"+v+"' target='_blank'>"+v+"</a>";
		$(".url1").html(url1)
		check_url(title)
	}
}

function onchange_url()
{
	url = $(".url").val();
	if(url!=""){
		title = $(".url").val();
		title = title.replace(/&/g,'and');
		title = title.trim(title).replace(/ /g,'-');
		title = encodeURI(title).replace(/[!\/\\#,+()$~%.'":*?<>{}]/g,'');

		v = '<?= base_url(); ?><?= $page_url ?>/'+title;
		url1 = "Permalink : <a href='"+v+"' target='_blank'>"+v+"</a>";
		$(".url1").html(url1)
		check_url(title)
	}
}

var check_url_btn = 0;
function check_url(url)
{
	check_url_btn = 1;
	check_btn_in_page();
	
	page_url = "<?= $page_url ?>";
	id = "<?= $row->id ?>";
	$.ajax({
	type       : "POST",
	data       :  {url:url,id:id,page_url:page_url} ,
	url        : "<?= base_url()?>admin/<?= $Page_name?>/check_url_api",
	success    : function(data){
			if(data!="")
			{
				if(data=="Error")
				{
					java_alert_function("error","This Url Already Taken")
					$('.url_error').html("This Url Already Taken");
				}
				if(data=="ok")
				{
					java_alert_function("success","Url Ok");
					$('.url_error').html("Url Ok");
					check_url_btn = 0;
					check_btn_in_page()
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
function check_btn_in_page(){
	
	disabled_submit_button(1); // 1 say disabled hota ha
	if(check_url_btn==0){
		disabled_submit_button(0);
	}
}
</script>