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
							<div class="row">
								<div class="col-sm-12">
									<label class="control-label" for="form-field-1">
										Select Copy Type
									</label>
								</div>
								<div class="col-sm-12">
									<select name="menu_id" id="menu_id" data-placeholder="Select Copy Type" class="chosen-select">
										<?php foreach($result_pg as $row) { ?>
										<option value="<?php echo $row->id; ?>">
											<?php echo $row->page_title; ?>
										</option>
										<?php } ?>
									</select>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="row">
								<div class="col-sm-12">
									<label class="control-label" for="form-field-1">
										Page Name
									</label>
								</div>
								<div class="col-sm-12">
									<input type="text" class="form-control title" id="form-field-1" placeholder="Page Name" name="page_name" value="<?php echo set_value('page_name'); ?>" />
								</div>
								<div class="help-inline col-sm-12 has-error">
									<span class="help-block reset middle">  
										<?= form_error('page_name'); ?>
										<?= $page_error_message; ?>
									</span>
								</div>
							</div>
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