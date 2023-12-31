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
									<select name="copy_type" id="copy_type" data-placeholder="Select Copy Type" class="chosen-select">
										<?php $result = $this->db->query("select id,page_title,page_type from $Page_tbl where id in(6,9)")->result();
										foreach($result as $row){ ?>
										<option value="<?php echo $row->id; ?>">
											<?php echo $row->title; ?>
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