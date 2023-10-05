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
							<input type="text" class="form-control title" id="form-field-1" placeholder="Title" name="title" value="<?php echo set_value('title'); ?>" />
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
								Image
							</label>
						</div>
						<div class="col-sm-12">
							<input type="file" name="image" class="form-control">
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>