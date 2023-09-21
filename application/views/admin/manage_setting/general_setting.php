<div class="row">
	<?php /* <div class="col-xs-12" style="margin-bottom:20px;">
		<a href="<?= base_url()?>admin/<?= $Page_name; ?>" class="btn btn-w-m btn-info">
			Back
		</a>
	</div> */ ?>
	<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
		<div class="col-xs-9">
			<div class="ibox float-e-margins">
				<div class="ibox-content">
					<div class="form-group">
						<div class="col-sm-12">
							<label class="control-label" for="form-field-1">
								Site Title
							</label>
						</div>
						<div class="col-sm-12">
							<input type="text" class="form-control" id="form-field-1" placeholder="Site Title" name="site_title" value="<?php echo get_field_data("site_title"); ?>" />
						</div>
						<div class="help-inline col-sm-12 has-error">
							<span class="help-block reset middle">  
								<?= form_error('site_title'); ?>
							</span>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-sm-12">
							<label class="control-label" for="form-field-1">
								Site Tagline
							</label>
						</div>
						<div class="col-sm-12">
							<input type="text" class="form-control" id="form-field-1" placeholder="Site Taglinee" name="site_tagline" value="<?php echo get_field_data("site_tagline"); ?>" />
						</div>
						<div class="help-inline col-sm-12 has-error">
							<span class="help-block reset middle">  
								<?= form_error('site_tagline'); ?>
							</span>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-sm-12">
							<label class="control-label" for="form-field-1">
								Image (Favicon)
							</label>
						</div>
						<div class="col-sm-12">
							<input type="file" class="form-control" id="form-field-1" placeholder="image" name="image_favicon" />
							<?php $image_site_favicon = get_library_to_image(get_field_data("image_site_favicon")); ?>
							<input type="hidden" name="image_site_favicon_old" value="<?php echo get_field_data("image_site_favicon") ?>">
						</div>
						<div class="col-sm-4">
							<img src="<?php echo $image_site_favicon ?>" width="100%">
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
								Image (Logo)
							</label>
						</div>
						<div class="col-sm-12">
							<input type="file" class="form-control" id="form-field-1" placeholder="image" name="image" />
							<?php $image_site_logo = get_library_to_image(get_field_data("image_site_logo")); ?>
							<input type="hidden" name="image_site_logo_old" value="<?php echo get_field_data("image_site_logo") ?>">
						</div>
						<div class="col-sm-12">
							<img src="<?php echo $image_site_logo ?>" width="100%">
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-sm-12">
							<label class="control-label" for="form-field-1">
								Mobile Image (Logo)
							</label>
						</div>
						<div class="col-sm-12">
							<input type="file" class="form-control" id="form-field-1" placeholder="Mobile Image" name="mobile_image" />
							<?php $mobile_image_site_logo = get_library_to_image(get_field_data("mobile_image_site_logo")); ?>
							<input type="hidden" name="mobile_image_site_logo_old" value="<?php echo get_field_data("mobile_image_site_logo") ?>">
						</div>
						<div class="col-sm-12">
							<img src="<?php echo $mobile_image_site_logo ?>" width="100%">
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
</div>