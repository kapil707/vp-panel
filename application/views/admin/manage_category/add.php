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
							<input type="text" class="form-control title" id="form-field-1" placeholder="Title" name="title" value="<?php echo set_value('title'); ?>" onchange="onchange_title()" />
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
								Parent Category
							</label>
						</div>
						<div class="col-sm-4">
							<select name="category_id" id="category_id" data-placeholder="Select Parent Category" class="chosen-select">
								<option value="0">
									Select Parent Category
								</option>
								<?php
								$query = $this->db->query("select * from tbl_category where status=1")->result();
								foreach($query as $r){
									?>
									<option value="<?php echo $r->id ?>" <?php if($r->id==set_value('category_id')) { ?> selected <?php } ?>>
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
		<div class="col-xs-3">
			<?php publish_panel_right_top(set_value('status'),"Submit"); ?>
			<div class="ibox float-e-margins">
				<div class="ibox-content">
					<div class="form-group">
						<div class="col-sm-12">
							<label class="control-label" for="form-field-1">
								Url
							</label>
						</div>
						<div class="col-sm-12">
							<input type="text" class="form-control url" id="form-field-1" placeholder="Url" name="url" value="<?php echo set_value('url'); ?>" onchange="onchange_url()" />
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
							<input type="number" class="form-control sorting_order" id="form-field-1" placeholder="Sorting Order" name="sorting_order" value="<?php echo set_value('sorting_order'); ?>" onchange="onchange_sorting_order()" min=0 max=99999 />
						</div>
						<div class="help-inline col-sm-12 has-error">
							<span class="help-block reset middle sorting_order_error">  
								<?= form_error('sorting_order'); ?>
							</span>
						</div>
					</div>
					<?php $this->Manage_field_group_model->get_all_type_of_category_to_join_in_page(""); ?>
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

function onchange_sorting_order()
{
	sorting_order = $(".sorting_order").val();
	check_sorting_order(sorting_order);
}
var check_sorting_order_btn = 0;
function check_sorting_order(sorting_order)
{
	check_sorting_order_btn = 1;
	check_btn_in_page();
	
	page_url = "<?= $page_url ?>";
	id = "<?= $row->id ?>";
	$.ajax({
	type       : "POST",
	data       :  {sorting_order:sorting_order,id:id,page_url:page_url} ,
	url        : "<?= base_url()?>admin/<?= $Page_name?>/check_sorting_order_api",
	success    : function(data){
			if(data!="")
			{
				if(data=="Error")
				{
					java_alert_function("error","This Sorting Order Already Taken")
					$('.sorting_order_error').html("This Sorting Order Already Taken");
				}
				if(data=="ok")
				{
					java_alert_function("success","Sorting Order Ok");
					$('.sorting_order_error').html("Sorting Order Ok");
					check_sorting_order_btn = 0;
					check_btn_in_page();
				}
			}					
			else
			{
				java_alert_function("error","Something Wrong")
				$('.sorting_order_error').html("Something Wrong");
			}
		}
	});
}
function check_btn_in_page(){
	
	disabled_submit_button(1); // 1 say disabled hota ha
	if(check_url_btn==0 && check_sorting_order_btn==0){
		disabled_submit_button(0);
	}
}
</script>