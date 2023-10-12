<div class="row">
	<div class="col-xs-12" style="margin-bottom:20px;">
		<a href="<?= base_url()?>admin/<?= $Page_name; ?>/<?php echo $child_page ?>" class="btn btn-w-m btn-info">
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
								WhatsApp Api Key
							</label>
						</div>
						<div class="col-sm-4">
							<input type="number" class="form-control" id="form-field-1" placeholder="WhatsApp Api Key" name="whatsapp_api_key" value="<?php echo get_field_data("whatsapp_api_key"); ?>" min=0 max=999 />
						</div>
						<div class="help-inline col-sm-12 has-error">
							<span class="help-block reset middle">  
								<?= form_error('whatsapp_api_key'); ?>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-3">
			<?php publish_panel_right_top("not","Submit"); ?>
		</div>
	</form>
</div>