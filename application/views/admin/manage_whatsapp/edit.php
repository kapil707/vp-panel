<div class="row">
	<div class="col-xs-12" style="margin-bottom:20px;">
		<a href="<?= base_url()?>admin/<?= $Page_name; ?>" class="btn btn-w-m btn-info">
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
								Number (Eg. 919530005050 no need +)
							</label>
						</div>
						<div class="col-sm-12">
							<input type="text" class="form-control title" id="form-field-1" placeholder="Title" name="title" value="<?php echo $row->title; ?>" />
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
								Message
							</label>
						</div>
						<div class="col-sm-12">
							<textarea type="text" class="form-control" id="form-field-1" placeholder="Message" name="message" style="height:100px"><?php echo $row->message; ?></textarea>
						</div>
						<div class="help-inline col-sm-12 has-error">
							<span class="help-block reset middle">  
								<?= form_error('message'); ?>
							</span>
						</div>
					</div>				
				</div>
			</div>
		</div>
		<div class="col-xs-3">
			<?php publish_panel_right_top($row,"Update"); ?>
		</div>
	</form>
	<?php } ?>
</div>