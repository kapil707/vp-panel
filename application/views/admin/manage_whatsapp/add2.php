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
								Upload Excel
							</label>
						</div>
						<div class="col-sm-12">
							<input type="file" name="image" class="form-control">
						</div>
						<div class="help-inline col-sm-12 has-error">
							<span class="help-block reset middle">  
								<?= form_error('title'); ?>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-3">
			<?php publish_panel_right_top("","Submit"); ?>
		</div>
	</form>
</div>